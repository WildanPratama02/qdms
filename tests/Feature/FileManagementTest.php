<?php

namespace Tests\Feature;

use App\Models\UploadedFile;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile as HttpUploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class FileManagementTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Set up the test environment.
     */
    protected function setUp(): void
    {
        parent::setUp();
        Storage::fake('public');
    }

    /**
     * Test that the files index page can be displayed to authenticated users.
     */
    public function test_files_index_page_can_be_displayed_to_authenticated_users(): void
    {
        $user = User::factory()->create();
        UploadedFile::factory()->count(15)->create();

        $response = $this->actingAs($user)->get('/admin/files');

        $response->assertStatus(200);
    }

    /**
     * Test that the files index page requires authentication.
     */
    public function test_files_index_page_requires_authentication(): void
    {
        $response = $this->get('/admin/files');

        $response->assertRedirect('/login');
    }

    /**
     * Test that a user can upload a valid file.
     */
    public function test_user_can_upload_valid_file(): void
    {
        $user = User::factory()->create();

        $file = HttpUploadedFile::fake()->create('document.pdf', 1000, 'application/pdf');

        $response = $this->actingAs($user)->post('/admin/files', [
            'file' => $file,
            'file_type' => 'rca',
            'category' => 'quality',
            'document_date' => '2024-01-15',
        ]);

        $response->assertRedirect()
            ->assertSessionHas('success', 'File uploaded successfully!');

        // Verify the file was created with timestamped name
        $this->assertDatabaseHas('uploaded_files', [
            'file_type' => 'rca',
            'category' => 'quality',
        ]);

        $uploadedFile = UploadedFile::where('file_type', 'rca')->where('category', 'quality')->first();
        $this->assertNotNull($uploadedFile);
        $this->assertStringContainsString('document.pdf', $uploadedFile->file_name);

        Storage::disk('public')->assertExists($uploadedFile->file_path);
    }

    /**
     * Test that file upload validates required fields.
     */
    public function test_file_upload_validates_required_fields(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/admin/files', []);

        $response->assertSessionHasErrors(['file', 'file_type']);
    }

    /**
     * Test that file upload validates file type.
     */
    public function test_file_upload_validates_file_type(): void
    {
        $user = User::factory()->create();

        $file = HttpUploadedFile::fake()->create('document.txt', 1000, 'text/plain');

        $response = $this->actingAs($user)->post('/admin/files', [
            'file' => $file,
            'file_type' => 'rca',
        ]);

        $response->assertSessionHasErrors('file');

        $this->assertDatabaseCount('uploaded_files', 0);
    }

    /**
     * Test that file upload validates file size.
     */
    public function test_file_upload_validates_file_size(): void
    {
        $user = User::factory()->create();

        $file = HttpUploadedFile::fake()->create('document.pdf', 25000, 'application/pdf');

        $response = $this->actingAs($user)->post('/admin/files', [
            'file' => $file,
            'file_type' => 'rca',
        ]);

        $response->assertSessionHasErrors('file');

        $this->assertDatabaseCount('uploaded_files', 0);
    }

    /**
     * Test that file upload validates file_type field.
     */
    public function test_file_upload_validates_file_type_field(): void
    {
        $user = User::factory()->create();

        $file = HttpUploadedFile::fake()->create('document.pdf', 1000, 'application/pdf');

        $response = $this->actingAs($user)->post('/admin/files', [
            'file' => $file,
            'file_type' => 'invalid_type',
        ]);

        $response->assertSessionHasErrors('file_type');
    }

    /**
     * Test that a user can delete a file.
     */
    public function test_user_can_delete_file(): void
    {
        $user = User::factory()->create();
        $uploadedFile = UploadedFile::factory()->create([
            'file_path' => 'uploads/rca/test_document.pdf',
        ]);

        Storage::disk('public')->put($uploadedFile->file_path, 'dummy content');

        $response = $this->actingAs($user)->delete("/admin/files/{$uploadedFile->id}");

        $response->assertRedirect()
            ->assertSessionHas('success', 'File deleted successfully!');

        $this->assertDatabaseMissing('uploaded_files', [
            'id' => $uploadedFile->id,
        ]);

        Storage::disk('public')->assertMissing($uploadedFile->file_path);
    }

    /**
     * Test that file deletion requires authentication.
     */
    public function test_file_deletion_requires_authentication(): void
    {
        $uploadedFile = UploadedFile::factory()->create();

        $response = $this->delete("/admin/files/{$uploadedFile->id}");

        $response->assertRedirect('/login');
    }

    /**
     * Test that file deletion handles non-existent files gracefully.
     */
    public function test_file_deletion_handles_non_existent_files(): void
    {
        $user = User::factory()->create();
        $uploadedFile = UploadedFile::factory()->create();

        $response = $this->actingAs($user)->delete("/admin/files/{$uploadedFile->id}");

        $response->assertRedirect()
            ->assertSessionHas('success', 'File deleted successfully!');

        $this->assertDatabaseMissing('uploaded_files', [
            'id' => $uploadedFile->id,
        ]);
    }

    /**
     * Test that file upload creates proper directory structure.
     */
    public function test_file_upload_creates_proper_directory_structure(): void
    {
        $user = User::factory()->create();

        $file = HttpUploadedFile::fake()->create('document.pdf', 1000, 'application/pdf');

        $this->actingAs($user)->post('/admin/files', [
            'file' => $file,
            'file_type' => 'bsom',
        ]);

        $uploadedFile = UploadedFile::first();

        $this->assertStringContainsString('uploads/bsom/', $uploadedFile->file_path);
        Storage::disk('public')->assertExists($uploadedFile->file_path);
    }

    /**
     * Test that all valid file types can be uploaded.
     */
    public function test_all_valid_file_types_can_be_uploaded(): void
    {
        $user = User::factory()->create();
        $validFileTypes = ['rca', 'bsom', 'policy', 'work_instruction', 'audit'];

        foreach ($validFileTypes as $fileType) {
            $file = HttpUploadedFile::fake()->create('document.pdf', 1000, 'application/pdf');

            $response = $this->actingAs($user)->post('/admin/files', [
                'file' => $file,
                'file_type' => $fileType,
            ]);

            $response->assertSessionHas('success', 'File uploaded successfully!');
            $this->assertDatabaseHas('uploaded_files', ['file_type' => $fileType]);
        }
    }
}

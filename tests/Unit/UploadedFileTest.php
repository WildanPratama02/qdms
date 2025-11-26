<?php

namespace Tests\Unit;

use App\Models\UploadedFile;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class UploadedFileTest extends TestCase
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
     * Test that an uploaded file can be created.
     */
    public function test_uploaded_file_can_be_created(): void
    {
        $uploadedFile = UploadedFile::factory()->create([
            'file_name' => 'test_document.pdf',
            'file_type' => 'rca',
            'file_path' => 'uploads/rca/test_document.pdf',
            'category' => 'quality',
            'document_date' => '2024-01-15',
        ]);

        $this->assertInstanceOf(UploadedFile::class, $uploadedFile);
        $this->assertEquals('test_document.pdf', $uploadedFile->file_name);
        $this->assertEquals('rca', $uploadedFile->file_type);
        $this->assertEquals('uploads/rca/test_document.pdf', $uploadedFile->file_path);
        $this->assertEquals('quality', $uploadedFile->category);
        $this->assertEquals('2024-01-15', $uploadedFile->document_date->format('Y-m-d'));
    }

    /**
     * Test that fillable attributes are correctly configured.
     */
    public function test_fillable_attributes_are_correctly_configured(): void
    {
        $uploadedFile = new UploadedFile;

        $expectedFillable = ['file_name', 'file_type', 'file_path', 'category', 'document_date'];
        $this->assertEquals($expectedFillable, $uploadedFile->getFillable());
    }

    /**
     * Test that table name is correctly configured.
     */
    public function test_table_name_is_correctly_configured(): void
    {
        $uploadedFile = new UploadedFile;
        $this->assertEquals('uploaded_files', $uploadedFile->getTable());
    }

    /**
     * Test that timestamps are enabled.
     */
    public function test_timestamps_are_enabled(): void
    {
        $uploadedFile = UploadedFile::factory()->create();
        $this->assertNotNull($uploadedFile->created_at);
        $this->assertNotNull($uploadedFile->updated_at);
    }

    /**
     * Test that document_date is cast to date.
     */
    public function test_document_date_is_cast_to_date(): void
    {
        $uploadedFile = UploadedFile::factory()->create([
            'document_date' => '2024-01-15',
        ]);

        $this->assertInstanceOf(\Carbon\Carbon::class, $uploadedFile->document_date);
        $this->assertEquals('2024-01-15', $uploadedFile->document_date->format('Y-m-d'));
    }

    /**
     * Test that file is automatically deleted when database record is deleted.
     */
    public function test_file_is_automatically_deleted_when_database_record_is_deleted(): void
    {
        $filePath = 'uploads/rca/test_document.pdf';

        // Create a file in storage
        Storage::disk('public')->put($filePath, 'dummy content');

        // Verify file exists
        Storage::disk('public')->assertExists($filePath);

        // Create database record
        $uploadedFile = UploadedFile::factory()->create([
            'file_path' => $filePath,
        ]);

        // Delete the database record
        $uploadedFile->delete();

        // Verify file is deleted
        Storage::disk('public')->assertMissing($filePath);
        $this->assertDatabaseMissing('uploaded_files', ['id' => $uploadedFile->id]);
    }

    /**
     * Test that deletion handles non-existent files gracefully.
     */
    public function test_deletion_handles_non_existent_files_gracefully(): void
    {
        $filePath = 'uploads/rca/non_existent_file.pdf';

        $uploadedFile = UploadedFile::factory()->create([
            'file_path' => $filePath,
        ]);

        // Verify file doesn't exist
        Storage::disk('public')->assertMissing($filePath);

        // Delete the database record (should not throw an exception)
        $this->expectNotToPerformAssertions();
        $uploadedFile->delete();
    }

    /**
     * Test that factory creates valid records.
     */
    public function test_factory_creates_valid_records(): void
    {
        $uploadedFile = UploadedFile::factory()->create();

        $this->assertNotNull($uploadedFile->file_name);
        $this->assertNotNull($uploadedFile->file_type);
        $this->assertNotNull($uploadedFile->file_path);
        $this->assertContains($uploadedFile->file_type, ['rca', 'bsom']);
        $this->assertStringContainsString('uploads/', $uploadedFile->file_path);
    }

    /**
     * Test that RCA state works in factory.
     */
    public function test_rca_state_works_in_factory(): void
    {
        $uploadedFile = UploadedFile::factory()->rca()->create();

        $this->assertEquals('rca', $uploadedFile->file_type);
        $this->assertStringContainsString('uploads/rca/', $uploadedFile->file_path);
    }

    /**
     * Test that BSOM state works in factory.
     */
    public function test_bsom_state_works_in_factory(): void
    {
        $uploadedFile = UploadedFile::factory()->bsom()->create();

        $this->assertEquals('bsom', $uploadedFile->file_type);
        $this->assertStringContainsString('uploads/bsom/', $uploadedFile->file_path);
    }

    /**
     * Test that files can be retrieved by type.
     */
    public function test_files_can_be_retrieved_by_type(): void
    {
        UploadedFile::factory()->rca()->count(3)->create();
        UploadedFile::factory()->bsom()->count(2)->create();

        $rcaFiles = UploadedFile::where('file_type', 'rca')->get();
        $bsomFiles = UploadedFile::where('file_type', 'bsom')->get();

        $this->assertCount(3, $rcaFiles);
        $this->assertCount(2, $bsomFiles);
    }

    /**
     * Test that files can be retrieved by category.
     */
    public function test_files_can_be_retrieved_by_category(): void
    {
        UploadedFile::factory()->create(['category' => 'quality']);
        UploadedFile::factory()->create(['category' => 'production']);
        UploadedFile::factory()->create(['category' => 'quality']);

        $qualityFiles = UploadedFile::where('category', 'quality')->get();
        $productionFiles = UploadedFile::where('category', 'production')->get();

        $this->assertCount(2, $qualityFiles);
        $this->assertCount(1, $productionFiles);
    }

    /**
     * Test that files can be ordered by creation date.
     */
    public function test_files_can_be_ordered_by_creation_date(): void
    {
        $firstFile = UploadedFile::factory()->create(['created_at' => now()->subDays(2)]);
        $secondFile = UploadedFile::factory()->create(['created_at' => now()->subDays(1)]);
        $thirdFile = UploadedFile::factory()->create(['created_at' => now()]);

        $files = UploadedFile::latest()->get();

        $this->assertEquals($thirdFile->id, $files->first()->id);
        $this->assertEquals($firstFile->id, $files->last()->id);
    }
}

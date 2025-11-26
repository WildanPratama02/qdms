<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test that the login form can be displayed.
     */
    public function test_login_form_can_be_displayed(): void
    {
        $response = $this->get('/login');

        $response->assertStatus(200)
            ->assertViewIs('auth.login');
    }

    /**
     * Test that a user can login with valid credentials.
     */
    public function test_user_can_login_with_valid_credentials(): void
    {
        $user = User::factory()->create([
            'password' => bcrypt('password123'),
        ]);

        $response = $this->post('/login', [
            'name' => $user->name,
            'password' => 'password123',
        ]);

        $this->assertAuthenticatedAs($user);
        $response->assertRedirect(route('admin.dashboard'));
    }

    /**
     * Test that a user cannot login with invalid credentials.
     */
    public function test_user_cannot_login_with_invalid_credentials(): void
    {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'name' => $user->name,
            'password' => 'wrong-password',
        ]);

        $this->assertGuest();
        $response->assertRedirect()
            ->assertSessionHasErrors('name');
    }

    /**
     * Test that login requires a name field.
     */
    public function test_login_requires_name_field(): void
    {
        $response = $this->post('/login', [
            'password' => 'password123',
        ]);

        $response->assertSessionHasErrors('name');
    }

    /**
     * Test that login requires a password field.
     */
    public function test_login_requires_password_field(): void
    {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'name' => $user->name,
        ]);

        $response->assertSessionHasErrors('password');
    }

    /**
     * Test that a user can logout.
     */
    public function test_user_can_logout(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
            ->post('/logout');

        $this->assertGuest();
        $response->assertRedirect('/');
    }

    /**
     * Test that the admin dashboard requires authentication.
     */
    public function test_admin_dashboard_requires_authentication(): void
    {
        $response = $this->get('/admin');

        $response->assertRedirect('/login');
    }

    /**
     * Test that authenticated users can access the admin dashboard.
     */
    public function test_authenticated_user_can_access_admin_dashboard(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
            ->get('/admin');

        $response->assertStatus(200)
            ->assertViewIs('admin.dashboard');
    }
}

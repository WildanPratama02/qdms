<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test that a user can be created.
     */
    public function test_user_can_be_created(): void
    {
        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
        ]);

        $this->assertInstanceOf(User::class, $user);
        $this->assertEquals('John Doe', $user->name);
        $this->assertEquals('john@example.com', $user->email);
        $this->assertNotNull($user->password);
        $this->assertNotNull($user->remember_token);
    }

    /**
     * Test that fillable attributes are correctly configured.
     */
    public function test_fillable_attributes_are_correctly_configured(): void
    {
        $user = new User;

        $expectedFillable = ['name', 'email', 'password'];
        $this->assertEquals($expectedFillable, $user->getFillable());
    }

    /**
     * Test that hidden attributes are correctly configured.
     */
    public function test_hidden_attributes_are_correctly_configured(): void
    {
        $user = new User;

        $expectedHidden = ['password', 'remember_token'];
        $this->assertEquals($expectedHidden, $user->getHidden());
    }

    /**
     * Test that email is properly cast.
     */
    public function test_email_is_properly_cast(): void
    {
        $user = User::factory()->create(['email' => 'test@example.com']);
        $this->assertEquals('test@example.com', $user->email);
    }

    /**
     * Test that email_verified_at is cast to datetime.
     */
    public function test_email_verified_at_is_cast_to_datetime(): void
    {
        $user = User::factory()->create([
            'email_verified_at' => '2024-01-15 10:30:00',
        ]);

        $this->assertInstanceOf(\Carbon\Carbon::class, $user->email_verified_at);
        $this->assertEquals('2024-01-15 10:30:00', $user->email_verified_at->format('Y-m-d H:i:s'));
    }

    /**
     * Test that password is properly hashed.
     */
    public function test_password_is_properly_hashed(): void
    {
        $plainPassword = 'password123';
        $user = User::factory()->create(['password' => bcrypt($plainPassword)]);

        $this->assertNotEquals($plainPassword, $user->password);
        $this->assertTrue(\Hash::check($plainPassword, $user->password));
    }

    /**
     * Test that factory creates valid records.
     */
    public function test_factory_creates_valid_records(): void
    {
        $user = User::factory()->create();

        $this->assertNotNull($user->name);
        $this->assertNotNull($user->email);
        $this->assertNotNull($user->password);
        $this->assertNotNull($user->remember_token);
        $this->assertNotNull($user->email_verified_at);
    }

    /**
     * Test that unverified state works in factory.
     */
    public function test_unverified_state_works_in_factory(): void
    {
        $user = User::factory()->unverified()->create();

        $this->assertNull($user->email_verified_at);
    }

    /**
     * Test that email is unique.
     */
    public function test_email_is_unique(): void
    {
        $email = 'test@example.com';

        User::factory()->create(['email' => $email]);

        $this->expectException(\Illuminate\Database\QueryException::class);
        User::factory()->create(['email' => $email]);
    }

    /**
     * Test that remember token is a string.
     */
    public function test_remember_token_is_a_string(): void
    {
        $user = User::factory()->create();

        $this->assertIsString($user->remember_token);
        $this->assertEquals(10, strlen($user->remember_token));
    }

    /**
     * Test that authentication works correctly.
     */
    public function test_authentication_works_correctly(): void
    {
        $user = User::factory()->create([
            'password' => bcrypt('password123'),
        ]);

        $this->assertTrue(\Auth::attempt([
            'name' => $user->name,
            'password' => 'password123',
        ]));

        $this->assertFalse(\Auth::attempt([
            'name' => $user->name,
            'password' => 'wrongpassword',
        ]));
    }
}

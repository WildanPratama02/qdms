<?php

namespace Tests\Feature;

use Tests\TestCase;

class QualityPagesTest extends TestCase
{
    /**
     * Test that the home page loads successfully.
     */
    public function test_home_page_loads_successfully(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200)
            ->assertViewIs('pages.home');
    }

    /**
     * Test that quality production page loads successfully.
     */
    public function test_quality_production_page_loads_successfully(): void
    {
        $response = $this->get('/quality_production');

        $response->assertStatus(200)
            ->assertViewIs('pages.quality_production');
    }

    /**
     * Test that RFT page loads successfully.
     */
    public function test_rft_page_loads_successfully(): void
    {
        $response = $this->get('/rft');

        $response->assertStatus(200)
            ->assertViewIs('pages.rft');
    }

    /**
     * Test that quality KPI page loads successfully.
     */
    public function test_quality_kpi_page_loads_successfully(): void
    {
        $response = $this->get('/quality_kpi');

        $response->assertStatus(200)
            ->assertViewIs('pages.quality_kpi');
    }

    /**
     * Test that defective return page loads successfully.
     */
    public function test_defective_return_page_loads_successfully(): void
    {
        $response = $this->get('/defective_return');

        $response->assertStatus(200)
            ->assertViewIs('pages.defective_return');
    }

    /**
     * Test that warehouse claims page loads successfully.
     */
    public function test_warehouse_claims_page_loads_successfully(): void
    {
        $response = $this->get('/warehouse_claims');

        $response->assertStatus(200)
            ->assertViewIs('pages.warehouse_claims');
    }

    /**
     * Test that humidity control page loads successfully.
     */
    public function test_humidity_control_page_loads_successfully(): void
    {
        $response = $this->get('/humidity_control');

        $response->assertStatus(200)
            ->assertViewIs('pages.humidity_control');
    }

    /**
     * Test that moisture check page loads successfully.
     */
    public function test_moisture_check_page_loads_successfully(): void
    {
        $response = $this->get('/moisture_check');

        $response->assertStatus(200)
            ->assertViewIs('pages.moisture_check');
    }

    /**
     * Test that daily performance page loads successfully.
     */
    public function test_daily_performance_page_loads_successfully(): void
    {
        $response = $this->get('/daily_performance');

        $response->assertStatus(200)
            ->assertViewIs('pages.daily_performance');
    }

    /**
     * Test that quality system page loads successfully.
     */
    public function test_quality_system_page_loads_successfully(): void
    {
        $response = $this->get('/quality_system');

        $response->assertStatus(200)
            ->assertViewIs('pages.quality_system');
    }

    /**
     * Test that RCA library page loads successfully.
     */
    public function test_rca_library_page_loads_successfully(): void
    {
        $response = $this->get('/rca_library');

        $response->assertStatus(200);
    }

    /**
     * Test that policy library page loads successfully.
     */
    public function test_policy_library_page_loads_successfully(): void
    {
        $response = $this->get('/policy_library');

        $response->assertStatus(200);
    }

    /**
     * Test that work instruction library page loads successfully.
     */
    public function test_work_instruction_library_page_loads_successfully(): void
    {
        $response = $this->get('/work_instruction_library');

        $response->assertStatus(200);
    }

    /**
     * Test that audit library page loads successfully.
     */
    public function test_audit_library_page_loads_successfully(): void
    {
        $response = $this->get('/audit_library');

        $response->assertStatus(200);
    }

    /**
     * Test that quality ambassador page loads successfully.
     */
    public function test_quality_ambassador_page_loads_successfully(): void
    {
        $response = $this->get('/quality_ambassador');

        $response->assertStatus(200);
    }

    /**
     * Test that 404 page loads successfully.
     */
    public function test_404_page_loads_successfully(): void
    {
        $response = $this->get('/404');

        $response->assertStatus(200)
            ->assertViewIs('pages.404');
    }

    /**
     * Test that a non-existent route returns 404.
     */
    public function test_non_existent_route_returns_404(): void
    {
        $response = $this->get('/non-existent-page');

        $response->assertStatus(404);
    }

    /**
     * Test that named routes are properly configured.
     */
    public function test_named_routes_are_properly_configured(): void
    {
        // Test important named routes
        $this->assertEquals('/', route('home'));
        $this->assertEquals(route('rft'), '/rft');
        $this->assertEquals(route('quality_kpi'), '/quality_kpi');
        $this->assertEquals(route('daily_performance'), '/daily_performance');
        $this->assertEquals(route('rca_library'), '/rca_library');
        $this->assertEquals(route('policy_library'), '/policy_library');
        $this->assertEquals(route('work_instruction_library'), '/work_instruction_library');
        $this->assertEquals(route('audit_library'), '/audit_library');
        $this->assertEquals(route('quality_ambassador'), '/quality_ambassador');
    }
}

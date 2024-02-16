<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Employee;

class EmployeeTest extends TestCase
{
    protected function setUp() :void 
    {
        parent::setUp();
        
        $user = User::factory()->create();

        Employee::factory()->count(20)->create();

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);
    }

    /**
     * Employee list view.
     */
    public function test_employee_list_view(): void
    {
        $response = $this->get('/employees');

        $response->assertStatus(200);

        $response->assertViewHas('employees');
    }
}

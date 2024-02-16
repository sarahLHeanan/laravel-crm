<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Company;

class CompanyTest extends TestCase
{

    //@todo would like to move into testcase if time
    protected function setUp() :void 
    {
        parent::setUp();
        
        $user = User::factory()->create();

        Company::factory()->count(20)->create();

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);
    }

    /**
     * Company list view.
     */
    public function test_company_list_view(): void
    {
        $response = $this->get('/companies');

        $response->assertStatus(200);

        $response->assertViewHas('companies');
    }
}

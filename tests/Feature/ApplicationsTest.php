<?php

namespace Tests\Feature;

use App\Models\Application;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApplicationsTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function page_exists()
    {
        $response = $this->get('/application');

        $response->assertStatus(200);
    }
    /** @test */ 
    public function can_create_a_application()
    {
        $this->withoutExceptionHandling();

        $attributes = Application::factory()->raw();

        $this->post('/application', $attributes)->assertRedirect('/application');

        $this->assertDatabaseHas('applications', $attributes);

        $this->get('/application')->assertSee($attributes['name']);
    }
    /** @test */ 
    public function can_view_a_application()
    {
        $application = Application::factory()->create();

        $this->get('/application/'. $application->id)
            ->assertSee($application->name)
            ->assertSee($application->surname);
    }


    /** @test */ 
    public function application_requires_name()
    {
        $attributes = Application::factory()->raw(['name'=>'']);
        $this->post('/application', [])->assertSessionHasErrors('name');
    }
    
    /** @test */ 
    public function application_requires_surname()
    {
        $attributes = Application::factory()->raw(['surname' => '']);
        $this->post('/application', [])->assertSessionHasErrors('surname');
    }
    
    /** @test */ 
    public function application_requires_gender()
    {
        $attributes = Application::factory()->raw(['gender' => '']);
        $this->post('/application', [])->assertSessionHasErrors('gender');
    }
    
    /** @test */ 
    public function application_requires_mail()
    {
        $attributes = Application::factory()->raw(['mail' => '']);
        $this->post('/application', [])->assertSessionHasErrors('mail');
    }
    
    /** @test */ 
    public function application_requires_residence()
    {
        $attributes = Application::factory()->raw(['residence' => '']);
        $this->post('/application', [])->assertSessionHasErrors('residence');
    }
    
    /** @test */ 
    public function application_requires_function()
    {
        $attributes = Application::factory()->raw(['function' => '']);
        $this->post('/application', [])->assertSessionHasErrors('function');
    }
    
    /** @test */ 
    public function application_requires_location()
    {
        $attributes = Application::factory()->raw(['location' => '']);
        $this->post('/application', [])->assertSessionHasErrors('location');
    }
    
    /** @test */ 
    public function application_requires_reason()
    {
        $attributes = Application::factory()->raw(['reason' => '']);
        $this->post('/application', [])->assertSessionHasErrors('reason');
    }
}

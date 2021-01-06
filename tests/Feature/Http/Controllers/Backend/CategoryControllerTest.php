<?php

namespace Tests\Feature\Http\Controllers\Backend;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Category;

class CategoryControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;
    public function test_create()
    {
        $response = $this->get(route('category.create'));

        $response->assertStatus(200)
            ->assertViewIs('categories.create');;
    }

    public function test_store()
    {
        $this->withExceptionHandling();

        $category = factory(Category::class)->create();

        $response = $this->post(route('category.store'), [
            'name' => $category->name
        ]);

        $response->assertStatus(302)
            ->assertSessionHas('status', 'Successfully created');

        $this->assertDatabaseHas('categories', ['name' => $category->name]);
    }

    public function test_validate_category_fields()
    {
        $this->withExceptionHandling();

        $response = $this->post(route('category.store'), [
            'name' => ''
        ]);
        $response->assertStatus(302);
        $this->assertDatabaseMissing('categories', ['name' => ''])
            ->assertDatabaseCount('categories', 0);
    }
}

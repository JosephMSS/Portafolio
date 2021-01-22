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
    public function test_edit()
    {
        $this->withExceptionHandling();
        $category = factory(Category::class)->create();


        $response = $this->get(route('category.edit', [
            'category' => $category->id
        ]));

        $category = Category::first();

        $response->assertViewIs('categories.edit')
            ->assertViewHas('category', $category)
            ->assertStatus(200);
    }
    public function test_update()
    {
        $category = factory(Category::class)->create();
        $response = $this->put(route('category.update', [
            'category' => $category,
            'name' => 'new name'

        ]));
        $response->assertStatus(302);
        $this->assertDatabaseHas('categories', ['name' => 'new name']);
    }
    public function test_destroy()
    {
        $category=factory(Category::class)->create();
        $response=$this->delete(route('category.destroy',[
            'category'=>$category
        ]));
        $this->assertDatabaseMissing('categories',[
            'id'=>$category->id
        ]);
    }
    public function test_softDelete()
    {
        $category=factory(Category::class)->create();
        $response=$this->delete(route('category.destroy',[
            'category'=>$category
        ]));

        $this->assertSoftDeleted('categories',['id'=>$category->id]);
    }
    public function test_index()
    {
        factory(Category::class, 2)->create();

        $categories = Category::latest()->get();

        $response =  $this->get(route('category.index'));

        $response->assertStatus(200)
            ->assertViewIs('categories.index')
            ->assertViewHas('categories', $categories);
    }
}

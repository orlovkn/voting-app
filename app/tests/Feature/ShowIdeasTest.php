<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Idea;
use App\Models\Status;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ShowIdeasTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function list_of_ideas_shows_on_main_page()
    {
        $categoryOne = Category::factory()->create(['name' => 'Category 1']);
        $categoryTwo = Category::factory()->create(['name' => 'Category 2']);

        $statusOpen = Status::factory()->create(['name' => 'Open', 'classes' => 'bg-gray']);

        $ideaOne = Idea::factory()->create(
            [
                'title'       => 'My first title',
                'category_id' => $categoryOne->id,
                'status_id' => $statusOpen->id,
                'description' => 'My first description',
            ]
        );

        $ideaTwo = Idea::factory()->create(
            [
                'title'       => 'My second title',
                'category_id' => $categoryTwo->id,
                'status_id' => $statusOpen->id,
                'description' => 'My second description',
            ]
        );

        $response = $this->get(route('idea.index'));

        $response->assertSuccessful();
        $response->assertSee($ideaOne->title);
        $response->assertSee($ideaOne->description);
        $response->assertSee($categoryOne->name);
        $response->assertSee('bg-gray font-bold text-xs uppercase w-28 text-center rounded-2xl text-white h-7 py-2 px-4', false);
    }

    /** @test */
    public function single_idea_shows_correctly_on_the_show_page()
    {
        $categoryOne = Category::factory()->create(['name' => 'Category 1']);

        $statusOpen = Status::factory()->create(['name' => 'Open', 'classes' => 'bg-gray']);

        $idea = Idea::factory()->create(
            [
                'title'       => 'My first title',
                'category_id' => $categoryOne->id,
                'status_id' => $statusOpen->id,
                'description' => 'My first description',
            ]
        );

        $response = $this->get(route('idea.show', $idea));

        $response->assertSuccessful();
        $response->assertSee($idea->title);
        $response->assertSee($idea->description);
//        $response->assertSee('bg-gray font-bold text-xs uppercase w-28 text-center rounded-2xl text-white h-7 py-2 px-4', false);
    }

    /** @test */
    public function ideas_pagination_works()
    {
        $categoryOne = Category::factory()->create(['name' => 'Category 1']);

        $statusOpen = Status::factory()->create(['name' => 'Open', 'classes' => 'bg-gray']);

        Idea::factory(Idea::PAGINATION_COUNT + 1)->create(['category_id' => $categoryOne->id, 'status_id' => $statusOpen->id]);

        $ideaOne = Idea::find(1);
        $ideaOne->title = 'My first idea';
        $ideaOne->save();

        $ideaEleven = Idea::find(11);
        $ideaEleven->title = 'My eleventh idea';
        $ideaEleven->save();

//        $response = $this->get(route('idea.index'));
        $response = $this->get('/');

        $response->assertSee($ideaEleven->title);
        $response->assertDontSee($ideaOne->title);
        $response->assertSee('bg-gray font-bold text-xs uppercase w-28 text-center rounded-2xl text-white h-7 py-2 px-4', false);

        $response = $this->get('/?page=2');
        $response->assertSee($ideaOne->title);
        $response->assertDontSee($ideaEleven->title);
    }

    /** @test */
    public function same_idea_title_with_different_slugs()
    {
        $categoryOne = Category::factory()->create(['name' => 'Category 1']);

        $statusOpen = Status::factory()->create(['name' => 'Open', 'classes' => 'bg-gray']);

        $ideaOne = Idea::factory()->create(
            [
                'title'       => 'My first idea',
                'category_id' => $categoryOne->id,
                'status_id'   => $statusOpen->id,
                'description' => 'My first description',
            ]
        );

        $ideaTwo = Idea::factory()->create(
            [
                'title'       => 'My first idea',
                'category_id' => $categoryOne->id,
                'status_id'   => $statusOpen->id,
                'description' => 'My first description',
            ]
        );

        $response = $this->get(route('idea.show', $ideaOne));

        $response->assertSuccessful();
        $this->assertTrue(request()->path() === 'ideas/my-first-idea');


        $response = $this->get(route('idea.show', $ideaTwo));

        $response->assertSuccessful();
        $this->assertTrue(request()->path() === 'ideas/my-first-idea-2');
    }
}

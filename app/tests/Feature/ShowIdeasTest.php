<?php

namespace Tests\Feature;

use App\Models\Idea;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ShowIdeasTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function list_of_ideas_shows_on_main_page()
    {
        $ideaOne = Idea::factory()->create(
            [
                'title'       => 'My first title',
                'description' => 'My first description',
            ]
        );

        $ideaTwo = Idea::factory()->create(
            [
                'title'       => 'My second title',
                'description' => 'My second description',
            ]
        );

        $response = $this->get(route('idea.index'));

        $response->assertSuccessful();
        $response->assertSee($ideaOne->title);
        $response->assertSee($ideaOne->description);
    }

    /** @test */
    public function single_idea_shows_correctly_on_the_show_page()
    {
        $idea = Idea::factory()->create(
            [
                'title'       => 'My first title',
                'description' => 'My first description',
            ]
        );

        $response = $this->get(route('idea.show', $idea));

        $response->assertSuccessful();
        $response->assertSee($idea->title);
        $response->assertSee($idea->description);
    }

    /** @test */
    public function ideas_pagination_works()
    {
        Idea::factory(Idea::PAGINATION_COUNT + 1)->create();

        $ideaOne = Idea::find(1);
        $ideaOne->title = 'My first idea';
        $ideaOne->save();

        $ideaEleven = Idea::find(11);
        $ideaEleven->title = 'My eleventh idea';
        $ideaEleven->save();

//        $response = $this->get(route('idea.index'));
        $response = $this->get('/');

        $response->assertSee($ideaOne->title);
        $response->assertDontSee($ideaEleven->title);

        $response = $this->get('/?page=2');
        $response->assertSee($ideaEleven->title);
        $response->assertDontSee($ideaOne->title);
    }

    /** @test */
    public function same_idea_title_with_different_slugs()
    {
        $ideaOne = Idea::factory()->create(
            [
                'title'       => 'My first idea',
                'description' => 'My first description',
            ]
        );

        $ideaTwo = Idea::factory()->create(
            [
                'title'       => 'My first idea',
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

<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Post;

class PostTest extends TestCase
{
    use RefreshDatabase;

    public function test_post_index_displays_posts(): void
    {
        $post1 = Post::factory()->create();
        $post2 = Post::factory()->create();

        $response = $this->get('/posts');

        $response->assertStatus(200);
        $response->assertViewIs('posts.index');
        $response->assertSee($post1->title);
        $response->assertSee($post2->title);
    }

    public function test_post_store_creates_new_post_and_redirects(): void
    {
        $postData = [
            'title' => 'New Post Title',
            'content' => 'New post content.',
        ];

        $response = $this->post('/posts', $postData);

        $this->assertDatabaseHas('posts', $postData);
        $latestPost = Post::latest('id')->first();
        $response->assertRedirectToRoute('posts.show', $latestPost);
    }

    public function test_post_show_displays_correct_post(): void
    {
        $post = Post::factory()->create();

        $response = $this->get('/posts/' . $post->id);

        $response->assertStatus(200);
        $response->assertViewIs('posts.show');
        $response->assertSee($post->title);
        $response->assertSee($post->content);
    }
}

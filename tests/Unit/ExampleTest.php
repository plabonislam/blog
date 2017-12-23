<?php

namespace Tests\Unit;
use App\Post;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        
        //given i have two records on database

        //each one is posted one month after
       $first = factory(Post::class)->create();

        $second = factory(Post::class)->create([
        	'created_at'=> \Carbon\Carbon::now()->subMonth()]);
        //when i fetch the archive
        $post=Post::archive();

        //response should be proper format
        $this->assertCount(2,$post);
    }
}

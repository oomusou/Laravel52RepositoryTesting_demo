<?php

use App\Post;
use App\Repositories\PostRepository;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Collection;

class PostRepositoryTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * @test
     */
    public function 最新3筆文章()
    {
        /** arrange */
        factory(Post::class, 100)->create();
        $target = App::make(PostRepository::class);
        $expected = new Collection([
            100,
            99,
            98,
        ]);

        /** act */
        $actual = $target->getLatest3Posts()->pluck('id');

        /** assert */
        $this->assertEquals($expected, $actual);
    }
}

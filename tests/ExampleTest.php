<?php

use App\Post;
use Illuminate\Support\Facades\Artisan;

class ExampleTest extends TestCase
{
    protected function setUp()
    {
        parent::setUp();
        Artisan::call('migrate');
    }


    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
             ->see('Laravel 5');
    }

    /**
     * @test
     */
    public function 測試SQLiteInMemory連線()
    {
        /** arrange */
        $expected = 0;

        /** act */
        $actual = Post::all();

        /** assert */
        $this->assertCount($expected, $actual);

    }
}

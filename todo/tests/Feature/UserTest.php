<?php

namespace Tests\Feature;

use App\Http\Controllers\TodoController;
use App\Http\Requests\TodoRequest;
use App\Models\Todo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_todo_create()
    {
        $todo = new Todo;
        $todo->name = "test_name";
        $todo->description = "test_description";
        $todo->save();

        $this->assertTrue($todo->name == "test_name");
        $todo->delete();
    }
}

<?php
namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;
use Todo\Task\TaskService;

class TodoController extends Controller
{

    private TaskService $taskService;

    public function __construct(TaskService $taskService)
    {
    }

    public function index()
	{
        $todo = Todo::all();
        return view('index')->with('todos', $todo);
    }

    public function create(/*$request*/)
	{
	    /*
	    $taskCreatePayload = new \TaskCreatePayload(
	        $request->getName(),
            $request->getDescription(),
            $request->getStatus()
        );
	    $this->taskService->create($taskCreatePayload);
	    */

        return view('create');
    }

    public function create_sub(Todo $todo)
    {
        return view('create_sub')->with('todos', $todo);;
    }

    public function details(Todo $todo)
	{
        $all_todo = Todo::all();
        return view('details')->with('todos', $todo)->with('all_todos', $all_todo);
    }

    public function edit(Todo $todo)
	{
        return view('edit')->with('todos', $todo);
    }

    public function update(Todo $todo, TodoRequest $request)
	{

        $data = $request->validated();

		$todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->save();

        session()->flash('success', 'Todo updated successfully');
        return redirect('/');
    }

    public function delete(Todo $todo)
	{
        $todo->delete();
        return redirect('/');
    }

    public function store(Todo $todo, TodoRequest $request)
	{
        $data = $request->validated();

        $todo->name = $data['name'];
        $todo->description = $data['description'];

        $data = request()->all();

        $todo = new Todo();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->save();

        session()->flash('success', 'Todo created succesfully');
        return redirect('/');
    }

    public function store_sub(Todo $todo, TodoRequest $request)
    {
        $data = $request->validated();

        $todo->name = $data['name'];
        $todo->description = $data['description'];

        $data = request()->all();

        $sub_todo = new Todo();
        $sub_todo->name = $data['name'];
        $sub_todo->description = $data['description'];
        $sub_todo->parent_id = $todo->id;
        $sub_todo->save();

        session()->flash('success', 'Todo created succesfully');
        return redirect('/');
    }

    public function status_update()
    {
        //для этого используют js или Livewire
        $id = 3;
        $todo = Todo::findOrFail($id);
        $todo->mark();

        session()->flash('success', 'Todo updated successfully');
        return redirect('/');
    }
}

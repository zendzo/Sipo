<?php

use Gurindam\Forms\TasksForm;

class TasksController extends \BaseController {

    protected $taskForm;

    function __construct(TasksForm $taskForm)
    {
        $this->taskForm = $taskForm;
    }

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $tasks = Tasks::paginate(5);

		return View::make('task.index',compact('tasks'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $summaries = Summaries::lists('name','id');

        return View::make('task.create',compact('summaries'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $input = Input::only('name','duration','start','finish','summaries_id');

        $this->taskForm->validate($input);

        Tasks::create($input);

        return Redirect::to('/tasks')->with('flash_message','Task Successfully Saved');

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}

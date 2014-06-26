<?php

class ProjectsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /projects
	 *
	 * @return Response
	 */
	public function index()
	{
        $projects = Projects::paginate(25);

		return View::make('project.index',compact('projects'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /projects/create
	 *
	 * @return Response
	 */
	public function create()
	{
        $category = Categories::lists('name','id');
		return View::make('project.create',compact('category'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /projects
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();

        Projects::create([
           'title'=>$input['title'],
            'description'=>$input['description'],
            'user_id'=>Auth::user()->id,
            'categories_id'=>$input['category'],
            'duration'=>$input['duration']
        ]);

        return Redirect::to('/projects')->with('flash_message','Success Create Project');
	}

	/**
	 * Display the specified resource.
	 * GET /projects/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$project = Projects::findOrFail($id);

        return View::make('project.detail',compact('project'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /projects/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$project = Projects::findOrFail($id);
        $category = Categories::lists('name','id');

        return View::make('project.edit',compact('project','category'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /projects/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$project = Projects::find($id);

        $validator = $this->validate();

        if( $validator->passes() )
        {
            $project->title = Input::get('title');
            $project->description = Input::get('description');
            $project->categories_id = Input::get('category');
            $project->duration = Input::get('duration');
            $project->update();

            return Redirect::to('/projects')->with('flash_message', 'Success Update Project');
        }
        return Redirect::back()->with('flash_message','Something Wrong! Please Check Your data Entry');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /projects/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{

	}

    /**
     * @return mixed
     */
    private function validate()
    {
        $rule = [
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'duration' => 'required',
        ];

        $validator = Validator::make(Input::only('title','description','category','duration'), $rule);
        return $validator;
    }

}
<?php

class CategoriesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /categories
	 *
	 * @return Response
	 */
	public function index()
	{
       $categories = Categories::paginate(25);

		return View::make('category.index',compact('categories'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /categories/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('category.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /categories
	 *
	 * @return Response
	 */
	public function store()
	{
        $validator = $this->validate();

        if( $validator->passes() )
        {
            $categories = new Categories();

            $categories->name = Input::get('name');
            $categories->user_id = Auth::user()->id;
            $categories->save();

            return self::index();
        }

        return Redirect::back()->withInput();
	}

	/**
	 * Display the specified resource.
	 * GET /categories/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $category = Categories::findOrFail($id);

        return View::make('category.detail',compact('category'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /categories/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $categories =  Categories::findOrFail($id);

        return View::make('category.edit',compact('categories'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /categories/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $categories = Categories::find($id);

        if( $this->validate()->passes() )
        {
            $categories->name = Input::get('name');
            $categories->update();

            return Redirect::to('/categories')->with('flash_message','Success Updated Category');
        }

        return Redirect::back()->with('flash_messages','Something goes wrong, please recheck your entry.');

	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /categories/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $categories = Categories::findorFail($id);
        if( $categories->delete() )
        {
            return Redirect::to('categories');
        }
	}

    /**
     * @return mixed
     */
    private function validate()
    {
        $validator = Validator::make(Input::only('name'), ['name' => 'required|min:5']);
        return $validator;
    }

}
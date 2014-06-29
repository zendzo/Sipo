<?php
use Gurindam\Forms\SummariesForm;

class SummariesController extends \BaseController {

    protected $summariesForm;

    function __construct(SummariesForm $summariesForm)
    {
        $this->summariesForm = $summariesForm;
    }

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $summaries = Summaries::paginate(5);

		return View::make('summary.index',compact('summaries'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $project = Projects::lists('title','id');

		return View::make('summary.create',compact('project'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $input = Input::only('name','duration','start','finish','project_id');

        $this->summariesForm->validate($input);

        Summaries::create($input);

        return Redirect::to('/summaries')->with('flash_message','Summary Successfully Saved');
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

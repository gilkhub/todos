<?php

class TodosController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$todos = Todo::all();
		return Response::json(compact('todos'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Input::get('todo');

		$todo = new Todo;
		$todo = $todo->create($data);

		$todo = $todo->toArray();
		return Response::json(compact('todo'), 201);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$todo = Todo::findOrFail($id);

		$todo = $todo->toArray();
		return Response::json(compact('todo'), 200);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$data = Input::get('todo');

		$todo = Todo::findOrFail($id);

		$todo->update($data);
		
		$todo = $todo->toArray();
		return Response::json(compact('todo'));
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$todo = Todo::findOrFail($id);

		$todo->delete();
 
	    return Response::json(array(
	        'message' => 'todo deleted'),
	        200
        );
	}
}

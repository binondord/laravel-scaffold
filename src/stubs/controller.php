<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use {{model_path}};
use Illuminate\Http\Request;

class {{class}} extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		${{model_name_var}} = {{model_name_class}}::orderBy('id', 'desc')->paginate(10);

		return view('{{model_name_var}}.index', compact('{{model_name_var}}'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('{{model_name_var}}.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		${{model_name_var_sgl}} = new {{model_name_class}}();

		{{model_fields}}

		${{model_name_var_sgl}}->save();

		return redirect()->route('{{model_name_var}}.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		${{model_name_var_sgl}} = {{model_name_class}}::findOrFail($id);

		return view('{{model_name_var}}.show', compact('{{model_name_var_sgl}}'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		${{model_name_var_sgl}} = {{model_name_class}}::findOrFail($id);

		return view('{{model_name_var}}.edit', compact('{{model_name_var_sgl}}'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		${{model_name_var_sgl}} = {{model_name_class}}::findOrFail($id);

		{{model_fields}}

		${{model_name_var_sgl}}->save();

		return redirect()->route('{{model_name_var}}.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		${{model_name_var_sgl}} = {{model_name_class}}::findOrFail($id);
		${{model_name_var_sgl}}->delete();

		return redirect()->route('{{model_name_var}}.index')->with('message', 'Item deleted successfully.');
	}

}

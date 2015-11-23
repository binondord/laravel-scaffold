<?php

namespace App\Http\Controllers;

use App\Contracts\Repositories\[repositoryInterface];

class [controller] extends Controller
{
	protected $[model];

	public function __construct([repositoryInterface] $[model])
	{
		$this->[model] = $[model];
	}

	public function index()
	{
    	$[models] = $this->[model]->all();
        return view('[model].index', compact('[models]'));
	}

	public function create()
	{
        return view('[model].create');
	}

	public function store()
	{
        $this->[model]->store(\Input::only([repeat]'[property]',[/repeat]));
        return redirect()->route('[model].index');
	}

	public function show($id)
	{
        $[model] = $this->[model]->find($id);
        return \View::make('[model].show')->with('[model]', $[model]);
	}

	public function edit($id)
	{
        $[model] = $this->[model]->find($id);
        return view('[model].edit')->with('[model]', $[model]);
	}

	public function update($id)
	{
        $this->[model]->find($id)->update(\Input::only([repeat]'[property]',[/repeat]));
        return redirect()->route('[model].show', $id)->with('message', 'Item updated successfully.');
	}

	public function destroy($id)
	{
        $this->[model]->destroy($id);
        return redirect()->route('[model].index')->with('message', 'Item deleted successfully.');
	}

}

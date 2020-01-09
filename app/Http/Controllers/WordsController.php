<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Word;

class WordsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('words.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request['user_id'] = \Auth::id();
        $word = Word::create($request->all());
        \Session::put('success', 'Successfully added vocabulary in your list.');
        return \Redirect::route('word.index', array('message' => 'success', 'data' => $word));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}

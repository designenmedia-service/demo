<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        return "it's working, the number is ". $id;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "Het werkt heel goed! " . $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    public function contact ()
    {
        // $people = ['Chris', 'Ilja', 'Gerald', 'Irene', 'Ronnie'];
        $people = ['Test','Mijn naam is chris'];
        return view('contact', compact('people'));
    }

    public function show_post($id, $name, $password)
    {
        return view('post', compact('id', 'name', 'password'));
    }

    public function show_chris($id1, $id2, $id3)
    {
        return view('chris', compact('id1', 'id2', 'id3'));
    }

    public function show_testpagina()
    {
        $namen = ['Peter', 'Jochem', 'Piet'];
        return view ('testpagina', compact('namen'));
    }

    public function show_array()
    {
        $mensen = ['Chris', 'Ilja'];
        return view('array', compact('mensen'));
    }

    public function show_index()
    {


        return view('index');

    }

    

}

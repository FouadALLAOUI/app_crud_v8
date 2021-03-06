<?php

namespace App\Http\Controllers;

use App\Models\Documment;
use Illuminate\Http\Request;



class DocummentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Documment::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'propr'   => 'required'     ,
            'intitule'  => 'required'   ,
            'auteur'    => 'required'   ,
            'type_document' => 'required',
            'visibility'  => 'required' ,
            'archive'    => 'required'
        ]);
        return Documment::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Documment::find($id);    
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
        $doc = Documment::find($id);
        $doc->update($request->all());
        return $doc;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       return Documment::destroy($id);
    }

    /**
     * Search for a name.
     *
     * @param  int  $name
     * @return \Illuminate\Http\Response
     */
    public function search($name)
    {
       return Documment::where('intitule', 'like' ,'%'.$name.'%')->get(); // for name or part of name
    } 




}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tim;
use App\Models\Project;


class TimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tims = Tim::with('project')->latest()->get();
        // dd($tims);
        return view('admin.tim.index', compact('tims'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $projects = Project::latest()->get();
        return view('admin.tim.create', compact('projects'));
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
         //validate form
         $this->validate($request, [
            'nama'  => 'required',
            'deskripsi'  => 'required',
            'id_project' => 'required'
        ]);

        //create post
        Tim::create([
            'nama'     => $request->nama,
            'deskripsi'   => $request->deskripsi,
            'id_project'   => $request->id_project,
        ]);

        //redirect to index
        return redirect()->route('admin.tim')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $projects = Project::latest()->get();
        $tims = Tim::where('id_tim','=',$id)->firstOrFail();
        return view('admin.tim.edit', compact('projects','tims'));
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
        $this->validate($request, [
            'nama'  => 'required',
            'deskripsi'  => 'required',
            'id_project' => 'required'
        ]);

        // $klien = Klien::findOrFail($id);
        $tims = Tim::where('id_tim','=',$id)->firstOrFail();


        //update post with new image
        $tims->update([
            'nama'     => $request->nama,
            'deskripsi'   => $request->deskripsi,
            'id_project'   => $request->id_project

        ]);

        //redirect to index
        return redirect()->route('admin.tim')->with(['success' => 'Data Berhasil Diubah!']);
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
                //delete image
                $tim = Tim::where('id_tim','=',$id)->firstOrFail();
        
                //delete post
                $tim->delete();
        
                //redirect to index
                return redirect()->route('admin.tim')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}

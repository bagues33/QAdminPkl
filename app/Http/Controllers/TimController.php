<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tim;
use App\Models\Project;
use App\Models\Anggota;
use Illuminate\Support\Facades\Auth;

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
        $user = Auth::user();
        $tims = Tim::with('project', 'project.tim')->where('id_user', '=', $user->id)->latest()->get();
        // dd($tims[0]->project->tim);
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

        $iduser = Auth::id();

        //create post
        Tim::create([
            'nama'     => $request->nama,
            'deskripsi'   => $request->deskripsi,
            'id_project'   => $request->id_project,
            'id_user'     => $iduser
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
        $tims = Tim::with('project')->where('id_tim','=',$id)->firstOrFail();
        $anggotas = Anggota::with('user')->where('id_tim','=',$id)->get();
        return view('admin.tim.detail', compact('anggotas','tims'));
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

        $iduser = Auth::id();

        //update post with new image
        $tims->update([
            'nama'     => $request->nama,
            'deskripsi'   => $request->deskripsi,
            'id_project'   => $request->id_project,
            'id_user'   => $iduser

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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Klien;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        $projects = Project::latest()->where('id_user', '=', $user->id)->get();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $kliens = Klien::latest()->get();
        $iduser = Auth::id();
        return view('admin.projects.create', compact('kliens','iduser'));
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
            'deskripsi'     => 'required',
            'tgl_mulai' => 'required',
            'deadline' => 'required',
            'tgl_selesai' => 'required',
            'id_klien' => 'required'
        ]);

        $iduser = Auth::id();
        $status = "On Progress";

        //create post
        Project::create([
            'nama'     => $request->nama,
            'deskripsi'   => $request->deskripsi,
            'tgl_mulai'   => $request->tgl_mulai,
            'tgl_selesai'   => $request->tgl_selesai,
            'deadline'   => $request->deadline,
            'budget'   => $request->budget,
            'status'   => $status,
            'id_klien'   => $request->id_klien,
            'id_user' => $iduser
        ]);

        //redirect to index
        return redirect()->route('admin.project')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $kliens = Klien::latest()->get();
        $project = Project::where('id_project','=',$id)->firstOrFail();
        return view('admin.projects.edit', compact('project','kliens'));
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
            'tgl_mulai' => 'required',
            'tgl_selesai' => 'required',
            'deadline' => 'required',
            'budget' => 'required',
            'status' => 'required'
        ]);

        // $klien = Klien::findOrFail($id);
        $project = Project::where('id_project','=',$id)->firstOrFail();


        //update post with new image
        $project->update([
            'nama'     => $request->nama,
            'deskripsi'   => $request->deskripsi,
            'tgl_mulai'   => $request->tgl_mulai,
            'tgl_selesai'   => $request->tgl_selesai,
            'deadline'   => $request->deadline,
            'budget'   => $request->budget,
            'status'   => $request->status,

        ]);

        //redirect to index
        return redirect()->route('admin.project')->with(['success' => 'Data Berhasil Diubah!']);
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
        $project = Project::where('id_project','=',$id)->firstOrFail();
        
        //delete post
        $project->delete();

        //redirect to index
        return redirect()->route('admin.project')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}

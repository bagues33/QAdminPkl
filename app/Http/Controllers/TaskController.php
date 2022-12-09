<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Anggota;
use Illuminate\Support\Facades\Auth;


class TaskController extends Controller
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
        $tasks = Task::with('anggota', 'anggota.user')->latest()->get();
        // dd($tasks[0]->anggota->user);
        return view('admin.task.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user = Auth::user();
        $anggotas = Anggota::with('user')->where('id_user', '=', $user->id)->latest()->get();
        return view('admin.task.create', compact('anggotas'));
        
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
            'type' => 'required',
            'prioritas' => 'required',
            'id_anggota' => 'required'
        ]);

        // $iduser = Auth::id();

        //create post
        Task::create([
            'nama'     => $request->nama,
            'deskripsi'   => $request->deskripsi,
            'type'   => $request->type,
            'prioritas'     => $request->prioritas,
            'id_anggota' => $request->id_anggota
        ]);

        //redirect to index
        return redirect()->route('admin.task')->with(['success' => 'Data Berhasil Disimpan!']);

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
}

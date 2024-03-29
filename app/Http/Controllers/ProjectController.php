<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Klien;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Notifications\WelcomeNotification;

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
        $projects = Project::with('klien', 'user')->latest()->where('id_user', '=', $user->id)->paginate(10);
        // dd($projects);
        return view('admin.projects.index', compact('projects'));
    }

    public function search(Request $request)
	{
		// menangkap data pencarian
		$search = $request->search;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$projects = Project::where('nama','like',"%".$search."%")->paginate();
 
    		// mengirim data pegawai ke view index
            return view('admin.projects.index', compact('projects'));
 
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        // $pms = User::whereHas("roles", function($q){ $q->where("name", "anggota");  $q->where("name", "pm"); })->get();
        // $user = User::where('id','=', 4)->firstOrFail();
        // if ($user->hasRole('pm')) {
        //     dd('ini pm');
        // } else {
        //     dd('ini bukan pm');
        // }
       
        $pms = User::role(['pm'])->get();
        // dd($pms);
        $kliens = Klien::latest()->get();
        $iduser = Auth::id();
        return view('admin.projects.create', compact('kliens','iduser','pms'));
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
            // 'tgl_mulai' => 'required',
            'deadline' => 'required',
            'budget' => 'required',
            'id_klien' => 'required',
            'pm' => 'required',
            'status' => 'required'
        ]);

        $iduser = Auth::id();
        // $status = "Not Started";

        //create post
        $project = Project::create([
            'nama'     => $request->nama,
            'deskripsi'   => $request->deskripsi,
            'tgl_mulai'   => $request->tgl_mulai,
            // 'tgl_selesai'   => $request->tgl_selesai,
            'deadline'   => $request->deadline,
            'budget'   => $request->budget,
            'status'   => $request->status,
            'pm' => $request->pm,
            'id_klien'   => $request->id_klien,
            'id_user' => $iduser
        ]);

        $user = User::where('id','=', $request->pm)->firstOrFail();
        if (!$user->hasRole('pm')) {
            $user->assignRole('pm');
        }
        User::find(Auth::user()->id)->notify(new WelcomeNotification("Project dengan nama " .$project->nama. " telah ditambahkan!"));
        $user->notify(new WelcomeNotification("Anda telah dimasukkan sebagai PM dalam roject " .$project->nama. ""));


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
        $pms = User::role(['pm'])->get();
        $kliens = Klien::latest()->get();
        $project = Project::where('id_project','=',$id)->firstOrFail();
        return view('admin.projects.edit', compact('project','kliens','pms'));
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
            'id_klien' => 'required',
            // 'tgl_selesai' => 'required',
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
            'id_klien' => $request->id_klien,
            'deadline'   => $request->deadline,
            'budget'   => $request->budget,
            'status'   => $request->status,

        ]);

        $user = User::where('id','=', $request->pm)->firstOrFail();
        if (!$user->hasRole('pm')) {
            $user->assignRole('pm');
        }
        User::find(Auth::user()->id)->notify(new WelcomeNotification("Project dengan nama " .$project->nama. " telah diupdate!"));
        $user->notify(new WelcomeNotification("Project dengan nama " .$project->nama. " telah diupdate!"));

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

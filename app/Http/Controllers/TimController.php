<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tim;
use App\Models\Project;
use App\Models\Anggota;
use App\Models\User;
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
        $projects = Project::where('pm','=',$user->id)->get();
        // $anggotas = Anggota::with('user')->where('id_tim','=',$id)->get();
        // dd($project);
        $tims = Tim::with('project', 'project.tim')->where('id_user', '=', $user->id)->latest()->get();
        // dd($tims[0]->project->tim);
        return view('admin.tim.index', compact('tims','projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $id_project = $id;
        $user = Auth::user();
        $projects = Project::latest()->get();
        $anggotas = User::role(['anggota','pm'])->where('id', '!=', $user->id)->get();
        return view('admin.tim.create', compact('projects','anggotas', 'id_project'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id_project)
    {
        //
         //validate form
         $this->validate($request, [
            'nama'  => 'required',
            'deskripsi'  => 'required',
            // 'id_project' => 'required'
        ]);

        // dd($id);

        $iduser = Auth::id();

        //create post
        Tim::create([
            'nama'     => $request->nama,
            'deskripsi'   => $request->deskripsi,
            'id_project'   => $id_project,
            'id_user'     => $iduser
        ]);


        //redirect to index
        return redirect()->route('pm.project.show', $id_project)->with(['success' => 'Data Berhasil Disimpan!']);
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

    public function showProject($id)
    {
        //
        $project = Project::with('klien')->where('id_project','=',$id)->firstOrFail();
        // dd('sdsd');
        $anggotas = Anggota::with('user')->where('id_tim','=',$id)->get();
        $tims = Tim::where('id_project','=',$id)->get();
        return view('admin.tim.detail-project', compact('project','tims','anggotas'));
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
        $user = Auth::user();
        $anggotas = User::role(['anggota','pm'])->get();
        // dd($anggotas);
        $anggota_pilihs = Anggota::where('id_tim', '=', $id)->get();
        // dd($anggota_pilihs);
        $select_anggota = array();
        foreach ($anggota_pilihs as $anggota_pilih) 
            {
                 $select_anggota[] = $anggota_pilih->id_users;  
            }
        // dd($select_anggota);
        $projects = Project::latest()->get();
        $tims = Tim::where('id_tim','=',$id)->firstOrFail();
        return view('admin.tim.edit', compact('projects','tims','anggotas','anggota_pilihs', 'select_anggota'));
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
            'anggota' => 'required'
        ]);

        // $klien = Klien::findOrFail($id);
        $tims = Tim::where('id_tim','=',$id)->firstOrFail();

        $iduser = Auth::id();

        //update post with new image
        $tims->update([
            'nama'     => $request->nama,
            'deskripsi'   => $request->deskripsi,
            'id_user'   => $iduser

        ]);
        // dd($request->anggota);
        // Anggota::create([
        //     'id_tim'     => $id,
        //     'id_users' => implode(',', $request->anggota),
        //     'id_user'     => $iduser
        // ]);

        // dd($request);
        for ($i = 0; $i < count($request->anggota); $i++) {
            $data[] = [
                'id_tim' => $id,
                'id_users' => $request->anggota[$i],
                'id_user' => $iduser
            ];
        }
        // dd($data);
        $anggota = Anggota::where('id_tim','=',$id);
        $anggota->delete();

        Anggota::insert($data);    
       
        //redirect to index
        return redirect()->route('pm.tim.show', $id)->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $id_project)
    {
        //
                
                $tim = Tim::where('id_tim','=',$id)->firstOrFail();
        
                // delete tim
                $tim->delete();
        
                //redirect to index
                return redirect()->route('pm.project.show', $id_project)->with(['success' => 'Data Berhasil Dihapus!']);
    }
}

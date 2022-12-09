<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Tim;
use App\Models\Anggota;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $anggotas = Anggota::with('tim')->latest()->get();
        $user = Auth::user();
        $anggotas = Anggota::with('user')->where('id_user', '=', $user->id)->get();;
        // dd($anggotas);
        return view('admin.anggota.index', compact('anggotas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $anggotas = User::role('anggota')->latest()->get();
        $tims = Tim::latest()->get();
        return view('admin.anggota.create', compact('tims', 'anggotas'));
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
        // return $request->file('photo')->hashName();
        $this->validate($request, [
            'id_user'  => 'required',
            'id_tim' => 'required'
        ]);

        //upload image
        // $photo = $request->file('photo');
        // $photo->storeAs('posts', $photo->hashName());

        $iduser = Auth::id();

        //create post
        Anggota::create([
            'id_users' => $request->id_user,
            'id_tim' => $request->id_tim,
            'id_user' => $iduser
        ]);

        //redirect to index
        return redirect()->route('anggota.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        // $tims = Tim::latest()->get();
       

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
        $tims = Tim::latest()->get();
        $anggotas = User::role('anggota')->latest()->get();
        $anggota = Anggota::where('id_anggota','=',$id)->firstOrFail();
        return view('admin.anggota.edit', compact('anggota','tims', 'anggotas'));
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
            'id_user'  => 'required',
            'id_tim' => 'required'
        ]);

        // $klien = Klien::findOrFail($id);
        $anggota = Anggota::where('id_anggota','=',$id)->firstOrFail();

        $iduser = Auth::id();

            //update post without image
            $anggota->update([
                'id_users' => $request->id_user,
                'id_tim' => $request->id_tim,
                'id_user' => $iduser
            ]);

        //redirect to index
        return redirect()->route('anggota.index')->with(['success' => 'Data Berhasil Diubah!']);
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
        $anggota = Anggota::where('id_anggota','=',$id)->firstOrFail();

        // Storage::delete('posts'. $anggota->photo);
        
        //delete post
        $anggota->delete();

        //redirect to index
        return redirect()->route('anggota.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}

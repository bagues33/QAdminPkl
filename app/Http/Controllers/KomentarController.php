<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Komentar;
use App\Models\Task;
use App\Models\Anggota;
use App\Notifications\WelcomeNotification;
use Illuminate\Support\Facades\Notification;
use Auth;

class KomentarController extends Controller
{
    //
    public function index(Request $request, $id_task)
    {
        $nama_task = Task::where('id_task', $id_task)->first();
        // dd($nama_task);
        $user = Auth::user();
        $komentars = Komentar::with('task')->where('id_task', $id_task)->latest()->get();
        // dd($projects);
        return view('admin.komentar.index', compact('komentars', 'id_task', 'nama_task', 'user'));
    }

    public function create($id_task)
    {   
        
        // $kliens = Klien::latest()->get();
        $iduser = Auth::id();
        return view('admin.komentar.create', compact('iduser', 'id_task'));
    }

    public function store(Request $request, $id_task)
    {
        
        //validate form
        $this->validate($request, [
            'isi'  => 'required',
        ]);

        $user = Auth::user();
        // dd($user->id);

        //create post
        Komentar::create([
            'isi'     => $request->isi,
            'id_task'   => $id_task,
            'id_user' => $user->id,
        ]);

        $task = Task::where('id_task', $id_task)->get()->pluck('id_anggota');
        // dd($anggota);
        $nama_task = Task::where('id_task', $id_task)->first();
        // dd($nama_task->nama);
        if($user->hasRole('anggota')) {
            $anggota = Anggota::where('id_anggota', $task)->get()->pluck('id_user')->first();
        } elseif ($user->hasRole('pm')) {
            $anggota = Anggota::where('id_anggota', $task)->get()->pluck('id_users')->first();
        }
        $user_notif = User::where('id','=', $anggota)->firstOrFail();
        Notification::send($user_notif, new WelcomeNotification("Ada komentar baru pada task " .$nama_task->nama. ""));

        //redirect to index
        if($user->hasRole('anggota')) {
            return redirect()->route('anggota.komentar', $id_task)->with(['success' => 'Data Berhasil Disimpan!']);
        } elseif ($user->hasRole('pm')) {
            return redirect()->route('pm.komentar', $id_task)->with(['success' => 'Data Berhasil Disimpan!']);
        }
        
    }

    public function edit($id_task, $id_komentar)
    {
        //
        $komentar = Komentar::where('id_komentar','=',$id_komentar)->firstOrFail();
        return view('admin.komentar.edit', compact('komentar', 'id_task', 'id_komentar'));
    }

    public function update(Request $request, $id_task, $id_komentar)
    {
        //
        $this->validate($request, [
            'isi'  => 'required',
        ]);

        // $klien = Klien::findOrFail($id);
        $komentar = Komentar::where('id_komentar','=',$id_komentar)->firstOrFail();

        $user = Auth::user();

        //update post with new image
        $komentar->update([
            'isi'     => $request->isi,
            'id_task' => $id_task,
            'id_user' => $user->id,
        ]);

        $user = Auth::user();

        //redirect to index
        if($user->hasRole('anggota')) {
            return redirect()->route('anggota.komentar', $id_task)->with(['success' => 'Data Berhasil Diubah!']);
        } elseif ($user->hasRole('pm')) {
            return redirect()->route('pm.komentar', $id_task)->with(['success' => 'Data Berhasil Diubah!']);
        }
    }

    public function destroy($id_task, $id_komentar)
    {
        //
        //delete image
        $komentar = Komentar::where('id_komentar','=',$id_komentar)->firstOrFail();
        
        //delete post
        $komentar->delete();

        //redirect to index
        $user = Auth::user();

        //redirect to index
        if($user->hasRole('anggota')) {
            return redirect()->route('anggota.komentar', $id_task)->with(['success' => 'Data Berhasil Dihapus!']);
        } elseif ($user->hasRole('pm')) {
            return redirect()->route('pm.komentar', $id_task)->with(['success' => 'Data Berhasil Dihapus!']);
        }
    }



}

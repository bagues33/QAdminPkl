<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Anggota;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Notifications\WelcomeNotification;
use Illuminate\Support\Facades\Notification;


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
        $user = Auth::user()->id;
        // $tasks = Task::with('anggota', 'anggota.user')->latest()->get();
        $tasks = Task::with(['anggota', 'anggota.getPm'])->whereHas('anggota', function($q) use($user) {
            $q->where('id_user', '=', $user);
        })->paginate(10);
        // dd($tasks[0]->anggota->user);
        return view('admin.task.index', compact('tasks'));
    }

    public function search(Request $request)
	{
		// menangkap data pencarian
		$search = $request->search;
        $user = Auth::user()->id;
        // mengambil data dari table pegawai sesuai pencarian data
        $tasks = Task::with(['anggota', 'anggota.getPm'])->whereHas('anggota', function($q) use($user, $search) {
            $q
            ->where('id_user', '=', $user);
            // ->where([
            //     ['id_user', '=', $user]
                
            // ])->paginate();
        })->where('nama','like',"%".$search."%")->paginate();

        // where('id_user', '=', $user)
        // where('nama','like',"%".$search."%")->paginate();

        // mengirim data pegawai ke view index
        return view('admin.task.index', compact('tasks'));
 
	}

    public function searchForAnggota(Request $request)
	{
		// menangkap data pencarian
		$search = $request->search;
        $user = Auth::user()->id;
        // mengambil data dari table pegawai sesuai pencarian data
        $tasks = Task::with(['anggota', 'anggota.getPm'])->whereHas('anggota', function($q) use($user, $search) {
            $q
            ->where('id_users', '=', $user);
            // ->where([
            //     ['id_user', '=', $user]
                
            // ])->paginate();
        })->where('nama','like',"%".$search."%")->paginate();

        // where('id_user', '=', $user)
        // where('nama','like',"%".$search."%")->paginate();

        // mengirim data pegawai ke view index
        return view('anggota.index', compact('tasks'));
 
	}

    public function showTaskForAnggota() {
        $user = Auth::user()->id;
    
        $tasks = Task::with(['anggota', 'anggota.getPm'])->whereHas('anggota', function($q) use($user) {
            $q->where('id_users', '=', $user);
        })->paginate(10);



        return view('anggota.index', compact('tasks'));
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
        // $anggotas = User::role(['anggota'])->get();
        $anggotas = Anggota::with('user')->where('id_user', '=', $user->id)->latest()->get();
    
        // dd($ids);
    
        return view('admin.task.create', compact('anggotas'));
        
    }

    public function createSubmitTask($id) 
    {
        $user = Auth::user()->id;
        $task = Task::where('id_task','=',$id)->firstOrFail();  
        // $tasks = Task::with(['anggota'])->whereHas('anggota', function($q) use($user) {
        //     $q->where('id_users', '=', $user);
        // })->get();
        // dd($tasks);
        return view('anggota.create', compact('task'));
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
            'status' => 'required',
            'deadline' => 'required',
            'prioritas' => 'required',
            'id_anggota' => 'required'
        ]);

        // $iduser = Auth::id();

        //create post
        $task = Task::create([
            'nama'     => $request->nama,
            'deskripsi'   => $request->deskripsi,
            'type'   => $request->type,
            'status' => $request->status,
            'deadline' => $request->deadline,
            'prioritas'     => $request->prioritas,
            'id_anggota' => $request->id_anggota
        ]);
        $anggota = Anggota::where('id_anggota', $task->id_anggota)->get();
        // dd($anggota);
        $users = User::whereIn('id', [Auth::id(), $anggota[0]->id_users])->get();
        // dd($users);
        Notification::send($users, new WelcomeNotification("Task dengan nama " .$task->nama. " telah ditambahkan!"));

        //redirect to index
        return redirect()->route('pm.task')->with(['success' => 'Data Berhasil Disimpan!']);

    }

    public function storeSubmitTask(Request $request, $id)
    {
        $this->validate($request, [
            'nama'  => 'required',
            'deskripsi'  => 'required',
            'type' => 'required',
            'prioritas' => 'required',
            'id_anggota' => 'required',
            'parent_id_task' => 'required',
            'status' => 'required',
        ]);

        // $klien = Klien::findOrFail($id);
        $task = Task::where('id_task','=',$id)->firstOrFail();
        // dd($task);

        //update post with new image
        $task->update([
            'nama'     => $request->nama,
            'deskripsi'   => $request->deskripsi,
            'type'   => $request->type,
            'prioritas'   => $request->prioritas,
            'id_anggota'   => $request->id_anggota,
            'parent_id_task'  => $request->parent_id_task,
            'status'   =>   $request->status,
            'submit_task' => $request->submit_task,

        ]);

        // dd($task);

        //redirect to index
        return redirect()->route('anggota.task.index')->with(['success' => 'Submit Task Berhasil Disimpan!']);
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
        // $kliens = Klien::latest()->get();
        $user = Auth::user();
        $anggotas = Anggota::with('user')->where('id_user', '=', $user->id)->latest()->get();
        $task = Task::where('id_task','=',$id)->firstOrFail();
        return view('admin.task.edit', compact('anggotas','task'));
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
         //
         $this->validate($request, [
            'nama'  => 'required',
            'deskripsi'  => 'required',
            'type' => 'required',
            'status' => 'required',
            'deadline' => 'required',
            'prioritas' => 'required',
            'id_anggota' => 'required',
        ]);

        // dd($request->approved);

        // $klien = Klien::findOrFail($id);
        $task = Task::where('id_task','=',$id)->firstOrFail();

        // $approved[] = [
        //     'approved' => $request->approved,
        // ];

        //update post with new image
        $task->update([
            'nama'     => $request->nama,
            'deskripsi'   => $request->deskripsi,
            'type'   => $request->type,
            'status' => $request->status,
            'deadline' => $request->deadline,
            'prioritas'   => $request->prioritas,
            'id_anggota'   => $request->id_anggota,
            'approved' => $request->has('approved'),
        ]);

        //redirect to index
        return redirect()->route('pm.task')->with(['success' => 'Data Berhasil Diubah!']);
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
        $task = Task::where('id_task','=',$id)->firstOrFail();
        
        //delete post
        $task->delete();

        //redirect to index
        return redirect()->route('pm.task')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}

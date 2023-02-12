<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Klien;
use App\Models\Project;
use App\Models\Task;
use Auth;
use DB;

class LaporanController extends Controller
{
    //
    public function daftarKlien() 
    {

        $daftar_kliens = Klien::latest()->get();

        return view('laporan.daftarklien.daftarklien', compact('daftar_kliens'));
    }

    public function daftarKlienPrint() 
    {

        $daftar_kliens = Klien::latest()->get();
        $user = Auth::user();

        return view('laporan.daftarklien.print', compact('daftar_kliens', 'user'));
    }

    public function daftarTimPerProject() 
    {
        // $id_project = 1;
        $id_project = Project::first()->id_project;
        // dd($id_project);
        $list_project = Project::get();
        $projects = Project::with('tim.anggota.user','tim','klien','user')->where('id_project', $id_project)->get();
        // dd($projects);
        return view('laporan.daftartim.daftartimperproject', compact('projects','list_project'));
    }

    public function daftarDataTimPerProject($id_project) 
    {
        // $id_project = 1;
        $list_project = Project::get();
        $projects = Project::with('tim.anggota.user','tim','klien','user')->where('id_project', $id_project)->get();
        // dd($projects);
        return response()->json($projects);
        // return view('laporan.daftartim.daftartimperproject')->render();
    }

    public function daftarTimPerProjectPrint($id_project) 
    {
        $list_project = Project::get();
        $projects = Project::with('tim.anggota.user','tim','klien','user')->where('id_project', $id_project)->get();

        $user = Auth::user();

        return view('laporan.daftartim.print', compact('projects','list_project', 'user'));
    }

    public function taskPerProject($id_project = 1) 
    {
       
        $list_project = Project::get();
        $tasks = Task::with(['anggota.tim.project'])->whereHas('anggota.tim.project', function($q) use($id_project) {
            $q->where('id_project', '=', $id_project);
        })->get();

        // dd($task);

        return view('laporan.daftartask.daftartaskperproject', compact('tasks', 'list_project'));
    }

    public function dataTaskPerProject($id_project) 
    {
        $list_project = Project::get();
        $tasks = Task::with(['anggota.tim.project'])->whereHas('anggota.tim.project', function($q) use($id_project) {
            $q->where('id_project', '=', $id_project);
        })->get();

        return response()->json($tasks);
        // return view('laporan.daftartim.daftartimperproject')->render();
    }

    public function taskPerProjectPrint($id_project)
    {
        $user = Auth::user();
        $list_project = Project::get();
        $tasks = Task::with(['anggota.tim.project'])->whereHas('anggota.tim.project', function($q) use($id_project) {
            $q->where('id_project', '=', $id_project);
        })->get();

        return view('laporan.daftartask.print', compact('tasks', 'list_project', 'user'));

    }

    public function rekapPekerjaan() 
    {
        $rekap = Klien::selectRaw('count(id) as number_of_orders, YEAR(created_at) as Tahun')
                // ->count('id_klien')
                ->with('project')
                ->get()
                ->groupBy('Tahun');

        // $rekap = DB::table('projects')
        // ->select('nama','created_at')
        // ->orderBy('created_at')
        // ->groupBy(DB::raw('MONTH(created_at)'))
        // ->get();

        // dd(count($rekap));
        dd($rekap);
    }


}

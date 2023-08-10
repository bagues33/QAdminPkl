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
        // $id_project = Project::first()->id_project;
        $project = Project::first();
        if ($project !== null) {
            $id_project = $project->id_project;
            $projects = Project::with('tim.anggota.user','tim','klien','user')->where('id_project', $id_project)->get();
        } else {
            $projects = ['null'];
        }

        // dd($projects);
        // dd($id_project);
        $list_project = Project::get();
        
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
        $user = Auth::user();
        $rekaps = DB::select('SELECT COUNT(distinct kliens.nama) as jumlah_klien, COUNT(projects.nama) as jumlah_project, YEAR(projects.tgl_mulai) as tahun FROM projects INNER JOIN kliens ON projects.id_klien = kliens.id_klien GROUP BY Tahun');

        // dd($rekap);

        return view('laporan.rekap.rekappekerjaan', compact('rekaps', 'user'));

    }

    public function rekapPekerjaanPrint() 
    {
        $user = Auth::user();
        $rekaps = DB::select('SELECT COUNT(distinct kliens.nama) as jumlah_klien, COUNT(projects.nama) as jumlah_project, YEAR(projects.tgl_mulai) as tahun FROM projects INNER JOIN kliens ON projects.id_klien = kliens.id_klien GROUP BY Tahun');

        // dd($rekap);

        return view('laporan.rekap.print', compact('rekaps', 'user'));

    }


    public function laporanPerProject() 
    {
        $user = Auth::user();

        $project = Project::first();
        if ($project !== null) {
            $id_project = $project->id_project;
            $project = Project::with('tim.anggota.user','tim','klien','user')->where('id_project', $id_project)->firstOrFail();
        } else {
            $project = null;
        }
        // $id_project = Project::first()->id_project;
        // dd($id_project);
       
       

        // $project = (object) [
        //     'nama' => 'Nama Proyek',
        //     'klien' => 'nasdasdasma',
        //     'deskripsi' => 'Deskripsi Proyek',
        //     'tanggal_mulai' => '2023-06-01',
        //     'deadline' => 'dsfsdf',
        //     'tgl_selesai' => 'asdasd'

            
        // ];
        
        $list_project = Project::get();
        $list_tahun =  Project::selectRaw('extract(year FROM tgl_mulai) AS year')
        ->distinct()
        ->orderBy('year', 'desc')
        ->get();
    
            // ->orderBy('created_at')
    
            // ->groupBy(DB::raw("YEAR(created_at)"))
    
            // ->get();

        return view('laporan.daftarproject.laporanperproject', compact('project', 'user', 'list_project', 'list_tahun'));

    }

    public function getListProject($tahun) 
    {
        
        $list_project = Project::whereYear('tgl_mulai', $tahun)->get();
        // $projects = Project::with('tim.anggota.user','tim','klien','user')->where('id_project', $id_project)->get();
        // dd($projects);
        return response()->json($list_project);
    }

    public function laporanPerProjectPrint($id_project) 
    {
        $user = Auth::user();
        // $id_project = Project::first()->id_project;
        $project = Project::with('tim.anggota.user','tim','klien','user')->where('id_project', $id_project)->firstOrFail();
        $list_project = Project::get();

        return view('laporan.daftarproject.laporanperprojectprint', compact('project', 'user', 'list_project'));

    }

    public function daftarSeluruhProject() 
    {
        $user = Auth::user();
        // $id_project = Project::first()->id_project;
        $projects = Project::with('tim.anggota.user','tim','klien','user')->get();

        return view('laporan.daftarproject.daftarproject', compact('projects', 'user'));

    }

    public function daftarSeluruhProjectPrint() 
    {
        $user = Auth::user();
        // $id_project = Project::first()->id_project;
        $projects = Project::with('tim.anggota.user','tim','klien','user')->get();

        return view('laporan.daftarproject.daftarprojectprint', compact('projects', 'user'));

    }



}

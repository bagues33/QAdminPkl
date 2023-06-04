<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Klien;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Notification;
use App\Notifications\WelcomeNotification;


class KlienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $post = [
        //     'title' => 'post title',
        //     'slug' => 'post slug'
        // ];

        $user = Auth::user();
        $kliens = Klien::latest()->where('id_user', '=', $user->id)->paginate(5);
        // Notification::notify(new WelcomeNotification($post));
        // Notification::send($user, new WelcomeNotification($post));
        // auth()->user()->notify(new WelcomeNotification($post));
        // if(auth()->user()){
        //      auth()->user()->notify(new WelcomeNotification($post));
        // }
        $users = User::all();
        // Notification::send($users, new WelcomeNotification($post));
        
        // dd('sdsd');

        return view('admin.klien.index', compact('kliens'));
    }

    public function search(Request $request)
	{
		// menangkap data pencarian
		$search = $request->search;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$kliens = Klien::where('nama','like',"%".$search."%")->paginate();
 
    		// mengirim data pegawai ke view index
            return view('admin.klien.index', compact('kliens'));
 
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.klien.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // return $request->file('photo')->hashName();
        //
        //validate form
        $this->validate($request, [
            'photo'     => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama'      => 'required',
            'no_telpon' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'website' => 'required',
            'deskripsi' => 'required',
        ]);

        $user = Auth::id();

        //upload image
        if ($request->photo) {
            $photo = $request->file('photo');
            $photo->storeAs('posts', $photo->hashName());

            $klien = Klien::create([
                'photo'     => $photo->hashName(),
                'nama'     => $request->nama,
                'no_telpon'   => $request->no_telpon,
                'alamat'   => $request->alamat,
                'email'   => $request->email,
                'website'   => $request->website,
                'deskripsi'   => $request->deskripsi,
                'id_user'   => $user
            ]);
        } else {
            $klien = Klien::create([
                'nama'     => $request->nama,
                'no_telpon'   => $request->no_telpon,
                'alamat'   => $request->alamat,
                'email'   => $request->email,
                'website'   => $request->website,
                'deskripsi'   => $request->deskripsi,
                'id_user'   => $user
            ]);
        }
        User::find(Auth::user()->id)->notify(new WelcomeNotification("Klien dengan nama " .$klien->nama. " telah ditambahkan!"));
        //create post
        

        //redirect to index
        return redirect()->route('admin.klien')->with(['success' => 'Data Berhasil Disimpan!']);
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
        // $klien = Klien::findOrFail($id);
        $klien = Klien::where('id_klien','=',$id)->firstOrFail();
        return view('admin.klien.edit', compact('klien'));
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
        //validate form
        $this->validate($request, [
            'photo'     => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama'      => 'required',
            'no_telpon' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'website' => 'required',
            'deskripsi' => 'required'
        ]);

        // $klien = Klien::findOrFail($id);
        $klien = Klien::where('id_klien','=',$id)->firstOrFail();

        //check if image is uploaded
        if ($request->hasFile('photo')) {

            //upload new image
            $image = $request->file('photo');
            $image->storeAs('posts', $image->hashName());

            //delete old image
            Storage::delete('posts'.$klien->photo);

            //update post with new image
            $klien->update([
                'photo'     => $image->hashName(),
                'nama'     => $request->nama,
                'no_telpon'   => $request->no_telpon,
                'alamat'   => $request->alamat,
                'email'   => $request->email,
                'website'   => $request->website,
                'deskripsi'   => $request->deskripsi
            ]);

        } else {

            //update post without image
            $klien->update([
                'nama'     => $request->nama,
                'no_telpon'   => $request->no_telpon,
                'alamat'   => $request->alamat,
                'email'   => $request->email,
                'website'   => $request->website,
                'deskripsi'   => $request->deskripsi
            ]);
        }

        //redirect to index
        return redirect()->route('admin.klien')->with(['success' => 'Data Berhasil Diubah!']);
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
        $klien = Klien::where('id_klien','=',$id)->firstOrFail();

        Storage::delete('posts'. $klien->photo);
        
        //delete post
        $klien->delete();

        //redirect to index
        return redirect()->route('admin.klien')->with(['success' => 'Data Berhasil Dihapus!']);
    }

}

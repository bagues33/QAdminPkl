<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Activitylog\Models\Activity;
use App\Http\Requests\SettingRequest;
use Carbon\Carbon;
use App\Models\Klien;
use App\Models\Project;
use App\Models\Tim;
use App\Models\Anggota;
use App\Models\Task;
use Auth;

class DashboardController extends Controller
{
    /**
    * Show dashboard
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $user = Auth::user()->id;
        $logs = Activity::where('causer_id', auth()->id())->latest()->paginate(5);
        $totalklien = Klien::latest()->where('id_user', '=', $user)->count();
        $totalproject = Project::latest()->where('id_user', '=', $user)->count();
        $totaltim = Tim::with('project', 'project.tim')->where('id_user', '=', $user)->latest()->count();
        $totalanggota = Anggota::with('user')->where('id_user', '=', $user)->count();
        $totaltaskanggota = Task::with(['anggota'])->whereHas('anggota', function($q) use($user) {
            $q->where('id_users', '=', $user);
        })->count();

        // dd($totalklien);

        return view('admin.dashboard', compact('logs', 'totalklien', 'totalproject', 'totaltim', 'totalanggota', 'totaltaskanggota'));
    }
    

    /**
    * Show activity logs
    *
    * @return \Illuminate\Http\Response
    */
    public function activity_logs()
    {
        $logs = Activity::where('causer_id', auth()->id())->latest()->paginate(10);

        return view('admin.logs', compact('logs'));
    }

	/**
	* Store settings into database
	*
	* @param $request
    * @return \Illuminate\Http\Response
	*/
    public function settings_store(SettingRequest $request)
    {
    	// when you upload a logo image
    	if($request->file('logo')) {
	    	$filename = $request->file('logo')->getClientOriginalName();
	    	$filePath = $request->file('logo')->storeAs('uploads', $filename, 'public');
	    	setting()->set('logo', $filePath);
    	}

    	setting()->set('site_name', $request->site_name);
    	setting()->set('keyword', $request->keyword);
    	setting()->set('description', $request->description);
    	setting()->set('url', $request->url);

    	// save all
    	setting()->save();
    	return redirect()->back()->with('success', 'Settings has been successfully saved');
    }

    /**
    * Update profile user
    *
    * @param $request
    * @return \Illuminate\Http\Response
    */
    public function profile_update(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'no_hp' => $request->no_hp
        ];
    

        // if password want to change
        if($request->old_password && $request->new_password) {
            // verify if password is match
            if(!Hash::check($request->old_password, auth()->user()->password)) {
                session()->flash('failed', 'Password is wrong!');
                return redirect()->back();
            }

            $data['password'] = Hash::make($request->new_password);
        } 

        // for update avatar
        if($request->avatar) {
            $data['avatar'] = $request->avatar;

            if(auth()->user()->avatar) {
                unlink(storage_path('app/public/'.auth()->user()->avatar));
            }
        }
        
        // update profile
        auth()->user()->update($data);
        
        return redirect()->back()->with('success', 'Profile updated!');
    }

    /**
    * Store avatar images into database
    *
    * @param $request
    * @return string
    */
    public function upload_avatar(Request $request)
    {
        $request->validate(['avatar'  => 'file|image|mimes:jpg,png,svg|max:1024']);

        if($request->hasFile('avatar')){
            $file = $request->file('avatar');

            $fileName = $file->getClientOriginalName();
            $folder = 'user-'.auth()->id();

            $file->storeAs('avatars/'.$folder, $fileName, 'public');

            return 'avatars/'.$folder.'/'.$fileName;
        }

        return '';
        
    }

    public function delete_logs()
    {
        $logs = Activity::where('created_at', '<=', Carbon::now()->subWeeks())->delete();

        return back()->with('success', $logs.' Logs successfully deleted!');
    }

    public function tampilKlien() {

    }

    public function markAsRead(){
        Auth::user()->unreadNotifications->markAsRead();
        return redirect()->back();
    }
}

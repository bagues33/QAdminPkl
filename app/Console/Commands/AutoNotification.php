<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Mail;
use App\Mail\NotifikasiEmail;
use App\Models\Project;
use App\Models\User;

class AutoNotification extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'auto:notification';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // $projects = User::whereMonth('email_verified_at', date('m'))
        //             ->whereDay('email_verified_at', date('d'))
        //             ->get();
  
        // if ($projects->count() > 0) {
        //     foreach ($projects as $project) {
        //         Mail::to($project)->send(new NotifikasiEmail($project));
        //     }
        // }

        $email = 'bagustofan@yahoo.com';
        $data = [
            'title' => 'Selamat datang!',
            'url' => 'https://aantamim.id',
        ];

        Mail::to($email)->send(new NotifikasiEmail($data));

        return 0;
    }
}

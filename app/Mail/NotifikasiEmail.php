<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotifikasiEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->subject('Reminder Notification'. $this->data)
        //         ->view('emails.notifikasi');
        // return $this->markdown('notifikasi')
        //     ->subject('Pemberitahuan Penting!')
        //     ->with('data', $this->data);

        return $this->from('bagustofan@yahoo.com')
                   ->view('emails.notifikasi')
                   ->with('data', $this->data);

                //    ->with(
                //     [
                //         'nama' => 'Diki Alfarabi Hadi',
                //         'website' => 'www.malasngoding.com',
                //     ]);
            
    }
}

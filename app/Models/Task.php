<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'deskripsi', 'type', 'prioritas', 'id_anggota', 'parent_id_task', 'status', 'deadline', 'submit_task'
    ];

    protected $table = 'tasks';

    protected $primaryKey = 'id_task';

    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'id_anggota');
    }

    // public function user()
    // {
    //     return $this->belongsToMany(User::class, 'id_anggota');
    // }

}

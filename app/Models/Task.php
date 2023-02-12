<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_task','nama', 'deskripsi', 'type', 'prioritas', 'id_anggota', 'parent_id_task', 'status', 'deadline', 'submit_task', 'approved'
    ];

    protected $table = 'tasks';

    protected $primaryKey = 'id_task';

    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'id_anggota');
    }

    public function komentar()
    {
        return $this->hasMany(Komentar::class, 'id_task');
    }

    // public function user()
    // {
    //     return $this->belongsToMany(User::class, 'id_anggota');
    // }

}

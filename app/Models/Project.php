<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_project','nama', 'deskripsi', 'tgl_mulai', 'tgl_selesai', 'deadline', 'budget', 'status', 'id_klien', 'id_user'
    ];

    protected $table = 'projects';

    protected $primaryKey = 'id_project';

    public function tim()
    {
        return $this->hasMany(Tim::class, 'id_project');
    }
}

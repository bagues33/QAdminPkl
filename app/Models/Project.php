<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_project','nama', 'deskripsi', 'tgl_mulai', 'tgl_selesai', 'deadline', 'budget', 'status', 'pm', 'id_klien', 'id_user'
    ];

    protected $table = 'projects';

    protected $primaryKey = 'id_project';

    public function tim()
    {
        return $this->hasMany(Tim::class, 'id_project');
    }

    public function klien()
    {
        return $this->belongsTo(Klien::class, 'id_klien');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'pm');
    }

}

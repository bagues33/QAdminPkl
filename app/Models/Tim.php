<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tim extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'deskripsi', 'id_project', 'id_user'
    ];

    protected $table = 'tims';

    protected $primaryKey = 'id_tim';

    public function project()
    {
        return $this->belongsTo(Project::class, 'id_project', 'id_project');
    }

    public function anggota()
    {
        return $this->hasMany(Anggota::class, 'id_users');
    }


}

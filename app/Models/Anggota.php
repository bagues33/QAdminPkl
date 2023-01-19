<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Anggota extends Authenticatable
{
    // use HasFactory;
    use Notifiable, HasRoles;

    protected $table = 'anggotas';
    // protected $guard = 'anggota';

    protected $fillable = [
        'id_anggota',
        'id_tim',
        'id_user',
        'id_users'
    ];

    protected $primaryKey = 'id_anggota';

    public function tim()
    {
        return $this->belongsTo(Tim::class, 'id_tim');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_users');
    }

    public function getPm()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function task()
    {
        return $this->hasMany(Task::class, 'id_anggota');
    }

}

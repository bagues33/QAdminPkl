<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_komentar','isi', 'id_task','id_user'
    ];

    protected $table = 'komentars';

    protected $primaryKey = 'id_komentar';

    public function task()
    {
        return $this->belongsTo(Task::class, 'id_task');
    }

}

<?php

namespace App\Models;

<<<<<<< HEAD
=======

>>>>>>> origin/update-delete
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;
<<<<<<< HEAD

    protected $table = 'user';
    protected $guarded = ['id'];

    public function kelas(){
        return $this->belongsTo(Kelas::class,'kelas_id');
    }
}
=======
    protected $table = 'user';
    protected $guarded = ['id'];

    //  protected $fillable = [
    //     'nama',
    //     'npm',       // atau ganti jadi 'npm' kalau kolom di DB bernama npm
    //     'kelas_id',
    // ];

    public function kelas()
    {
        return $this->belongsTo(kelas::class, 'kelas_id');
    }

    public function getUser(){
        return $this->select('user.*', 'kelas.nama_kelas')
                    ->join('kelas', 'kelas.id', '=', 'user.kelas_id')
                    ->get();
    }
}
>>>>>>> origin/update-delete

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;
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

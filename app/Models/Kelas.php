<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

<<<<<<< HEAD
    public function user(){
        return $this->hasMany(UserModel::class, 'kelas_id');
    }
}
=======
    public function user()
    {
        return $this->hasMany(User::class, 'kelas_id');
    }

    public function getKelas(){
        return $this->all();
    }
}
>>>>>>> origin/update-delete

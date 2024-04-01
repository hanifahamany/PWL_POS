<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LevelModel extends Model
{
    use HasFactory;

    protected $table = 'levels'; // sesuaikan dengan nama tabel yang digunakan

    protected $primaryKey = 'id'; // sesuaikan dengan primary key tabel

    protected $fillable = ['name']; // kolom yang dapat diisi secara massal

    public function users(): HasMany
    {
        return $this->hasMany(UserModel::class);
    }
}

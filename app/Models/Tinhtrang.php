<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Phieumuon;
class Tinhtrang extends Model
{
    use HasFactory;
    public function chitiet()
    {
       
        return $this->belongsToMany(Chitiet::class);
    }
}

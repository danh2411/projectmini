<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Phieumuon;
use App\Models\Tinhtrang;
class Chitiet extends Model
{
    use HasFactory;
    public function phieumuon()
    {
        return $this->hasMany(Phieumuon::class);
    }
    public function tinhtrang(){
        return $this->hasMany(Tinhtrang::class);
    }
}

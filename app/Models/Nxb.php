<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sach;
use App\Models\chitiet;
class Nxb extends Model
{
    use HasFactory;
    public function sach()
    {
        return $this->hasMany(Sach::class);
    }
    public function chitiet()
    {
        return $this->hasOne(Chitiet::class);
    }
}

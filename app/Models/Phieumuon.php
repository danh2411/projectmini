<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Thethuvien;
use App\Http\Models\Chitiet;
class Phieumuon extends Model
{
    use HasFactory;
    public function thuvien()
    {
        return $this->belongsTo(Thethuvien::class);
    }
    public function chitiet()
    {
        return $this->belongsToMany(Chitiet::class);
    }
    
}

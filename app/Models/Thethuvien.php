<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Models\User;
use App\Http\Models\Phieumuon;
class Thethuvien extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);

    }
    public function phieumuon(){
        return $this->hasmany(Phieumuon::class);
    }
}

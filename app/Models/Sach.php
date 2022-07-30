<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Tacgia;
use App\Http\Models\Nxb;
use App\Http\Models\Theloai;
class Sach extends Model
{
    use HasFactory;
    public function nxb(){
        return $this->belongsTo(Theloai::class);
    }
    public function tacgia(){
        return $this->belongsTo(Tacgia::class);


    }
    public function theloai(){
        return $this->belongsTo(Nxb::class);

    }
}

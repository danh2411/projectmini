<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Contracts\Auth\MustVerifyEmail;
<<<<<<< HEAD
use App\Http\Models\Thethuvien;
class User extends Authenticatable implements MustVerifyEmail
{
    use  HasFactory, Notifiable;
=======
use App\Notifications\CustomResetPassword;
// use App\Notifications\CustomVerifyEmailAddress;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;
>>>>>>> origin/Duy

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

<<<<<<< HEAD

=======
     
>>>>>>> origin/Duy
    protected $fillable = [
        'name',
        'email',
        'password',
        'updated_at',
        'level'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
<<<<<<< HEAD
    public function Phieumuon()
    {
        return $this->hasOne(Thethuvien::class);
    }
=======
    // public function sendPasswordResetNotification($token)
    //     {
    //             $this->notify(new CustomResetPassword($token));
    //     }
       
    // public function sendEmailVerificationNotification()
    //     {
    //         $this->notify(new CustomVerifyEmailAddress());
    //     }
        
        
>>>>>>> origin/Duy
}

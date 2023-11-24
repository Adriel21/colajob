<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'profile_pic',
        'freelancer_id'
    ];

    public $timestamps = false;



    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function insertUser(string $name, string $email, string $password){

             $user = User::create([
                 'name' => $name,
                 'email' => $email,
                 'password' => bcrypt($password),
             ]);


             return $user->id;
    }

    public function updateUserFreelancerId(int $id, int $freelancer_id){
        $user = User::find($id);
        
        if ($user) {
            $user->update([
                'freelancer_id' => $freelancer_id
            ]);
    
            // Se desejar, você pode retornar os dados atualizados
            // return $freelancer->fresh()->toArray();
        }
    }
}

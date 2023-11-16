<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcceptRegistration extends Model
{
    use HasFactory;

    protected $fillable = [
        'accepted',
        'date',
        'user_id'
    ];

    public $timestamps = false;


    public function createAcceptRegistration(int $value, string $date, int $user_id) {
        AcceptRegistration::create([
            'accepted' => $value,
            'date' => $date,
            'user_id' => $user_id
        ]);
    }

   
}

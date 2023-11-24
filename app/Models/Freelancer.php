<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Freelancer extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descricao',
        'users_id',
        'categories_id'
    ];

    public $timestamps = false;


    public function insertFreelancerProfile(string $titulo, string $descricao, int $user_id, int $category_id) {
        $freelancer = Freelancer::create([
            'titulo' => $titulo,
            'descricao' => $descricao,
            'users_id' => $user_id,
            'categories_id' => $category_id
        ]);

        return $freelancer->id;

    }

   // Obtém o array com todos os dados do freelancer recém-criado

    
}

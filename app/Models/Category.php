<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public $timestamps = false;

    public function getAllCategories()
    {
        // Obtém todas as categorias
        $categories = Category::all();

        // Se precisar apenas dos IDs e nomes, pode usar o método pluck
        // $categoriesData = $categories->pluck('name', 'id');

        return $categories;
    }

}

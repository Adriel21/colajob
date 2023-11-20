<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\Session;


class DashboardController extends Controller
{
    /**
     * Handle an authentication attempt.
     */
    public function index()
    {
       // Recupere os dados do usuário da sessão
       $userData = Session::get('user');

       // Faça algo com os dados do usuário
       // Por exemplo, passe os dados para a view
       return view('admin/clientdashboard', ['userData' => $userData]);
   }

   public function openFreelancerRegistrationForm(){
        $categories = new Category();

        $categoriesList = $categories->getAllCategories();

        return view('admin/registerfreelancerprofile', ['categoriesData' => $categoriesList]);
   }
}

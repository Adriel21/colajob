<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Freelancer;
use App\Models\User;
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

   public function registerFreelancerProfile(Request $request){
        $validatedData = $request->validate([
            'titulo' => 'required|string|max:255',
            'categoria' => 'required',
            'descricao' => 'required|string|max:1000',
        ]);

        $userData = Session::get('user');

         // Se a validação passar, os dados são válidos
         $titulo = $request->input('titulo');
         $descricao = $request->input('descricao');  
         $categoria = $request->input('categoria');

         $freelancer = new Freelancer();

         $user = new User();
         $user->updateUserFreelancerId($userData['id'], $freelancer->insertFreelancerProfile($titulo, $descricao, $userData['id'], $categoria));
         

         return redirect()->route('cliente');

   }
}

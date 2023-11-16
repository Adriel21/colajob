<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\AcceptRegistration;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
       /**
     * Show a list of all of the application's users.
     */
    public function index(): JsonResponse
    {
        $users = DB::select('select * from users');
 
        return response()->json(['users' => $users]);
    }

    public function store(Request $request)
    {
       
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => [
                    'required',
                ],
                'accept' => 'required'
            ]);
    
            // Se a validação passar, os dados são válidos
            $name = $request->input('name'); 
            $email = $request->input('email');
            $password = $request->input('password'); 
            $confirm = $validatedData['accept'] == 'accepted' ? 1 : 0;


            // Utilize Eloquent para criar um novo usuário

            $user = new User();
            $return = $user->insertUser($name, $email, $password);
           // Recupere os dados após a criação

             $acceptRegistration = new AcceptRegistration();
             $acceptRegistration->createAcceptRegistration($confirm, now(), $return);

             return redirect()->route('login', ['sucesso' => 'usuario-criado']);

    }
}

?>
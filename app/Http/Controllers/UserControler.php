<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use PharIo\Manifest\Author;
use PhpParser\Node\Stmt\Return_;

class UserControler extends Controller
{

    //Register
    public function register(Request $request){

        $user = new User;
 
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->age = $request->age;
        $user->address = $request->address;
        $user->zip_code = $request->zip_code;
 
        $user->save();
        return redirect(route('login'));
    }
    //Login
    public function login(Request $request){
        $credenciales = [
            'email' => $request->email,
            'password' => $request->password,
        ];
    
        if (Auth::attempt($credenciales)) {
            $request->session()->regenerate();
            return redirect()->intended(route('home'));
        } else {
            return redirect('login');
        }
    }
    public function mostrar_datos(){
        $user = Auth::user();
        return view('home', compact('user'));
    }

    //Update
    public function editar($id){
        $user = User::find($id);
        return view('update', compact('user'));
    }

    public function actualizar(Request $request){
        $user=User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->age = $request->age;
        $user->address = $request->address;
        $user->zip_code = $request->zip_code;
 
        $user->save();
        return redirect(route('home'));
    }

    public function view_user(){
        $users = User::all();
        return view('list_user', compact('users'));
    }
    //Eliminar
    public function delete_user($id) {
        $user = User::find($id);
        if ($user) {
            $user->delete();
        }
        return redirect()->back();
    }
    
    //Exit
    public function logout(Request $request){
        Auth::logout();
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }
}

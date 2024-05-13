<?php
namespace App\Http\Controllers\Gerente_comercial;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{


    
    public function showLoginForm()
    {
        return view('gerente_comercial.login');
    }

    public function login(Request $request)
    {
        $usuario = $request->input('usuario');
        $contrasenia = $request->input('contrasenia');

        // Consulta la base de datos para verificar las credenciales
        $gerente_comercial = DB::table('gerente_comercial')->where('usuario', $usuario)->first();

        if ($gerente_comercial && Hash::check($contrasenia, $gerente_comercial->contrasenia)) {
            // Las credenciales son correctas, inicia sesión y redirige al dashboard
            // Aquí puedes guardar información adicional del usuario en la sesión si es necesario
            session(['nombre' => $gerente_comercial->nombre]);
            session(['id_gerente_comercial' => $gerente_comercial->id]);
            return redirect('/gerente_comercial/dashboard');
        } else {
            // Las credenciales son incorrectas, muestra un mensaje de error
            return back()->with('message', 'Usuario o contraseña incorrectos');
        }
    }

    public function logout()
{
    // Elimina todas las variables de sesión del usuario
    Session::flush();

    // Redirige a la página de inicio o a donde desees después de cerrar sesión
    return redirect('/gerente_comercial/login')->with('message', 'Sesión cerrada exitosamente.');; // Puedes cambiar esta URL según tus necesidades
}



}

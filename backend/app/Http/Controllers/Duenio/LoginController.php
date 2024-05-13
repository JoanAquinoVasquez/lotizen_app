<?php
namespace App\Http\Controllers\Duenio;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{


    
    public function showLoginForm()
    {
        return view('duenio.login');
    }

    public function login(Request $request)
    {
        $usuario = $request->input('usuario');
        $contrasenia = $request->input('contrasenia');

        // Consulta la base de datos para verificar las credenciales
        $duenio = DB::table('duenio')->where('usuario', $usuario)->first();

        if ($duenio && Hash::check($contrasenia, $duenio->contrasenia)) {
            // Las credenciales son correctas, inicia sesión y redirige al dashboard
            // Aquí puedes guardar información adicional del usuario en la sesión si es necesario
            session(['nombre' => $duenio->nombre]);
            session(['id_duenio' => $duenio->id]);
            return redirect('/duenio/dashboard');
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
    return redirect('/duenio/login')->with('message', 'Sesión cerrada exitosamente.');; // Puedes cambiar esta URL según tus necesidades
}



}

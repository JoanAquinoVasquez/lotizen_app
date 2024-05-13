<?php
//necesario namespace sino da error
namespace App\Http\Controllers\Gerente_comercial;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Duenio;
use App\Models\Rubro;
use App\Models\Gerente_comercial;
use App\Models\Empresa;
use Illuminate\Support\Facades\Auth;
class PerfilController extends Controller
{



    
    public function mostrarDatos()
    {   
        /** @var \App\Models\Gerente_comercial $gerente_comercial */
        $gerente_comercial = Gerente_comercial::find(session('id_gerente_comercial'));

        
    // Accede al rubro y la empresa relacionados
        return view('gerente_comercial.miperfil', compact('gerente_comercial'));
    }

    public function guardarDatos(Request $request)
    {
        // Valida los datos del formulario
        $request->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'tipo_doc' => 'required',
            'num_doc' => 'required',
            'telefono' => 'required',
            'usuario' => 'required',
            'correo' => 'required|email',
        ]);

        // Recupera el registro del Dueño existente
        $gerente_comercial = Gerente_comercial::find(session('id_gerente_comercial'));

        if ($gerente_comercial) {
            // Aplica los cambios en el registro existente
            $gerente_comercial->nombre = $request->input('nombre');
            $gerente_comercial->apellidos = $request->input('apellidos');
            $gerente_comercial->tipo_doc = ($request->input('tipo_doc') === 'DNI') ? 1 : $request->input('tipo_doc');
            $gerente_comercial->num_doc = $request->input('num_doc');
            $gerente_comercial->telefono = $request->input('telefono');
            $gerente_comercial->usuario = $request->input('usuario');
            $gerente_comercial->correo = $request->input('correo');
            $gerente_comercial->contrasenia = bcrypt($request->input('contrasenia'));

            // Guarda el registro actualizado
            $gerente_comercial->save();

            // Redirige al usuario después de guardar los datos
            return redirect()->route('gerente_comercial_miperfil')->with('success', 'Datos guardados exitosamente');
        }
    }

    

    
}

<?php
//necesario namespace sino da error
namespace App\Http\Controllers\Duenio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Duenio;
use App\Models\Rubro;
use App\Models\Empresa;
use Illuminate\Support\Facades\Auth;
class PerfilController extends Controller
{



    
    public function mostrarDatos()
    {   

        
        /** @var \App\Models\Duenio $duenio */
        $duenio = Duenio::find(session('id_duenio'));

        if ($duenio && $duenio->empresa) {
        $empresa = $duenio->empresa;
        $rubro = $empresa->rubro;
        
    // Accede al rubro y la empresa relacionados
        return view('duenio.miperfil', compact('duenio', 'rubro', 'empresa'));
    }
    return view('duenio.dashboard');
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
        $duenio = Duenio::find(session('id_duenio'));

        if ($duenio) {
            // Aplica los cambios en el registro existente
            $duenio->nombre = $request->input('nombre');
            $duenio->apellidos = $request->input('apellidos');
            $duenio->tipo_doc = ($request->input('tipo_doc') === 'DNI') ? 1 : $request->input('tipo_doc');
            $duenio->num_doc = $request->input('num_doc');
            $duenio->telefono = $request->input('telefono');
            $duenio->usuario = $request->input('usuario');
            $duenio->correo = $request->input('correo');
            $duenio->contrasenia = bcrypt($request->input('contrasenia'));

            // Guarda el registro actualizado
            $duenio->save();

            // Redirige al usuario después de guardar los datos
            return redirect()->route('duenio_miperfil')->with('success', 'Datos guardados exitosamente');
        }
    }

    public function guardarDatosEmpresa(Request $request)
    {
        $request->validate([
            'nombre_empresa' => 'required',
            'ruc' => 'required',
        ]);

        // Recupera el registro de la Empresa existente
        $duenio = Duenio::find(session('id_duenio'));
        $empresa = $duenio->empresa;
        $rubro = $empresa->rubro;

        if ($empresa) {
            // Aplica los cambios en el registro existente
            $empresa->nombre = $request->input('nombre_empresa');
            $empresa->ruc = $request->input('ruc');
            $empresa->logo = $request->input('logo');

            // Guarda el registro actualizado
            $empresa->save();

            // Recupera el registro del Rubro existente
            $rubro = Rubro::find($request->input('rubro_id'));

            if ($rubro) {
                // Aplica los cambios en el registro del Rubro
                $rubro->nombre = $request->input('rubro_nombre');
                $rubro->save();
            }

            // Redirige al usuario después de guardar los datos de la empresa
            return redirect()->route('duenio_miperfil')->with('success', 'Datos de la empresa guardados exitosamente');
        }
    }
}

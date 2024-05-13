<?php
//necesario namespace sino da error
namespace App\Http\Controllers\Gerente_comercial;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Gerente_comercial;
use App\Models\Rubro;
use App\Models\Empresa;
use App\Models\Proyecto;
use App\Models\Categoria_proyecto;
use Illuminate\Support\Facades\Auth;
class ProyectoController extends Controller
{



    
    public function mostrarDatos()
    {   
        /** @var \App\Models\Gerente_comercial $gerente_comercial */
        $gerente_comercial = Gerente_comercial::find(session('id_gerente_comercial'));
        $proyecto = $gerente_comercial->proyecto;
        
    // Accede al rubro y la empresa relacionados
        return view('gerente_comercial.proyecto', compact('gerente_comercial', 'proyecto'));
    }

    public function obtenerProyecto($id) {
        $proyecto = Proyecto::find($id);
        return response()->json($proyecto);
    }

    public function buscarProyecto(Request $request) {
        $term = $request->input('term');
        $gerente_comercial = Auth::user()->gerente_comercial; // Suponiendo que tienes un sistema de autenticación y un modelo de Usuario con relación a GerenteComercial
        $proyectos = $gerente_comercial->proyectos()->where('nombre', 'like', '%' . $term . '%')->get();
        return view('proyectos.lista', compact('proyectos'));
    }
    
    public function mostrarDetallesProyecto($id)
    {
        $proyecto = Proyecto::findOrFail($id);

        return view('gerente_comercial.proyecto', compact('proyecto'));
    }


    public function agregarProyecto(Request $request)
    {
        // Valida los datos del formulario
        $request->validate([
            'nombre' => 'required',
            'departamento' => 'required',
            'ciudad' => 'required',
            'direccion' => 'required',
            'fecha_inicio' => 'required',
            // Agrega más reglas de validación según tus necesidades
        ]);

        // Crea un nuevo proyecto
        Proyecto::create([
            'nombre' => $request->input('nombre'),
            'departamento' => $request->input('departamento_proyecto'),
            'ciudad' => $request->input('ciudad_proyecto'),
            'direccion' => $request->input('direccion_proyecto'),
            'fecha_inicio' => $request->input('fecha_inicio_proyecto'),
            'id_duenio' => auth()->user()->id,
            'id_categoria_proyecto' => auth()->user()->id,
            // Añade otros campos según tus necesidades
        ]);

        return redirect()->route('gerente_comercial_proyecto')->with('success', 'Proyecto agregado exitosamente');
    }

    public function guardarProyecto(Request $request, $id)
    {

        $proyecto = Proyecto::findOrFail($id);
        // Valida los datos del formulario
        $request->validate([
            'nombre' => 'required',
            'departamento' => 'required',
            'ciudad' => 'required',
            'direccion' => 'required',
            'fecha_inicio' => 'required',
        ]);

        // Recupera el registro del Dueño existente

        $proyecto->update([
            'nombre' => $request->input('nombre_proyecto'),
            'departamento' => $request->input('departamento_proyecto'),
            'ciudad' => $request->input('ciudad_proyecto'),
            'direccion' => $request->input('direccion_proyecto'),
            'fecha_inicio' => $request->input('fecha_inicio_proyecto'),
            // Actualiza otros campos según tus necesidades
        ]);

            // Redirige al usuario después de guardar los datos
            return redirect()->route('gerente_comercial_proyecto')->with('success', 'Datos guardados exitosamente');
        }

        public function eliminarProyecto($id)
        {
            $proyecto = Proyecto::findOrFail($id);
    
            // Elimina el proyecto
            $proyecto->delete();
    
            return redirect()->route('gerente_comercial_proyecto')->with('success', 'Proyecto eliminado exitosamente');
        }
    }

  


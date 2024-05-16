<?php
//necesario namespace sino da error
namespace App\Http\Controllers\Duenio;

use App\Models\Duenio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Gerente_comercial;
use App\Models\Rubro;
use App\Models\Empresa;
use App\Models\Proyecto;
use App\Models\Categoria_proyecto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;



class ProyectoController extends Controller
{
    public function mostrarDatos()
    {
        /** @var \App\Models\Duenio $duenio */
        $duenio = Duenio::find(session('id_duenio'));
        $proyecto = $duenio->proyecto;
        $categorias_proyectos = Categoria_proyecto::all();

        // Accede al rubro y la empresa relacionados
        return view('duenio.proyecto', compact('duenio', 'proyecto','categorias_proyectos'));
    }

    public function obtenerProyecto($id)
    {
        $proyecto = Proyecto::find($id);
        return response()->json($proyecto);
    }

    public function buscarProyecto(Request $request)
    {
        $term = $request->input('term');
        $duenio = Auth::user()->duenio; // Suponiendo que tienes un sistema de autenticación y un modelo de Usuario con relación a GerenteComercial
        $proyectos = $duenio->proyectos()->where('nombre', 'like', '%' . $term . '%')->get();
        return view('proyectos.lista', compact('proyectos'));
    }

    public function mostrarDetallesProyecto($id)
    {
        $proyecto = Proyecto::findOrFail($id);

        return view('duenio.proyecto', compact('proyecto'));
    }


    public function agregarProyecto(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string',
            'id_categoria_proyecto' => 'required|integer',
            'departamento' => 'nullable|string',
            'ciudad' => 'nullable|string',
            'direccion' => 'nullable|string',
            'fecha_inicio' => 'required|date',
        ]);

        // Obtener el ID del gerente comercial autenticado
        $duenio = Duenio::find(session('id_duenio'));

        // Crear un nuevo proyecto en la base de datos

        Proyecto::create([
            'nombre' => $request->nombre,
            'duenio_id' => $duenio->id,
            'gerente_comercial_id' => null,
            'id_categoria_proyecto' => $request->id_categoria_proyecto,
            'departamento' => $request->departamento,
            'ciudad' => $request->ciudad,
            'direccion' => $request->direccion,
            'fecha_inicio' => $request->fecha_inicio,
            'activo' => 0
        ]);

        $proyecto = $duenio->proyecto;
        // Accede al rubro y la empresa relacionados
        $categorias_proyectos = Categoria_proyecto::all();

        // Accede al rubro y la empresa relacionados
        return view('duenio.proyecto', compact('duenio', 'proyecto', 'categorias_proyectos'));
    }

    public function mostrarFormProyecto()
    {
        // Obtener el ID del gerente comercial autenticado
        $id_duenio = Auth::id();
        $categorias_proyectos = Categoria_proyecto::all();
        return view('duenio.agregar_proyecto', compact('categorias_proyectos', 'id_duenio'));
    }

    public function guardarProyecto(Request $request)
    {
        Log::info($request->all());

        // Validar los datos del formulario
        $request->validate([
            'nombre_proyecto' => 'required|string',
            'departamento_proyecto' => 'required|string',
            'ciudad_proyecto' => 'required|string',
            'direccion_proyecto' => 'required|string',
            'fecha_inicio_proyecto' => 'required|date',
        ]);

        // Obtener el ID del gerente comercial autenticado
        $duenio = Duenio::find(session('id_duenio'));
        Log::info($duenio->id);
        $idDuenio = $duenio->id;

        $id_proyecto = $request->id_proyecto;

        // Crear un nuevo proyecto en la base de datos
        $proyecto_update = Proyecto::findOrFail($id_proyecto);

        $proyecto_update->update([
            'nombre' => $request->nombre_proyecto,
            'id_categoria_proyecto' => $request->id_categoria_proyecto,
            'departamento' => $request->departamento_proyecto,
            'ciudad' => $request->ciudad_proyecto,
            'direccion' => $request->direccion_proyecto,
            'fecha_inicio' => $request->fecha_inicio_proyecto,
        ]);

        $categorias_proyectos = Categoria_proyecto::all();
        $proyecto = $duenio->proyecto;

        // Accede al rubro y la empresa relacionados
        return view('duenio.proyecto', compact('duenio', 'proyecto', 'categorias_proyectos'));
    }

    public function eliminarProyecto($id)
    {
        $proyecto = Proyecto::findOrFail($id);

        // Elimina el proyecto
        $proyecto->delete();

        return redirect()->route('duenio_proyecto')->with('success', 'Proyecto eliminado exitosamente');
    }
}

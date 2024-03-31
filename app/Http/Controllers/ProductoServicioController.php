<?php

namespace App\Http\Controllers;

use App\Models\CondicionalIva;
use App\Models\ProductoServicio;
use App\Models\Rubro;
use App\Models\UnidadMedida;
use Illuminate\Http\Request;

class ProductoServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productosServicios = ProductoServicio::all();

        $countByDay = ProductoServicio::whereDate('created_at', today())->count();
        $countByWeek = ProductoServicio::whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])->count();
        $countByMonth = ProductoServicio::whereMonth('created_at', now()->month)->count();
        $countByYear = ProductoServicio::whereYear('created_at', now()->year)->count();

        return view('productos_servicios.index', compact('productosServicios', 'countByDay', 'countByWeek', 'countByMonth', 'countByYear'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rubros = Rubro::all();
        $unidades = UnidadMedida::all();
        $condicionesIva = CondicionalIva::all();

        return view('productos_servicios.create', compact('rubros', 'unidades', 'condicionesIva'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'tipo' => 'required|in:P,S',
            'id_rubro' => 'required|exists:rubro,id',
            'codigo' => 'required|unique:producto_servicio,codigo|max:20',
            'producto_servicio' => 'required|max:25',
            'id_unidad_medida' => 'required|exists:unidad_medida,id',
            'id_condicion_iva' => 'required|exists:condicion_iva,id',
            'precio_bruto_unitario' => 'required|numeric|between:0,999999999999.999',
        ]);

        ProductoServicio::create($validatedData);

        return redirect()->route('productos-servicios.index')
            ->with('success', 'Producto/Servicio creado con éxito.');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productoServicio = ProductoServicio::findOrFail($id);
        $rubros = Rubro::all();
        $unidades = UnidadMedida::all();
        $condicionesIva = CondicionalIva::all();

        return view('productos_servicios.edit', compact('productoServicio', 'rubros', 'unidades', 'condicionesIva'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'tipo' => 'required|in:P,S',
            'id_rubro' => 'required|exists:rubro,id',
            'codigo' => 'required|max:20|unique:producto_servicio,codigo,' . $id,
            'producto_servicio' => 'required|max:25',
            'id_unidad_medida' => 'required|exists:unidad_medida,id',
            'id_condicion_iva' => 'required|exists:condicion_iva,id',
            'precio_bruto_unitario' => 'required|numeric|between:0,999999999999.999',
        ]);

        $productoServicio = ProductoServicio::findOrFail($id);
        $productoServicio->update($validatedData);

        return redirect()->route('productos-servicios.index')
            ->with('success', 'Producto/Servicio actualizado con éxito.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productoServicio = ProductoServicio::findOrFail($id);
        $productoServicio->delete();

        return redirect()->route('productos-servicios.index')
            ->with('success', 'Producto/Servicio eliminado con éxito.');
    }

}

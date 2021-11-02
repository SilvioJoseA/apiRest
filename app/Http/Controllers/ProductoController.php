<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ProductoController extends Controller
{

    
    //Funcion 1 Api
    // Almacen datos name y country
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeCategoria(Request $request)
    {
        return Categoria::create($request->all());
    }
    // Edita datos name y country
        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function updateCategoria(Request $request,$id)
    {
        $product = Categoria::find($id);

        $product->update($request->all());

        return $product;
    }

    // Muestra la lista de todas las empresas 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexCategoria()
    {
        return Categoria::all();
    }
    // Mustra una empresa especificada por un id
    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function showCategoria($id)
    {
        return Categoria::find($id);
    }
    // Borra empresa especificada por un id
    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroyCategoria($id)
    {
        return Categoria::destroy($id);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    //Crea una pantalla nueva
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Producto::create($request->all());
    }
    //Edita una pantalla especificada por un id 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $product = Producto::find($id);

        $product->update($request->all());

        return $product;
    }
    // Mostrar todas las pantallas
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($country =1 )
    {
          if($country == 1 ){
        return Producto::all();
          } else {
            $resultado = Producto::join("categorias", "productos.id_categoria", "=", "categorias.id")
            ->select("*")
            ->where("categorias.country",$country)
            ->get();
            return $resultado;
          }
    }
    //Mostrar una pantalla especificada por un id
    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function showDisplay($id)
    {
   
        return Producto::find($id);
    }
    //Mostrar una pantalla especificada por un id
    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
   
        return Producto::find($id);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        //
    }


    //Borrar una pantalla especificada por un id
    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Producto::destroy($id);
    }
    // Mostrar todas las pantallas con id_empresas epecifico
    /**
     * Display a listing of the resource.
     * @param  int $id_categoria
     * @return \Illuminate\Http\Response
     */
    public function mostrarPantallasIdEmpresa($id_categoria)
    {
        
        return Producto::where('id_categoria','=',$id_categoria)->get();
    }

    //Ultimo metodo join
    public function mostrarPantallasCountry($country = 'Francia')
    {
        
        $resultado = Producto::join("categorias", "productos.id_categoria", "=", "categorias.id")
        ->select("*")
        ->where("categorias.country",$country)
        ->get();
        return $resultado;
    }
    
   
  

}


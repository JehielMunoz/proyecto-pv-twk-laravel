<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use \App\Models\creaProd;
use App\Http\Resources\CreaProdResource;

use \App\Models\Productos;
use \App\Http\Resources\ProductoResource;

use \App\Models\Parametros;
use \App\Http\Resources\ParametroResource;

use \App\Models\Proveedor;
use \App\Http\Resources\ProveedorResource;

use \App\Models\ProveedorProducto;
use \App\Http\Resources\ProveedorProductoResource;
use function MongoDB\BSON\toJSON;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Productos::orderby('codigo')->get();
        return ProductoResource::collection($productos); #collection permite hacer un arreglo de texto
    }
    public function maxId()
    {
        //$maxId = DB::table('productos')->lastInsertId();
        //$maxId = DB::getPdo()->lastInsertedId();
        $maxId = DB::select(DB::RAW("SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'proyectopv2' AND TABLE_NAME = 'productos'"));//->get();
        $maxId = json_decode(json_encode($maxId),true);
        $maxId = $maxId[0]['AUTO_INCREMENT'];
        //error_log(print_r($maxId[0]['AUTO_INCREMENT'],true));
        return $maxId;
    }
    public function restoreAutoIncrement(){
        $maxId = DB::table('productos')->max('codigo');
        $restore = DB::statement("alter table productos auto_increment $maxId");
    }
    /*
    public function index2()
    {
        $productos = Productos::orderby('codigo')->get();
        $maxIteration = DB::table('productos')->max('codigo');

        foreach (range(0,$maxIteration-1) as $index){
            $idCategoriaAux = $productos[$index]['idCategoria'];
            $idCategoria = DB::table('parametros')->where('id','=',$idCategoriaAux)->value('descripcion');
            $productos[$index]['idCategoria'] = $idCategoria;

            $idMedidaAux = $productos[$index]['idMedida'];
            $idMedida = DB::table('parametros')->where('id','=',$idMedidaAux)->value('descripcion');
            $productos[$index]['idMedida'] = $idMedida;

            $idMarcaAux = $productos[$index]['idMarca'];
            $idMarca = DB::table('parametros')->where('id','=',$idCategoriaAux)->value('descripcion');
            $productos[$index]['idMarca'] = $idMarca;

            $idresponsableCreacionAux = $productos[$index]['idresponsableCreacion'];
            $idresponsableCreacion = DB::table('usuarios')->where('id','=',$idresponsableCreacionAux)->value('nombre');
            $productos[$index]['idresponsableCreacion'] = $idresponsableCreacion;
        }
        return ProductoResource::collection($productos);
    }
    */
    public function buscaId($id)
    {
        $producto = Productos::where('codigo','=',$id)->get();
        return ProductoResource::collection($producto);

        //$productos = Productos::find(9);
        //$productos = $findProd->all();
        //$productos = $productos;
        //error_log(print_r($productos,true));
        //$producto = DB::table('productos')->where('codigo','=',$id)->get();
        //return ProductoResource::collection($productos);
        //return Productos::find($id);
    }
    public function BuscaName($name)
    {
        $productos = Productos::where('nombre','like','%'.$name.'%')->get();
        return ProductoResource::collection($productos);

        //$productos = Productos::orderby('codigo')->get();
        //$producto = DB::table('productos')->where('nombre','like','%'.$name.'%')->get();
        //return ProductoResource::collection($producto);
    }

############################################
#                   CRUD                   #
############################################
#         CREAR        #
########################
    public function crearProducto(Request $newProd)
    {
        Productos::create($newProd->all());
        $this->crearproveedorProducto($newProd->only('Proveedor'));
        //return Redirect::to('http://127.0.0.1:8080/crearProducto');
        //$id = DB::table('productos')->max('codigo');
        //return Redirect::back()->with('message','Producto creado!');
        $control = true;
        return $control;
    }
    public function crearproveedorProducto($proveedor)
    {
        //$codProducto= DB::table('productos')->select(DB::raw('select max(id) from productos'));
        $codProducto = $this->maxId();
        $ProveedorProducto = [$proveedor['Proveedor'],$codProducto];
        ProveedorProducto::create($ProveedorProducto);
        error_log(print_r($codProducto,true));
        return response()->noContent();
    }
########################
#       Eliminar       #
########################
    public function eliminar($productoId)
    {
        Productos::destroy($productoId);
        //error_log(print_r($producto,true));
        //$productos = Productos::all();
        //$producto = $productos->find($productoId);
        //error_log(print_r($producto[0],true));
        //Productos::find($producto)->delete();
        return response()->noContent();
    }
    public function update(Productos $producto)
    {
        $data = $this->validateRequest();
        $producto->update($data);
        return new ProductoResource($producto);
    }


############################################
#            Obtener parametros            #
############################################
    public function getProv(){
        $proveedores = DB::table('proveedores')->get();
        return ProveedorResource::collection($proveedores);
    }
    public function getMarcas(){
        $Marcas = DB::table('parametros')
            ->where('codigo','like','MA.%')
            ->where('TIPO','=','MARCA')->get();
        return ParametroResource::collection($Marcas);
    }
    public function getCategorias(){
        $categoria = DB::table('parametros')
                        ->where('codigo','like','CA.%')
                        ->where('TIPO','=','CATEGORIA')->get();
        return ParametroResource::collection($categoria);
    }
    public function getMedidas(){
        $medida = DB::table('parametros')
                        ->where('codigo','like','ME.%')
                        ->where('TIPO','=','MEDIDA')->get();
        return ParametroResource::collection($medida);
    }
}

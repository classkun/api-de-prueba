<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;


use App\Models\Producto;
use App\Models\Ordenes;
use App\Models\OrdenesProductos;
use App\Models\Notificacion;
class CreateController extends Controller
{
    public function index() {
    
    
        return view('CreateOrden');
    }
    public function productList(){
        $productos = Producto::All();
        return response() -> json($productos);
    }
    public function GetOrders(Request $request){
        if($request -> id != null){
            $id = $request -> id;
            $orden = Ordenes::where("id",$id)->first();
            $productos = OrdenesProductos::all()->where("id_orden",$id);
            return response() -> json(["orden"=>$orden,"producto"=>$productos]);
        }
        $ordenes = Ordenes::all();
        return response() -> json($ordenes);
    }
    public function TestFlutter(Request $request){
        if($request ->email == "ale@gmail.com"){
            return response() -> json(["status" => "success"]);
        }
        else{
            return response() -> json(["status" => "false"]);
        }
    }
    public function TestNotification(Request $request){
        $notificacion = Notificacion::all() -> first();
        return response()->json(["titulo" =>"prueba","destino"=>"estados"]);

        //Si cuentan con base de datos usar lo que se encuentra abajo
        if($notificacion !=null){
            $titulo = $notificacion->titulo;
            $destino = $notificacion -> destino;
            $notificacion -> delete();
            return response()->json(["titulo" =>$titulo,"destino"=>$destino]);

        }
    }
    public function DeleteOrden(Request $request){
        $id = $request -> id; 

        $orden = Ordenes::where("id",$id)->first();
        if($orden != null){
            $orden -> delete();
            return response()->json(["Eliminado"]);
        }
        
        return response()->json(["Fallo"=>"No encontrado"]);
    }
    public function CreateOrden(Request $request){

        $orden = Ordenes::create([
            'total' => $request -> total,
            'impuestos' => $request -> impuesto,
            'comentario' => $request -> comentario,
            'estatus' => "activo",

        ]);
        $productos = $request -> productos;
        for($i =0; $i < count($productos); $i++){
            OrdenesProductos::create([
                'id_orden' => $orden -> id,
                'id_producto'=> $productos[$i],
                'cantidad'=> $request -> cantidades[$i] ,
            ]);
        }
        return response() -> json($orden);
    }
    function UpdateRechazo(Request $request){
        $id = $request -> id;
   
        
        $Orden = Ordenes::where("id",$id)->first();
        $Orden -> comentario = $request -> comentario;
        if($Orden != null){
            $Orden->save();
            return response()->json(["data","actualizado"]);
        }
        
        return response()->json(["Data"=>"algo Fallo"]);
    }
}

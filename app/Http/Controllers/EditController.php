<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;


use App\Models\Producto;
use App\Models\Ordenes;
use App\Models\OrdenesProductos;
class EditController extends Controller
{
    public function index() {
    
    
        return view('EditOrden');
    }
    
}

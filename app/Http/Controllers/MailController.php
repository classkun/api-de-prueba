<?php

namespace App\Http\Controllers;

use Mail;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;


use App\Models\Producto;
use App\Models\Ordenes;
use App\Models\OrdenesProductos;
class MailController extends Controller
{
    public $to_name ;
        public $to_email ;
    public function sendEmail(Request $request){
         $to_name = $request ->name;
         $to_email = $request -> address;
         $data = array('name'=>"Usuario","id"=> $request -> id);
   
        Mail::send(['text'=>'mail'], $data, function($message) use($to_email) {
            $message->to($to_email, 'LARS')->subject
                ('Orden Realizada');
            $message->from('testingemailinapps@gmail.com','LARS Test');
        });
     
      
       
    }
    
}




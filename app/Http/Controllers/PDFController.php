<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use PDF;
  
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF(Request $request)
    {
        $data = [
            'title' => 'Orden ' ,
            'date' => date('m/d/Y'),
            'productos' => $request ->nproductos,
            'cantidades' => $request -> cantidades,
            'total' => $request -> total,
            'impuesto' => $request -> impuesto,
            'id' => $request -> id
        ];
          
        $pdf = PDF::loadView('myPDF', $data);
    
        return $pdf->stream('itsolutionstuff.pdf');
    }
}
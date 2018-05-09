<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;    

class CreatePDF extends Controller
{
    public function showme(){
        $pdf = \App::make('dompdf.wrapper');
        $data = array();
        $fileName = storage_path(). '/pdfs'.'/mipdf.pdf';
        $pdf = PDF::loadView('plantillas.plantilla1', $data)->save($fileName);
        
        $pdfimage = new \Spatie\PdfToImage\Pdf($fileName);
        $pdfimage->saveImage(storage_path(). '/mipdf.jpg');
        
        return 1;
    }
}

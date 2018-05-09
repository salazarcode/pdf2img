<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreatePDF extends Controller
{
    public function create(){
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML('<h1>Adrián mámalo</h1>');
        return $pdf->stream();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class TestController extends Controller
{
    public function index(){
        $pdf = PDF::loadView('test.index');
        // $pdf->setPaper('a4', 'landscape');
        return $pdf->download('invoice.pdf');
    }

    public function disabled(){
        return view('test.disabled');
    }
}

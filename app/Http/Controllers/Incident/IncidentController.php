<?php

namespace App\Http\Controllers\Incident;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IncidentController extends Controller
{
    public function index(){
        return view('admin.incident.index');
    }
}

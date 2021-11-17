<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpleController extends Controller
{
    public function index()
    {
        $emples = DB::select('select * from emple e
                                left join depart d
                                on e.depart_id = d.id');
        return view('emple.index', [
            'empleados' => $emples,
        ]);
    }

    public function create()
    {
        return 'Hola empleados';
    }

    public function store()
    {
        // Grabar la información
    }
}

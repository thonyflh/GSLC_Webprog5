<?php

namespace App\Http\Controllers;

use App\Models\karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    //
    public function index (){
        $karyawans = karyawan::all();
        return view ('viewkaryawan', compact('karyawans'));
    }
}

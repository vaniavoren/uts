<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Absensi::get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view();
    }
}

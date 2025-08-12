<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    use Illuminate\Support\Facades\DB;

public function index()
{
    $services = DB::table('services')->get(); // or Service::all() if you have a model
    return view('services', compact('services'));
}

}

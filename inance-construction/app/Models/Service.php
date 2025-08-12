<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use App\Models\Service;

public function index()
{
    $services = Service::all();
    return view('services', compact('services'));
}

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    function index(Request $request){

        $res = Http::get('https://wilayah.id/api/provinces.json');
        $data['test'] = $res->json()['data'];
        return view('test',$data);

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;

class BukuController extends Controller
{
    public function index(){
    	$buku=Buku::all();
    	return view('buku.data',compact('buku'));
    }
}



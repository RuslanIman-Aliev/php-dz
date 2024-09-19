<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bd;
class BbsController extends Controller
{
    public function index()
    {
        $context = ['bbs' => Bd::latest()->get()];
        return view('index', $context);

    }
    public function detail(Bd $bb)
    {
        return view('detail', ['bb' => $bb]);
    }



}



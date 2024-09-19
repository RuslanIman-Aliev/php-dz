<?php

namespace App\Http\Controllers;

use App\Models\Bd;
use Illuminate\Http\Request;

class BbsController extends Controller
{
    public function index()
    {
        $bbs = Bd::latest()->get();
        $s = "Объявления<hr>";
        foreach ($bbs as $bb) {
            $s .= $bb->title . "<br>";
            $s .= $bb->price . " грн.<br>";
            $s .= "<br>";
        }
        return response($s);
    }
}

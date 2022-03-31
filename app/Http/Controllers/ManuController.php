<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modes\Manu;

class ManuController extends Controller
{
    function addData(Request $req)
    {
        $manu= new Manu;
        $manu->manufacturer=$req->manufacturer;
        $manu->salescontact=$req->salescontect;
        $manu->techcontact=$req->techcontact;
        $manu->save();
        return redirect('manufacturers');

    }

}
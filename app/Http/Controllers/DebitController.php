<?php

namespace App\Http\Controllers;

use App\Models\Debitmaster;
use Illuminate\Http\Request;

class DebitController extends Controller
{
    //
    public function getAllDebits(){
        $debits= Debitmaster::all();
        return view ('debits',compact('debits'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profileController extends Controller
{
    public function show()
    {
        $name='山田太郎';
        $age=25;
        $hoby=['プログラミング','読書','旅行'];
        return view('propro',compact('name','age','hoby'));
    }
}

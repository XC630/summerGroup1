<?php

namespace App\Http\Model;

use Closure;
use Illuminate\Support\Facades\Auth;

class request
{

    public function request(Request $request)
    {$req1=$request['a'];
        $req2=$request['b'];
        $req= $request['c'];
    }
}

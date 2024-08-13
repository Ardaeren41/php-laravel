<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Formkontrol
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->input('metin') == "elma") {
            return redirect()->back();
        }
        return $next($request);
    }
}

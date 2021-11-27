<?php

namespace App\QueryFilters;

use Closure;

class Type_Sort
{

    public function handle($request, Closure $next)
    {
        if (! request()->has('type')) {
            return $next($request);
        }
        if (request()->input('type') == 'null') {
            return $next($request);
        }

        return $next($request)->where('type', request()->input('type'));
    }
}

<?php

namespace App\QueryFilters;

use Closure;

class Model_Sort
{

    public function handle($request, Closure $next)
    {
        if (! request()->has('model')) {
            return $next($request);
        }

        if ( request()->input('model') == 'null') {
            return $next($request);
        }

        return $next($request)->where('brand_model_id', request()->input('model'));
    }
}

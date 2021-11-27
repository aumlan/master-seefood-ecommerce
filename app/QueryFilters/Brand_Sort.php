<?php

namespace App\QueryFilters;

use Closure;

class Brand_Sort
{

    public function handle($request, Closure $next)
    {
        if (! request()->has('brand')) {
            return $next($request);
        }

        if (request()->input('brand') == 'null') {
            return $next($request);
        }

        return $next($request)->where('brand_id', request()->input('brand'));
    }
}

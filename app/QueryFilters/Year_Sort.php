<?php

namespace App\QueryFilters;

use Closure;

class Year_Sort
{

    public function handle($request, Closure $next)
    {
        if (! request()->has('year')) {
            return $next($request);
        }

        if ( request()->input('year') == 'null') {
            return $next($request);
        }

        return $next($request)->where('brand_model_year_id', request()->input('year'));
    }
}

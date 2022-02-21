<?php

namespace App\Services;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

trait SecurityService
{
    public function authorized(array|string $roles, Closure $closure): View|RedirectResponse
    {
        if(count($roles) > 0 && !auth()->user()->can($roles)) {
            return redirect()->route('dashboard.home')->with('error', 'No estas autorizado para realizar esta acción');
        }

        return $closure();
    }
}

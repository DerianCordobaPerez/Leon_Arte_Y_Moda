<?php

namespace App\Services\View;


use App\Services\SingletonServices;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ViewService
{
    use SingletonServices;

    /**
     * @param String $view
     * @return bool
     */
    public function exists(String $view): bool
    {
        return view()->exists($view);
    }

    /**
     * @param String $view
     * @param array $data
     * @return Application|Factory|View
     */
    public function render(String $view, Array $data = []): Application|Factory|View
    {
        return view($view, $data);
    }
}

<?php

namespace App\Services;

use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

trait ViewService
{
    use SecurityService;

    /**
     * Check if exist view
     *
     * @param String $view
     * @return bool
     */
    private function exists(string $view): bool
    {
        return view()->exists($view);
    }

    /**
     * Get a view with name and data pass to params.
     *
     * @param String $view
     * @param array $data
     * @return View
     */
    private function get(string $view, array $data = []): View
    {
        abort_unless($this->exists($view), 404);
        return view($view, $data);
    }

    public function render(string $view, array $data = [], array|string $roles = []): View|RedirectResponse
    {
        return $this->authorized($roles, function () use ($view, $data) {
            return $this->get($view, $data);
        });
    }
}

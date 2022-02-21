<?php

namespace App\Http\Controllers;

use App\Services\ViewService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    use ViewService;

    public function index(): View|RedirectResponse
    {
        return $this->render('dashboard.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $greeting = $this->greeting();
        return view('home', compact('greeting'));
    }

    private function greeting()
    {
        $hora = date('H');

        if ($hora >= 6 && $hora <= 12) {
            return 'Bom dia';
        } else if ($hora > 12 && $hora <= 18) {
            return 'Boa tarde';
        } else {
            return 'Boa noite';
        }
    }

    // public function migrate($key)
    // {
    //     dd(Artisan::output());
    //     if ($key == "sld13026") {
    //         try {
    //             echo '<br>Start of migrating...';
    //             Artisan::call('migrate:refresh');
    //             dd(Artisan::output());
    //             echo '<br>done.';

    //             echo '<br>Start of seeding...';
    //             Artisan::call('db:seed', ['--force' => true]);
    //             echo '<br>done.';
    //         } catch (Exception $e) {
    //             Response::make($e->getMessage(), 500);
    //         }
    //     }

    //     return view('visits.index');
    // }
}

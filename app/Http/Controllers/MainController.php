<?php
namespace App\Http\Controllers;

use Carbon\Carbon;

class MainController extends \BaseController {

    public function news()
    {
        return View::make('main.partials.news');
    }
    public function gallery()
    {
        return View::make('main.gallery');
    }
    public function calendar($month = null)
    {
        if(!$month)
        {
            $month = Carbon::now()->month;
        }
        return View::make('main.partials.calendar')->with(compact('month'));
    }
    public function history()
    {
        return View::make('main.partials.history');
    }

    public function about()
    {
        return View::make('main.about');

    }
    public function contact()
    {
        return View::make('main.contact');

    }
    public function law()
    {
        return View::make('main.law');

    }

    public function download()
    {
        return View::make('main.download');
    }
}
<?php

use Carbon\Carbon;

class MainController extends \BaseController {

public function news()
{
	return View::make('main.partials.news');
}
public function gallery()
{
	return View::make('main.partials.gallery');
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
}
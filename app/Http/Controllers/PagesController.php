<?php

namespace App\Http\Controllers;


class PagesController extends Controller
{
    



public function index()
{
	return view('pages.index');
}

public function course()
{

	$typeActivities = \App\Models\Types_activity::with('activities_web')->get();
/*	 print_r($typeActivities);
	 exit;*/
	return view('pages.course', ['typeActivities' => $typeActivities]);

}

public function prices()
{
	return view('pages.prices');
}

public function events()
{
	return view('pages.events');
}

public function team()
{
	$team = \App\Models\team::where
	return view('pages.team');
}

public function association()
{
	return view('pages.association');
}

public function credits()
{
	return view('pages.credits');
}

public function legacy_mention()
{
	return view('pages.legacy_mention');
}

public function contact()
{
	return view('pages.contact');
}



}

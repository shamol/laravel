<?php

class HomeController extends BaseController {

	public function showAllPosts() {
		$posts = DB::table('posts')
            ->orderBy('created_at', 'DESC')
            ->get();

        return View::make('home', array('posts' => $posts));
	}

    public function showAbout()	{
		return "About us";
	}

}
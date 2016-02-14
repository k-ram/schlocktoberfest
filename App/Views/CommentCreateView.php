<?php

namespace App\Views;

use App\Views\SingleMovieView;

class CommentCreateView extends SingleMovieView
{
	
	public function render() 
	{
		extract($this->data);
		$page = "movie";
		$page_title = $movie->title;
		$page_title = "Create Movies";
	}
	protected function content()
	{
		extract($this->data);
	}
}
<?php

namespace App\Views;

class MovieCreateView extends TemplateView
{
	
	public function render() 
	{
		extract($this->data);
		$page = "movie.create";
		$page_title = "Create Movies";
		include "templates/master.inc.php";
	}
	protected function content()
	{
		extract($this->data);
		include "templates/moviecreate.inc.php";
	}
}
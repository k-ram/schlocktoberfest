<?php 

namespace App\Controllers;

use App\Views\MerchandiseView;
use App\Models\Merchandise;

	class MerchandiseController extends Controller
	{
		public function show()
		{
			$merchandise = Merchandise::all("name");
			$view = new MerchandiseView(['merchandise'=>$merchandise]);
			$view->render();
		}
	}
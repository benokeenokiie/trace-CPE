<?php

namespace App\Http\Controllers;

use Cornford\Googlmapper\Facades\MapperFacade as Mapper;
use Illuminate\Support\Facades\Route;
	
use Illuminate\Http\Request;
use App\Http\Requests;

class MapController extends Controller
{
	public function map()
    {
	    Mapper::map(
			14.6262,
			121.0620,
			[
				'zoom' => 12, 
				'markers' => 
				[
					'title' => 'My Location', 
					'animation' => 'BOUNCE',
				], 
			'clusters' => 
				[
					'size' => 10, 
					'center' => true, 
					'zoom' => 20
				]
			]
		);

		Mapper::marker(
			14.6381461, 
			121.0630965, 
			[
				'title' => 'Quezon City Police Department', 
				'symbol' => 'circle', 
				'scale' => 1000,
			]);

		Mapper::marker(
			14.6298096, 
			121.045328, 
			[
				'title' => 'QCPD-Station 10', 
				'symbol' => 'circle', 
				'scale' => 1000,
			]);

		Mapper::marker(
			14.6316043, 
			120.9931099, 
			[
				'title' => 'La Loma Police Station', 
				'symbol' => 'circle', 
				'scale' => 1000,
			]);

		Mapper::marker(
			14.706476, 
			121.0710003, 
			[
				'title' => 'Quezon City Police Station 5 Fairview', 
				'symbol' => 'circle', 
				'scale' => 1000,
			]);

		Mapper::marker(
			14.690376, 
			121.0936563, 
			[
				'title' => 'Batasan Police Station 6', 
				'symbol' => 'circle', 
				'scale' => 1000,
			]);

		Mapper::marker(
			14.6519966, 
			121.0632553, 
			[
				'title' => 'U.P. Diliman Police Station and Fire Department', 
				'symbol' => 'circle', 
				'scale' => 1000,
			]);

		Mapper::marker(
			14.706476, 
			121.0710003, 
			[
				'title' => 'Quezon City Police Station 5 Fairview', 
				'symbol' => 'circle', 
				'scale' => 1000,
			]);

		Mapper::marker(
			14.706476, 
			121.0710003, 
			[
				'title' => 'Quezon City Police Station 5 Fairview', 
				'symbol' => 'circle', 
				'scale' => 1000,
			]);

		print '<div style="height:100%; width: 100%;">';
		print Mapper::render();
		print '</div>';

	}
}

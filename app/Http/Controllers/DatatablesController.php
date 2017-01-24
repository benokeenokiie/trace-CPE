<?php

namespace App\Http\Controllers;

// Define the Model to be called here
use App\ReportInfos;

use App\Http\Requests;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;


class DatatablesController extends Controller
{
    /**
 * Displays datatables front end view
 *
 * @return \Illuminate\View\View
 */
	public function getIndex()
	{
    	return view('api.datatables');
	}

/**
 * Process datatables ajax request.
 *
 * 	@return \Illuminate\Http\JsonResponse
 */
	public function anyData()
	{
		$reports = ReportInfos::select(['id', 'drivers_name', 'plate_number', 'description', 'partner_screen_name', 'created_at', 'updated_at'])->get();
		return Datatables::of($reports)->make();
	}
}

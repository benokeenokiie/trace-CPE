<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;

use Charts;
use App\ReportInfos;


class ChartsController extends Controller
{
    public function monthlychart(){
      $chart = Charts::database(ReportInfos::all(),'pie', 'highcharts')
            ->title('Monthly Statistics Reports')
            ->groupByMonth('2017', true)
            ->dimensions(1100, 500)
            ->responsive(false)
            ->elementLabel("Incident Reports as per Month");

        return view('charts.chart', ['chart' => $chart]);
    }

    public function dailychart(){
      $chart = Charts::database(ReportInfos::all(),'bar', 'highcharts')
            ->title('Daily Statistics Reports')
            ->lastByDay(14, true) //->groupByDay('12', '2016', true)
            ->dimensions(1100, 500)
            ->responsive(false)
            ->elementLabel("Incidential Reports as per 2 weeks");

        return view('charts.chart', ['chart' => $chart]);
    }

    public function yearlychart(){
      $chart = Charts::database(ReportInfos::all(),'line', 'highcharts')
            ->title('Yearly Statistics Reports')
            ->groupByYear('5')
            ->dimensions(1100, 500)
            ->responsive(false)
            ->elementLabel("Incidential Reports per Year");

        return view('charts.chart', ['chart' => $chart]);
    }
}
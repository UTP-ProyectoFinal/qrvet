<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class Graficos extends Controller
{

    public function index()
{
    
    $chart_options = [
        'chart_title' => 'Usuarios por mes',
        'report_type' => 'group_by_date',
        'model' => 'App\Models\User',
        'group_by_field' => 'created_at',
        'group_by_period' => 'month',
        'chart_type' => 'bar',
        'filter_field' => 'created_at',
        'filter_days' => 30, // show only last 30 days
    ];

    $chart1 = new LaravelChart($chart_options);


    $chart_options = [
        'chart_title' => 'Usuarios por nombre',
        'report_type' => 'group_by_string',
        'model' => 'App\Models\User',
        'group_by_field' => 'name',
        'chart_type' => 'pie',
        'filter_field' => 'created_at',
        'filter_period' => 'month', // show users only registered this month
    ];

    $chart2 = new LaravelChart($chart_options);

    $chart_options = [
        'chart_title' => 'Alergias por fecha',
        'report_type' => 'group_by_date',
        'model' => 'App\Models\Alergias',
        'group_by_field' => 'created_at',
        'group_by_period' => 'day',
        'aggregate_function' => 'sum',
        'aggregate_field' => 'amount',
        'chart_type' => 'line',
    ];

    $chart3 = new LaravelChart($chart_options);

    return view('Graficos', compact('chart1', 'chart2', 'chart3'));
}
}

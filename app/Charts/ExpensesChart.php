<?php

namespace App\Charts;

use App\Models\Booking;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class ExpensesChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {


        $today = date('d F Y');
        $month = date('F');
        $year = date('Y');

        $day = Booking::where('today_booking', $today)->sum('amount');
        $monthly = Booking::where('monthly_booking', $month)->sum('amount');
        $yearly = Booking::where('yearly_booking', $year)->sum('amount');




        return $this->chart->barChart()
            
            ->addData('Today',[$day])
            ->addData('This Month',[$monthly])
            ->addData('This Year',[$yearly])
            ->setXAxis(['Today', 'This Month', 'This Year']);
    }
}

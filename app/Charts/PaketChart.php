<?php

namespace App\Charts;

use App\Models\Post;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class PaketChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }
    

    public  function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        
        return $this->chart->lineChart()
            ->setTitle('Data Paket Bulanan.')
            ->setSubtitle('Total Data Paket.')
            ->addData('Jumlah Paket',[40, 93, 35, 42, 18, 82])
            ->setXAxis(['Januari', 'Febuari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', "Agustus"])
            ->SetHeight(200);
    }
}

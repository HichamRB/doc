<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;

class WelcomeController extends Controller
{
    public function welcomePDF()
    {
        $data = [];

        for ($i = 1; $i <= 59; $i++) {
            $data[] = [
                'id' => ($i),
                'name' => 'Product ' . $i,
                'price' => rand(10, 100),
            ];
        }

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML(View::make('welcome', compact('data')));

        return $pdf->stream('welcome.pdf');
    }
}

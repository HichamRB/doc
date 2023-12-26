<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;

class WelcomeController extends Controller
{
    /*function generateRandomSentence() {
        $subjects = ['The cat', 'A dog', 'A red car', 'My friend', 'The book', 'A tree'];
        $verbs = ['runs', 'jumps', 'sleeps', 'eats', 'reads', 'flies'];
        $adverbs = ['quickly', 'slowly', 'loudly', 'quietly', 'happily', 'sadly'];
        $adjectives = ['big', 'small', 'fast', 'slow', 'beautiful', 'ugly'];

        $subject = $subjects[array_rand($subjects)];
        $verb = $verbs[array_rand($verbs)];
        $adverb = $adverbs[array_rand($adverbs)];
        $adjective = $adjectives[array_rand($adjectives)];

        // Form a simple sentence pattern with variations
        $patterns = [
            "$subject $subject $subject $subject $subject $subject  $verb.",
            "$subject $subject $subject $subject $subject $subject $subject  $verb $verb $adverb.",
            "$subject is $adjective.",
            "$subject is  $subject $subject $subject $subject $subject $subject  $verb $adjective and $adverb.",
            "The $adjective $subject $verb $adverb.",
            "$subject $verb $subject $subject $subject $subject $subject $subject  $verb around the $adjective $adverb.",
            "$subject $verb $adverb because it's $adjective."
            // Add more sentence patterns as needed
        ];

        return $patterns[array_rand($patterns)];
    }*/

    public function welcomePDF()
    {
        $data = [];

        for ($i = 1; $i <=58; $i++) {
            $data[] = [
                'id' => ($i),
                'name' => 'Product ' . $i,
//                'name' => $this->generateRandomSentence(),
                'price' => rand(10, 100),
            ];
        }

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML(View::make('welcome', compact('data')));

        return $pdf->stream('welcome.pdf');
    }

    /*public function welcomePDF()
    {
        $data = [];

        for ($i = 1; $i <= 59; $i++) {
            $data[] = [
                'id' => $i,
                'name' => 'Product ' . $i,
                'price' => rand(10, 100),
            ];
        }

        return view('welcome', compact('data'));
    }*/

}

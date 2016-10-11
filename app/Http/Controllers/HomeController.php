<?php


namespace App\Http\Controllers;

use App\Http\Controllers\QuotesController;


class HomeController
{
    public function index(){

        $quote = QuotesController::getRandom();

        return view('home', compact('quote'));

    }

}
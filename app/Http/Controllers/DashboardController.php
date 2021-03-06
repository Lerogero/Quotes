<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quote;
class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quotes = Quote::orderBy('created_at', 'desc')->get();
        return view('dashboard', compact('quotes'));

    }

}

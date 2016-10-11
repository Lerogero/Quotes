<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Quote;

class QuotesController extends Controller
{
    protected function create(Request $request)
    {
        $quote = new Quote;

        $quote->firstName = $request->firstName;
        $quote->lastName = $request->lastName;
        $quote->quote = $request->quote;
        $quote->date = $request->date;

        $quote->save();

        return Redirect::back()->withMessage("Quote has been Added!");

    }
    protected function delete($id){

        $quote = Quote::find($id);
        $quote->delete();

        return Redirect::back()->withMessage("Quote has been Deleted!");

    }
    public static function getRandom(){

        return Quote::inRandomOrder()->first();

    }
}

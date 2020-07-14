<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class NewsletterController extends Controller
{
    public function subscribe()
    {
        if ( ! Newsletter::isSubscribed(request('email')) ) {
            Newsletter::subscribe(request('email'));
        }   
        return back();
    }
}

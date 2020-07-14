<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;
use Spatie\Newsletter\Newsletter as NewsletterNewsletter;

class NewsletterCampaignController extends Controller
{
    public function create()
    {
        return view('campaigns.create');
    }

    public function store()
    {

        Newsletter::createCampaign(
            'Ilija',
            "tatalovicilija@gmail.com",
            'test',
        );

        return back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Campaign;
use Illuminate\Http\Request;
use Newsletter;
use Spatie\Newsletter\Newsletter as NewsletterNewsletter;

class CampaignsController extends Controller
{

    public function index()
    {
        $campaigns = Campaign::all();

        return view('campaigns.index', compact('campaigns'));
    }
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

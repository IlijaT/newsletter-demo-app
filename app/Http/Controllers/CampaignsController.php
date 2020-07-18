<?php

namespace App\Http\Controllers;

use App\Campaign;
use App\Newsletters\NewsletterCampaign;
use Illuminate\Http\Request;
use Newsletter;
use Spatie\Newsletter\Newsletter as NewsletterNewsletter;

class CampaignsController extends Controller
{

    protected $mailchimpCampaign;

    public function __construct(NewsletterCampaign $newsletterCampaign) {
        $this->mailchimpCampaign = $newsletterCampaign;
    }

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
        request()->validate([
            'name' => 'required',
            'email' => 'required',
            'date' => 'required',
            'text' => 'required'
        ]);

        $response = $this->mailchimpCampaign->create(
            $fromName = 'tatalovicilija@gmail.com',
            $replyTo = 'tatalovicilija@gmail.com',
            $subject = 'Test Subject 22',
            $html = '',
            $listName = '',
            $options = [],
            $contentOptions = []
        );

        if(! $response) {
            session()->flash('warning', 'Something went wrong, please try again later!');
            return back();
        }
        // ako je response success, snimi kampanju u bazu 

        session()->flash('success', 'Newsletter campaign has been created successfully!');

        return back();
    }
}

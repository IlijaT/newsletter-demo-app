<?php

namespace App\Http\Controllers;

use App\Campaign;
use App\Newsletters\NewsletterCampaign;
use App\Newsletters\NewsletterList;
use Illuminate\Http\Request;
use Newsletter;
use Spatie\Newsletter\Newsletter as NewsletterNewsletter;

class CampaignsController extends Controller
{

    protected $newsletterCampaignService;
    protected $newsletterListService;

    public function __construct(NewsletterCampaign $newsletterCampaign, NewsletterList $newsletterList) {
        $this->newsletterCampaignService = $newsletterCampaign;
        $this->newsletterListService = $newsletterList;
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
            'subject' => 'required',
            'date' => 'required',
            'text' => 'required'
        ]);

        $response = $this->newsletterListService->create(request('name'));

        dd($response);

        $response = $this->newsletterCampaignService->create(
            $fromName = 'fakemail@gmail.com',
            $replyTo = 'fakemail@gmail.com',
            $subject =  request('subject'),
            $html = '',
            $listName = '',
            $options = [],
            $contentOptions = []
        );

        if(! $response) {
            session()->flash('warning', 'Something went wrong, please try again later!');
            return back();
        }

        Campaign::create([
            'title' => $response['settings']['title'],
            'hash_id' => $response['id'],
            'send_time' => $response['send_time'],
            'subject' => $response['settings']['subject_line'],
            'text' => null,
            'from_name' => $response['settings']['from_name'],
            'reply_to' => $response['settings']['reply_to'],
            'sent_url' => $response['_links'][3]['href'],
            'delete_url' => $response['_links'][2]['href'],
            'emails_sent' => $response['emails_sent'] ? now() : null,
            'hash_list_id' =>$response['recipients']['list_id'],
            'campaign_list_id' => $hardcoded = 1,
        ]);
        
        // ako je response success, snimi kampanju u bazu 

        session()->flash('success', 'Newsletter campaign has been created successfully!');

        return back();
    }
}

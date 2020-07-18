<?php

namespace App\Newsletters\Mailchimp;

use Spatie\Newsletter\Newsletter;
use App\Newsletters\NewsletterCampaign as NewsletterCampaignInterface;

class NewsletterCampaign implements NewsletterCampaignInterface
{

    protected $mailchimp;

    public function __construct(Newsletter $newsletter) {
        $this->mailchimp = $newsletter;
    }
    
    public function create($fromName,$replyTo,$subject,$html,$listName,$options,$contentOptions) 
    {
        return $this->mailchimp->createCampaign($fromName,$replyTo,$subject,$html,$listName,$options,$contentOptions);
    }

    public function send() 
    {

    }
}

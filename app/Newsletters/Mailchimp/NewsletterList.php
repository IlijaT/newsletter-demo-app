<?php

namespace App\Newsletters\Mailchimp;

use Spatie\Newsletter\Newsletter;
use App\Newsletters\NewsletterList as NewsletterListInterface;
use DrewM\MailChimp\MailChimp;

class NewsletterList implements NewsletterListInterface
{

    protected $spatieMailchimp;

    public function __construct(Newsletter $newsletter) {
        $this->spatieMailchimp = $newsletter;
    }

    public function create($listName)
    {
        // $mailChimp = new Mailchimp(config('newsletter.apiKey'));
        return $this->spatieMailchimp->mailChimp->post("lists", [
            'name' => 'La la ala',
            'permission_reminder' => 'You signed up for receiving newsletter from our site.',
             'email_type_option' => true, 
             'contact' =>[
                'company' => "MailChimp",
                'address1' => "675 Ponce De Leon Ave NE",
                'address2' => "Suite 5000",
                'city' => "zip",
                'state' => "GA",
                'zip' => "30308",
                'country' => "US",
                'phone' => ""
             ],
             
             'campaign_defaults' => [
                'from_name' => "Ilija",
                'from_email' => "ilija@tatalovic.com",
                'subject' => "MailChimp Demo",
                'language' => "en",
             ]
        ]);
    }

    public function subscribeTo($listName, $email)
    {
        $this->spatieMailchimp->subscribe($email, $mergeFields = [], $listName = '',$options = []);
    }
    
    public function unsubscribeFrom($listName, $email)
    {
        $this->spatieMailchimp->unsubscribe($email, $listName);
    }
}

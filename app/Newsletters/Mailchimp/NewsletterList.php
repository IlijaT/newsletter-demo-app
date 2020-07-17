<?php

namespace App\Newsletters\Mailchimp;

use Spatie\Newsletter\Newsletter;
use App\Newsletters\NewsletterList as NewsletterListInterface;

class NewsletterList implements NewsletterListInterface
{

    protected $mailchimp;

    public function __construct(Newsletter $newsletter) {
        $this->mailchimp = $newsletter;
    }

    public function subscribeTo($listName, $email)
    {
        $this->mailchimp->subscribe($email, $mergeFields = [], $listName = '',$options = []);
    }
    
    public function unsubscribeFrom($listName, $email)
    {
        $this->mailchimp->unsubscribe($email, $listName);
    }
}

<?php

namespace App\Providers;

use App\Newsletters\Mailchimp\NewsletterList as MailchimpNewsletterList;
use App\Newsletters\Mailchimp\NewsletterCampaign as MailchimpNewsletterCampaign;

use App\Newsletters\NewsletterCampaign;
use App\Newsletters\NewsletterList;
use Illuminate\Support\ServiceProvider;

class NewsletterServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(NewsletterList::class, MailchimpNewsletterList::class);
        
        $this->app->bind(NewsletterCampaign::class, MailchimpNewsletterCampaign::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

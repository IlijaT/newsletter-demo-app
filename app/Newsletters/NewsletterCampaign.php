<?php

namespace App\Newsletters;


interface NewsletterCampaign
{
  public function create(
    $fromName,
    $replyTo,
    $subject,
    $html,
    $listName,
    $options,
    $contentOptions);
    
  public function send();
}

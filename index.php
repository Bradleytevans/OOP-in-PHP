<?php

interface Newsletter
{
    public function subscribe($email);
}

class CampaignMonitor implements Newsletter
{
    public function subscribe($email)
    {
        die('subcribing with Campaign Monitor');
    }
}

class Drip implements Newsletter
{
    public function subscribe($email)
    {
        die('subcribing with Drip');
    }
}

class NewsletterSubscriptionsController
{
    public function store(Newsletter $newsletter)
    {
        $email = 'joe@example.com';

        $newsletter->subscribe($email);
    }
}

$controller = new NewsletterSubscriptionsController();
var_dump ($controller->store(new CampaignMonitor()));
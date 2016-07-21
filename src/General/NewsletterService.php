<?php

namespace Examples\General;


class NewsletterService
{
    public function sendWelcomeEmail($user)
    {
        logAction('NewsletterService->sendWelcomeEmail');
        return true;
    }

    public function notifyAdminAboutNewUser($user)
    {
        logAction('NewsletterService->notifyAdminAboutNewUser');
        return true;
    }
}
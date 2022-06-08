<?php

namespace Pradeep-sati12\PasswordChangedMailNotification\Observers;
use Pradeep-sati12\PasswordChangedMailNotification\Contracts\PassworChangedNotificationContract;
use Illuminate\Support\Facades\Mail;
class PasswordChangedObserver
{
    public function updated(PassworChangedNotificationContract $model) {
        $model->sendPasswordChangedNotification();
    }
}
 
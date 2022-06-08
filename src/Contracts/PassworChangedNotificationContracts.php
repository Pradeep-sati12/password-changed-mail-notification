<?php

namespace Pradeep-sati12\PasswordChangedMailNotification\Contracts;

interface PassworChangedNotificationContract{
    public function passwordColumnName();
    public function emailColumnName();
    public function PasswordChangedNotificationMail();
    public function isPasswordChanged();
    public function sendPasswordChangedNotification();
}
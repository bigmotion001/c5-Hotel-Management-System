<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class C5Notification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    private $notifyuserdata;
    public function __construct($notifyuserdata)
    {
        $this->notifyuserdata = $notifyuserdata;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
        ->line($this->notifyuserdata['body'])
        ->action($this->notifyuserdata['text'], $this->notifyuserdata['url'])
        ->line($this->notifyuserdata['thankyou']);
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}

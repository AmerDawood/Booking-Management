<?php

namespace App\Notifications;

use App\Models\Booking;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Messages\DatabaseMessage;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewBooking extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct (protected Booking $bokking)
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {

        $via = ['database'];


        return $via;

    }


    protected function createMessage(){



        return [
            'title' => 'Title Here',
            'body' =>'Content Here',
        ];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {


        return (new MailMessage)
                    ->subject(__('New :type',['type' => 'new type']))
                    ->greeting(__('Hi :name',['name'=>'name here']))
                    ->action('Go To Classwork', 'new link')
                    ->line('Thank you for using our application!');
    }




    public  function toDatabase(object $notifiable) : DatabaseMessage
    {

     return new DatabaseMessage($this->createMessage());
    }


    public  function toBrodcast(object $notifiable) : BroadcastMessage
    {

        return new BroadcastMessage($this->createMessage());

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

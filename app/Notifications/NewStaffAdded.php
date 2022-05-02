<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewStaffAdded extends Notification
{
    use Queueable;
    
    public $user;
    public $pass;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($user,$pass)
    {
        //
        $this->user = $user;
        $this->pass = $pass;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('CREATION DE COMPTE STAFF')
                    ->greeting('Bonjour, '.$this->user['first_name'].' '.$this->user['last_name'])
                    ->line('Votre compte staff vient d\'être crée avec succès.')
                    ->line('Connectez vous avec ce lien ci dessous.')
                    ->action('Je me connecte', url('/login'))
                    ->line('En utilisant le mot passe qui vous a été généré par défaut : '.$this->pass);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}

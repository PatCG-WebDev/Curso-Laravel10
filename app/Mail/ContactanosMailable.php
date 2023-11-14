<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactanosMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data= $data;

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope /* Asunto y destinatario del mail */
    {
        return new Envelope(

            from: new Address('patricia@gmail.com', 'Patricia'),
            subject: 'Información de contacto',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content /* Contenido del email */
    {
        return new Content(
            view: 'emails.contactanos',  /* debemos crear este archivo de la vista */
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class ContattoEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $nome, $cognome, $email, $testo;

    /**
     * Create a new message instance.
     */
    public function __construct($nome, $cognome, $email, $testo)
    {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->email = $email;
        $this->testo = $testo;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Richiesta Inviata Correttamente',
            from: new Address('tommaso.ldo@gmail.com'),
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.contattaci-mail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}

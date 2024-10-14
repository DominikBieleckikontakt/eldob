<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Publiczna zmienna, która będzie przechowywać dane z formularza.
     */
    public $data;

    /**
     * Konstruktor, przyjmuje dane z formularza.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Zwraca szczegóły koperty wiadomości, takie jak temat.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Nowa wiadomość kontaktowa',
        );
    }

    /**
     * Zwraca zawartość wiadomości.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.contact',  // Określamy widok, który ma zostać użyty
            with: ['data' => $this->data] // Przekazujemy dane do widoku
        );
    }

    /**
     * Zwraca załączniki (w tym przypadku brak załączników).
     */
    public function attachments(): array
    {
        return [];
    }
}

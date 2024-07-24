<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;
use Illuminate\Support\Facades\Storage;

class OfficeConversation extends Conversation
{
    protected $type; // Variabel untuk menyimpan jenis office vila

    public function askOfficeType()
    {
        // Menanyakan jenis office vila
        $question = Question::create('Jenis office vila apa yang Anda cari?')
            ->fallback('Tidak dapat menanyakan jenis office vila.')
            ->callbackId('ask_office_type') // Menggunakan callback ID yang berbeda
            ->addButtons([
                Button::create('Office Vila')->value('Office Vila'),
            ]);

        $this->ask($question, function (Answer $answer) {
            $this->type = $answer->getValue(); // Menyimpan pilihan jenis office vila
            $this->say('Baik, saya akan mencari office vila dengan jenis ' . $this->type);

            $this->retrieveOfficeInformation();
        });
    }

    public function retrieveOfficeInformation()
    {
        // Data office vila dengan URL gambar
        $offices = [
            'Office Vila' => [
                [
                    'name' => 'Office Vila',
                    'price' => 'Harga disesuaikan',
                    'rooms' => [
                        'Staff Area',
                        'Director Room',
                        'Receptionist',
                        'Meeting Area',
                    ],
                    'images' => [
                        Storage::url('villas/office_vila1.jpg'),
                        Storage::url('villas/office_vila2.jpg'),
                    ],
                ],
            ],
        ];

        $this->bot->typesAndWaits(1); // Bot menunjukkan bahwa sedang mengetik

        if (array_key_exists($this->type, $offices)) {
            $reply = "Berikut adalah office vila dengan jenis " . $this->type . ":\n";
            foreach ($offices[$this->type] as $office) {
                $reply .= "- " . $office['name'] . " - " . $office['price'] . "\n";
                if (isset($office['rooms'])) {
                    $reply .= "  Ruangan:\n";
                    foreach ($office['rooms'] as $room) {
                        $reply .= "  - " . $room . "\n";
                    }
                }
            }
            $this->say($reply);

            foreach ($offices[$this->type] as $office) {
                if (isset($office['images'])) {
                    $this->sendImages($office['images']);
                }
            }
        } else {
            $this->say('Maaf, tidak ada office vila yang tersedia dengan jenis tersebut.');
        }
    }

    public function sendImages(array $urls)
    {
        $message = OutgoingMessage::create('Berikut gambar office vila:');
        $this->say($message);

        foreach ($urls as $url) {
            $message = OutgoingMessage::create('')
                ->withAttachment(
                    new \BotMan\BotMan\Messages\Attachments\Image($url)
                );

            $this->say($message);
        }
    }

    public function run()
    {
        $this->askOfficeType();
    }
}

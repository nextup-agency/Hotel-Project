<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;
use Illuminate\Support\Facades\Storage;

class MainConversation extends Conversation
{
    protected $type;

    public function askForStart()
    {
        // Deteksi platform yang digunakan
        $driver = $this->bot->getDriver();
        $platform = 'unknown';

        if ($driver->getName() === 'Telegram') {
            $platform = 'Telegram';
        } elseif ($driver->getName() === 'Web') {
            $platform = 'Web';
        }

        // Membuat pesan sambutan berbeda berdasarkan platform
        if ($platform === 'Telegram') {
            $welcomeMessage = 'Selamat datang di Telegram! Apakah Anda ingin mencari jenis vila atau jenis office?';
        } elseif ($platform === 'Web') {
            $welcomeMessage = 'Selamat datang di situs web kami! Apakah Anda ingin mencari jenis vila atau jenis office?';
        } else {
            $welcomeMessage = 'Selamat datang! Apakah Anda ingin mencari jenis vila atau jenis office?';
        }

        $question = Question::create($welcomeMessage)
            ->fallback('Maaf, saya tidak mengerti permintaan Anda.')
            ->callbackId('ask_vila_or_office')
            ->addButtons([
                Button::create('Jenis Vila')->value('Jenis Vila'),
                Button::create('Jenis Office')->value('Jenis Office'),
            ]);

        $this->ask($question, function (Answer $answer) {
            $response = $answer->getValue();

            if ($response === 'Jenis Vila') {
                $this->askVilaType();
            } elseif ($response === 'Jenis Office') {
                $this->askOfficeType();
            } else {
                $this->say('Maaf, saya tidak mengerti permintaan Anda.');
            }
        });
    }

    public function askVilaType()
    {
        $question = Question::create('Jenis vila apa yang Anda cari?')
            ->fallback('Tidak dapat menanyakan jenis vila.')
            ->callbackId('ask_vila_type')
            ->addButtons([
                Button::create('Studio Type A')->value('Studio Type A'),
                Button::create('Studio Type B & C')->value('Studio Type B & C'),
                Button::create('Bedroom Type D & J')->value('Bedroom Type D & J'),
                Button::create('Bedroom Type E & K')->value('Bedroom Type E & K'),
                Button::create('Bedroom Type F & L')->value('Bedroom Type F & L'),
                Button::create('Bedroom Type G & M')->value('Bedroom Type G & M'),
                Button::create('Bedroom Type H & N')->value('Bedroom Type H & N'),
                Button::create('Bedroom Type I & O')->value('Bedroom Type I & O'),
                Button::create('Bedroom Type P')->value('Bedroom Type P'),
                Button::create('Bedroom Type Q')->value('Bedroom Type Q'),
            ]);

        $this->ask($question, function (Answer $answer) {
            $this->type = $answer->getValue();
            $this->say('Baik, saya akan mencari vila dengan jenis ' . $this->type);
            $this->retrieveVilaInformation();
        });
    }

    public function askOfficeType()
    {
        $question = Question::create('Jenis office vila apa yang Anda cari?')
            ->fallback('Tidak dapat menanyakan jenis office vila.')
            ->callbackId('ask_office_type')
            ->addButtons([
                Button::create('Office Vila')->value('Office Vila'),
            ]);

        $this->ask($question, function (Answer $answer) {
            $this->type = $answer->getValue();
            $this->say('Baik, saya akan mencari office vila dengan jenis ' . $this->type);
            $this->retrieveOfficeInformation();
        });
    }

    public function retrieveVilaInformation()
    {
        $villas = [
            'Studio Type A' => [
                ['name' => 'Studio Type A', 'price' => 'Rp 1.500.000/malam', 'images' => [Storage::url('public/afasdfsd.jpg'), Storage::url('public/afasdfsd.jpg')]],
            ],
            'Studio Type B & C' => [
                ['name' => 'Studio Type B & C', 'price' => 'Rp 1.600.000/malam', 'images' => [Storage::url('villas/studio_type_b1.jpg'), Storage::url('villas/studio_type_b2.jpg')]],
            ],
            // Tambahkan data vila lainnya di sini
        ];

        $this->bot->typesAndWaits(1);

        if (array_key_exists($this->type, $villas)) {
            $reply = "Berikut adalah vila dengan jenis " . $this->type . ":\n";
            foreach ($villas[$this->type] as $villa) {
                $reply .= "- " . $villa['name'] . " - " . $villa['price'] . "\n";
                if (isset($villa['rooms'])) {
                    $reply .= "  Ruangan:\n";
                    foreach ($villa['rooms'] as $room) {
                        $reply .= "  - " . $room . "\n";
                    }
                }
            }
            $this->say($reply);

            foreach ($villas[$this->type] as $villa) {
                if (isset($villa['images'])) {
                    $this->sendImages($villa['images']);
                }
            }
        } else {
            $this->say('Maaf, tidak ada vila yang tersedia dengan jenis tersebut.');
        }
    }

    public function retrieveOfficeInformation()
    {
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

        $this->bot->typesAndWaits(1);

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
        $message = OutgoingMessage::create('Berikut gambar:');
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
        $this->askForStart();
    }
}
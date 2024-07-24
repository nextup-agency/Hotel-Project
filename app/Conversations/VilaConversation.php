<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;
use Illuminate\Support\Facades\Storage;

class VilaConversation extends Conversation
{
    protected $type; // Variabel untuk menyimpan jenis vila

    public function askType()
    {
        $question = Question::create('Jenis vila apa yang Anda cari?')
            ->fallback('Tidak dapat menanyakan jenis vila.')
            ->callbackId('ask_type')
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

        return $this->ask($question, function (Answer $answer) {
            $this->type = $answer->getValue(); // Menyimpan pilihan jenis vila
            $this->say('Baik, saya akan mencari vila dengan jenis ' . $this->type);

            // Dummy data vila dengan URL gambar
            $villas = [
                'Studio Type A' => [
                    ['name' => 'Studio Type A', 'price' => 'Rp 1.500.000/malam', 'images' => [Storage::url('villas/studio_type_a1.jpg'), Storage::url('villas/studio_type_a2.jpg')]],
                ],
                'Studio Type B & C' => [
                    ['name' => 'Studio Type B & C', 'price' => 'Rp 1.600.000/malam', 'images' => [Storage::url('villas/studio_type_b1.jpg'), Storage::url('villas/studio_type_b2.jpg')]],
                ],
                'Bedroom Type D & J' => [
                    ['name' => 'Bedroom Type D & J', 'price' => 'Rp 2.000.000/malam', 'images' => [Storage::url('villas/bedroom_type_d1.jpg'), Storage::url('villas/bedroom_type_d2.jpg')]],
                ],
                'Bedroom Type E & K' => [
                    ['name' => 'Bedroom Type E & K', 'price' => 'Rp 2.100.000/malam', 'images' => [Storage::url('villas/bedroom_type_e1.jpg'), Storage::url('villas/bedroom_type_e2.jpg')]],
                ],
                'Bedroom Type F & L' => [
                    ['name' => 'Bedroom Type F & L', 'price' => 'Rp 2.200.000/malam', 'images' => [Storage::url('villas/bedroom_type_f1.jpg'), Storage::url('villas/bedroom_type_f2.jpg')]],
                ],
                'Bedroom Type G & M' => [
                    ['name' => 'Bedroom Type G & M', 'price' => 'Rp 2.300.000/malam', 'images' => [Storage::url('villas/bedroom_type_g1.jpg'), Storage::url('villas/bedroom_type_g2.jpg')]],
                ],
                'Bedroom Type H & N' => [
                    ['name' => 'Bedroom Type H & N', 'price' => 'Rp 2.400.000/malam', 'images' => [Storage::url('villas/bedroom_type_h1.jpg'), Storage::url('villas/bedroom_type_h2.jpg')]],
                ],
                'Bedroom Type I & O' => [
                    ['name' => 'Bedroom Type I & O', 'price' => 'Rp 2.400.000/malam', 'images' => [Storage::url('villas/bedroom_type_h1.jpg'), Storage::url('villas/bedroom_type_h2.jpg')]],
                ],
                'Bedroom Type P' => [
                    ['name' => 'Bedroom Type P', 'price' => 'Rp 2.500.000/malam', 'images' => [Storage::url('villas/bedroom_type_p1.jpg'), Storage::url('villas/bedroom_type_p2.jpg')]],
                ],
                'Bedroom Type Q' => [
                    ['name' => 'Bedroom Type Q', 'price' => 'Rp 2.600.000/malam', 'images' => [Storage::url('villas/bedroom_type_q1.jpg'), Storage::url('villas/bedroom_type_q2.jpg')]],
                ],
            ];

            $this->bot->typesAndWaits(1); // Bot menunjukkan bahwa sedang mengetik

            if (array_key_exists($this->type, $villas)) {
                $reply = "Berikut adalah vila dengan jenis " . $this->type . ":\n";
                foreach ($villas[$this->type] as $villa) {
                    $reply .= "- " . $villa['name'] . " - " . $villa['price'] . "\n";
                }
                $this->say($reply);

                foreach ($villas[$this->type] as $villa) {
                    $this->sendImages($villa['images']);
                }
            } else {
                $this->say('Maaf, tidak ada vila yang tersedia dengan jenis tersebut.');
            }
        });
    }

    public function sendImages(array $urls)
    {
        $message = OutgoingMessage::create('Berikut gambar vila:');
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
        $this->askType();
    }
}

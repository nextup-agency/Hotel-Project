<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Outgoing\Question;


class UnitConversation extends Conversation
{
    protected $unitTypes = [
        'Studio' => ['size' => '36-50 m2', 'price' => 'Rp 912,912,000'],
        '1 Bedroom' => ['size' => '55-78 m2', 'price' => 'Rp 1,379,400,000'],
        '2 Bedroom' => ['size' => '88-126 m2', 'price' => 'Rp 2,401,828,000'],
        '3 Bedroom' => ['size' => '140 m2', 'price' => 'Rp 4,458,373,975'],
        '4 Bedroom' => ['size' => '184 m2', 'price' => 'Rp 5,861,163,113'],
        'Office Space' => ['size' => 'm2', 'price' => '(waiting released)']
    ];

    public function askUnitType()
    {
        $driver = $this->bot->getDriver()->getName();

        if ($driver === 'Telegram') {
            $question = Question::create('Pilih tipe unit yang ingin Anda ketahui:')
                ->addButtons([
                    Button::create('Studio')->value('Studio'),
                    Button::create('1 Bedroom')->value('1 Bedroom'),
                    Button::create('2 Bedroom')->value('2 Bedroom'),
                    Button::create('3 Bedroom')->value('3 Bedroom'),
                    Button::create('4 Bedroom')->value('4 Bedroom'),
                    Button::create('Office Space')->value('Office Space'),
                ]);

            $this->ask($question, function($answer) {
                $unitType = $answer->getValue();

                if (array_key_exists($unitType, $this->unitTypes)) {
                    $unit = $this->unitTypes[$unitType];
                    $this->say("Tipe Unit: $unitType\nUkuran: {$unit['size']}\nHarga: {$unit['price']}");
                } else {
                    $this->say('Maaf, tipe unit yang Anda pilih tidak tersedia.');
                    $this->askUnitType();
                }
            });
        } else {
            $options = "Pilih tipe unit yang ingin Anda ketahui:\n";
            foreach ($this->unitTypes as $key => $value) {
                $options .= "- $key\n";
            }

            $this->ask($options, function($answer) {
                $unitType = ucfirst(strtolower($answer->getText()));

                if (array_key_exists($unitType, $this->unitTypes)) {
                    $unit = $this->unitTypes[$unitType];
                    $this->say("Tipe Unit: $unitType\nUkuran: {$unit['size']}\nHarga: {$unit['price']}");
                } else {
                    $this->say('Maaf, tipe unit yang Anda masukkan tidak tersedia.');
                    $this->askUnitType();
                }
            });
        }
    }

    public function run()
    {
        $this->askUnitType();
    }
}
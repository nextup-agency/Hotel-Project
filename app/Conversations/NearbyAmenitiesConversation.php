<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;

class NearbyAmenitiesConversation extends Conversation
{
    public function run()
    {
        $this->sayNearbyAmenitiesDetails();
    }

    public function sayNearbyAmenitiesDetails()
    {
        // Memeriksa platform
        $driver = $this->bot->getDriver()->getName();

        if ($driver === 'Telegram') {
            // Pesan untuk Telegram (Markdown)
            $message = "Fasilitas Terdekat:\n" .
                       " - Integrated Ferry Terminal Harbour Bay\n" .
                       "- Hotel Marriot 5star, Hotel Swiss Bell 4star, Hotel Zest 3star, Hotel Wey2 3star\n" .
                       "- Office Tower, Menara Aria\n" .
                       "- Resto and Bar Seafood, Sederhana Kuliner".
                       "– Mall Harbour Bay\n" .
                       "– Apartment Harbourbay Residences, bayerina Residences\n";
            $this->say($message, ['parse_mode' => 'Markdown']);
        } elseif ($driver === 'Web') {
            // Pesan untuk Web Widget (HTML)
            $message = "Fasilitas Terdekat:<br>" .
                      " - Integrated Ferry Terminal Harbour Bay<br>" .
                       "- Hotel Marriot 5star, Hotel Swiss Bell 4star, Hotel Zest 3star, Hotel Wey2 3star<br>" .
                       "- Office Tower, Menara Aria<br>" .
                       "- Resto and Bar Seafood, Sederhana Kuliner".
                       "– Mall Harbour Bay<br>" .
                       "– Apartment Harbourbay Residences, bayerina Residences<br>";
            $this->say($message, ['parse_mode' => 'HTML']);
        }
    }
}
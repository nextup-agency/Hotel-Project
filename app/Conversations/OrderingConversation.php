<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;

class OrderingConversation extends Conversation
{
    public function run()
    {
        $this->sayOrderingDetails();
    }

    public function sayOrderingDetails()
    {
        // Memeriksa platform
        $driver = $this->bot->getDriver()->getName();

        if ($driver === 'Telegram') {
            // Pesan untuk Telegram (Markdown)
            $message = "Cara Pemesanan Union Square:\n" .
                       "1. Mengetahui value Union Square\n" .
                       "2. Hubungi 0812-1213-6654\n" .
                       "3. Melakukan transfer Booking Fee Apartment Rp. 10,000,000 ke\n" .
                       "   No Rek 5363-0191-11\n" .
                       "   an PT. Citra Buana Batam Industri\n" .
                       "   (berita #unit/nama anda)\n" .
                       "4. Hubungi untuk konfirmasi pembayaran";
            $this->say($message, ['parse_mode' => 'Markdown']);
        } elseif ($driver === 'Web') {
            // Pesan untuk Web Widget (HTML)
            $message = "Cara Pemesanan Union Square:<br>" .
                       "1. Mengetahui value Union Square<br>" .
                       "2. Hubungi 0812-1213-6654<br>" .
                       "3. Melakukan transfer Booking Fee Apartment Rp. 10,000,000 ke<br>" .
                       "   No Rek 5363-0191-11<br>" .
                       "   an PT. Citra Buana Batam Industri<br>" .
                       "   (berita #unit/nama anda)<br>" .
                       "4. Hubungi untuk konfirmasi pembayaran";
            $this->say($message, ['parse_mode' => 'HTML']);
        }
    }
}
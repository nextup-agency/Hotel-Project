<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;

class AboutConversation extends Conversation
{
    public function run()
    {
        $this->sayAboutDetails();
    }

    public function sayAboutDetails()
{
    // Memeriksa platform
    $driver = $this->bot->getDriver()->getName();

    if ($driver === 'Telegram') {
        // Pesan untuk Telegram (Markdown)
               $message = "
        Union Square Batam merupakan apartment dengan segmentasi high-end, terlihat dengan luasan unit sd 184m2, Union Square di sebut juga sebagai menara kembar selain Residences juga Office pada salah satu Towernya.
        Kawasan HarbourBay Downtown telah terbentuk diantaranya integrated Ferry Terminal Harbour Bay, Hotel Marriot 5star, Hotel Swiss Bell, Zest juga Resto and Bar Seafood yang terkenal di Batam.
        Bangunan terdiri atas 2 tower dengan 37 lantai, yang masing-masing towernya diperuntukan untuk Residences dan Ofiice space. Value apartment adalah, Lokasi Integrated Ferry Terminal HarbourBay , Pemandangan Laut dan Singapore, Lokasi di pusat kota Nagoya, Batam.";
            $this->say($message, ['parse_mode' => 'Markdown']);
    } elseif ($driver === 'Web') {
        // Pesan untuk Web Widget (HTML)
        $message = '<div style="text-align: justify;">
                        Union Square Batam merupakan apartment dengan segmentasi high-end, terlihat dengan luasan unit sd 184m2, Union Square di sebut juga sebagai menara kembar selain Residences juga Office pada salah satu Towernya.
                        Kawasan HarbourBay Downtown telah terbentuk diantaranya integrated Ferry Terminal Harbour Bay, Hotel Marriot 5star, Hotel Swiss Bell, Zest juga Resto and Bar Seafood yang terkenal di Batam.
                        Bangunan terdiri atas 2 tower dengan 37 lantai, yang masing-masing towernya diperuntukan untuk Residences dan Ofiice space. Value apartment adalah, Lokasi Integrated Ferry Terminal HarbourBay , Pemandangan Laut dan Singapore, Lokasi di pusat kota Nagoya, Batam.
                    </div>';
        $this->say($message, ['parse_mode' => 'HTML']);
    }
}
}

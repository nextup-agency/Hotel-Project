<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;

class FileAttachmentConversation extends Conversation
{
    public function run()
    {
        $this->sayFileAttachmentDetails();
    }

    public function sayFileAttachmentDetails()
    {
        // Memeriksa platform
        $driver = $this->bot->getDriver()->getName();

        if ($driver === 'Telegram') {
            // Pesan untuk Telegram (Markdown)
            $message = "Pilih file untuk diunduh:";
            $buttons = [
                ['text' => 'Download Brochure', 'url' => route('file.download', ['filename' => 'Brochure.pdf'])],
                ['text' => 'Download Pricelist', 'url' => route('file.download', ['filename' => 'Pricelist.pdf'])],
            ];
            $this->say($message, ['parse_mode' => 'Markdown', 'reply_markup' => json_encode(['inline_keyboard' => [$buttons]])]);
        } elseif ($driver === 'Web') {
            // Pesan untuk Web Widget (HTML)
            $message = '<p>Pilih file untuk diunduh:</p>
                        <a href="' . route('file.download', ['filename' => 'Brochure.pdf']) . '" target="_blank">Download Brochure</a><br>
                        <a href="' . route('file.download', ['filename' => 'Pricelist.pdf']) . '" target="_blank">Download Pricelist</a>';
            $this->say($message, ['parse_mode' => 'HTML']);
        }
    }
}
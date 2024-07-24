<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conversations\AboutConversation;
use App\Conversations\FileAttachmentConversation;
use BotMan\BotMan\BotMan;
use App\Conversations\VilaConversation;
use App\Http\Middleware\PreventDoubleClicks;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Cache\LaravelCache;
use BotMan\BotMan\Drivers\DriverManager;
use App\Conversations\MainConversation;
use App\Conversations\NearbyAmenitiesConversation;
use App\Conversations\OrderingConversation;
use App\Conversations\UnitConversation;

class TelegramController extends Controller
{
    public function handle()
    {
        DriverManager::loadDriver(\BotMan\Drivers\Telegram\TelegramDriver::class);
        $config = [
            'user_cache_time' => 720,

            'config' => [
                'conversation_cache_time' => 720,
            ],

            // Your driver-specific configuration
            "telegram" => [
                "token" => env('TELEGRAM_TOKEN'),
            ]
        ];

        // // Create BotMan instance
        $botman = BotManFactory::create($config, new LaravelCache());

        $botman->middleware->captured(new PreventDoubleClicks);

        // $botman->hears('start|/start', function (BotMan $bot) {
        //     $bot->reply('Hello! Apa yang bisa saya bantu hari ini?');
        //     $bot->startConversation(new VilaConversation());
        // })->stopsConversation();

        $botman->hears('mulai|/mulai', function (BotMan $bot) {
            $bot->startConversation(new MainConversation());
        });
        $botman->hears('halo|Halo|hai|Hai|hello|Hello', function ($bot) {
            $bot->reply('hai, berikut yang bisa kamu tanyakan buat saya <br>'.
            '1. cara pesan <br>'.
            '2. tentang <br>'.
            '3. fasilitas terdekat <br>'.
            '4. unit <br>'.
            '5. file <br>'
        );
        });
        $botman->hears('cara pesan|/cara_pesan', function (BotMan $bot) {
            $bot->startConversation(new OrderingConversation());
        });

        $botman->hears('tentang|/tentang', function (BotMan $bot) {
            $bot->startConversation(new AboutConversation());
        })->stopsConversation();

        $botman->hears('fasilitas terdekat|/fasilitas_terdekat', function (BotMan $bot) {
            $bot->startConversation(new NearbyAmenitiesConversation());
        })->stopsConversation();

        $botman->hears('unit|/unit', function (BotMan $bot) {
            $bot->startConversation(new UnitConversation());
        })->stopsConversation();


        $botman->hears('file|/file', function (BotMan $bot) {
            $bot->startConversation(new FileAttachmentConversation());
        })->stopsConversation();


        $botman->listen();
}
}

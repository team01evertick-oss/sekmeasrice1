<?php

namespace App\Http\Controllers\Send;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EnquiryController extends Controller
{
     public function send(Request $request)
    {
        $botToken = env('TELEGRAM_BOT_TOKEN');
        $chatId = env('TELEGRAM_CHAT_ID');

        Http::post("https://api.telegram.org/bot{$botToken}/sendMessage", [
            'chat_id' => $chatId,
            'text' => $request->message,
            'parse_mode' => 'Markdown'
        ]);

        return response()->json(['success' => true]);
    }
}



//  fetch(`https://api.telegram.org/bot7587916418:AAEzLlsLWCnIYlo0TPEPm0TRIRpcaP0VEyg/sendMessage`, {
//             method: "POST",
//             headers: { "Content-Type": "application/json" },
//             body: JSON.stringify({
//                 chat_id: "-4819861863",
//                 text: message,
//                 parse_mode: "Markdown"
//             })
//         })

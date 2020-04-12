<?php
ob_start();
define('API_KEY','1219396368:AAGZfVam99uEm6iYyMEirS1XVjFCHwQNS5Y');
$admin = "841986077"; 

function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
function put($fayl,$nima){  
file_put_contents("$fayl","$nima");  
}  
function get($fayl){  
$get = file_get_contents("$fayl");  
return $get;  
}  
   function ty($chat_id){ 
   return bot('sendChatAction', [
   'chat_id' => $chat_id,
   'action' => 'typing',
   ]);
   } 
   function del($nomi){
   array_map('unlink', glob("$nomi"));
   }
          $replyc= json_encode([
           'resize_keyboard'=>false,
                'force_reply' => true,
                'selective' => true
            ]);
$efede = json_decode(file_get_contents('php://input'), true);

$update = json_decode(file_get_contents('php://input'));
$edname = $editm ->from->first_name;
$message = $update->message;
$mesid = $message->message_id;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$forward = $update->message->forward_from;
$editm = $update->edited_message;
$fadmin = $message->from->id;
$tx = $message->text;
//callback
$data = $update->callback_query->data;
$qid = $update->callback_query->id;
$callcid = $update->callback_query->message->chat->id;
$clid = $update->callback_query->from->id;
$callmid = $update->callback_query->message->message_id;
$gid = $update->callback_query->message->chat->id;

//call_back
$data = $update->callback_query->data;
$qid = $update->callback_query->id;
$callcid = $update->callback_query->message->chat->id;
$calltext = $update->callback_query->message->text;
$clid = $update->callback_query->from->id;
$callmid = $update->callback_query->message->message_id;
$gid = $update->callback_query->message->chat->id;

//user
$name = $message->from->first_name;

$id = $message->reply_to_message->from->id;   
$repmid = $message->reply_to_message->message_id; 
$repname = $message->reply_to_message->from->first_name;
$repulogin = $message->reply_to_message->from->username;
$reply = $message->reply_to_message;
$sreply = $message->reply_to_message->text;


$mid = $message->message_id;
$edname = $editm ->from->first_name;
$forward2 = $update->message->forward_from;
$editm = $update->edited_message;
mkdir("data");
mkdir("data/$fadmin");
//JOIN
$kid = 'parallel_orzular'; $kkid = '@parallel_orzulAr'; if(isset($update->message->text)){ $gett = bot('getChatMember',[ 'chat_id' =>$kkid, 'user_id' => $update->message->chat->id, ]); $gget = $gett->result->status; if($gget == "member" or $gget == "creator" or $gget == "administrator"){ } else{ bot('sendMessage',[ 'chat_id'=>$update->message->chat->id, 'message_id'=>$update->message->message_id, 'parse_mode'=>'markdown', 'text'=>"*🇺🇿Salom $name Siz kanalimizga azo emasiz Shuning uchun bot ishlamaydi siz uchun*⛔️ 

Botimizdan to'liq foydalanish uchun [kanalimizga](t.me/$kkid) a'zo bo'ling✅

Kanalga A'zo bo'lganizdan so'ng qaytadan /start ni bosing
\n

Hi $name You are not a member of our channel so the bot will not work for you ⛔️

🇬🇧Subscribe to [channel](t.me/$kkid)  to take full advantage of our bot✅

Once you have subscribed to the channel, press /start again.

\n 
🇷🇺Привет $name Вы не являетесь участником нашего канала, поэтому бот не будет работать на вас ⛔️

Подпишитесь на [канал](t.me/$kkid) , чтобы в полной мере воспользоваться нашим ботом

После того, как вы подписались на канал, снова нажмите /start.
",
'reply_markup'=>json_encode([  'inline_keyboard'=>[  [['text'=>"A'zo bo'lish 🎗",'url'=>'http://t.me/'.$kid.'']], 
] 

]) 
]);return true;
}
    
}
if(isset($tx)){
ty($cid);
}
$starttx = "🇺🇿SALOM $name \n XUSH KELIBSIZ !!BU BOT YORDAMIDA ISMINGIZGA GLAVNIYIZ UCHUN RASM ISHLASHINGIZ MUMKIN . MARHAMAT SINAB KO’RING
YASASH TARTIBI ODDIY #1 DAN KEYIN ISMIZNI YOZING. MASALAN: \n #1 BILOLCHIK
\n BOT HOZIRCHA #14 GACHA ISHLAYDI YANGILASHDA DAVOM ETAMIZA INSHAOLLOH😉😁\n

🇬🇧Hello, $name Welcome! With this bot you can work on your name for your avatar. Please, try. The procedure is simple, write your name after #ENG1. For example: \n #ENG1 Islam
The bot is currently running up to #5. We will continue to update insha Allah 😉😁


\n

🇷🇺Здравствуйте, $name Добро пожаловать! С этим ботом вы можете работать над своим именем для Аватар. Пожалуйста, попробуйте. Процедура проста, напишите свое имя после #RU1. Например: #RU1 ИСЛОМ
Бот в настоящее время работает до #5. Мы будем продолжать обновлять инша Аллах 😉😁
";

if(mb_stripos($tx,"/start")!==false){

   $baza=file_get_contents("data/users.txt");
   if(mb_stripos($baza,$chat_id) !==false){
   }else{
   $txt="\n$chat_id";
   $file=fopen("data/users.txt","a");
   fwrite($file,$txt);
   fclose($file);
   }
}

    if(stripos($tx,"/start") !== false){
  bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$starttx,
'parse_mode'=>'markdown',
'reply_markup'=>json_encode([
   'inline_keyboard'=>[
    [['text'=>'👨🏻‍💻ADMIN','callback_data'=>'sup'],['text'=>'BIZ HAQIMIZDA','callback_data'=>'project']],
       ]
    ])
  ]);
}




if($data=="sup"){
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"🇺🇿👨🏻‍💻TUZUVCHI: @ZEHNLIBOT
\n 🇬🇧 Developer: @ZEHNLIBOT \n
🇷🇺Разработчик: @ZEHNLIBOT
",
        'parse_mode'=>'html',
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"🔙Ortga qaytish", 'callback_data'=>"back"]]
           ]
        ])
    ]);
}
if($data=="back"){
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"$starttx",
        'parse_mode'=>'markdown',
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>'👨🏻‍💻ADMIN','callback_data'=>'sup'],['text'=>'BIZ HAQIMIZDA','callback_data'=>'project']]
           ]
        ])
    ]);
}
if($data=="project"){
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"🇺🇿SALOM $name \n XUSH KELIBSIZ !!BU BOT YORDAMIDA ISMINGIZGA GLAVNIYIZ UCHUN RASM ISHLASHINGIZ MUMKIN . MARHAMAT SINAB KO’RING
YASASH TARTIBI ODDIY #1 DAN KEYIN ISMIZNI YOZING. MASALAN: \n #1 BILOLCHIK
\n BOT HOZIRCHA #14 GACHA ISHLAYDI YANGILASHDA DAVOM ETAMIZA INSHAOLLOH😉😁\n

🇬🇧Hello, $name Welcome! With this bot you can work on your name for your avatar. Please, try. The procedure is simple, write your name after #ENG1. For example: \n #ENG1 Islam
The bot is currently running up to #5. We will continue to update insha Allah 😉😁


\n

🇷🇺Здравствуйте, $name Добро пожаловать! С этим ботом вы можете работать над своим именем для Аватар. Пожалуйста, попробуйте. Процедура проста, напишите свое имя после #RU1. Например: #RU1 ИСЛОМ
Бот в настоящее время работает до #5. Мы будем продолжать обновлять инша Аллах 😉😁",
        'parse_mode'=>'html',
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"🔙Ortga qaytish", 'callback_data'=>"back"]]
           ]
        ])
    ]);
}
if(mb_stripos($tx,"stat")!==false){
      $baza=file_get_contents("data/users.txt");
      $all=substr_count($baza,"\n");
      $gr=substr_count($baza,"-");
      $us=$all-$gr;
      $text = "<b>📡 Bot Foydalanuvchilari
👥 GRUPPALAR: $gr
👤 ODAMLAR: $us
♻️HAMMASI: $all
</b> 👨🏻‍💻@ZEHNLIBOT";
  bot('sendmessage',[
   'chat_id'=>$chat_id,
   'parse_mode'=>'html',
   'text'=>$text,
  ]);
}

//ASOSIY QISM


if(mb_stripos($tx,"#1") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"https://bixuz.asline.ru/CORONA/Corona/corona.php?text=$ex[1]",
'caption'=>"TAYYOR😉😁
created by @Coronaphotobot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'📡KANALIMIZ','url'=>'https://telegram.me/BIXUZ'],['text'=>'👨🏻‍💻ADMIN','url'=>'https://telegram.me/ZEHNLIBOT']]
]
])
]);
}


if(mb_stripos($tx,"#2") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"https://bixuz.asline.ru/CORONA/Corona/corona1.php?text=$ex[1]",
'caption'=>"TAYYOR😉😁
created by @Coronaphotobot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'📡KANALIMIZ','url'=>'https://telegram.me/BIXUZ'],['text'=>'👨🏻‍💻ADMIN','url'=>'https://telegram.me/ZEHNLIBOT']]
]
])
]);
}


if(mb_stripos($tx,"#3") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"https://bixuz.asline.ru/CORONA/Corona/corona2.php?text=$ex[1]",
'caption'=>"TAYYOR😉😁
created by @Coronaphotobot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'📡KANALIMIZ','url'=>'https://telegram.me/BIXUZ'],['text'=>'👨🏻‍💻ADMIN','url'=>'https://telegram.me/ZEHNLIBOT']]
]
])
]);
}


if(mb_stripos($tx,"#4") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"https://bixuz.asline.ru/CORONA.com/Corona/corona3.php?text=$ex[1]",
'caption'=>"TAYYOR😉😁
created by @Coronaphotobot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'📡KANALIMIZ','url'=>'https://telegram.me/BIXUZ'],['text'=>'👨🏻‍💻ADMIN','url'=>'https://telegram.me/ZEHNLIBOT']]
]
])
]);
}


if(mb_stripos($tx,"#5") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"https://bixuz.asline.ru/CORONA/Corona/corona4.php?text=$ex[1]",
'caption'=>"TAYYOR😉😁
created by @Coronaphotobot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'📡KANALIMIZ','url'=>'https://telegram.me/BIXUZ'],['text'=>'👨🏻‍💻ADMIN','url'=>'https://telegram.me/ZEHNLIBOT']]
]
])
]);
}


if(mb_stripos($tx,"#6") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"https://bixuz.asline.ru/CORONA/Corona/corona5.php?text=$ex[1]",
'caption'=>"TAYYOR😉😁
created by @Coronaphotobot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'📡KANALIMIZ','url'=>'https://telegram.me/BIXUZ'],['text'=>'👨🏻‍💻ADMIN','url'=>'https://telegram.me/ZEHNLIBOT']]
]
])
]);
}


if(mb_stripos($tx,"#7") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"https://bixuz.asline.ru/CORONA/Corona/corona6.php?text=$ex[1]",
'caption'=>"TAYYOR😉😁
created by @Coronaphotobot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'📡KANALIMIZ','url'=>'https://telegram.me/BIXUZ'],['text'=>'👨🏻‍💻ADMIN','url'=>'https://telegram.me/ZEHNLIBOT']]
]
])
]);
}


if(mb_stripos($tx,"#8") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"https://bixuz.asline.ru/CORONA/Corona/corona7.php?text=$ex[1]",
'caption'=>"TAYYOR😉😁
created by @Coronaphotobot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'📡KANALIMIZ','url'=>'https://telegram.me/BIXUZ'],['text'=>'👨🏻‍💻ADMIN','url'=>'https://telegram.me/ZEHNLIBOT']]
]
])
]);
}


if(mb_stripos($tx,"#9") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"https://bixuz.asline.ru/CORONA/Corona/corona8.php?text=$ex[1]",
'caption'=>"TAYYOR😉😁
created by @Coronaphotobot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'📡KANALIMIZ','url'=>'https://telegram.me/BIXUZ'],['text'=>'👨🏻‍💻ADMIN','url'=>'https://telegram.me/ZEHNLIBOT']]
]
])
]);
}


if(mb_stripos($tx,"#10") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"https://bixuz.asline.ru/CORONA/Corona/corona9.php?text=$ex[1]",
'caption'=>"TAYYOR😉😁
created by @Coronaphotobot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'📡KANALIMIZ','url'=>'https://telegram.me/BIXUZ'],['text'=>'👨🏻‍💻ADMIN','url'=>'https://telegram.me/ZEHNLIBOT']]
]
])
]);
}


if(mb_stripos($tx,"#11") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"https://bixuz.asline.ru/CORONA/Corona/corona10.php?text=$ex[1]",
'caption'=>"TAYYOR😉😁
created by @Coronaphotobot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'📡KANALIMIZ','url'=>'https://telegram.me/BIXUZ'],['text'=>'👨🏻‍💻ADMIN','url'=>'https://telegram.me/ZEHNLIBOT']]
]
])
]);
}


if(mb_stripos($tx,"#12") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"https://bixuz.asline.ru/CORONA/Corona/corona11.php?text=$ex[1]",
'caption'=>"TAYYOR😉😁
created by @Coronaphotobot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'📡KANALIMIZ','url'=>'https://telegram.me/BIXUZ'],['text'=>'👨🏻‍💻ADMIN','url'=>'https://telegram.me/ZEHNLIBOT']]
]
])
]);
}


if(mb_stripos($tx,"#13") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"https://bixuz.asline.ru/CORONA/Corona/corona12.php?text=$ex[1]",
'caption'=>"TAYYOR😉😁
created by @Coronaphotobot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'📡KANALIMIZ','url'=>'https://telegram.me/BIXUZ'],['text'=>'👨🏻‍💻ADMIN','url'=>'https://telegram.me/ZEHNLIBOT']]
]
])
]);
}

if(mb_stripos($tx,"#14") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"https://bixuz.asline.ru/CORONA/Corona/corona13.php?text=$ex[1]",
'caption'=>"TAYYOR😉😁
created by @Coronaphotobot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'📡KANALIMIZ','url'=>'https://telegram.me/BIXUZ'],['text'=>'👨🏻‍💻ADMIN','url'=>'https://telegram.me/ZEHNLIBOT']]
]
])
]);
}


if(mb_stripos($tx,"#15") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"https://bixuz.asline.ru/CORONA/Corona/corona14.php?text=$ex[1]",
'caption'=>"TAYYOR😉😁
created by @Coronaphotobot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'📡KANALIMIZ','url'=>'https://telegram.me/BIXUZ'],['text'=>'👨🏻‍💻ADMIN','url'=>'https://telegram.me/ZEHNLIBOT']]
]
])
]);
}


if(mb_stripos($tx,"#16") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"https://bixuz.asline.ru/CORONA/Corona/corona15.php?text=$ex[1]",
'caption'=>"TAYYOR😉😁
created by @Coronaphotobot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'📡KANALIMIZ','url'=>'https://telegram.me/BIXUZ'],['text'=>'👨🏻‍💻ADMIN','url'=>'https://telegram.me/ZEHNLIBOT']]
]
])
]);
}


if(mb_stripos($tx,"#16") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"https://bixuz.asline.ru/CORONA/Corona/corona15php?text=$ex[1]",
'caption'=>"TAYYOR😉😁
created by @Coronaphotobot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'📡KANALIMIZ','url'=>'https://telegram.me/BIXUZ'],['text'=>'👨🏻‍💻ADMIN','url'=>'https://telegram.me/ZEHNLIBOT']]
]
])
]);
}


if(mb_stripos($tx,"#17") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"https://bixuz.asline.ru/CORONA/Corona/corona16.php?text=$ex[1]",
'caption'=>"TAYYOR😉😁
created by @Coronaphotobot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'📡KANALIMIZ','url'=>'https://telegram.me/BIXUZ'],['text'=>'👨🏻‍💻ADMIN','url'=>'https://telegram.me/ZEHNLIBOT']]
]
])
]);
}


if(mb_stripos($tx,"#18") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"https://bixuz.asline.ru/CORONA/Corona/corona17.php?text=$ex[1]",
'caption'=>"TAYYOR😉😁
created by @Coronaphotobot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'📡KANALIMIZ','url'=>'https://telegram.me/BIXUZ'],['text'=>'👨🏻‍💻ADMIN','url'=>'https://telegram.me/ZEHNLIBOT']]
]
])
]);
}


if(mb_stripos($tx,"#19") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"https://bixuz.asline.ru/CORONA/Corona/corona18.php?text=$ex[1]",
'caption'=>"TAYYOR😉😁
created by @Coronaphotobot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'📡KANALIMIZ','url'=>'https://telegram.me/BIXUZ'],['text'=>'👨🏻‍💻ADMIN','url'=>'https://telegram.me/ZEHNLIBOT']]
]
])
]);
}


if(mb_stripos($tx,"#20") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"https://bixuz.asline.ru/CORONA/Corona/corona19.php?text=$ex[1]",
'caption'=>"TAYYOR😉😁
created by @Coronaphotobot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'📡KANALIMIZ','url'=>'https://telegram.me/BIXUZ'],['text'=>'👨🏻‍💻ADMIN','url'=>'https://telegram.me/ZEHNLIBOT']]
]
])
]);
}

if(mb_stripos($tx,"#ENG1") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Preparing ......",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"https://bixuz.asline.ru/CORONA/Corona/coronae1.php?text=$ex[1]",
'caption'=>"TAYYOR😉😁
created by @Coronaphotobot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'📡KANALIMIZ','url'=>'https://telegram.me/BIXUZ'],['text'=>'👨🏻‍💻ADMIN','url'=>'https://telegram.me/ZEHNLIBOT']]
]
])
]);
}


if(mb_stripos($tx,"#ENG2") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Preparing .........",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"https://bixuz.asline.ru/CORONA/Corona/coronae2.php?text=$ex[1]",
'caption'=>"TAYYOR😉😁
created by @Coronaphotobot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'📡KANALIMIZ','url'=>'https://telegram.me/BIXUZ'],['text'=>'👨🏻‍💻ADMIN','url'=>'https://telegram.me/ZEHNLIBOT']]
]
])
]);
}

if(mb_stripos($tx,"#ENG3") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Preparing .........",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"https://bixuz.asline.ru/CORONA/Corona/coronae3.php?text=$ex[1]",
'caption'=>"TAYYOR😉😁
created by @Coronaphotobot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'📡KANALIMIZ','url'=>'https://telegram.me/BIXUZ'],['text'=>'👨🏻‍💻ADMIN','url'=>'https://telegram.me/ZEHNLIBOT']]
]
])
]);
}


if(mb_stripos($tx,"#ENG4") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Preparing .........",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"https://bixuz.asline.ru/CORONA/Corona/coronae4.php?text=$ex[1]",
'caption'=>"TAYYOR😉😁
created by @Coronaphotobot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'📡KANALIMIZ','url'=>'https://telegram.me/BIXUZ'],['text'=>'👨🏻‍💻ADMIN','url'=>'https://telegram.me/ZEHNLIBOT']]
]
])
]);
}


if(mb_stripos($tx,"#ENG5") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Preparing .........",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"https://bixuz.asline.ru/CORONA/Corona/coronae5.php?text=$ex[1]",
'caption'=>"TAYYOR😉😁
created by @Coronaphotobot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'📡KANALIMIZ','url'=>'https://telegram.me/BIXUZ'],['text'=>'👨🏻‍💻ADMIN','url'=>'https://telegram.me/ZEHNLIBOT']]
]
])
]);
}


if(mb_stripos($tx,"#ENG6") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Preparing .........",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"https://bixuz.asline.ru/CORONA/Corona/coronae6.php?text=$ex[1]",
'caption'=>"TAYYOR😉😁
created by @Coronaphotobot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'📡KANALIMIZ','url'=>'https://telegram.me/BIXUZ'],['text'=>'👨🏻‍💻ADMIN','url'=>'https://telegram.me/ZEHNLIBOT']]
]
])
]);
}


if(mb_stripos($tx,"#ENG7") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Preparing .........",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"https://bixuz.asline.ru/CORONA/Corona/coronae7.php?text=$ex[1]",
'caption'=>"TAYYOR😉😁
created by @Coronaphotobot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'📡KANALIMIZ','url'=>'https://telegram.me/BIXUZ'],['text'=>'👨🏻‍💻ADMIN','url'=>'https://telegram.me/ZEHNLIBOT']]
]
])
]);
}


if(mb_stripos($tx,"#ENG8") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Preparing .........",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"https://bixuz.asline.ru/CORONA/Corona/coronae8.php?text=$ex[1]",
'caption'=>"TAYYOR😉😁
created by @Coronaphotobot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'📡KANALIMIZ','url'=>'https://telegram.me/BIXUZ'],['text'=>'👨🏻‍💻ADMIN','url'=>'https://telegram.me/ZEHNLIBOT']]
]
])
]);
}


if(mb_stripos($tx,"#ENG9") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Preparing .........",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"https://bixuz.asline.ru/CORONA/Corona/coronae9.php?text=$ex[1]",
'caption'=>"TAYYOR😉😁
created by @Coronaphotobot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'📡KANALIMIZ','url'=>'https://telegram.me/BIXUZ'],['text'=>'👨🏻‍💻ADMIN','url'=>'https://telegram.me/ZEHNLIBOT']]
]
])
]);
}


if(mb_stripos($tx,"#ENG10") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Preparing .........",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"https://bixuz.asline.ru/CORONA/Corona/coronae10.php?text=$ex[1]",
'caption'=>"TAYYOR😉😁
created by @Coronaphotobot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'📡KANALIMIZ','url'=>'https://telegram.me/BIXUZ'],['text'=>'👨🏻‍💻ADMIN','url'=>'https://telegram.me/ZEHNLIBOT']]
]
])
]);
}


if(mb_stripos($tx,"#RU1") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Готовится...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"https://bixuz.asline.ru/CORONA/Corona/coronar1.php?text=$ex[1]",
'caption'=>"TAYYOR😉😁
created by @Coronaphotobot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'📡KANALIMIZ','url'=>'https://telegram.me/BIXUZ'],['text'=>'👨🏻‍💻ADMIN','url'=>'https://telegram.me/ZEHNLIBOT']]
]
])
]);
}


if(mb_stripos($tx,"#RU2") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Готовится...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"https://bixuz.asline.ru/CORONA/Corona/coronar2.php?text=$ex[1]",
'caption'=>"TAYYOR😉😁
created by @Coronaphotobot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'📡KANALIMIZ','url'=>'https://telegram.me/BIXUZ'],['text'=>'👨🏻‍💻ADMIN','url'=>'https://telegram.me/ZEHNLIBOT']]
]
])
]);
}


if(mb_stripos($tx,"#RU3") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Готовится...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"https://bixuz.asline.ru/CORONA/Corona/coronar3.php?text=$ex[1]",
'caption'=>"TAYYOR😉😁
created by @Coronaphotobot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'📡KANALIMIZ','url'=>'https://telegram.me/BIXUZ'],['text'=>'👨🏻‍💻ADMIN','url'=>'https://telegram.me/ZEHNLIBOT']]
]
])
]);
}


if(mb_stripos($tx,"#RU4") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Готовится...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"https://bixuz.asline.ru/CORONA/Corona/coronar4.php?text=$ex[1]",
'caption'=>"TAYYOR😉😁
created by @Coronaphotobot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'📡KANALIMIZ','url'=>'https://telegram.me/BIXUZ'],['text'=>'👨🏻‍💻ADMIN','url'=>'https://telegram.me/ZEHNLIBOT']]
]
])
]);
}


if(mb_stripos($tx,"#RU5") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Готовится...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"https://bixuz.asline.ru/CORONA/Corona/coronar5.php?text=$ex[1]",
'caption'=>"TAYYOR😉😁
created by @Coronaphotobot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'📡KANALIMIZ','url'=>'https://telegram.me/BIXUZ'],['text'=>'👨🏻‍💻ADMIN','url'=>'https://telegram.me/ZEHNLIBOT']]
]
])
]);
}


if(mb_stripos($tx,"#RU6") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Готовится...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"https://bixuz.asline.ru/CORONA/Corona/coronar6.php?text=$ex[1]",
'caption'=>"TAYYOR😉😁
created by @Coronaphotobot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'📡KANALIMIZ','url'=>'https://telegram.me/BIXUZ'],['text'=>'👨🏻‍💻ADMIN','url'=>'https://telegram.me/ZEHNLIBOT']]
]
])
]);
}


if(mb_stripos($tx,"#RU7") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Готовится...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"https://bixuz.asline.ru/CORONA/Corona/coronar7.php?text=$ex[1]",
'caption'=>"TAYYOR😉😁
created by @Coronaphotobot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'📡KANALIMIZ','url'=>'https://telegram.me/BIXUZ'],['text'=>'👨🏻‍💻ADMIN','url'=>'https://telegram.me/ZEHNLIBOT']]
]
])
]);
}


if(mb_stripos($tx,"#RU8") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Готовится...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"https://bixuz.asline.ru/CORONA/Corona/coronar8.php?text=$ex[1]",
'caption'=>"TAYYOR😉😁
created by @Coronaphotobot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'📡KANALIMIZ','url'=>'https://telegram.me/BIXUZ'],['text'=>'👨🏻‍💻ADMIN','url'=>'https://telegram.me/ZEHNLIBOT']]
]
])
]);
}



if(mb_stripos($tx,"#RU9") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Готовится...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"https://bixuz.asline.ru/CORONA/Corona/coronar9.php?text=$ex[1]",
'caption'=>"TAYYOR😉😁
created by @Coronaphotobot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'📡KANALIMIZ','url'=>'https://telegram.me/BIXUZ'],['text'=>'👨🏻‍💻ADMIN','url'=>'https://telegram.me/ZEHNLIBOT']]
]
])
]);
}


if(mb_stripos($tx,"#RU10") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Готовится...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"https://bixuz.asline.ru/CORONA/Corona/coronar10.php?text=$ex[1]",
'caption'=>"TAYYOR😉😁
created by @Coronaphotobot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'📡KANALIMIZ','url'=>'https://telegram.me/BIXUZ'],['text'=>'👨🏻‍💻ADMIN','url'=>'https://telegram.me/ZEHNLIBOT']]
]
])
]);
}
?>
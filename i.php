<?php
$admin = "1235694242";
$admin2 = "1235694242";
$Dev = array("1231723044","1235694242");
$token = "7826802246:AAFDrmz-eLXbKgng3SOBp9d99Cx-6FW6w5Q";
  function bot($method,$datas=[]){
    $abuehab = http_build_query($datas);
        $url = "https://api.telegram.org/bot".$GLOBALS['token']."/".$method."?$abuehab";
        $abuehab_ah = file_get_contents($url);
        return json_decode($abuehab_ah);
}
function delTree($dir) {
   $files = array_diff(scandir($dir), array('.','..'));
    foreach ($files as $file) {
      (is_dir("$dir/$file")) ? delTree("$dir/$file") : unlink("$dir/$file");
    }
    return rmdir($dir);
  }
#-----------(carlos)-----------#
mkdir("bots");
mkdir("data");
$title = $message->chat->title;
$admin = json_decode(file_get_contents("data/admin.json"),1);
$carlos = json_decode(file_get_contents("data/carlos.json"),1);
$name_tag = "[$name](tg://user?id=$from_id)";
$members = explode("\n",file_get_contents("data/members.txt"));
$m = count($members) -1;
#-----------(carlos)-----------#
$update = json_decode(file_get_contents('php://input'));
if($update->message){
	$message = $update->message;
$message_id = $update->message->message_id;
$username = $message->from->username;
$chat_id = $message->chat->id;
$title = $message->chat->title;
$text = $message->text;
$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
}
if($update->callback_query){
$data = $update->callback_query->data;
$chat_id = $update->callback_query->message->chat->id;
$title = $update->callback_query->message->chat->title;
$message_id = $update->callback_query->message->message_id;
$name = $update->callback_query->message->chat->first_name;
$user = $update->callback_query->message->chat->username;
$from_id = $update->callback_query->from->id;
}
if($update->edited_message){
	$message = $update->edited_message;
	$message_id = $message->message_id;
$username = $message->from->username;
$chat_id = $message->chat->id;
$chat_id = $message->chat->id;
$text = $message->text;
$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
	}
	if($update->channel_post){
	$message = $update->channel_post;
	$message_id = $message->message_id;
$chat_id = $message->chat->id;
$text = $message->text;
$user = $message->chat->username;
$title = $message->chat->title;
$name = $message->author_signature;
$from_id = $message->chat->id;
	}
	if($update->edited_channel_post){
	$message = $update->edited_channel_post;
	$message_id = $message->message_id;
$chat_id = $message->chat->id;
$text = $message->text;
$user = $message->chat->username;
$name = $message->author_signature;
$from_id = $message->chat->id;
	}
	if($update->inline_query){
		$inline = $update->inline_query;
		$message = $inline;
		$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
$query = $message->query;
$text = $query;
		}
	if($update->chosen_inline_result){
		$message = $update->chosen_inline_result;
		$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
$inline_message_id = $message->inline_message_id;
$message_id = $inline_message_id;
$text = $message->query;
$query = $text;
		}
		$tc = $update->message->chat->type;
		$re = $update->message->reply_to_message;
		$re_id = $update->message->reply_to_message->from->id;
$re_user = $update->message->reply_to_message->from->username;
$re_name = $update->message->reply_to_message->from->first_name;
$re_messagid = $update->message->reply_to_message->message_id;
$re_chatid = $update->message->reply_to_message->chat->id;
$photo = $message->photo;
$video = $message->video;
$sticker = $message->sticker;
$file = $message->document;
$audio = $message->audio;
$voice = $message->voice;
$caption = $message->caption;
$photo_id = $message->photo[back]->file_id;
$video_id= $message->video->file_id;
$sticker_id = $message->sticker->file_id;
$file_id = $message->document->file_id;
$music_id = $message->audio->file_id;
$forward = $message->forward_from_chat;
$forward_id = $message->forward_from_chat->id;
$title = $message->chat->title;
if($re){
	$forward_type = $re->forward_from->type;
$forward_name = $re->forward_from->first_name;
$forward_user = $re->forward_from->username;
	}else{
$forward_type = $message->forward_from->type;
$forward_name = $message->forward_from->first_name;
$forward_user = $message->forward_from->username;
$forward_id = $message->forward_from->id;
if($forward_name == null){
	$forward = $message->forward_from_chat;
$forward_id = $message->forward_from_chat->id;
$forward_title = $message->forward_from_chat->title;
	}
}
$title = $message->chat->title;
#-----------(carlos)-----------#
$members = $carlos["mmbars"];
if($tc == 'private' and !in_array($from_id,$members)){
$carlos['mmbars'][] = $from_id;
file_put_contents("data/carlos.json",json_encode($carlos));
}
$md3 = count($carlos['mmbars']);
#-----------(carlos)-----------#
$carlos = json_decode(file_get_contents("data/carlos.json"),1);
$botadd = count($carlos['carlos']);
$web = "hgeh.darksidehost.com/NAMERO/";
#-----------(carlos)-----------#
if ($message && in_array($from_id,$carlos['ban'])){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙عزيزي - [$name](tg://user?id=$from_id)
⋄︙تم انت محظور من قبل المطور",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
#-----------(carlos)-----------#
$d9 = $carlos['joen'];
$d11 = $carlos['ch'];
$d10 = $d11;
$join = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$d10&user_id=".$from_id);
if($d11 != null){
if($d9 == "✅"){
$d12 = str_replace("@","",$d10);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*⌔ عذرأ عزيزي عليك الاشتراك 
⌔ في قناة البوت* - $d10
",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'اضغط هنا ✅' ,'callback_data'=>"t.me/$d12"]],
]])
]);return false;
}
}
}
#-----------(carlos)-----------#
$d8 = $carlos['bots'];
if($message and $d8 == "❎" and $from_id != $admin2){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*~ الوضع المجاني معطل كلم المطور لتنصيب مدفوع *
",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
exit();
}
#-----------(carlos)-----------#
if( $text =="/start" or $text =="رجوع ↪️"){
if(in_array($from_id,$Dev)){
	$d6 = $carlos['sarat'];
	$d7 = $carlos['tojahh'];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"• *اهلأ عزيزي* - [$name](tg://user?id=$from_id)
*• اليك قائمة المطور الخاصه في بوتك*
*• الاشتراك  ↫ 〔 $d9 〕*
*• البوت  ↫〔 $d8 〕*
*• التوجيه  ↫ 〔 $d7 〕*
*• الاشعارات  ↫〔 $d6 〕*
*• عدد المصنوعات ↫  〔 $botadd  〕*
*• عدد المشتركين ↫ 〔 $md3 〕*",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"تفعيل البوت"],['text'=>"تعطيل البوت"]],
[['text'=>"تحديث السورس"]],
[['text'=>"تفعيل التنبية"],['text'=>"تعطيل التنبية"]],
[['text'=>"حذف تنصيب"]],
[['text'=>"تفعيل التوجيه"],['text'=>"تعطيل التوجيه"]],
[['text'=>"اذاعة"]],
[['text'=>"تعين الاشتراك"],['text'=>"حذف الاشتراك"]],
[['text'=>"الاحصائيات"]],
[['text'=>"تفعيل الاشتراك"],['text'=>"تعطيل الاشتراك"]],
[['text'=>"المحظورين"],['text'=>"مسح المحظورين"]],
],
'resize_keyboard'=>true
])
]);
$carlos['delbots'] = "off";
$carlos['ok'] = "off";
$carlos['okall'] = "no";
$carlos['okk'] = "no";
file_put_contents("data/carlos.json",json_encode($carlos));
}}
#-----------(carlos)-----------#
if($text =="/start" and !in_array($from_id,$carlos['ban'])){
if(!in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*اهلا بك في سورس بوتاتي*

~ يمكنك صنع بوتات حمايه من الصانع.",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"‹ حذف البوت ›"],['text'=>"‹ صنع بوت ›"]],
[['text'=>"‹ الغاء الامر ›"],['text'=>"‹ طريقه الاستعمال ›"]],[['text'=>""]],
],
'resize_keyboard'=>true
])
]);
}}
#-----------(carlos)-----------#
if($text =="‹ الغاء الامر ›" and !in_array($from_id,$carlos['ban'])){
if(!in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⌔ تم الغاء الامر بنجاح",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"‹ حذف البوت ›"],['text'=>"‹ صنع بوت ›"]],
[['text'=>"‹ الغاء الامر ›"],['text'=>"‹ طريقه الاستعمال ›"]],[['text'=>""]],
],
'resize_keyboard'=>true
])
]);
$carlos[$from_id]['token'] = "nobot";
file_put_contents("data/carlos.json",json_encode($carlos));
}}
#-----------(carlos)-----------#
if($text == "‹ طريقه الاستعمال ›" and !in_array($from_id,$carlos['ban'])){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"كيف يمكنني الحصول على التوكن - TOKEN ؟ 🤔

سنقوم بالدخول الى الـ BotFather وهو عبارة عن بوت الإنشاء التابع لتيلجرام لإنشاء بوت تيليجرام وذلك عن طريق المعرف الأتي : 
@BotFather

بعد الدخول الى البوت كالأتي :

⌔ نضغط على /start لبدء انشاء البوت ، ثم ستظهر لنا واجهة البوت نقوم بالضغط على  ( /newbot  ) كما في الصورة اعلاه .

⌔ بعد اختيار  ( /newbot  )  والتي تقوم بدورها بالبدء بإنشاء البوت ستظهر لنا 

⌔ هنا يخبرنا ان نقوم بإدخال اسم البوت قم بإختيار اسم للبوت الذي تريده مثال انا سأقوم بإختيار اسم سورس كارلوس كالصورة اعلاه انظر معي :

⌔ ارسل اليوزر ( معرف ) بدون @ وفي نهايه المعرف كلمه ( bot ) 

⌔ يرسلك رساله مثل الصوره في الاعلى هذا هو التوكن يبدا من الرقم 
التوكن موضح 
━━━━━━━━━━━━━━━━━ ", 
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
}

if($text == "‹ المطور ›" and !in_array($from_id,$carlos['ban'])){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
┏•━•━•━ 『𝐋𝐄𝐆𝐑』 ━•━•━•┓
╏⍟ 𝚆𝙴𝙻𝙲𝙾𝙼𝙴 𝚃𝙾 
╏⍟ 𝙸𝙽𝙵𝙾 𝙳𝙴𝚅 𝚂𝙾𝚄𝚁𝙲𝙴 
╏⍟ 𝙳𝙴𝚅 : @KKDRR
┗•━•━•━ 『𝐇𝐚𝐌𝐨』 ━•━•━•┛ ", 
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
}
#-----------(carlos)-----------#
$abuehab = $carlos['carlos'];
if($text == "‹ صنع بوت ›" and in_array($from_id,$abuehab) and !in_array($from_id,$carlos['ban'])){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⌔ لديك بوت مصنوع من هذا النوع بالفعل", 
'parse_mode'=>"Markdown",
]);
exit();
}
if($text == "‹ صنع بوت ›" and !in_array($from_id,$carlos['ban'])){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⌔ *الان قم بارسال توكنك الخاص*",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"‹ الغاء الامر ›"]],
],
'resize_keyboard'=>true
])
]);
$carlos[$from_id]['token'] = "bot";
file_put_contents("data/carlos.json",json_encode($carlos));
}
$url_info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$json_info = json_decode($url_info);
$userbot = $json_info->result->username;
$idbot =  $json_info->result->id;
$namebot =  $json_info->result->first_name;
if($user != null){
$userdev = "@$user";
}elseif($user == null){
$userdev = "لا يملك معرف";
}
$get_carlos = file_get_contents("carlos.php");
$info_b = json_decode(file_get_contents("bots/$from_id/carlos/admin.json"),1);
if($text and $carlos[$from_id]['token'] == "bot" and !in_array($from_id,$carlos['ban'])){
if($idbot != null){
$carlos['carlos'][] = $from_id;
$carlos[$from_id]['token'] = "nobot";
file_put_contents("data/carlos.json",json_encode($carlos));
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⌔ تم صنع بوت الحمايه الخاص بك
⌔ معرف بوتك : @$userbot
⌔ ايدي بوتك : $idbot*
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"‹ الغاء الامر ›"]],
],
'resize_keyboard'=>true
])
]);
bot('sendmessage',[
'chat_id'=>$admin2,
'text'=>"⌔ اهلا عزيزي المطور
⌔ هنالك شخص صنع بوت جديد
---
⌔ معلومات المطور
---
⌔ اسمة : $name
⌔ ايدية : $from_id
⌔ معرفة : $userdev
---
⌔ معلومات البوت
---
⌔ اسمة : $namebot
⌔ ايدية : $idbot
⌔ معرفة : @$userbot
---
⌔ نوع المصنوع : سورس بوتاتي
",
]);
mkdir("bots/$from_id");
mkdir("bots/$from_id/carlos");
file_put_contents("bots/$from_id/carlos/bot.php",$get_carlos);
file_get_contents("https://api.telegram.org/bot$text/setwebhook?url=https://$web/bots/$from_id/carlos/bot.php");
$info_b['token'] = $text;
$info_b['id'] = $from_id;
file_put_contents("bots/$from_id/carlos/admin.json",json_encode($info_b));
}
}
if($text == "‹ حذف البوت ›" and !in_array($from_id,$carlos['carlos']) and !in_array($from_id,$carlos['ban'])){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⌔ *انت مو منصب من قبل .* ", 
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
exit();
}
if($text == "‹ حذف البوت ›" and in_array($from_id,$abuehab) and !in_array($from_id,$carlos['ban'])){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⌔ *تم ايقاف وحذف البوت بنجاح*",
'parse_mode'=>"Markdown",
]);
bot('sendmessage',[
'chat_id'=>$admin2,
'text'=>"⌔ اهلا عزيزي المطور
⌔ هنالك شخص صنع بوت جديد
---
⌔ معلومات المطور
---
⌔ اسمة : $name
⌔ ايدية : $from_id
⌔ معرفة : $userdev
---
⌔ نوع البوت محذوف : سورس بوتاتي
",
]);
delTree("bots/$from_id/carlos");
$key = array_search($from_id,$carlos["carlos"]);
unset($carlos["carlos"][$key]);
$carlos["carlos"] = array_values($carlos["carlos"]); 
file_put_contents("data/carlos.json",json_encode($carlos));
}
#-----------(carlos)-----------#
if($text == "تحديث السورس" and in_array($from_id,$Dev)){
foreach(scandir('bots/') as $f2){
if($f2 != '.' and $f2 != '..'){
unlink("bots/$f2/carloss/bot.php");
$upsor = file_get_contents('carlos.php');
file_put_contents("bots/$f2/carloss/bot.php", $upsor); 
}
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>'*⌔ تم تحديث جميع المصنوعات
⌔ عدد المصنوعات ↫ $botadd
*',
'parse_mode'=>"Markdown",
]);
}
#-----------(carlos)-----------#
if($text == "حذف تنصيب" and in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⌔ *ارسل الايدي لشخص المراد*",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"رجوع ↪️"]],
],
'resize_keyboard'=>true
])
]);
$carlos['delbots'] = "on";
file_put_contents("data/carlos.json",json_encode($carlos));
}
$delbas = $carlos['delbots'];
if($text and preg_match('/([0-9])/i',$text) and $delbas == "on" and !in_array($text,$carlos['carlos'])){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⌔ *ليس لدية اي بوت* ‼", 
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
exit();
}
if($text and preg_match('/([0-9])/i',$text) and $delbas == "on" and $from_id == $admin2 and in_array($text,$carlos['carlos'])){
$delnamee = json_decode(file_get_contents("http://api.telegram.org/bot$gtkt/getChat?chat_id=$text"))->result->first_name;
$deluserr = json_decode(file_get_contents("http://api.telegram.org/bot$gtkt/getChat?chat_id=$text"))->result->username;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⌔ *تم حذف البوت بنجاح*
⌔ ايديةة ↫ $text
⌔ اضغط ↫ [مطور لبوت](tg://user?id=$text)
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"رجوع ↪️"]],
],
'resize_keyboard'=>true
])
]);
bot('sendmessage',[
'chat_id'=>$text,
'text'=>"⌔ اهلا عزيزي 
⌔ تم حذف بوتك
⌔ من قبل المطور
---
",
]);
delTree("bots/$text/carlos");
$key = array_search($text,$carlos["carlos"]);
unset($carlos["carlos"][$key]);
$carlos["carlos"] = array_values($carlos["carlos"]); 
file_put_contents("data/carlos",json_encode($carlos));
$carlos['delbots'] = "off";
file_put_contents("data/carlos.json",json_encode($carlos));
}
#-----------(carlos)-----------#
if($text == "الاحصائيات" and in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⌔ *الاحصائيات الخاصه ب بوتك*
*⌔ عدد المصنوعات ↫ $botadd*
*⌔ عدد المشتركين ↫ $md3*",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"رجوع ↪️"]],
],
'resize_keyboard'=>true
])
]);
}
#-----------(carlos)-----------#
$d6 = $carlos['sarat'];
if($text == "تفعيل التنبية" and in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⌔ *تم تفعيل التنبية بنجاح*",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"تعطيل التنبية"]],
[['text'=>"رجوع ↪️"]],
],
'resize_keyboard'=>true
])
]);
$carlos['sarat'] = "✅";
file_put_contents("data/carlos.json",json_encode($carlos));
}
if($text == "تعطيل التنبية" and in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⌔ *تم تعطيل التنبية بنجاح*",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"تفعيل التنبية"]],
[['text'=>"رجوع ↪️"]],
],
'resize_keyboard'=>true
])
]);
$carlos['sarat'] = "❎";
file_put_contents("data/carlos.json",json_encode($carlos));
}
#-----------(carlos)-----------#
$d7 = $carlos['tojahh'];
if($text == "تفعيل التوجيه" and in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⌔ *تم تفعيل التوجيه بنجاح*",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"تعطيل التوجيه"]],
[['text'=>"رجوع ↪️"]],
],
'resize_keyboard'=>true
])
]);
$carlos['tojahh'] = "✅";
file_put_contents("data/carlos.json",json_encode($carlos));
}
if($text == "تعطيل التوجيه" and in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⌔ *تم تعطيل التوجيه بنجاح*",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"تفعيل التوجيه"]],
[['text'=>"رجوع ↪️"]],
],
'resize_keyboard'=>true
])
]);
$carlos['tojahh'] = "❎";
file_put_contents("data/carlos.json",json_encode($carlos));
}
#-----------(carlos)-----------#
if($message and $text != "/start" and $from_id != $admin2 and $d7 == "✅" and !$data){
bot('forwardMessage',[
'chat_id'=>$admin2,
'from_chat_id'=>$chat_id,
 'message_id'=>$update->message->message_id,
'text'=>$text,
]);
}
#-----------(carlos)-----------#
if($user == null){
$user = "None";
}elseif($user != null){
$user = $user;
}
if($text =='/start' and $from_id !=$admin2 and $d6 =="✅"){ 
bot('sendmessage',[ 
'chat_id'=>$admin2,  
'text'=>"تم دخول عضو جديد الى البوت ℹ️ :
الاسم : [$name]
المعرف : [@$user]
الايدي : [$from_id](tg://user?id=$from_id)
⎯ ⎯ ⎯ ⎯
",  
'parse_mode'=>"MarkDown", 
'disable_web_page_preview'=>true, 
]);  
}
#-----------(carlos)-----------#
if($text == "تفعيل البوت" and in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⌔ *تم تفعيل البوت بنجاح*",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"تعطيل البوت"]],
[['text'=>"رجوع ↪️"]],
],
'resize_keyboard'=>true
])
]);
$carlos['bots'] = "✅";
file_put_contents("data/carlos.json",json_encode($carlos));
}
if($text == "تعطيل البوت" and in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⌔ *تم تعطيل البوت بنجاح*",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"تفعيل البوت"]],
[['text'=>"رجوع ↪️"]],
],
'resize_keyboard'=>true
])
]);
$carlos['bots'] = "❎";
file_put_contents("data/carlos.json",json_encode($carlos));
}
#-----------(carlos)-----------#
if($text == "اذاعة" and $from_id == $admin2){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
ارسل الرساله التي تريد اذاعتها يمكن ان تكون (نص، صوره ، فديو، الخ) ⏳
",
'parse_mode'=>"mark

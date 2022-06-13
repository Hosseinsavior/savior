<?php
ob_start();





$admin = 5059280908;
define('API_KEY',"5291804118:AAGmEBAdAWSfDnkNg3SH9DnFP47JcIvx6_8");
$bot_type =  "gold";
$adstext = file_get_contents("data/adstext.txt");
$creator_cmd = file_get_contents("data/creator-cmd.txt");
$sticker = file_get_contents("other/setting/sticker.txt");
$file = file_get_contents("other/setting/file.txt");
$aks = file_get_contents("other/setting/aks.txt");
$banall = file_get_contents("administrative/banall-member/banall.txt");
$music = file_get_contents("other/setting/music.txt");
$film = file_get_contents("other/setting/film.txt");
$voice = file_get_contents("other/setting/voice.txt");
$join = file_get_contents("other/setting/join.txt");
$link = file_get_contents("other/setting/link.txt");
$forward = file_get_contents("other/setting/forward.txt");
$pm_forward = file_get_contents("other/setting/pm_forward.txt");
$pm_resani = file_get_contents("other/setting/pm_resani.txt");
$profile = file_get_contents("other/setting/profile.txt");
$contact = file_get_contents("other/setting/contact.txt");
$location = file_get_contents("other/setting/location.txt");
$on_off = file_get_contents("other/setting/on-off.txt");
$_channelFWD = file_get_contents("other/setting/channelFWD.txt");
$_channelFWD_B = str_replace("@",'',$_channelFWD);
/* Token Bot */
$TOKEN = API_KEY;
$BOT_GET = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getme"));
$BOT_ID = $BOT_GET->result->id;
$truechannelFWD = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$_channelFWD&user_id=".$BOT_ID));
$tchFWD = $truechannelFWD->result->status;
/* Button */
$button_request = json_encode(["inline_keyboard"=>[
[["text"=>"✅ قبول","callback_data"=>"start chat"],["text"=>"❎ رد","callback_data"=>"end chat"]],
[["text"=>"🚫 بلاک","callback_data"=>"block chat"]],
]]);
$button_lock_bot = json_encode(['keyboard'=>[
[['text'=>'↩️منوی اصلی']],
[['text'=>'🔒تنظیم'],['text'=>'🔒حذف']],
],'resize_keyboard'=>true]);
$button_addbutton = json_encode(['keyboard'=>[
[['text'=>'↩️منوی اصلی']],
[['text'=>'🌐آدرس اینترنتی'],['text'=>'💠اینستاگرام']],
[['text'=>'🈁آدرس فید']],
],'resize_keyboard'=>true]);
$button_official_off = json_encode(['keyboard'=>[
[['text'=>'🔯غیر فعال کردن حالت ادمین']],
[['text'=>'⤴️پیام همگانی'],['text'=>'🈂فوروارد همگانی']],
[['text'=>'♓همگانی و عکس'],['text'=>'⏫همگانی و فایل']],
[['text'=>'🉑پاسخ سریع'],['text'=>'🔲مدیریت دکمه ها']],
[['text'=>'👱ادمین ها'],['text'=>'📫پروفایل']],
[['text'=>'❇️متن پیشفرض'],['text'=>'🆕متن استارت']],
[['text'=>'🔴ریست کردن'],['text'=>'🆙ارتقا ربات']],
[['text'=>'📮پیام به کاربر'],['text'=>'🔧تنظیمات']],
[['text'=>'📊آمار'],['text'=>'☎️کانتکت']],
[['text'=>'📥دانلودر'],['text'=>'📤آپلود داخلی']],
[['text'=>'⛔️خاموش کردن بات'],['text'=>'📣تنظیم چنل']],
[['text'=>'⚠️راهنما'],['text'=>'📂پشتیبان گیری']],
[
['text'=>'🔒قفل ربات'],['text'=>'♦حساب کاربری ربات']
],
],'resize_keyboard'=>true]);
$button_official_on = json_encode(['keyboard'=>[
[['text'=>'🔯غیر فعال کردن حالت ادمین']],
[['text'=>'⤴️پیام همگانی'],['text'=>'🈂فوروارد همگانی']],
[['text'=>'♓همگانی و عکس'],['text'=>'⏫همگانی و فایل']],
[['text'=>'🉑پاسخ سریع'],['text'=>'🔲مدیریت دکمه ها']],
[['text'=>'👱ادمین ها'],['text'=>'📫پروفایل']],
[['text'=>'❇️متن پیشفرض'],['text'=>'🆕متن استارت']],
[['text'=>'🔴ریست کردن'],['text'=>'🆙ارتقا ربات']],
[['text'=>'📮پیام به کاربر'],['text'=>'🔧تنظیمات']],
[['text'=>'📊آمار'],['text'=>'☎️کانتکت']],
[['text'=>'📥دانلودر'],['text'=>'📤آپلود داخلی']],
[['text'=>'✴️روشن کردن بات'],['text'=>'📣تنظیم چنل']],
[['text'=>'⚠️راهنما'],['text'=>'📂پشتیبان گیری']],
[
['text'=>'🔒قفل ربات'],['text'=>'♦حساب کاربری ربات']
],
],'resize_keyboard'=>true]);
if($on_off == 'true'){
$button_official = json_encode(['keyboard'=>[
[['text'=>'🔯غیر فعال کردن حالت ادمین']],
[['text'=>'⤴️پیام همگانی'],['text'=>'🈂فوروارد همگانی']],
[['text'=>'♓همگانی و عکس'],['text'=>'⏫همگانی و فایل']],
[['text'=>'🉑پاسخ سریع'],['text'=>'🔲مدیریت دکمه ها']],
[['text'=>'👱ادمین ها'],['text'=>'📫پروفایل']],
[['text'=>'❇️متن پیشفرض'],['text'=>'🆕متن استارت']],
[['text'=>'🔴ریست کردن'],['text'=>'🆙ارتقا ربات']],
[['text'=>'📮پیام به کاربر'],['text'=>'🔧تنظیمات']],
[['text'=>'📊آمار'],['text'=>'☎️کانتکت']],
[['text'=>'📥دانلودر'],['text'=>'📤آپلود داخلی']],
[['text'=>'⛔️خاموش کردن بات'],['text'=>'📣تنظیم چنل']],
[['text'=>'⚠️راهنما'],['text'=>'📂پشتیبان گیری']],
[
['text'=>'🔒قفل ربات'],['text'=>'♦حساب کاربری ربات']
],
],'resize_keyboard'=>true]);
}else{
$button_official = json_encode(['keyboard'=>[
[['text'=>'🔯غیر فعال کردن حالت ادمین']],
[['text'=>'⤴️پیام همگانی'],['text'=>'🈂فوروارد همگانی']],
[['text'=>'♓همگانی و عکس'],['text'=>'⏫همگانی و فایل']],
[['text'=>'🉑پاسخ سریع'],['text'=>'🔲مدیریت دکمه ها']],
[['text'=>'👱ادمین ها'],['text'=>'📫پروفایل']],
[['text'=>'❇️متن پیشفرض'],['text'=>'🆕متن استارت']],
[['text'=>'🔴ریست کردن'],['text'=>'🆙ارتقا ربات']],
[['text'=>'📮پیام به کاربر'],['text'=>'🔧تنظیمات']],
[['text'=>'📊آمار'],['text'=>'☎️کانتکت']],
[['text'=>'📥دانلودر'],['text'=>'📤آپلود داخلی']],
[['text'=>'✴️روشن کردن بات'],['text'=>'📣تنظیم چنل']],
[['text'=>'⚠️راهنما'],['text'=>'📂پشتیبان گیری']],
[
['text'=>'🔒قفل ربات'],['text'=>'♦حساب کاربری ربات']
],
],'resize_keyboard'=>true]);
}
$button_s2a = json_encode(['keyboard'=>[
[['text'=>'↩️منوی اصلی'],['text'=>'✅بله']],
],'resize_keyboard'=>true]);
$button_remove = json_encode(['KeyboardRemove'=>[
],'remove_keyboard'=>true]);
$button_setting = json_encode(["inline_keyboard"=>[
[["text"=>"دسترسی استیکر $sticker","callback_data"=>"sticker"]],
[["text"=>"دسترسی فایل $file","callback_data"=>"file"]],
[["text"=>"دسترسی عکس $aks","callback_data"=>"aks"]],
[["text"=>"دسترسی موزیک $music","callback_data"=>"music"]],
[["text"=>"دسترسی فیلم $film","callback_data"=>"film"]],
[["text"=>"دسترسی وویس $voice","callback_data"=>"voice"]],
[["text"=>"دسترسی لینک $link","callback_data"=>"link"]],
[["text"=>"دسترسی فوروارد $forward","callback_data"=>"forward"]],
[["text"=>"دعوت به گروه $join","callback_data"=>"join"]],
[["text"=>"فوروارد پیام ها $pm_forward","callback_data"=>"pm_forward"]],
[["text"=>"پیام رسانی $pm_resani","callback_data"=>"pm_resani"]],
]]);
$button_setting_sticker_off = json_encode(["inline_keyboard"=>[
[["text"=>"دسترسی استیکر ⛔️","callback_data"=>"sticker"]],
[["text"=>"دسترسی فایل $file","callback_data"=>"file"]],
[["text"=>"دسترسی عکس $aks","callback_data"=>"aks"]],
[["text"=>"دسترسی موزیک $music","callback_data"=>"music"]],
[["text"=>"دسترسی فیلم $film","callback_data"=>"film"]],
[["text"=>"دسترسی وویس $voice","callback_data"=>"voice"]],
[["text"=>"دسترسی لینک $link","callback_data"=>"link"]],
[["text"=>"دسترسی فوروارد $forward","callback_data"=>"forward"]],
[["text"=>"دعوت به گروه $join","callback_data"=>"join"]],
[["text"=>"فوروارد پیام ها $pm_forward","callback_data"=>"pm_forward"]],
[["text"=>"پیام رسانی $pm_resani","callback_data"=>"pm_resani"]],
]]);
$button_setting_sticker_on = json_encode(["inline_keyboard"=>[
[["text"=>"دسترسی استیکر ✅","callback_data"=>"sticker"]],
[["text"=>"دسترسی فایل $file","callback_data"=>"file"]],
[["text"=>"دسترسی عکس $aks","callback_data"=>"aks"]],
[["text"=>"دسترسی موزیک $music","callback_data"=>"music"]],
[["text"=>"دسترسی فیلم $film","callback_data"=>"film"]],
[["text"=>"دسترسی وویس $voice","callback_data"=>"voice"]],
[["text"=>"دسترسی لینک $link","callback_data"=>"link"]],
[["text"=>"دسترسی فوروارد $forward","callback_data"=>"forward"]],
[["text"=>"دعوت به گروه $join","callback_data"=>"join"]],
[["text"=>"فوروارد پیام ها $pm_forward","callback_data"=>"pm_forward"]],
[["text"=>"پیام رسانی $pm_resani","callback_data"=>"pm_resani"]],
]]);
$button_setting_file_off = json_encode(["inline_keyboard"=>[
[["text"=>"دسترسی استیکر $sticker","callback_data"=>"sticker"]],
[["text"=>"دسترسی فایل ⛔️","callback_data"=>"file"]],
[["text"=>"دسترسی عکس $aks","callback_data"=>"aks"]],
[["text"=>"دسترسی موزیک $music","callback_data"=>"music"]],
[["text"=>"دسترسی فیلم $film","callback_data"=>"film"]],
[["text"=>"دسترسی وویس $voice","callback_data"=>"voice"]],
[["text"=>"دسترسی لینک $link","callback_data"=>"link"]],
[["text"=>"دسترسی فوروارد $forward","callback_data"=>"forward"]],
[["text"=>"دعوت به گروه $join","callback_data"=>"join"]],
[["text"=>"فوروارد پیام ها $pm_forward","callback_data"=>"pm_forward"]],
[["text"=>"پیام رسانی $pm_resani","callback_data"=>"pm_resani"]],
]]);
$button_setting_file_on = json_encode(["inline_keyboard"=>[
[["text"=>"دسترسی استیکر $sticker","callback_data"=>"sticker"]],
[["text"=>"دسترسی فایل ✅","callback_data"=>"file"]],
[["text"=>"دسترسی عکس $aks","callback_data"=>"aks"]],
[["text"=>"دسترسی موزیک $music","callback_data"=>"music"]],
[["text"=>"دسترسی فیلم $film","callback_data"=>"film"]],
[["text"=>"دسترسی وویس $voice","callback_data"=>"voice"]],
[["text"=>"دعوت به گروه $join","callback_data"=>"join"]],
[["text"=>"دسترسی لینک $link","callback_data"=>"link"]],
[["text"=>"دسترسی فوروارد $forward","callback_data"=>"forward"]],
[["text"=>"دعوت به گروه $join","callback_data"=>"join"]],
[["text"=>"فوروارد پیام ها $pm_forward","callback_data"=>"pm_forward"]],
[["text"=>"پیام رسانی $pm_resani","callback_data"=>"pm_resani"]],
]]);
$button_setting_aks_off = json_encode(["inline_keyboard"=>[
[["text"=>"دسترسی استیکر $sticker","callback_data"=>"sticker"]],
[["text"=>"دسترسی فایل $file","callback_data"=>"file"]],
[["text"=>"دسترسی عکس ⛔️","callback_data"=>"aks"]],
[["text"=>"دسترسی موزیک $music","callback_data"=>"music"]],
[["text"=>"دسترسی فیلم $film","callback_data"=>"film"]],
[["text"=>"دسترسی وویس $voice","callback_data"=>"voice"]],
[["text"=>"دسترسی لینک $link","callback_data"=>"link"]],
[["text"=>"دسترسی فوروارد $forward","callback_data"=>"forward"]],
[["text"=>"دعوت به گروه $join","callback_data"=>"join"]],
[["text"=>"فوروارد پیام ها $pm_forward","callback_data"=>"pm_forward"]],
[["text"=>"پیام رسانی $pm_resani","callback_data"=>"pm_resani"]],
]]);
$button_setting_aks_on = json_encode(["inline_keyboard"=>[
[["text"=>"دسترسی استیکر $sticker","callback_data"=>"sticker"]],
[["text"=>"دسترسی فایل $file","callback_data"=>"file"]],
[["text"=>"دسترسی عکس ✅","callback_data"=>"aks"]],
[["text"=>"دسترسی موزیک $music","callback_data"=>"music"]],
[["text"=>"دسترسی فیلم $film","callback_data"=>"film"]],
[["text"=>"دسترسی وویس $voice","callback_data"=>"voice"]],
[["text"=>"دسترسی لینک $link","callback_data"=>"link"]],
[["text"=>"دسترسی فوروارد $forward","callback_data"=>"forward"]],
[["text"=>"دعوت به گروه $join","callback_data"=>"join"]],
[["text"=>"فوروارد پیام ها $pm_forward","callback_data"=>"pm_forward"]],
[["text"=>"پیام رسانی $pm_resani","callback_data"=>"pm_resani"]],
]]);
$button_setting_music_off = json_encode(["inline_keyboard"=>[
[["text"=>"دسترسی استیکر $sticker","callback_data"=>"sticker"]],
[["text"=>"دسترسی فایل $file","callback_data"=>"file"]],
[["text"=>"دسترسی عکس $aks","callback_data"=>"aks"]],
[["text"=>"دسترسی موزیک ⛔️","callback_data"=>"music"]],
[["text"=>"دسترسی فیلم $film","callback_data"=>"film"]],
[["text"=>"دسترسی وویس $voice","callback_data"=>"voice"]],
[["text"=>"دسترسی لینک $link","callback_data"=>"link"]],
[["text"=>"دسترسی فوروارد $forward","callback_data"=>"forward"]],
[["text"=>"دعوت به گروه $join","callback_data"=>"join"]],
[["text"=>"فوروارد پیام ها $pm_forward","callback_data"=>"pm_forward"]],
[["text"=>"پیام رسانی $pm_resani","callback_data"=>"pm_resani"]],
]]);
$button_setting_music_on = json_encode(["inline_keyboard"=>[
[["text"=>"دسترسی استیکر $sticker","callback_data"=>"sticker"]],
[["text"=>"دسترسی فایل $file","callback_data"=>"file"]],
[["text"=>"دسترسی عکس $aks","callback_data"=>"aks"]],
[["text"=>"دسترسی موزیک ✅","callback_data"=>"music"]],
[["text"=>"دسترسی فیلم $film","callback_data"=>"film"]],
[["text"=>"دسترسی وویس $voice","callback_data"=>"voice"]],
[["text"=>"دسترسی لینک $link","callback_data"=>"link"]],
[["text"=>"دسترسی فوروارد $forward","callback_data"=>"forward"]],
[["text"=>"دعوت به گروه $join","callback_data"=>"join"]],
[["text"=>"فوروارد پیام ها $pm_forward","callback_data"=>"pm_forward"]],
[["text"=>"پیام رسانی $pm_resani","callback_data"=>"pm_resani"]],
]]);
$button_setting_film_off = json_encode(["inline_keyboard"=>[
[["text"=>"دسترسی استیکر $sticker","callback_data"=>"sticker"]],
[["text"=>"دسترسی فایل $file","callback_data"=>"file"]],
[["text"=>"دسترسی عکس $aks","callback_data"=>"aks"]],
[["text"=>"دسترسی موزیک $music","callback_data"=>"music"]],
[["text"=>"دسترسی فیلم ⛔️","callback_data"=>"film"]],
[["text"=>"دسترسی وویس $voice","callback_data"=>"voice"]],
[["text"=>"دسترسی لینک $link","callback_data"=>"link"]],
[["text"=>"دسترسی فوروارد $forward","callback_data"=>"forward"]],
[["text"=>"دعوت به گروه $join","callback_data"=>"join"]],
[["text"=>"فوروارد پیام ها $pm_forward","callback_data"=>"pm_forward"]],
[["text"=>"پیام رسانی $pm_resani","callback_data"=>"pm_resani"]],
]]);
$button_setting_film_on = json_encode(["inline_keyboard"=>[
[["text"=>"دسترسی استیکر $sticker","callback_data"=>"sticker"]],
[["text"=>"دسترسی فایل $file","callback_data"=>"file"]],
[["text"=>"دسترسی عکس $aks","callback_data"=>"aks"]],
[["text"=>"دسترسی موزیک $music","callback_data"=>"music"]],
[["text"=>"دسترسی فیلم ✅","callback_data"=>"film"]],
[["text"=>"دسترسی وویس $voice","callback_data"=>"voice"]],
[["text"=>"دسترسی لینک $link","callback_data"=>"link"]],
[["text"=>"دسترسی فوروارد $forward","callback_data"=>"forward"]],
[["text"=>"دعوت به گروه $join","callback_data"=>"join"]],
[["text"=>"فوروارد پیام ها $pm_forward","callback_data"=>"pm_forward"]],
[["text"=>"پیام رسانی $pm_resani","callback_data"=>"pm_resani"]],
]]);
$button_setting_voice_off = json_encode(["inline_keyboard"=>[
[["text"=>"دسترسی استیکر $sticker","callback_data"=>"sticker"]],
[["text"=>"دسترسی فایل $file","callback_data"=>"file"]],
[["text"=>"دسترسی عکس $aks","callback_data"=>"aks"]],
[["text"=>"دسترسی موزیک $music","callback_data"=>"music"]],
[["text"=>"دسترسی فیلم $film","callback_data"=>"film"]],
[["text"=>"دسترسی وویس ⛔️","callback_data"=>"voice"]],
[["text"=>"دسترسی لینک $link","callback_data"=>"link"]],
[["text"=>"دسترسی فوروارد $forward","callback_data"=>"forward"]],
[["text"=>"دعوت به گروه $join","callback_data"=>"join"]],
[["text"=>"فوروارد پیام ها $pm_forward","callback_data"=>"pm_forward"]],
[["text"=>"پیام رسانی $pm_resani","callback_data"=>"pm_resani"]],
]]);
$button_setting_voice_on = json_encode(["inline_keyboard"=>[
[["text"=>"دسترسی استیکر $sticker","callback_data"=>"sticker"]],
[["text"=>"دسترسی فایل $file","callback_data"=>"file"]],
[["text"=>"دسترسی عکس $aks","callback_data"=>"aks"]],
[["text"=>"دسترسی موزیک $music","callback_data"=>"music"]],
[["text"=>"دسترسی فیلم $film","callback_data"=>"film"]],
[["text"=>"دسترسی وویس ✅","callback_data"=>"voice"]],
[["text"=>"دسترسی لینک $link","callback_data"=>"link"]],
[["text"=>"دسترسی فوروارد $forward","callback_data"=>"forward"]],
[["text"=>"دعوت به گروه $join","callback_data"=>"join"]],
[["text"=>"فوروارد پیام ها $pm_forward","callback_data"=>"pm_forward"]],
[["text"=>"پیام رسانی $pm_resani","callback_data"=>"pm_resani"]],
]]);
$button_setting_join_off = json_encode(["inline_keyboard"=>[
[["text"=>"دسترسی استیکر $sticker","callback_data"=>"sticker"]],
[["text"=>"دسترسی فایل $file","callback_data"=>"file"]],
[["text"=>"دسترسی عکس $aks","callback_data"=>"aks"]],
[["text"=>"دسترسی موزیک $music","callback_data"=>"music"]],
[["text"=>"دسترسی فیلم $film","callback_data"=>"film"]],
[["text"=>"دسترسی وویس $voice","callback_data"=>"voice"]],
[["text"=>"دسترسی لینک $link","callback_data"=>"link"]],
[["text"=>"دسترسی فوروارد $forward","callback_data"=>"forward"]],
[["text"=>"دعوت به گروه ⛔️","callback_data"=>"join"]],
[["text"=>"فوروارد پیام ها $pm_forward","callback_data"=>"pm_forward"]],
[["text"=>"پیام رسانی $pm_resani","callback_data"=>"pm_resani"]],
]]);
$button_setting_join_on = json_encode(["inline_keyboard"=>[
[["text"=>"دسترسی استیکر $sticker","callback_data"=>"sticker"]],
[["text"=>"دسترسی فایل $file","callback_data"=>"file"]],
[["text"=>"دسترسی عکس $aks","callback_data"=>"aks"]],
[["text"=>"دسترسی موزیک $music","callback_data"=>"music"]],
[["text"=>"دسترسی فیلم $film","callback_data"=>"film"]],
[["text"=>"دسترسی وویس $voice","callback_data"=>"voice"]],
[["text"=>"دسترسی لینک $link","callback_data"=>"link"]],
[["text"=>"دسترسی فوروارد $forward","callback_data"=>"forward"]],
[["text"=>"دعوت به گروه ✅","callback_data"=>"join"]],
[["text"=>"فوروارد پیام ها $pm_forward","callback_data"=>"pm_forward"]],
[["text"=>"پیام رسانی $pm_resani","callback_data"=>"pm_resani"]],
]]);
$button_setting_link_off = json_encode(["inline_keyboard"=>[
[["text"=>"دسترسی استیکر $sticker","callback_data"=>"sticker"]],
[["text"=>"دسترسی فایل $file","callback_data"=>"file"]],
[["text"=>"دسترسی عکس $aks","callback_data"=>"aks"]],
[["text"=>"دسترسی موزیک $music","callback_data"=>"music"]],
[["text"=>"دسترسی فیلم $film","callback_data"=>"film"]],
[["text"=>"دسترسی وویس $voice","callback_data"=>"voice"]],
[["text"=>"دسترسی لینک ⛔️","callback_data"=>"link"]],
[["text"=>"دسترسی فوروارد $forward","callback_data"=>"forward"]],
[["text"=>"دعوت به گروه $join","callback_data"=>"join"]],
[["text"=>"فوروارد پیام ها $pm_forward","callback_data"=>"pm_forward"]],
[["text"=>"پیام رسانی $pm_resani","callback_data"=>"pm_resani"]],
]]);
$button_setting_link_on = json_encode(["inline_keyboard"=>[
[["text"=>"دسترسی استیکر $sticker","callback_data"=>"sticker"]],
[["text"=>"دسترسی فایل $file","callback_data"=>"file"]],
[["text"=>"دسترسی عکس $aks","callback_data"=>"aks"]],
[["text"=>"دسترسی موزیک $music","callback_data"=>"music"]],
[["text"=>"دسترسی فیلم $film","callback_data"=>"film"]],
[["text"=>"دسترسی وویس $voice","callback_data"=>"voice"]],
[["text"=>"دسترسی لینک ✅","callback_data"=>"link"]],
[["text"=>"دسترسی فوروارد $forward","callback_data"=>"forward"]],
[["text"=>"دعوت به گروه $join","callback_data"=>"join"]],
[["text"=>"فوروارد پیام ها $pm_forward","callback_data"=>"pm_forward"]],
[["text"=>"پیام رسانی $pm_resani","callback_data"=>"pm_resani"]],
]]);
$button_setting_forward_off = json_encode(["inline_keyboard"=>[
[["text"=>"دسترسی استیکر $sticker","callback_data"=>"sticker"]],
[["text"=>"دسترسی فایل $file","callback_data"=>"file"]],
[["text"=>"دسترسی عکس $aks","callback_data"=>"aks"]],
[["text"=>"دسترسی موزیک $music","callback_data"=>"music"]],
[["text"=>"دسترسی فیلم $film","callback_data"=>"film"]],
[["text"=>"دسترسی وویس $voice","callback_data"=>"voice"]],
[["text"=>"دسترسی لینک $link","callback_data"=>"link"]],
[["text"=>"دسترسی فوروارد ⛔️","callback_data"=>"forward"]],
[["text"=>"دعوت به گروه $join","callback_data"=>"join"]],
[["text"=>"فوروارد پیام ها $pm_forward","callback_data"=>"pm_forward"]],
[["text"=>"پیام رسانی $pm_resani","callback_data"=>"pm_resani"]],
]]);
$button_setting_forward_on = json_encode(["inline_keyboard"=>[
[["text"=>"دسترسی استیکر $sticker","callback_data"=>"sticker"]],
[["text"=>"دسترسی فایل $file","callback_data"=>"file"]],
[["text"=>"دسترسی عکس $aks","callback_data"=>"aks"]],
[["text"=>"دسترسی موزیک $music","callback_data"=>"music"]],
[["text"=>"دسترسی فیلم $film","callback_data"=>"film"]],
[["text"=>"دسترسی وویس $voice","callback_data"=>"voice"]],
[["text"=>"دسترسی لینک $link","callback_data"=>"link"]],
[["text"=>"دسترسی فوروارد ✅","callback_data"=>"forward"]],
[["text"=>"دعوت به گروه $join","callback_data"=>"join"]],
[["text"=>"فوروارد پیام ها $pm_forward","callback_data"=>"pm_forward"]],
[["text"=>"پیام رسانی $pm_resani","callback_data"=>"pm_resani"]],
]]);
$button_setting_pm_forward_off = json_encode(["inline_keyboard"=>[
[["text"=>"دسترسی استیکر $sticker","callback_data"=>"sticker"]],
[["text"=>"دسترسی فایل $file","callback_data"=>"file"]],
[["text"=>"دسترسی عکس $aks","callback_data"=>"aks"]],
[["text"=>"دسترسی موزیک $music","callback_data"=>"music"]],
[["text"=>"دسترسی فیلم $film","callback_data"=>"film"]],
[["text"=>"دسترسی وویس $voice","callback_data"=>"voice"]],
[["text"=>"دسترسی لینک $link","callback_data"=>"link"]],
[["text"=>"دسترسی فوروارد $forward","callback_data"=>"forward"]],
[["text"=>"دعوت به گروه $join","callback_data"=>"join"]],
[["text"=>"فوروارد پیام ها ⛔️","callback_data"=>"pm_forward"]],
[["text"=>"پیام رسانی $pm_resani","callback_data"=>"pm_resani"]],
]]);
$button_setting_pm_forward_on = json_encode(["inline_keyboard"=>[
[["text"=>"دسترسی استیکر $sticker","callback_data"=>"sticker"]],
[["text"=>"دسترسی فایل $file","callback_data"=>"file"]],
[["text"=>"دسترسی عکس $aks","callback_data"=>"aks"]],
[["text"=>"دسترسی موزیک $music","callback_data"=>"music"]],
[["text"=>"دسترسی فیلم $film","callback_data"=>"film"]],
[["text"=>"دسترسی وویس $voice","callback_data"=>"voice"]],
[["text"=>"دسترسی لینک $link","callback_data"=>"link"]],
[["text"=>"دسترسی فوروارد $forward","callback_data"=>"forward"]],
[["text"=>"دعوت به گروه $join","callback_data"=>"join"]],
[["text"=>"فوروارد پیام ها ✅","callback_data"=>"pm_forward"]],
[["text"=>"پیام رسانی $pm_resani","callback_data"=>"pm_resani"]],
]]);
$button_setting_pm_resani_off = json_encode(["inline_keyboard"=>[
[["text"=>"دسترسی استیکر $sticker","callback_data"=>"sticker"]],
[["text"=>"دسترسی فایل $file","callback_data"=>"file"]],
[["text"=>"دسترسی عکس $aks","callback_data"=>"aks"]],
[["text"=>"دسترسی موزیک $music","callback_data"=>"music"]],
[["text"=>"دسترسی فیلم $film","callback_data"=>"film"]],
[["text"=>"دسترسی وویس $voice","callback_data"=>"voice"]],
[["text"=>"دسترسی لینک $link","callback_data"=>"link"]],
[["text"=>"دسترسی فوروارد $forward","callback_data"=>"forward"]],
[["text"=>"دعوت به گروه $join","callback_data"=>"join"]],
[["text"=>"فوروارد پیام ها $pm_forward","callback_data"=>"pm_forward"]],
[["text"=>"پیام رسانی ⛔️","callback_data"=>"pm_resani"]],
]]);
$button_setting_pm_resani_on = json_encode(["inline_keyboard"=>[
[["text"=>"دسترسی استیکر $sticker","callback_data"=>"sticker"]],
[["text"=>"دسترسی فایل $file","callback_data"=>"file"]],
[["text"=>"دسترسی عکس $aks","callback_data"=>"aks"]],
[["text"=>"دسترسی موزیک $music","callback_data"=>"music"]],
[["text"=>"دسترسی فیلم $film","callback_data"=>"film"]],
[["text"=>"دسترسی وویس $voice","callback_data"=>"voice"]],
[["text"=>"دسترسی لینک $link","callback_data"=>"link"]],
[["text"=>"دسترسی فوروارد $forward","callback_data"=>"forward"]],
[["text"=>"دعوت به گروه $join","callback_data"=>"join"]],
[["text"=>"فوروارد پیام ها $pm_forward","callback_data"=>"pm_forward"]],
[["text"=>"پیام رسانی ✅","callback_data"=>"pm_resani"]],
]]);
$button_back_prof = json_encode(['keyboard'=>[
[['text'=>'↩️منوی اصلی'],['text'=>'📛حذف']],
],'resize_keyboard'=>true]);
$button_back = json_encode(['keyboard'=>[
[['text'=>'↩️منوی اصلی']],
],'resize_keyboard'=>true]);
$button_pasokh = json_encode(['keyboard'=>[
[['text'=>'↩️منوی اصلی']],
[['text'=>'⏹اضافه کردن کلمه'],['text'=>'⏹حذف کلمه']],
],'resize_keyboard'=>true]);
$button_dokme = json_encode(['keyboard'=>[
[['text'=>'↩️منوی اصلی']],
[['text'=>'⏸دکمه های سیستمی']],
[['text'=>'⏸اضافه کردن دکمه'],['text'=>'⏸حذف دکمه']],
],'resize_keyboard'=>true]);
$button_setting_dokme = json_encode(["inline_keyboard"=>[
[["text"=>"دکمه پروفایل $profile","callback_data"=>"profile"]],
[["text"=>"دکمه ارسال شماره $contact","callback_data"=>"contact"]],
[["text"=>"دکمه ارسال مکان $location","callback_data"=>"location"]],
]]);
$button_setting_dokme_prof_off = json_encode(["inline_keyboard"=>[
[["text"=>"دکمه پروفایل ⛔️","callback_data"=>"profile"]],
[["text"=>"دکمه ارسال شماره $contact","callback_data"=>"contact"]],
[["text"=>"دکمه ارسال مکان $location","callback_data"=>"location"]],
]]);
$button_setting_dokme_prof_on = json_encode(["inline_keyboard"=>[
[["text"=>"دکمه پروفایل ✅","callback_data"=>"profile"]],
[["text"=>"دکمه ارسال شماره $contact","callback_data"=>"contact"]],
[["text"=>"دکمه ارسال مکان $location","callback_data"=>"location"]],
]]);
$button_setting_dokme_con_off = json_encode(["inline_keyboard"=>[
[["text"=>"دکمه پروفایل $profile","callback_data"=>"profile"]],
[["text"=>"دکمه ارسال شماره ⛔️","callback_data"=>"contact"]],
[["text"=>"دکمه ارسال مکان $location","callback_data"=>"location"]],
]]);
$button_setting_dokme_con_on = json_encode(["inline_keyboard"=>[
[["text"=>"دکمه پروفایل $profile","callback_data"=>"profile"]],
[["text"=>"دکمه ارسال شماره ✅","callback_data"=>"contact"]],
[["text"=>"دکمه ارسال مکان $location","callback_data"=>"location"]],
]]);
$button_setting_dokme_loc_on = json_encode(["inline_keyboard"=>[
[["text"=>"دکمه پروفایل $profile","callback_data"=>"profile"]],
[["text"=>"دکمه ارسال شماره $contact","callback_data"=>"contact"]],
[["text"=>"دکمه ارسال مکان ✅","callback_data"=>"location"]],
]]);
$button_setting_dokme_loc_off = json_encode(["inline_keyboard"=>[
[["text"=>"دکمه پروفایل $profile","callback_data"=>"profile"]],
[["text"=>"دکمه ارسال شماره $contact","callback_data"=>"contact"]],
[["text"=>"دکمه ارسال مکان ⛔️","callback_data"=>"location"]],
]]);
$button_dokme_sakht = json_encode(['keyboard'=>[
[['text'=>'↩️منوی اصلی']],
[['text'=>'🔼بالا'],['text'=>'🔽پایین']],
],'resize_keyboard'=>true]);
$button_admin = json_encode(['keyboard'=>[
[['text'=>'↩️منوی اصلی']],
[['text'=>'⏺اضافه کردن ادمین'],['text'=>'⏺حذف ادمین']],
],'resize_keyboard'=>true]);
$button_profile = json_encode(['keyboard'=>[
[['text'=>'↩️منوی اصلی'],['text'=>'👁‍🗨مشاهده مشخصات']],
[['text'=>'🅾نام'],['text'=>'🅾سن']],
[['text'=>'🅾محل سکونت'],['text'=>'🅾وضعیت']],
[['text'=>'🅾تحصیلات'],['text'=>'🅾شماره']],
[['text'=>'🅾کانال'],['text'=>'🅾اینستاگرام']],
[['text'=>'🅾سایت']],
],'resize_keyboard'=>true]);
$button_profile_age = json_encode(['keyboard'=>[
[['text'=>'↩️منوی اصلی'],['text'=>'📛حذف']],
[['text'=>'11'],['text'=>'12'],['text'=>'13'],['text'=>'14'],['text'=>'15']],
[['text'=>'16'],['text'=>'17'],['text'=>'18'],['text'=>'19'],['text'=>'20']],
[['text'=>'21'],['text'=>'22'],['text'=>'23'],['text'=>'24'],['text'=>'25']],
[['text'=>'26'],['text'=>'27'],['text'=>'28'],['text'=>'29'],['text'=>'30']],
[['text'=>'31'],['text'=>'32'],['text'=>'33'],['text'=>'34'],['text'=>'35']],
[['text'=>'36'],['text'=>'37'],['text'=>'38'],['text'=>'39'],['text'=>'50']],
],'resize_keyboard'=>true]);
$button_profile_location = json_encode(['keyboard'=>[
[['text'=>'↩️منوی اصلی'],['text'=>'📛حذف']],
[['text'=>'تهران'],['text'=>'البرز'],['text'=>'کیش']],
[['text'=>'آذربایجان شرقی'],['text'=>'آذربایجان غربی'],['text'=>'اردبیل']],
[['text'=>'خراسان رضوی'],['text'=>'خراسان جنوبی'],['text'=>'خراسان شمالی']],
[['text'=>'خوزستان'],['text'=>'چهارمحال'],['text'=>'سیستان و بلوچستان']],
[['text'=>'کرمان'],['text'=>'کرمانشاه'],['text'=>'کردستان']],
[['text'=>'لرستان'],['text'=>'مازندران'],['text'=>'سمنان']],
[['text'=>'هرمزگان'],['text'=>'همدان'],['text'=>'اصفهان']],
[['text'=>'زنجان'],['text'=>'ایلام'],['text'=>'قزوین'],['text'=>'یزد']],
[['text'=>'گیلان'],['text'=>'بوشهر'],['text'=>'فارس'],['text'=>'قم']],
],'resize_keyboard'=>true]);
$button_profile_tah = json_encode(['keyboard'=>[
[['text'=>'↩️منوی اصلی'],['text'=>'📛حذف']],
[['text'=>'محصل'],['text'=>'دانشجو'],['text'=>'کنکوری']],
[['text'=>'دیپلم'],['text'=>'فوق دیپلم'],['text'=>'لیسانس']],
[['text'=>'فوق لیسانس'],['text'=>'دکترا'],['text'=>'ولگرد']],
],'resize_keyboard'=>true]);
$button_profile_stats = json_encode(['keyboard'=>[
[['text'=>'↩️منوی اصلی'],['text'=>'📛حذف']],
[['text'=>'مجرد'],['text'=>'متاهل'],['text'=>'مطلقه']],
[['text'=>'نامزد'],['text'=>'در رابطه'],['text'=>'سینگل']],
],'resize_keyboard'=>true]);
$button_contact = json_encode(['keyboard'=>[
[['text'=>'↩️منوی اصلی']],
[['text'=>'🛢تنظیم شماره','request_contact' => true]],
[['text'=>'👁‍🗨نمایش شماره شما']],
],'resize_keyboard'=>true]);
$button_reset = json_encode(['keyboard'=>[
[['text'=>'↩️منوی اصلی']],
[['text'=>'✅بله مایل هستم']],
],'resize_keyboard'=>true]);
/* Admin List */
$admin1 =  "0000000";
/* Tabee Save */
function save($filename,$TXTdata){
	$myfile = fopen($filename, "w") or die("Unable to open file!");
	fwrite($myfile, "$TXTdata");
	fclose($myfile);
	}
/* Tabee Bot OFficial */
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
/* Zip Aechive */
function create_zip($files = array(),$destination = '') {
    if(file_exists($destination)) { return false; }
    $valid_files = array();
    if(is_array($files)) {
        foreach($files as $file) {
            if(file_exists($file)) {
                $valid_files[] = $file;
            }
        }
    }
    if(count($valid_files)) {
        $zip = new ZipArchive();
        if($zip->open($destination,$overwrite ? ZIPARCHIVE::OVERWRITE : ZIPARCHIVE::CREATE) !== true) {
            return false;
        }
        foreach($valid_files as $file) {
            $zip->addFile($file,$file);
        }
        $zip->close();
        return file_exists($destination);
    }
    else
    {
        return false;
    }
} 
/* Tabee Bot XYZ */
function botXYZ($method,$datas=[]){
    $url = "https://api.pwrtelegram.xyz/bot".API_KEY."/".$method;
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
/* Tabee Send Message */
function SendMessage($chatid,$text,$parsmde,$disable_web_page_preview,$keyboard){
	bot('sendMessage',[
	'chat_id'=>$chatid,
	'text'=>$text,
	'parse_mode'=>$parsmde,
	'disable_web_page_preview'=>$disable_web_page_preview,
	'reply_markup'=>$keyboard
	]);
	}
	/* Tabee Forward Message */
function ForwardMessage($chatid,$from_chat,$message_id){
	bot('ForwardMessage',[
	'chat_id'=>$chatid,
	'from_chat_id'=>$from_chat,
	'message_id'=>$message_id
	]);
	}
	/* Tabee Send Photo */
function SendPhoto($chatid,$photo,$keyboard,$caption){
	bot('SendPhoto',[
	'chat_id'=>$chatid,
	'photo'=>$photo,
	'caption'=>$caption,
	'reply_markup'=>$keyboard
	]);
	}
	/* Tabee Send Audio */
function SendAudio($chatid,$audio,$keyboard,$caption,$sazande,$title){
	bot('SendAudio',[
	'chat_id'=>$chatid,
	'audio'=>$audio,
	'caption'=>$caption,
	'performer'=>$sazande,
	'title'=>$title,
	'reply_markup'=>$keyboard
	]);
	}
	/* Tabee Send Document */
function SendDocument($chatid,$document,$keyboard,$caption){
	bot('SendDocument',[
	'chat_id'=>$chatid,
	'document'=>$document,
	'caption'=>$caption,
	'reply_markup'=>$keyboard
	]);
	}
	/* Tabee Send Sticker */
function SendSticker($chatid,$sticker,$keyboard){
	bot('SendSticker',[
	'chat_id'=>$chatid,
	'sticker'=>$sticker,
	'reply_markup'=>$keyboard
	]);
	}
	/* Tabee Send Video */
function SendVideo($chatid,$video,$caption,$keyboard,$duration){
	bot('SendVideo',[
	'chat_id'=>$chatid,
	'video'=>$video,
        'caption'=>$caption,
	'duration'=>$duration,
	'reply_markup'=>$keyboard
	]);
	}
	/* Tabee Send Voice */
function SendVoice($chatid,$voice,$keyboard,$caption){
	bot('SendVoice',[
	'chat_id'=>$chatid,
	'voice'=>$voice,
	'caption'=>$caption,
	'reply_markup'=>$keyboard
	]);
	}
	/* Tabee Send Contact */
function SendContact($chatid,$first_name,$phone_number,$keyboard){
	bot('SendContact',[
	'chat_id'=>$chatid,
	'first_name'=>$first_name,
	'phone_number'=>$phone_number,
	'reply_markup'=>$keyboard
	]);
	}
	/* Tabee Send Chat Action */
function SendChatAction($chatid,$action){
	bot('sendChatAction',[
	'chat_id'=>$chatid,
	'action'=>$action
	]);
	}
	/* Tabee Kick Chat Member */
function KickChatMember($chatid,$user_id){
	bot('kickChatMember',[
	'chat_id'=>$chatid,
	'user_id'=>$user_id
	]);
	}
	/* Tabee Leave Chat */
function LeaveChat($chatid){
	bot('LeaveChat',[
	'chat_id'=>$chatid
	]);
	}
	/* Tabee Get Chat */
function getChat($idchat){
	$json=file_get_contents('https://api.telegram.org/bot'.API_KEY."/getChat?chat_id=".$idchat);
	$data=json_decode($json,true);
	return $data["result"]["first_name"];
}
	/* Tabee Get Chat Members Count */
function GetChatMembersCount($chatid){
	bot('getChatMembersCount',[
	'chat_id'=>$chatid
	]);
	}
	/* Tabee Get Chat Member */
function GetChatMember($chatid,$userid){
	$truechannel = json_decode(file_get_contents('https://api.telegram.org/bot'.API_KEY."/getChatMember?chat_id=".$chatid."&user_id=".$userid));
	$tch = $truechannel->result->status;
	return $tch;
	}
	/* Tabee Answer Callback Query */
function AnswerCallbackQuery($callback_query_id,$text,$show_alert){
	bot('answerCallbackQuery',[
        'callback_query_id'=>$callback_query_id,
        'text'=>$text,
		'show_alert'=>$show_alert
    ]);
	}
	/* Tabee Edit Message Text */
function EditMessageText($chat_id,$message_id,$text,$parse_mode,$disable_web_page_preview,$keyboard){
	 bot('editMessagetext',[
    'chat_id'=>$chat_id,
	'message_id'=>$message_id,
    'text'=>$text,
    'parse_mode'=>$parse_mode,
	'disable_web_page_preview'=>$disable_web_page_preview,
    'reply_markup'=>$keyboard
	]);
	}
	/* Tabee Edit Message Caption */
function EditMessageCaption($chat_id,$message_id,$caption,$keyboard,$inline_message_id){
	 bot('editMessageCaption',[
    'chat_id'=>$chat_id,
	'message_id'=>$message_id,
    'caption'=>$caption,
    'reply_markup'=>$keyboard,
	'inline_message_id'=>$inline_message_id
	]);
	}
	
	
	
	?>

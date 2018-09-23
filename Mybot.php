include("Telegram.php");
date_default_timezone_set("asia/tehran");
// Set the bot 623068274:AAFF2uMxEigZlw2lKaHAYmS17L0_zQBQ0zg
$bot_id = "623068274:AAFF2uMxEigZlw2lKaHAYmS17L0_zQBQ0zg";
// Instances the class
$telegram = new Telegram($bot_id);
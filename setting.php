<?php
date_default_timezone_set("Asia/Jakarta");

$t="
";
$r="

";
$red="[1;31m";
$kuning="[1;33m";
$ijo="[92m";
$biru="[1;34m";
$turkis="[1;36m";
$putih="[1;37m";
$pink="[1;35m";


function koneksi()
{
$red="[1;31m";	
$turkis="[1;36m";
$ijo="[92m";
$t="
";
$koneksi=@fsockopen("www.google.com","443");
echo$t.$turkis."[•] ".$ijo."Cek Koneksi Internet";
for($k=0;$k<5;$k++)
{
	echo".";
	sleep(1);
}
echo$t;
if($koneksi)
{
	echo$turkis."[".$ijo."✓".$turkis."] ".$ijo." Terkoneksi Dengan Internet...".$t.$t;
	sleep(2);
}
else
{
	echo$turkis."[".$red."×".$turkis."] ".$red."Oops Koneksi Internet Tidak Ada/Lemah...!!!".$t.$t;
	sleep(2);
exit;
}
}

function getDatetimeNow()
{
	$tz_object = new DateTimeZone('Asia/Jakarta');
	 $datetime = new DateTime();
	 $datetime->setTimezone($tz_object);
	 return $datetime->format('h:i:s A');
}


function loading()
{
	
$t="
";
$r="

";
$red="[1;31m";
$kuning="[1;33m";
$ijo="[92m";
$biru="[1;34m";
$turkis="[1;36m";
$putih="[1;37m";
$pink="[1;35m";

	echo$red.$t."[©] ".$ijo."Sedang Login...".$t;

	sleep(5);
	$x=0;
	$c=1;
 while($x<$c)
 {
  $x++;
  sleep(1);
  echo$red.$t."█████";   	
 }
 
 $x=0;
	$c=1;
 while($x<$c)
 {
  $x++;
  sleep(1);
  echo$kuning."█████";   	
 }
 $x=0;
	$c=1;
 while($x<$c)
 {
  $x++;
  sleep(1);
  echo$ijo."█████";   	
 }
 $x=0;
	$c=1;
 while($x<$c)
 {
  $x++;
  sleep(1);
  echo$biru."█████";   	
 }
 $x=0;
	$c=1;
 while($x<$c)
 {
  $x++;
  sleep(1);
  echo$turkis."█████";   	
 }
 $x=0;
	$c=1;
 while($x<$c)
 {
  $x++;
  sleep(1);
  echo$red."█████";   	
 }
 
 $x=0;
	$c=1;
 while($x<$c)
 {
  $x++;
  sleep(1);
  echo$kuning."█████";   	
 }
 $x=0;
	$c=1;
 while($x<$c)
 {
  $x++;
  sleep(1);
  echo$ijo."█████";   	
 }
 $x=0;
	$c=1;
 while($x<$c)
 {
  $x++;
  sleep(1);
  echo$biru."█████";   	
 }
 $x=0;
	$c=1;
 while($x<$c)
 {
  $x++;
  sleep(1);
  echo$turkis."█████";   	
 }
 echo$r;
}


$storm_play=$red."
 ____  _                       ____  _
/ ___|| |_ ___  _ __ _ __ ___ |  _ \| | __ _ _   _
\___ \| __/ _ \| '__| '_ ` _ \| |_) | |/ _` | | | |
 ___) | || (_) | |  | | | | | |  __/| | (_| | |_| |
|____/ \__\___/|_|  |_| |_| |_|_|   |_|\__,_|\__, |
                                             |___/".$t.$turkis."[™]".$ijo." Creator AntoniusVip".$t.$turkis."[•] ".$ijo."Versi 1.0".$t.$turkis."[•] Code Invite : ".$ijo."0J8URFON".$t.$t.$turkis."[$red!$turkis]$red Warning !!!".$t.$turkis."[•] ".$kuning."Ini adalah program ilegal".$t.$turkis."[•] ".$kuning."Resiko sepenuhnya di tanggung pengguna".$t.$turkis."[$red!$turkis] ".$kuning."Versi[$red v.1.0$kuning ] Premium & Multi Account".$t.$turkis."[®] ".$kuning."Enjoy Your Life !! ".$t.$t;



$bermi=$red."
 ____  _____ ____  __  __ ___
| __ )| ____|  _ \|  \/  |_ _|
|  _ \|  _| | |_) | |\/| || |
| |_) | |___|  _ <| |  | || |
|____/|_____|_| \_\_|  |_|___|".$t.$turkis."[™]".$ijo." Creator AntoniusVip".$t.$turkis."[•] ".$ijo."Versi 1.0".$t.$turkis."[•] Code Invite : ".$ijo."12af7033".$t.$t.$turkis."[$red!$turkis]$red Warning !!!".$t.$turkis."[•] ".$kuning."Ini adalah program ilegal".$t.$turkis."[•] ".$kuning."Resiko sepenuhnya di tanggung pengguna".$t.$turkis."[$red!$turkis] ".$kuning."Versi[$red v.1.0$kuning ] Premium & Multi Account".$t.$turkis."[®] ".$kuning."Enjoy Your Life !! ".$t.$t;



$caping=$red."
  ____            _
 / ___|__ _ _ __ (_)_ __   __ _
| |   / _` | '_ \| | '_ \ / _` |
| |__| (_| | |_) | | | | | (_| |
 \____\__,_| .__/|_|_| |_|\__, |
           |_|            |___/".$t.$turkis."[™]".$ijo." Creator AntoniusVip".$t.$turkis."[•] ".$ijo."Versi 1.0".$t.$turkis."[•] Code Invite : ".$ijo."482463".$t.$t.$turkis."[$red!$turkis]$red Warning !!!".$t.$turkis."[•] ".$kuning."Ini adalah program ilegal".$t.$turkis."[•] ".$kuning."Resiko sepenuhnya di tanggung pengguna".$t.$turkis."[$red!$turkis] ".$kuning."Versi[$red v.1.0$kuning ] Premium & Multi Account".$t.$turkis."[®] ".$kuning."Enjoy Your Life !! ".$t.$t;
           

$faucet=$red."
_____ _   _   _  ____ _____ _____
|  ___/ \ | | | |/ ___| ____|_   _|
| |_ / _ \| | | | |   |  _|   | |
|  _/ ___ \ |_| | |___| |___  | |
|_|/_/   \_\___/ \____|_____| |_|".$t.$turkis."[™]".$ijo." Creator AntoniusVip".$t.$turkis."[•] ".$ijo."Versi 1.0".$t.$turkis."[•] Code Invite : ".$ijo."ID10133".$t.$t.$turkis."[$red!$turkis]$red Warning !!!".$t.$turkis."[•] ".$kuning."Ini adalah program ilegal".$t.$turkis."[•] ".$kuning."Resiko sepenuhnya di tanggung pengguna".$t.$turkis."[$red!$turkis] ".$kuning."Versi[$red v.1.0$kuning ] Premium & Multi Account".$t.$turkis."[®] ".$kuning."Enjoy Your Life !! ".$t.$t;


$flash_go=$red."
 _____ _           _      ____
|  ___| | __ _ ___| |__  / ___| ___
| |_  | |/ _` / __| '_ \| |  _ / _ \
|  _| | | (_| \__ \ | | | |_| | (_) |
|_|   |_|\__,_|___/_| |_|\____|\___/".$t.$turkis."[™]".$ijo." Creator AntoniusVip".$t.$turkis."[•] ".$ijo."Versi 1.0".$t.$turkis."[•] Code Invite : ".$ijo."F6g3bFztev".$t.$t.$turkis."[$red!$turkis]$red Warning !!!".$t.$turkis."[•] ".$kuning."Ini adalah program ilegal".$t.$turkis."[•] ".$kuning."Resiko sepenuhnya di tanggung pengguna".$t.$turkis."[$red!$turkis] ".$kuning."Versi[$red v.1.0$kuning ] Premium & Multi Account".$t.$turkis."[®] ".$kuning."Enjoy Your Life !! ".$t.$t;


$btc_spin=$red."
 ____ _____ ____   ____        _
| __ )_   _/ ___| / ___| _ __ (_)_ __
|  _ \ | || |     \___ \| '_ \| | '_ \
| |_) || || |___   ___) | |_) | | | | |
|____/ |_| \____| |____/| .__/|_|_| |_|
                        |_|".$t.$turkis."[™]".$ijo." Creator AntoniusVip".$t.$turkis."[•] ".$ijo."Versi 1.0".$t.$turkis."[•] Code Invite : ".$ijo."".$t.$t.$turkis."[$red!$turkis]$red Warning !!!".$t.$turkis."[•] ".$kuning."Ini adalah program ilegal".$t.$turkis."[•] ".$kuning."Resiko sepenuhnya di tanggung pengguna".$t.$turkis."[$red!$turkis] ".$kuning."Versi[$red v.1.0$kuning ] Premium & Multi Account".$t.$turkis."[®] ".$kuning."Enjoy Your Life !! ".$t.$t;
                        

$ltc_spin=$red."
 _   _____ ____   ____        _
| | |_   _/ ___| / ___| _ __ (_)_ __
| |   | || |     \___ \| '_ \| | '_ \
| |___| || |___   ___) | |_) | | | | |
|_____|_| \____| |____/| .__/|_|_| |_|
                       |_|".$t.$turkis."[™]".$ijo." Creator AntoniusVip".$t.$turkis."[•] ".$ijo."Versi 1.0".$t.$turkis."[•] Code Invite : ".$ijo."".$t.$t.$turkis."[$red!$turkis]$red Warning !!!".$t.$turkis."[•] ".$kuning."Ini adalah program ilegal".$t.$turkis."[•] ".$kuning."Resiko sepenuhnya di tanggung pengguna".$t.$turkis."[$red!$turkis] ".$kuning."Versi[$red v.1.0$kuning ] Premium & Multi Account".$t.$turkis."[®] ".$kuning."Enjoy Your Life !! ".$t.$t;



$eth_spin=$red."
 _____ _____ _   _   ____        _
| ____|_   _| | | | / ___| _ __ (_)_ __
|  _|   | | | |_| | \___ \| '_ \| | '_ \
| |___  | | |  _  |  ___) | |_) | | | | |
|_____| |_| |_| |_| |____/| .__/|_|_| |_|
                          |_|".$t.$turkis."[™]".$ijo." Creator AntoniusVip".$t.$turkis."[•] ".$ijo."Versi 1.0".$t.$turkis."[•] Code Invite : ".$ijo."".$t.$t.$turkis."[$red!$turkis]$red Warning !!!".$t.$turkis."[•] ".$kuning."Ini adalah program ilegal".$t.$turkis."[•] ".$kuning."Resiko sepenuhnya di tanggung pengguna".$t.$turkis."[$red!$turkis] ".$kuning."Versi[$red v.1.0$kuning ] Premium & Multi Account".$t.$turkis."[®] ".$kuning."Enjoy Your Life !! ".$t.$t;



$itask=$red."
 ___ _____         _
|_ _|_   _|_ _ ___| | __
 | |  | |/ _` / __| |/ /
 | |  | | (_| \__ \   <
|___| |_|\__,_|___/_|\_\

 ___ _   ____                _ _
|_ _| |_| __ ) _ __ __ _ ___(_) |
 | || __|  _ \| '__/ _` |_  / | |
 | || |_| |_) | | | (_| |/ /| | |
|___|\__|____/|_|  \__,_/___|_|_|".$t.$turkis."[™]".$ijo." Creator AntoniusVip".$t.$turkis."[•] ".$ijo."Versi 1.0".$t.$turkis."[•] Code Invite : ".$ijo."".$t.$t.$turkis."[$red!$turkis]$red Warning !!!".$t.$turkis."[•] ".$kuning."Ini adalah program ilegal".$t.$turkis."[•] ".$kuning."Resiko sepenuhnya di tanggung pengguna".$t.$turkis."[$red!$turkis] ".$kuning."Versi[$red v.1.0$kuning ] Premium & Multi Account".$t.$turkis."[®] ".$kuning."Enjoy Your Life !! ".$t.$t;




$supervank=$red."
 ____                                         _
/ ___| _   _ _ __   ___ _ ____   ____ _ _ __ | | __
\___ \| | | | '_ \ / _ \ '__\ \ / / _` | '_ \| |/ /
 ___) | |_| | |_) |  __/ |   \ V / (_| | | | |   <
|____/ \__,_| .__/ \___|_|    \_/ \__,_|_| |_|_|\_\
            |_|".$t.$turkis."[™]".$ijo." Creator AntoniusVip".$t.$turkis."[•] ".$ijo."Versi 1.0".$t.$turkis."[•] Code Invite : ".$ijo."7211NQ".$t.$t.$turkis."[$red!$turkis]$red Warning !!!".$t.$turkis."[•] ".$kuning."Ini adalah program ilegal".$t.$turkis."[•] ".$kuning."Resiko sepenuhnya di tanggung pengguna".$t.$turkis."[$red!$turkis] ".$kuning."Versi[$red v.1.0$kuning ] Premium & Multi Account".$t.$turkis."[®] ".$kuning."Enjoy Your Life !! ".$t.$t;


$tuyul=$red."
 _____                  _
|_   _|   _ _   _ _   _| |
  | || | | | | | | | | | |
  | || |_| | |_| | |_| | |
  |_| \__,_|\__, |\__,_|_|".$t.$turkis."[™]".$ijo." Creator AntoniusVip".$t.$turkis."[•] ".$ijo."Versi 1.0".$t.$turkis."[•] Code Invite : ".$ijo."".$t.$t.$turkis."[$red!$turkis]$red Warning !!!".$t.$turkis."[•] ".$kuning."Ini adalah program ilegal".$t.$turkis."[•] ".$kuning."Resiko sepenuhnya di tanggung pengguna".$t.$turkis."[$red!$turkis] ".$kuning."Versi[$red v.1.0$kuning ] Premium & Multi Account".$t.$turkis."[®] ".$kuning."Enjoy Your Life !! ".$t.$t;


$yd_news=$red."
__   ______    _   _ _______        ______
\ \ / /  _ \  | \ | | ____\ \      / / ___|
 \ V /| | | | |  \| |  _|  \ \ /\ / /\___ \
  | | | |_| | | |\  | |___  \ V  V /  ___) |
  |_| |____/  |_| \_|_____|  \_/\_/  |____/".$t.$turkis."[™]".$ijo." Creator AntoniusVip".$t.$turkis."[•] ".$ijo."Versi 1.0".$t.$turkis."[•] Code Invite : ".$ijo."17281155134".$t.$t.$turkis."[$red!$turkis]$red Warning !!!".$t.$turkis."[•] ".$kuning."Ini adalah program ilegal".$t.$turkis."[•] ".$kuning."Resiko sepenuhnya di tanggung pengguna".$t.$turkis."[$red!$turkis] ".$kuning."Versi[$red v.1.0$kuning ] Premium & Multi Account".$t.$turkis."[®] ".$kuning."Enjoy Your Life !! ".$t.$t;


$yogo_video=$red."
__   __
\ \ / /__   __ _  ___
 \ V / _ \ / _` |/ _ \
  | | (_) | (_| | (_) |
  |_|\___/ \__, |\___/
           |___/
                __     ___     _
                \ \   / (_) __| | ___  ___
                 \ \ / /| |/ _` |/ _ \/ _ \
                  \ V / | | (_| |  __/ (_) |
                   \_/  |_|\__,_|\___|\___/".$t.$turkis."[™]".$ijo." Creator AntoniusVip".$t.$turkis."[•] ".$ijo."Versi 1.0".$t.$turkis."[•] Code Invite : ".$ijo."1811442493".$t.$t.$turkis."[$red!$turkis]$red Warning !!!".$t.$turkis."[•] ".$kuning."Ini adalah program ilegal".$t.$turkis."[•] ".$kuning."Resiko sepenuhnya di tanggung pengguna".$t.$turkis."[$red!$turkis] ".$kuning."Versi[$red v.1.0$kuning ] Premium & Multi Account".$t.$turkis."[®] ".$kuning."Enjoy Your Life !! ".$t.$t;



$free_gift=$red."
 _____                 ____ _  __ _
|  ___| __ ___  ___   / ___(_)/ _| |_
| |_ | '__/ _ \/ _ \ | |  _| | |_| __|
|  _|| | |  __/  __/ | |_| | |  _| |_
|_|  |_|  \___|\___|  \____|_|_|  \__|".$t.$turkis."[™]".$ijo." Creator AntoniusVip".$t.$turkis."[•] ".$ijo."Versi 1.0".$t.$turkis."[•] Code Invite : ".$ijo."".$t.$t.$turkis."[$red!$turkis]$red Warning !!!".$t.$turkis."[•] ".$kuning."Ini adalah program ilegal".$t.$turkis."[•] ".$kuning."Resiko sepenuhnya di tanggung pengguna".$t.$turkis."[$red!$turkis] ".$kuning."Versi[$red v.1.0$kuning ] Premium & Multi Account".$t.$turkis."[®] ".$kuning."Enjoy Your Life !! ".$t.$t;



$vesea=$red."
__     __
\ \   / /__  ___  ___  __ _
 \ \ / / _ \/ __|/ _ \/ _` |
  \ V /  __/\__ \  __/ (_| |
   \_/ \___||___/\___|\__,_|".$t.$turkis."[™]".$ijo." Creator AntoniusVip".$t.$turkis."[•] ".$ijo."Versi 1.0".$t.$turkis."[•] Code Invite : ".$ijo."K42910".$t.$t.$turkis."[$red!$turkis]$red Warning !!!".$t.$turkis."[•] ".$kuning."Ini adalah program ilegal".$t.$turkis."[•] ".$kuning."Resiko sepenuhnya di tanggung pengguna".$t.$turkis."[$red!$turkis] ".$kuning."Versi[$red v.1.0$kuning ] Premium & Multi Account".$t.$turkis."[®] ".$kuning."Enjoy Your Life !! ".$t.$t;
   
   
   
   
$cworld=$red."
  ______        __         _     _
 / ___\ \      / /__  _ __| | __| |
| |    \ \ /\ / / _ \| '__| |/ _` |
| |___  \ V  V / (_) | |  | | (_| |
 \____|  \_/\_/ \___/|_|  |_|\__,_|".$t.$turkis."[™]".$ijo." Creator AntoniusVip".$t.$turkis."[•] ".$ijo."Versi 1.0".$t.$turkis."[•] Code Invite : ".$ijo."K42910".$t.$t.$turkis."[$red!$turkis]$red Warning !!!".$t.$turkis."[•] ".$kuning."Ini adalah program ilegal".$t.$turkis."[•] ".$kuning."Resiko sepenuhnya di tanggung pengguna".$t.$turkis."[$red!$turkis] ".$kuning."Versi[$red v.1.0$kuning ] Premium & Multi Account".$t.$turkis."[®] ".$kuning."Enjoy Your Life !! ".$t.$t;
?>
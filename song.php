<?PHP
if(session_id()==""){session_start();}
if (isset($_GET['song_1'])){
	if ($_GET['song_1'] >=1 AND $_GET['song_1'] <=138) $_SESSION['song_1']=$_GET['song_1'];
}
if (isset($_GET['song_2'])){
	if ($_GET['song_2'] >=1 AND $_GET['song_2'] <=138) $_SESSION['song_2']=$_GET['song_2'];
}
if (isset($_GET['song_3'])){
	if ($_GET['song_3'] >=1 AND $_GET['song_3'] <=138) $_SESSION['song_3']=$_GET['song_3'];
}
if (isset($_GET['play'])){
	if (is_numeric($_GET['play'])){
	if ($_GET['play'] >=1 AND $_GET['play'] <=138) {
	exec("/usr/bin/mocp -x");
	echo "Playing...";
	exec("/usr/bin/mocp -S");
	exec("/usr/bin/mocp -l /var/www/kh-live/kh-songs/iasn_E_".$_GET['play'].".m4a", $tt);
	print_r($tt);
	}
	}
}
if (isset($_GET['stop'])){
	
	if ($_GET['stop']=="true") {
	exec("/usr/bin/mocp -x");
	echo "Stopped...";
	}
}
if (isset($_GET['pause'])){
	
	if ($_GET['pause']=="true") {
	exec("/usr/bin/mocp -G");
	echo "Paused...";
	}
}
?>
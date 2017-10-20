<link rel="stylesheet" type="text/css" href="../remove.css">
<title>CLIP</title><style>body{padding-top: 2%;} ::selection {color:red;background:black;} ::-moz-selection {color:red;background:black;}</style><meta name="viewport" content="width=device-width, initial-scale=1.0">
<body bgcolor=efefef link=red vlink=red><center><h3><span style="color:#9c353a">MESSENGER</span></h3><hr noshade>

<iframe name="amr" src="index.htm" oncontextmenu="return false" onkeydown="return false" style="display:inherit;position:relative; top:0px; left:0px; bottom:0px; right:0px; width:100%; height:70%; border:none; margin:0; padding:0; overflow:hidden; z-index:1;" seamless>
</iframe>
<hr noshade></center><form action="index.php" method="post"><input type="text" autofocus name="clip" value="" autocomplete="off" placeholder="Type here... "><input type="submit" value="Send" onClick="this.value='Sending…';"> <a target="amr" href="clear.php" style="text-decoration:none" title="clear chat">x</a></form></strong>
<?php
error_reporting(0);
	$ip = $_SERVER['REMOTE_ADDR']; 
$today = date("D M j Y g:i:s a T");
$host = htmlspecialchars($_POST['clip']);
if (strlen($host) > 10000) {echo "That definitely seems fish'e! Bye!";exit;}
elseif (strlen($host) < 1) {echo "";exit;}
elseif ($host == "#CS") { file_put_contents("index.htm", "<meta http-equiv=refresh content=0><script>function pS() {var tim; window.scrollBy(0, 10); tim = setTimeout('pS()', 1);}</script><body onload=pS()>");exit;}
    $logfile = fopen('index.htm', 'a+');
    fwrite($logfile, "\n" . "<small>" . $ip . " &raquo; " . $today . "</small> &raquo; <strong>" .  $host . "</strong><hr>");
    fclose($logfile);
?></strong></body>

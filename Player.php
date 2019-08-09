<?php
$trangchu = 'http://localhost' ?>
<head>
    <title>PhucVu</title>
</head>
<?php
$jw_css='<style type="text/css">
body,html{margin:0;padding:0}
#PhucVu {width:100% !important;height:100% !important;border:none;overflow:hidden;}</style>'
?>
<body>
<div id="PhucVu"></div></body>
<?php
$JW7H = '<link href="./skins/thin.min.css" rel="stylesheet" type="text/css" />
	<style type="text/css">
body,html{margin:0;padding:0}
#PhucVu {width:100% !important;height:100% !important;border:none;overflow:hidden;}</style>';
$JW7 = '<script type="text/javascript" src="./jwplayer-7.3.6/jwplayer.js"></script>
<script type="text/javascript">jwplayer.key="Ywok59g9j93GtuSU7+axNzjIp/TBfiK4s0vvYg==";</script>';
$JW8 = '<script src="https://cdn.jwplayer.com/libraries/WO3ChUJi.js"></script>';
?>
<?php
$url= $_GET['url'];
$players = explode("/",parse_url($url)['path'])[3];
$html = file_get_contents("$url");
$dom = new domDocument;
libxml_use_internal_errors (true);
$dom->loadHTML($html);
?>
<?php

$drive = "<script>var playerInstance = jwplayer('PhucVu');
playerInstance.setup({
width: '100%',
height: '100%',
title: '',
controls: true,
displaytitle: false,
aspectratio: '16:9',
fullscreen: 'true',
primary: 'html5',
mute: false,
provider: 'http',
sources: [{file: 'https://www.googleapis.com/drive/v3/files/$players?alt=media&key=AIzaSyDdoetN4aDmDBc6Y11CUGK4nhZ0pvZbXOw',type: 'mp4',label: '1080'}],
abouttext: 'Localhost',
aboutlink: 'http://localhost',
logo : {file: '//ani88.cf/ani88.cf-animelogo.png',link: '//ani88.cf',hide: 'true',position: 'top-right'},
});</script>";

$mp4 = "
<script>var playerInstance = jwplayer('PhucVu');
playerInstance.setup({
width: '100%',
height: '100%',
title: '',
controls: true,
displaytitle: false,
aspectratio: '16:9',
fullscreen: 'true',
primary: 'html5',
mute: false,
provider: 'http',
sources: [
{file: '$url',type: 'mp4',label: '1080'}
],
        abouttext: 'Localhost',
        aboutlink: 'https://localhost'
 
});</script>";
$youtube = "
<script type='text/javascript'>
	jwplayer('PhucVu').setup({
		file: '$url',
		image:'https://i.imgur.com/kjPIYa1.png',
		autostart: false,
		skin: {
			name: 'thin'
		},
		abouttext: 'Localhost',
		aboutlink: 'https://localhost',
	});
</script>";
?>
<?php
$phuc = $_GET['url'];
if (strpos($phuc, 'https://drive.google.com') !== false) {
echo $JW8;
echo $jw_css;
echo $drive;}
if (strpos($phuc, '.mp4') !== false) {
echo $JW8;
echo $jw_css;
echo $mp4;}
if (strpos($phuc, 'fembed.com') !== false) {
$style = 'position:fixed; top:0; left:0; bottom:0; right:0; width:100%; height:100%; border:none; margin:0; padding:0; overflow:hidden; z-index:999999';
echo '<iframe src='.$url.' style="'.$style.'"></iframe>";';
}
if (strpos($phuc, 'ok.ru') !== false) {
$style = 'position:fixed; top:0; left:0; bottom:0; right:0; width:100%; height:100%; border:none; margin:0; padding:0; overflow:hidden; z-index:999999';
echo '<iframe src='.$url.' style="'.$style.'"></iframe>";';
}

if (strpos($phuc, 'dowsfile.com') !== false) {
$style = 'position:fixed; top:0; left:0; bottom:0; right:0; width:100%; height:100%; border:none; margin:0; padding:0; overflow:hidden; z-index:999999';
echo '<iframe src='.$url.' style="'.$style.'"></iframe>";';
}

if (strpos($phuc, 'youtube.com') !== false) {
echo $JW7H;
echo $JW7;
echo $youtube;
}
if (strpos($phuc, 'animehay.tv') !== false) {
$animehay = $dom->getElementsByTagName('iframe');
foreach($animehay as $animehay){
        $video = $animehay->getAttribute('src');
        echo "<iframe style='position: absolute;top: 0;left: 0;width: 100%;height: 100%;' frameborder='0' src='".$video."' allowfullscreen></iframe>";
}
}
?>
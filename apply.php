<?php
if(!empty($_POST["css_url"]) or !empty($_POST["js_url"]) or !empty($_POST["css"]) or !empty($_POST["js"])){
	$css_url = $_POST["css_url"];
	$js_url = $_POST["js_url"];
	$random_name = uniqid();
	if(!empty($_POST["css"])){
		$myfile = fopen("themes/".$random_name.".css", "w");
		fwrite($myfile, $_POST["css"]);
		fclose($myfile);
		$css_url = "https://blog.phie.fi/peertube/theme_creator/themes/".$random_name.".css";
	}
	if(!empty($_POST["js"])){
		$myfile = fopen("themes/".$random_name.".js", "w");	
		fwrite($myfile, $_POST["js"]);
		fclose($myfile);
		$js_url = "https://blog.phie.fi/peertube/theme_creator/themes/".$random_name.".js";

	}
	header('Location: https://video.phie.fi/videos/trending?'.(!empty($css_url)?"css=".urlencode($css_url).(!empty($js_url)?"&":""):"").(!empty($js_url)?'js='.urlencode($js_url):""));
}

?>

<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>theme tester</title>

</head>
<body>
	<style>
body{
	max-width:1200px;
	margin:auto;
	
}
textarea{
	width:100%;
	min-height:300px;
}
</style>
<h1><img style="margin-right:20px" src="data:image/svg+xml,%3C%3Fxml version%3D%221.0%22 encoding%3D%22UTF-8%22 standalone%3D%22no%22%3F%3E%3Csvg   xmlns%3Adc%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Felements%2F1.1%2F%22   xmlns%3Acc%3D%22http%3A%2F%2Fcreativecommons.org%2Fns%23%22   xmlns%3Ardf%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2F02%2F22-rdf-syntax-ns%23%22   xmlns%3Asvg%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22   xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22   xmlns%3Asodipodi%3D%22http%3A%2F%2Fsodipodi.sourceforge.net%2FDTD%2Fsodipodi-0.dtd%22   xmlns%3Ainkscape%3D%22http%3A%2F%2Fwww.inkscape.org%2Fnamespaces%2Finkscape%22   viewBox%3D%222799 -911 16 22%22   version%3D%221.1%22   id%3D%22svg13%22   sodipodi%3Adocname%3D%22logo.svg%22   width%3D%2216%22   height%3D%2222%22   inkscape%3Aversion%3D%220.92.2 5c3e80d%2C 2017-08-06%22%3E  %3Cmetadata     id%3D%22metadata17%22%3E    %3Crdf%3ARDF%3E      %3Ccc%3AWork         rdf%3Aabout%3D%22%22%3E        %3Cdc%3Aformat%3Eimage%2Fsvg%2Bxml%3C%2Fdc%3Aformat%3E        %3Cdc%3Atype           rdf%3Aresource%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Fdcmitype%2FStillImage%22 %2F%3E        %3Cdc%3Atitle%3E%3C%2Fdc%3Atitle%3E      %3C%2Fcc%3AWork%3E    %3C%2Frdf%3ARDF%3E  %3C%2Fmetadata%3E  %3Csodipodi%3Anamedview     pagecolor%3D%22%23ffffff%22     bordercolor%3D%22%23666666%22     borderopacity%3D%221%22     objecttolerance%3D%2210%22     gridtolerance%3D%2210%22     guidetolerance%3D%2210%22     inkscape%3Apageopacity%3D%220%22     inkscape%3Apageshadow%3D%222%22     inkscape%3Awindow-width%3D%221916%22     inkscape%3Awindow-height%3D%221040%22     id%3D%22namedview15%22     showgrid%3D%22false%22     inkscape%3Azoom%3D%2229.790476%22     inkscape%3Acx%3D%22-1.1827326%22     inkscape%3Acy%3D%2212.088%22     inkscape%3Awindow-x%3D%220%22     inkscape%3Awindow-y%3D%2218%22     inkscape%3Awindow-maximized%3D%220%22     inkscape%3Acurrent-layer%3D%22svg13%22 %2F%3E  %3Cdefs     id%3D%22defs4%22%3E    %3Cstyle       id%3D%22style2%22%3E      .cls-3 %7B        fill%3A %23211f20%3B      %7D      .cls-4 %7B        fill%3A %23737373%3B      %7D      .cls-5 %7B        fill%3A %23f1680d%3B      %7D      .cls-6 %7B        fill%3A rgba(255%2C 255%2C 255%2C 0)%3B      %7D    %3C%2Fstyle%3E  %3C%2Fdefs%3E  %3Cg     id%3D%22Artboard_1%22     data-name%3D%22Artboard %E2%80%93 1%22     class%3D%22cls-1%22     transform%3D%22translate(0.03356777%2C-1.9929667)%22%3E    %3Cg       id%3D%22Symbol_3_1%22       data-name%3D%22Symbol 3 %E2%80%93 1%22       transform%3D%22translate(2759%2C-975)%22%3E      %3Cg         id%3D%22Group_44%22         data-name%3D%22Group 44%22         transform%3D%22translate(0%2C2.333)%22%3E        %3Cpath           id%3D%22Path_4%22           data-name%3D%22Path 4%22           class%3D%22cls-3%22           d%3D%22m -949%2C-500 v 10.667 l 8%2C-5.333%22           transform%3D%22translate(989%2C564)%22           inkscape%3Aconnector-curvature%3D%220%22           style%3D%22fill%3A%23211f20%22 %2F%3E        %3Cpath           id%3D%22Path_5%22           data-name%3D%22Path 5%22           class%3D%22cls-4%22           d%3D%22m -949%2C-500 v 10.667 l 8%2C-5.333%22           transform%3D%22translate(989%2C574.667)%22           inkscape%3Aconnector-curvature%3D%220%22           style%3D%22fill%3A%23737373%22 %2F%3E        %3Cpath           id%3D%22Path_6%22           data-name%3D%22Path 6%22           class%3D%22cls-5%22           d%3D%22m -949%2C-500 v 10.667 l 8%2C-5.333%22           transform%3D%22translate(997%2C569.333)%22           inkscape%3Aconnector-curvature%3D%220%22           style%3D%22fill%3A%23f1680d%22 %2F%3E        %3Cpath           id%3D%22Path_7%22           data-name%3D%22Path 7%22           class%3D%22cls-6%22           d%3D%22M 0%2C0 V 10.667 L 8%2C5.333 Z%22           transform%3D%22rotate(180%2C24%2C40)%22           inkscape%3Aconnector-curvature%3D%220%22           style%3D%22fill%3Argba(255%2C255%2C255%2C0)%22 %2F%3E      %3C%2Fg%3E    %3C%2Fg%3E  %3C%2Fg%3E%3C%2Fsvg%3E" />PeerTube Theme Tester</h1>
<a href="https://github.com/Chocobozzz/PeerTube/wiki/Contribute-to-design">PeerTube contribution guidelines</a> <br /><br />
<form action="" method="post">
	Css Url <input type="text" name="css_url" /> <br />
	JS Url <input type="text" name="js_url" /> <br />
	
	<h2>OR</h2>
	<br /> 
	CSS <br /><textarea name="css"></textarea>
	<br /> <br />
		JS <br /><textarea name="js"></textarea>
	<input type="submit" />
</form>

 <a href="https://github.com/PhieF/peertube_theme_tester">code</a>

</body>
</html>
<style>

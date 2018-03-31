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
<style>
textarea{
	width:100%;
	min-height:500px;
}
</style>
<form action="" method="post">
	Css Url <input type="text" name="css_url" /> <br />
	JS Url <input type="text" name="js_url" /> <br />
	
	<br /> 
	
	<h2>OR</h2>
	<br /> 
	CSS <br /><textarea name="css"></textarea>
	<br /> <br />
		JS <br /><textarea name="js"></textarea>
	<input type="submit" />
</form>

code https://github.com/PhieF/peertube_theme_tester

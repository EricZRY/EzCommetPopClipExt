<?php
mb_internal_encoding("UTF-8");
$input=getenv('POPCLIP_TEXT');
$arr = str_split($input);
$input = '';
foreach ($arr as $key => $value) {
	$input .= $value;
	if ($value == "\n" and $key + 1 < count($arr) and ($arr[$key+1] != "\n")) {
		$input .= '//';
	}
}
$input = '//'.$input;
echo $input;
?>
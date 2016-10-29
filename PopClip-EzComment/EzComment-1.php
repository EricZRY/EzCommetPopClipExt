<?php
mb_internal_encoding("UTF-8");
// $input=getenv('POPCLIP_TEXT');
$input='CCArray* rewards;
    void buyCard();
    void resetCard();
    void addTime();
    bool canReward();';
$arr = str_split($input);
print($arr);
$input = '';
foreach ($arr as $key => $value) {
	print($key."=>".$value."\n");
	$input .= $value;
	if ($value == "\n") {
		$input .= '//';
	}
}
$input = '//'.$input;
echo $input;
?>
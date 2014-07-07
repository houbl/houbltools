<?php
/*
 * 寻找自长子字符串
 */
$a = $argv[1];
$wordList = array();
$maxWordInfo = array();
$maxWordInfo = '';
$maxLenWord = '';
$count = strlen($a);
$start = 0;
for( $i=$start; $i<$count; $i++ ){
	if(!isset( $wordList[$a[$i]]) ){
		$wordList[ $a[$i] ]['word'] = 1;
		$wordList[ $a[$i] ]['start'] = $i;
		$maxWordInfo .= $a[$i];
	}else{
		if( strlen($maxLenWord) < strlen( $maxWordInfo ) ){
			$maxLenWord = $maxWordInfo;
		}
		$maxWordInfo = '';
		$wordList = array();
		$i = $start;
		$start += 1 ;
	}
	if( $i == $count-1 ){
		if( strlen($maxLenWord) < strlen( $maxWordInfo ) ){
			$maxLenWord = $maxWordInfo;
		}
	}
}

var_dump($maxLenWord);
?>

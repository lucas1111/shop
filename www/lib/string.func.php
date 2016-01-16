<?php
	define("stringTest","123");
	function getRandomString($type=1,$length=4){	
		if($type==1){
			$char=join("",range(0,9));
		}elseif($type==2){
			$char=join("",array_merge(range("a","z"),range("A","Z")));
		}elseif($type==3){
			$char=join("",array_merge(range("a","z"),range("A","Z"),range(0,9)));
		}

		if($length>strlen($char)){
			exit("字符长度不够！");
		}

		$char=str_shuffle($char);
		//return $char;
		return substr($char,0,$length);

	}

	//echo getRandomString();


/**
 * 生成唯一字符串
 * @return string
 */
/*
	uniqid(prefix,more_entropy) 函数基于以微秒计的当前时间，生成一个唯一的 ID。
		prefix可选。为 ID 规定前缀。如果两个脚本恰好在相同的微秒生成 ID，该参数很有用。
		more_entropy可选。规定位于返回值末尾的更多的熵。
	如果 prefix 参数为空，则返回的字符串有 13 个字符串长。
	如果 more_entropy 参数设置为 true，则是 23 个字符串长。
	如果 more_entropy 参数设置为 true，则在返回值的末尾添加额外的熵（使用组合线形同余数生成程序），
	这样可以结果的唯一性更好。
		返回值:以字符串的形式返回唯一标识符。
	注释：由于基于系统时间，通过该函数生成的 ID 不是最佳的。
		  如需生成绝对唯一的 ID，请使用 md5() 函数（请在字符串函数参考中查找）。	
*/
function getUniName(){
	return md5(uniqid(microtime(true),true));
}

/**
 * 得到文件的扩展名
 * @param string $filename
 * @return string
 */
/*
end的参数是一个引用（reference），只能把一个变量的引用作为一个参数传给函数，
直接把explode('.',$filename)作为参数传给end函数，会出现警告提示。
可以这样修改，先定义一个变量，然后把这个变量传给end函数，这样就不会出现警告提示
*/
function getExt($filename){
	$tmp_var = explode(".",$filename);
	return strtolower(end($tmp_var));
}
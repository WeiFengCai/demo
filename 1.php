<?php
   $array['0']="我是哈哈哈";
   echo $array['0'];
   echo "<br>";
   
   $arr_String = array('one'=>"哈哈哈哈",'two'=>"嘻嘻嘻");
   print_r($arr_String);
   echo "<br>";
   echo $arr_String['two'];
   echo "<br>";
   $arr_int =array('php','java','javascript');
   print_r($arr_int);
   echo "<br>";
   echo $arr_int['2'];
    echo "<br>";
   $str = array(
      "NBA" =>array('韦德','詹姆斯','安东尼'),
	  "CBA" =>array('1'=>"易建联",'2'=>"姚明",'3'=>"周琦")
  
   );
   echo "原数值：";
   print_r($str);
    echo "<br>";
	echo "遍历后的值：";
    foreach($str as $key=>$link){
		foreach($link as $value){
			echo $value."<br>";
		}
	 
	}
   ?>
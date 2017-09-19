<?php
// header("content-type:text/html;charset=utf8");
header("content-type:text/html;charset=utf8");
/**
 * @Author: Administrator
 * @Date:   2017-09-05 11:31:35
 * @Last Modified by:   Administrator
 * @Last Modified time: 2017-09-11 23:22:36
 */
//count()计算数组的长度，有两个参数，参数1：数组名，参数2 布尔值，指定是否进行递归；
//遍历数组，for循环；
//遍历数组foreach($arrayname as ($key=>$zhi|$key);
//array是5.3之前出的,arr[]是5.3版本上才可使用。
//list()
//each()
// $arr=[1,2,3,4,5,23,45,34];
// function FunName()
// {
// 	return $arr=[1,2,3,4,5,23,45,34];
// }
// FunName();
// $arr1=["name"=>"xiaohua","age"=>18,"sex"=>"女"];
// for ($i=0; $i < count($arr); $i++) {

// 	echo "<pre>";
// 	var_dump($arr[$i]); 
// 	echo "</pre>";
// }
// $array = array(1.2=>10,'12' =>"12",true =>'1',false=>'true',null=>null);
// foreach ($array as $key=>$value) {
// 	echo "<pre>";
// 	var_dump($array);
// 	echo "</pre>";
// }
// current (PHP 4, PHP 5, PHP 7)
// current — 返回数组中的当前单元
// mixed current ( array &$array )
// 每个数组中都有一个内部的指针指向它"当前的"单元，初始指向插入到数组中的第一个单元。
// array_values (PHP 4, PHP 5, PHP 7)
// array_values — 返回数组中所有的值
// array array_values ( array $input )
// array_values() 返回 input 数组中所有的值并给其建立数字索引。返回值:值的索引数组。


// 创建一个简单的数组
// $array = array(1, 2, 3, 4, 5);
// print_r($array);
// echo "<br>";
// // 现在删除其中的所有元素，但保持数组本身不变:
// foreach ($array as $i => $value) {
//     unset($array[$i]);
// }
// print_r($array);
// echo "<br>";
// // 添加一个单元（注意新的键名是 5，而不是你可能以为的 0）
// $array[] = 6;
// print_r($array);
// echo "<br>";
// // 重新索引：
// $array = array_values($array);
// $array[] = 7;
// print_r($array);


// $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
// function test_alter(&$item1, $key, $prefix)
// { 

//     $item1 = "$prefix: $item1";

// }
// function test_print($item2, $key)
// {
	
//     echo "$key. $item2<br />\n";
// }
// echo "Before ...:\n";
// array_walk($fruits, 'test_print');
// print_r($fruits);
// array_walk($fruits, 'test_alter', 'fruit');
//  echo "... and after:\n";
//  array_walk($fruits, 'test_print');
// print_r($fruits);
// function rsum($v, $w)
// {
//     $v += $w;
//     return $v;
// }

// function rmul($v, $w)
// {
//     $v *= $w;
//     return $v;
// }
// $a = array(1, 2, 3, 4, 5);
// $x = array();
// $b = array_reduce($a, "rsum");
// $c = array_reduce($a, "rmul", 10);
// $d = array_reduce($x, "rsum", "No data to reduce");
// echo $d;
// $ar = array(
//        array("10", 11, 100, 100, "a"),
//        array(   1,  2, "2",   3,   1)
//       );
// array_multisort($ar[0], SORT_ASC, SORT_STRING,
//                 $ar[1], SORT_NUMERIC, SORT_DESC);
// echo "<pre>";
// var_dump($ar);
	// 	echo "</pre>";
// $array = array('lastname', 'email', 'phone');
// $comma_separated = implode("", $array);

// echo $comma_separated; // lastname,email,phone
// $ar1 = array(10, 100, 100, 0);
// $ar2 = array(1, 3, 2, 4);
// array_multisort($ar1, $ar2);
// echo "<pre>";
	
// var_dump($ar1);
// var_dump($ar2);
// echo "</pre>";

// $ar = array(
//        array("10", 11, 100, 100, "a"),
//        array(   1,  2, "2",   3,   1)
//       );
// array_multisort($ar[0], SORT_ASC, SORT_STRING,
//                 $ar[1], SORT_NUMERIC, SORT_DESC);
// echo "<pre>";
// var_dump($ar);
// echo "</pre>";
// exit("结束程序");//die
// echo "string";


// 忽视位置偏移量之前的字符进行查找
// $newstring = 'abcdefabcdef';
// $pos = strpos($newstring, 'a', 1); // $pos = 7, 不是 0
// echo $pos;


//   $string = 'iAPPLE';
//   echo stristr($string, 97); // 97 = 小写字母 a
// // 输出: APPLE
// $number = 1234.56;

// // english notation (default)
// $english_format_number = number_format($number);
// // 1,235

// // French notation
// $nombre_format_francais = number_format($number, 2, '.', ' ');
// // 1 234,56

// $number = 1234.5678;

// // english notation without thousands separator
// $english_format_number = number_format($number, 2, '.', ',');
// // 1234.57
// var_dump($nombre_format_francais);
 

// $str="11111111111111";
// $c = md5($str);
// echo $c;
// $subject = array('1', 'a', '2', 'b', '3', 'A', 'B', '4'); 
// $pattern = array('/\d/', '/[a-z]/', '/[A-Z]/'); 
// $replace = array('张三', '李四'); 
// 

// echo "preg_filter returns\n";
// echo "<pre>";
// print_r(preg_filter($pattern, $replace, $subject)); 
// 	echo "</pre>";
// echo "preg_replace returns\n";
// print_r(preg_replace($pattern, $replace, $subject)); 

// $subject = "abcdef";
// $pattern = '/^def/';
// preg_match($pattern, substr($subject,3),  $matches, PREG_OFFSET_CAPTURE);
// print_r($matches);

	/*
		新闻
			--国内新闻
			--国外新闻
		编程
			--PHP
			--JAVA
		科目
			--理科
				--化学
			--文科
	*/
	$arr = array(
		["id"=>1,'pid'=>0,'name'=>'新闻'],
		["id"=>2,'pid'=>0,'name'=>'编程'],
		["id"=>3,'pid'=>0,'name'=>'科目'],
		["id"=>4,'pid'=>1,'name'=>'国内新闻'],
		["id"=>5,'pid'=>1,'name'=>'国外新闻'],
		["id"=>6,'pid'=>2,'name'=>'PHP'],
		["id"=>7,'pid'=>2,'name'=>'JAVA'],
		["id"=>8,'pid'=>3,'name'=>'理科'],
		["id"=>9,'pid'=>3,'name'=>'文科'],
		["id"=>10,'pid'=>4,'name'=>'化学'],
	);
/*function object($arr){
	 $len=count($arr);
	  for ($i=0 ; $i < $len; $i++) { 
	  foreach (($arr[$i]) as $key => $value) {
	  	if ($key=="pid"&&$value==0) {
	  		static $arr1=array();
	  		array_push($arr1,$arr[$i]);
	  	}elseif ($key=="pid"&&$value==1) {
	  		static $arr2=array();
	  		array_push($arr2,$arr[$i]);
	  	}
	  	elseif ($key=="pid"&&$value==2) {
	  		static $arr3=array();
	  		array_push($arr3,$arr[$i]);
	  	}elseif ($key=="pid"&&$value==3) {
	  		static $arr4=array();
	  		array_push($arr4,$arr[$i]);
	  	}elseif ($key=="pid"&&$value==4) {
	  		static $arr5=array();
	  		array_push($arr5,$arr[$i]);

	  	}
    }
}
for ($i = 0; $i  <$len ; $i ++) { 
   $arrs[$i]=array_merge_recursive($arr[$i],$arr[$i][1],$arr[$i][2]);
   return  $arrs[$i];
}*/

// $arrs0=array_merge_recursive($arr1[0],$arr1[1],$arr1[2]);
// $arrs1=array_merge_recursive($arr2[0],$arr2[1]);
// $arrs2=array_merge_recursive($arr3[0],$arr3[1]);
// $arrs3=array_merge_recursive($arr4[0],$arr4[1]);
// $arrs4=array_merge_recursive($arr5[0]);
// 	}
// echo "<pre>";
// print_r(object($arr));
// 	echo "</pre>";
	function fenji($arr){
       //获取数组 $narr0 $narr1 $narr2 $narr3
       $m=count($arr);
       for($i = 0;$i < $m;$i++){ 
	      foreach ($arr[$i] as $key => $value) {
	      	 if($key == 'pid' && $value == 0){
                $narr0[] = $arr[$i];
	      	 } else if($key == 'pid' && $value == 1){
                  $narr1[] = $arr[$i];
	      	   } else if($key == 'pid' && $value == 2){
                   $narr2[] = $arr[$i]; 
	      	     } else if($key  == 'pid' && $value == 3){
                      $narr3[] = $arr[$i]; 
	      	       } else if($key  == 'pid' && $value == 4){
                        $narr4[] = $arr[$i]; 
	      	         }
	      		}

	   		}
       for($j=0;$j<count($narr0);$j++){//遍历 $narr0 的每一项 
          // if($j=0){  // 如果是 $narr0 的第一项
          foreach ($narr0[$j] as $key => $value) { //得到 $narr0 每一项的键名和键值
	   	     if($key == 'name'){ //如果键名为 'name'
                echo "<dl>".$value; //输出在 <dl> 中 
                if($j==0){
                   for($k = 0;$k < count($narr1);$k++){
                      foreach ($narr1[$k] as $key =>$value) {
                	      if($key == 'name'){
                		      echo "<dt>--".$value;
                	      }
                      }
                      echo "</dt>";
                  
                   }
                } else if($j==1){
                     for($k = 0;$k < count($narr2);$k++){
                        foreach ($narr2[$k] as $key => $value) {
                	        if($key == 'name'){
                	  	      echo "<dt>--".$value;
                	        }
                        }
                        echo "</dt>";
                     }
                  }

                   else if($j==2){
                       for($k = 0;$k <count($narr3);$k++){
                          foreach ($narr3[$k] as $key => $value) {
                	          if($key == 'name'){
                		          echo "<dt>--".$value;
                                  for($g = 0;$g <count($narr4);$g++){
                                     foreach ($narr4[$g] as $key => $value) {
                                        if($key == 'name'){
                                           echo "<dd>----".$value."</dd>";
                                        }
                                     }
                                  }
                	          }
                          }
                          echo "</dt>";
                       }
                    }
                    echo "</dl>";
	   	     }
	      }

	  }
    

    }
	print_r(fenji($arr));


// 	function back($arr)
// 	{
// 	for($j=0;$j<count($narr0);$j++){//遍历 $narr0 的每一项 
//           // if($j=0){  // 如果是 $narr0 的第一项
//           foreach ($narr0[$j] as $key => $value) { 
// 	   	     if($key == 'name'){ //如果键名为 'name'
//                 echo "<dl>".$value; //输出在 <dl> 中 
//                 if($j==0){
//                    for($k = 0;$k < count($narr1);$k++){
//                       foreach ($narr1[$k] as $key =>$value) {
//                 	      if($key == 'name'){
//                 		      echo "<dt>--".$value;
//                 	      }
//                       }
//                       echo "</dt>";
                  
//                    }
//                 } 
//             }
//         }
//     }
// }
?>
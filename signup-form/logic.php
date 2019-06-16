<?php

// 	$a=10;
// 	$b=20;
// echo $c=$a + $b;
// echo "<br>";


// //  conditional blocks
// 	$age=10;
// 	if ($age >= 18) {
// 		echo "You Are Eligible";
// 	}else{
// 		echo "You Are Not Eligible";
// 	}
// echo "<br>";
// echo "<br>";
// // functions with parameters
// function add ($a=0, $b=0){
// 	$c= $a+ $b;
// 	return $c;
// }
// add (2,3);
// 	$result= add(2,3);
// 	echo $result;
// echo "<br>";
// echo "<br>";

// // with arrays
// $fruits=array('mango','banana','apple');
// // echo $fruits; we can't use echo for print object
// // print_r($fruits);
// // echo "<br>";
// // var_dump($fruits);

// array_push($fruits,'orange');
// echo print_r($fruits);
// echo "<br>";
// echo "<br>";
// var_dump($fruits);
// echo "<br>";
// echo "<br>";


// // Array to string (implode function)
// $imploded_array= implode(' ', $fruits);
// echo $imploded_array;
// echo "<br>";
// echo "<br>";


// // String to array (explode function)
// $name='My name is Haseeb';
// $exploded_array= explode(' ','My name is Haseeb');
// var_dump($exploded_array);
// echo "<br>";
// echo "<br>";


// // for loop
// 	$table=10;

// 	for ($i=1; $i <= 10 ; $i++) { 
// 		echo ($table.' ' .'x' .' ' . $i .' ' .'=' .' ' .$i * $table .' ' .'<br>');
// 	}

// // for each loop
// 	$users=array(
// 		'Name'=>'Haseeb',
// 		'Age'=>'19',
// 		'StudyProgram'=>'BsIT'
// 	);

// 	foreach ($users as $key => $data) {
// 		print_r($users);
// 	};
// echo "<br>";
// echo "<br>";

// isset function
	// $user1=array(
	// 	'name'=>'Haseeb',
	// 	'age'=>19
	// );

	// print_r(isset($user1['name']));
	// echo "<br>";
	// if (isset($user1['contact'])) {
	// 	echo "Existed";
	// } else {
	// 	echo "Not Existed";
	// }
	// if (isset($user1['name']) && $user1['name']) {
	// 	echo "Existed";
	// };

// 	echo "<br>";
// // print_r($_POST);
// echo "<pre>";
// print_r($_FILES);


// // exercise Factorial 
// echo "<h4>Factorial Number Series</h4>";
// $num = 6;
// $factorial = 1;
// for ($x=$num; $x>=1; $x--) 
// {
//   $factorial = $factorial * $x;
// }
// echo "Factorial of $num is $factorial";

// // exercise fibonacci

// echo "<h4>Fibonacci Series</h4>";
// $num = 0;  
// $n1 = 0;  
// $n2 = 1;    
// echo $n1.' '.$n2.' ';  
// while ($num < 10 )  
// { 
//     $n3 = $n2 + $n1;  
//     echo $n3.' ';  
//     $n1 = $n2;  
//     $n2 = $n3;  
//     $num = $num + 1;  

// };

// //exercise array finding
// echo "<h4>Array finding</h4>";

//  function Search($value, $array) 
// { 
//     return(array_search($value, $array,false)); 
// } 
// $array = array(4, 6, 13, 2, 1, 18); 
// $value = "2"; 
// echo "Your value $value is on index of ";  
// print_r(Search($value, $array));

// //even odd number finding 
// echo "<h4>Even Odd number finding</h4>";
// $value = 11119;
// if($value%2){
//   echo 'Your insert value is in <b>odd</b> format';
// }else{
//   echo 'Your insert value is in <b>even</b> format';
// };

if(isset($_POST['submit_signup'])){
	print_r($_POST);
}



?>

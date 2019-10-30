<!DOCTYPE  html>
<html>
<head>
<meta charset="utf-8">
<title>Document</title>
</head>
<body>
<?php
//echo "vung lam viec php";
////////////biến trong php
//$ten_bien = ()
////////kiểu dữ liệu trong php
//_Số nguyên
//_Số thực
//_chuỗi
//_logic
//////////////////////////
//1. số nguyên
//vd:
//$so_nguyen = 10;
//echo $so_nguyen
//2. số thực làm như số nguyên
//3 chuỗi
//$chuoi = 'xin chào 500 anh em';
//echo $chuoi;
////////////////////////logic
//$logic = true;
//$logic = 5>3; // đây là 1 biểu thức
//echo $logic;
////////////////////toán tử
//+gán, nối
//$abc = 123;// dấu = là toán tử gán
//nối. vd:
//$abc = "vietpro";
//echo "xin chào các bạn".$abc;
////////////// toán tử so sánh
//$a=10;
//$a++;
//echo $a;
////////hằng
//define
//define('AC',5.6);
//echo AC;
//bai tap vd:
//$a = 10;
//$b = --$a;
//echo $b
//$a=5;
//$b=10;
//$a+=$b;
//echo $a;
//bai tap:
//$a =5 ; $b; $c; $d = 2;
// echo $a; // kết quả =?
// $a++;
// echo $a; //kết quả =?
// $b =$a--;
// echo $b; //kết quả =?
// $c= --$a;
// echo $c; //kết quả =?
// $c +=10;
// $c -=$a;
// echo $c; //kết quả =?
// $c /= $d;
// echo $c; //kết quả =?
// $a =2 ;
// echo $a;
// --$a;
// echo $a;
//  //Bai 2

/////////  1. Biểu thức điều kiện
//   IF  -  IF-ELSE  - ELSE-IF
// a. if
// if(biểu thức){
// ..........code
// }
// ví dụ
// $songuyen = 10;
// if($songuyen>0){
//    echo 'đây là số nguyên dương';}
// vd2;
//$a = 0;
//if($a == 0){
 //   echo 'đây là a=0';
//}
////////////////IF - ElSE
// cú pháp: if(){} else{}
// $songuyen = -10;
// if($songuyen>0){
//    echo 'đây là số nguyên dương';}
// else {
//     echo 'đây không là số nguyên dương';
// }
/////////////////////////////else- if
//  cu phap
// if(){
// } else if{
// }else{
// }
// $songuyen = 0;
// if($songuyen>0){
//    echo 'đây là số nguyên dương';}
// else if($songuyen==0){
//     echo 'đây  là số 0';
// }else{
//     echo'day khong la so nguyen duong'
// }
// }
//vd
// $m = 2;
// if($m == 1){
//     echo 'm=1';
// }else if($m==2){
//     echo 'm=2';
// }else if($m==3){
//     echo 'm=3';
// }else if($m==0){
//     echo 'm=0';
// }else{
//     echo 'khong co ket qua';
// }

//  SWICH -> Hoc sau
////////  2.Vòng lặp
//  WHILE, FOR
//////////////while 
// cu phap
// while($bieu_thuc){
//     //code thuc thi;
// }
// vi du
// $i =5;
// while($i<10){
//     echo $i.',';
//     $i++;
// }
// vi du in ra cac so tu 10 den 1 va co dau ",". dau "." de ket thuc cau.
// $i=10;
// while($i>0){
//     if($i>1){
//         echo $i.',';
//     }else{
//         echo $i.'.';
//     }
//     $i--;
// }
//////////////vong lap for
//for(bien khoi tao;bieu thuc;tang/giam bien khoi tao){
//   code thuc thi
//}
// vd dung vong lap for de lay ra cac so chan tu 10 ->0. cac nhau 2 don vi.
// for($so = 10;$so >= 0;$so-=2){
//     echo $so.',';
// }
//  DO ,WHILE -> Hoc sau
////////  3.Bài tập
// Bai tap 1-tinh tong tu 1 den 100.
// $tong = 0;
// for($i=0;$i<=100;$i++){
//     $tong+=$i;
// }
// echo $tong;
// Bai tap2. thiet ke bang cuu chuong 2->9

// for($i=2;$i<=9;$i++){
//     for($j=1;$j<=10;$j++){
//         echo $i.'x'.'='.$i*$j.',';
//     }
// echo '<br/>';
//  }
// _________________________BÀI 3
// ///////////phuong thuc GET
// cu phap : $_GET['tham so'];
// truyền tham số lên url:ten_mien.com/index.php?tham_so1=gia_tri1&tham_so2=gia_tri2&tham_so3.......
//  $_GET['tham_so'];
// vi du 1:
// if(isset($_GET['ten']) && isset($_GET['tuoi'])&& isset($_GET['diachi'])){
//     $ten = $_GET['ten'];
//     $tuoi=$_GET['tuoi'];
//     $diachi=$_GET['diachi'];

//     echo $ten.'<br/>'.$tuoi.'<br/>'.$diachi;
// }
//  ////////////////////////////////MẢNG
// array = array(giá trị 1,giá trị 2,giá trị 3..........);
// $array = array(1,2,'ba','bốn'=>'bốn',true,5.5,'vân vân');
// // array = [1,2,'ba','bốn',true,5.5,'vân vân'];
// // echo '<pre>';
// // var_dupm($array);
// // print_r(array);
// // echo '</pre>';
// foreach($array as $key =>$value){
//     // echo $key.'=>'.$value.'<br/>';
// }
// echo $array[3];



////////////////////////////////////////////////////////json

// Đọc file json
// $data = file_get_contents('data.json');
// // chuyển json sang đạng mảng
// $result_array = json_decode($data,true);
// // foreach
// foreach ($result_array as $value){
//     echo $value;
// }
// /////// mã hóa file json:
// // ghi file json
// $data_json = json_encode($result_array);
// //đưa dữ liệu vào json
// file_put_contents('data.json',$data_json);








  
// ?>

</body>
</html>
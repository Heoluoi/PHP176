<html>
<head>
<title>haha</title>
</head>
<body>
<?php
// phuong thuc POST
// $_GET[tham so];
// $_POST[tham so];
// tham số truyền vào biến post thường là name của ô input
// luôn luôn kiểm tra submit
// làm giống phương thức GET

// if(isset($_POST['sbm'])){
//     $email = $_POST['email'];
//     $pass = $_POST['pass'];
//     echo $email.'<br/>'.$pass;
// }

//////////////////////////////////////////FILE UPLOAD
// $_FILES['tham_so']['name'];  //lấy tên file upload.
// $_FILES['tham_so']['type'];  //lấy theo kiểu file.
// $_FILES['tham_so']['size'];  //lấy theo size file upload.

// $_FILES['tham_so']['error'];  //lấy lỗi file upload.
// $_FILES['tham_so']['tmp_name'];  //đường dẫn khay nhớ tạm khi upload.
// move_uploaded_file($tmp_name, 'upload/anhdep.jpg');
// if(isset($_POST['sbm'])){
// $file_name = $_FILES['file']['name'];
// $file_tmp_name = $_FILES['file']['tmp_name'];
// $file_error = $_FILES['file']['error'];
// if($file_error >0){
//     echo 'file upload lỗi';
// }else{
//     move_uploaded_file($file_tmp_name,'upload/'.$file_name);
//     echo 'bạn đã upload thành công!'.'hr';
//      }
//     }

?>
<!-- <img src="<?php //echo 'upload/'.$file_name;?>" alt="" style="max-width:50%"> -->

<!--    <form action="" method="post">
        <input type="email" name ="email">
        <input type="password" name="pass">
        <input type="submit" name="sbm">
        -->
 <!--   <form action="" method="post" enctype="multipart/form-data">
    <input type ="file" name="file">
    <input type ="submit" name="sbm">
    </form> -->

<?php 
// bước 1
$file_name = $_GET['file_name']; //dùng get dể hứng
$file_path = 'upload/'.$file_name; // mở file đến thư mục
// bước 2 : thông báo tải file:
header("content-disposition:attachment;filename=$file_name");//tải xống
// bươc 3:trình duyệt trả về định dạng file (dạng dpf, octet-stream.......)
header("content-type:application/dpf");
readfile("$file_path");

?>


</body>
</html>
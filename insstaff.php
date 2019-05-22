<?php
$conn = new PDO('mysql:host=localhost;dbname=dihubin_dih', 'dihubin_root', 'Dihroot@1');


  $name =$_POST['name'];
  $password = $_POST['password'];
  $empid = $_POST['EmployeeID'];
  $dob = $_POST['dob'];
  $sex = $_POST['sex'];
  $age = $_POST['age'];
  $blood_group =$_POST['blood_group'];
  $address = $_POST['address'];
  $mobilno =$_POST['moblieno'];
  $dep = $_POST['department'];
  $des = $_POST['designation'];
  $doa = $_POST['doa'];
  $email = $_POST['email'];
echo $registor_no;
$hashedPwd = password_hash($password,PASSWORD_DEFAULT);
echo $hashedPwd;
echo $dob;

$conn->query("INSERT INTO staffdata (name,password,email,employid,dob,gender,age,bg,dep,des,doa,afc,mobno) VALUES ( '$name' , '$hashedPwd' ,'$email', '$empid' , '$dob' , '$sex' , '$age' , '$blood_group' , '$dep' , '$des' , '$doa' , '$address' , '$mobilno' );");

header('Location: index.html');
?>
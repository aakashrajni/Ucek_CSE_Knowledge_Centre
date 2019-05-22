<?php
$conn = new PDO('mysql:host=localhost;dbname=sms', 'root', '');

  $registor_no = $_POST['Register_no'];
  $name =$_POST['name'];
  $password = $_POST['password'];
  $dob = $_POST['dob'];
  $sex = $_POST['sex'];
  $age = $_POST['age'];
  $blood_group =$_POST['blood_group'];
  $yoa = $_POST['year_of_admission'];
  $year = $_POST['year'];
  $sem = $_POST['sem'];
  $hod = $_POST['hos'];
  $rol =$_POST['rol'];
  $fathername = $_POST['fathername'];
  $po = $_POST['pgo'];
  $address = $_POST['address'];
  $mobilno =$_POST['moblie_no'];
  $peradd =$_POST['p_address'];
  $email = $_POST['email'];
  $p_mobileno = $_POST['parent_no'];
  $aa =$_POST['academic_achievements'];
  $naa = $_POST['Non_Academic_Achievements'];
// echo $registor_no;
$hashedPwd = password_hash($password,PASSWORD_DEFAULT);
// echo $hashedPwd;
// echo $dob;
 
$conn->query("INSERT INTO stud (regno,name,pass,dob,sex,age,bg,yoa,year,sem,hod,rol,faname,occup,addres,mob,paddres,email,pno,acaach,nonacaach) VALUES ( '$registor_no' , '$name' , '$hashedPwd' , '$dob' , '$sex' , '$age' , '$blood_group' , '$yoa' , '$year' , '$sem' , '$hod' , '$rol' , '$fathername' , '$po' , '$address' , '$mobilno' , '$peradd' , '$email' , '$p_mobileno' , '$aa' , '$naa' );");



header('Location: index.html');
?>
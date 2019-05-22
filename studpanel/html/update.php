<?php 
$conn = new PDO('mysql:host=localhost;dbname=dihubin_dih', 'dihubin_root', 'Dihroot@1');
session_start();
$us= $_SESSION['username'];

  $register_no = $_POST['Register_no'];
  $name =$_POST['name'];
   $dob = $_POST['dob'];
  $sex = $_POST['sex'];
  $age = $_POST['age2'];
  $blood_group =$_POST['blood_group'];
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

// echo $hashedPwd;
// echo $dob;
  
 
// $conn->query("INSERT INTO stud (regno,name,pass,dob,sex,age,bg,yoa,year,sem,hod,rol,faname,occup,addres,mob,paddres,email,pno,acaach,nonacaach) VALUES ( '$registor_no' , '$name' , '$hashedPwd' , '$dob' , '$sex' , '$age' , '$blood_group' , '$yoa' , '$year' , '$sem' , '$hod' , '$rol' , '$fathername' , '$po' , '$address' , '$mobilno' , '$peradd' , '$email' , '$p_mobileno' , '$aa' , '$naa' );");

 // $conn->query ("UPDATE stud SET   name ='$name',dob ='&dob',sex='$sex',age='$age', bg='$blood_group',yoa='$yoa',year='$year',sem='$sem',hod='$hod',rol='$rol' faname='$fathername',occup='$po',addres='$address' mob='$mobilno',paddres='$peradd',pno='$p_mobileno',acaach='$aa',nonacaach='$naa'  WHERE email='$email' ;");
// $res = mysqli_query ($conn1,$sql1);

$conn->query ("UPDATE astud SET name ='$name',dob='$dob',sex='$sex',age='$age',bg='$blood_group',year='$year',sem='$sem',hod='$hod',rol='$rol',faname='$fathername',occup='$po',addres='$address',mob='$mobilno',paddres='$peradd',pno='$p_mobileno',acaach='$aa',nonacaach='$naa',email='$email' WHERE regno='$register_no';");

header('Location: profile.php');
?>
 
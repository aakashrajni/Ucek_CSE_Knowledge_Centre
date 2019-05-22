function Validator(){

  var x= parseInt(document.Form.moblie_no.value);
  var y =10;
var reg = parseInt(document.Form.Register_no.value);
var reg2 = 12;
var age = parseInt(document.Form.age.value);
var age1 = 15;
var age2 = 30;
var year = parseInt(document.Form.year.value);
var year1 = 1;
var year4 = 4;
var sem = parseInt(document.Form.sem.value);
var sem1 =1;
var sem8 = 8;


if( document.Form.Register_no.value == "") {
  document.getElementById("Register_no1").innerHTML="Error: Input is empty!";
  Form.Register_no.focus();
  return false;
}
if (isNaN(document.Form.Register_no.value)){
document.getElementById("Register_no1").innerHTML="Enter Numeric value only";
Form.Register_no.focus();
return false;
}
if (reg < reg2) {
document.getElementById("Register_no1").innerHTML="Enter Numeric value of 12 digit";
Form.Register_no.focus();
return false;
}else{
  document.getElementById("Register_no1").style.visibility = "hidden";
}
if( document.Form.name.value == "") {
document.getElementById("name1").innerHTML="Error: Input is empty!";
Form.name.focus();
return false;
}else{
  document.getElementById("name1").style.visibility = "hidden";
}
if( document.Form.dob.value == "") {
document.getElementById("dob1").innerHTML="Error: Input is empty!";
Form.dob.focus();
return false;
}else{
  document.getElementById("dob1").style.visibility = "hidden";
}
if( document.Form.age.value == "") {
document.getElementById("age1").innerHTML="Error: Input is empty!";
Form.age.focus();
return false;
}
if(age<age1 || age>age2) {
document.getElementById("age1").innerHTML="Error: Please enter a valid age";
Form.age.focus();
return false;
}else{
  document.getElementById("age1").style.visibility = "hidden";
}
if(Form.blood_group.selectedIndex < 1) {
document.getElementById("blood_group1").innerHTML="Error: Please select the field";
Form.blood_group.focus();
return false;
}else{
  document.getElementById("blood_group1").style.visibility = "hidden";
}
if( document.Form.year_of_admission.value == "") {
document.getElementById("year_of_admission1").innerHTML="Error: Input is empty!";
Form.year_of_admission.focus();
return false;
}else{
  document.getElementById("year_of_admission1").style.visibility = "hidden";
}
if(Form.year.selectedIndex < 1) {
document.getElementById("year1").innerHTML="Error: Please select the field";
Form.year.focus();
return false;
}else{
  document.getElementById("year1").style.visibility = "hidden";
}
if(Form.sem.selectedIndex < 1) {
document.getElementById("sem1").innerHTML="Error: Please select the field";
Form.sem.focus();
return false;
}else{
  document.getElementById("sem1").style.visibility = "hidden";
}
if(Form.hos.selectedIndex < 1) {
document.getElementById("hos1").innerHTML="Error: Please select the field";
Form.hos.focus();
return false;
}else{
  document.getElementById("hos1").style.visibility = "hidden";
}
if(Form.rol.selectedIndex < 1) {
 document.getElementById("rol1").innerHTML="Error: Please select the field";
 Form.rol.focus();
 return false;
}else{
  document.getElementById("rol1").style.visibility = "hidden";
}
if( document.Form.fathername.value == "") {
  document.getElementById("fathername1").innerHTML="Error: Input is empty!";
  Form.fathername.focus();
  return false;
}else{
  document.getElementById("fathername1").style.visibility = "hidden";
}
if( document.Form.pgo.value == "") {
  document.getElementById("pgo1").innerHTML="Error: Input is empty!";
  Form.pgo.focus();
  return false;
}else{
  document.getElementById("pgo1").style.visibility = "hidden";
}
if( document.Form.address.value == "") {
  document.getElementById("address1").innerHTML="Error: Input is empty!";
  Form.address.focus();
  return false;
}else{
  document.getElementById("address1").style.visibility = "hidden";
}
if( document.Form.moblie_no.value == "") {
  document.getElementById("moblie_no1").innerHTML="Error: Input is empty!";
  Form.moblie_no.focus();
  return false;
}
if (isNaN(document.Form.moblie_no.value)){
document.getElementById("moblie_no1").innerHTML="Enter Numeric value only";
Form.moblie_no.focus();
return false;
}

if ( x < y) {
  document.getElementById("moblie_no1").innerHTML="Enter Numeric value of 10 digit";
  Form.moblie_no.focus();
  return false;
}else{
  document.getElementById("moblie_no1").style.visibility = "hidden";
}
if( document.Form.p_address.value == "") {
document.getElementById("p_address1").innerHTML="Error: Input is empty!";
Form.p_address.focus();
return false;
}else{
  document.getElementById("p_address1").style.visibility = "hidden";
}
if( document.Form.email.value == "") {
document.getElementById("email1").innerHTML="Error: Input is empty!";
Form.email.focus();
return false;
}else{
  document.getElementById("email1").style.visibility = "hidden";
}
if( document.Form.parent_no.value == "") {
  document.getElementById("parent_no1").innerHTML="Error: Input is empty!";
  Form.parent_no.focus();
  return false;
}
if (isNaN(document.Form.parent_no.value)){
document.getElementById("parent_no1").innerHTML="Enter Numeric value only";
Form.parent_no.focus();
return false;
}else{
  document.getElementById("parent_no1").style.visibility = "hidden";
}
if( document.Form.academic_achievements.value == "") {
document.getElementById("academic_achievements1").innerHTML="Error: Input is empty!";
Form.academic_achievements.focus();
return false;
}else{
  document.getElementById("academic_achievements1").style.visibility = "hidden";
}
if( document.Form.Non_Academic_Achievements.value == "") {
document.getElementById("Non_Academic_Achievements1").innerHTML="Error: Input is empty!";
Form.Non_Academic_Achievements.focus();
return false;
}else{
  document.getElementById("Non_Academic_Achievements1").style.visibility = "hidden";
}

}

function Validator1(){

	if( document.Form.Register_no0.value == "") {
  document.getElementById("Register_no10").innerHTML="Error: Input is empty!";
  Form.Register_no0.focus();
  return false;
}
if (isNaN(document.Form.Register_no0.value)){
document.getElementById("Register_no10").innerHTML="Enter Numeric value only";
Form.Register_no0.focus();
return false;
}
if (reg < reg2) {
document.getElementById("Register_no10").innerHTML="Enter Numeric value of 12 digit";
Form.Register_no0.focus();
return false;
}else{
  document.getElementById("Register_no10").style.visibility = "hidden";
}

	if( document.Form1.dob0.value == "") {
document.getElementById("dob10").innerHTML="Error: Input is empty!";
Form.dob0.focus();
return false;
}else{
  document.getElementById("dob10").style.visibility = "hidden";
}

if(Form.blood_group0.selectedIndex < 1) {
document.getElementById("blood_group10").innerHTML="Error: Please select the field";
Form.blood_group0.focus();
return false;
}else{
  document.getElementById("blood_group10").style.visibility = "hidden";
}


if( document.Form.email0.value == "") {
document.getElementById("email10").innerHTML="Error: Input is empty!";
Form.email0.focus();
return false;
}else{
  document.getElementById("email10").style.visibility = "hidden";
}

if( document.Form.parent_no0.value == "") {
  document.getElementById("parent_no10").innerHTML="Error: Input is empty!";
  Form.parent_no0.focus();
  return false;
}
if (isNaN(document.Form.parent_no0.value)){
document.getElementById("parent_no10").innerHTML="Enter Numeric value only";
Form.parent_no0.focus();
return false;
}else{
  document.getElementById("parent_no10").style.visibility = "hidden";
}

}
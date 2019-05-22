function Validator2(){

	if (document.Form2.password03.value != document.Form2.password02.value ) {

		document.getElementById("password02").innerHTML="Error: Different password!";
		Form.password02.focus();
		return false;
}else{
  document.getElementById("password02").style.visibility = "hidden";
}
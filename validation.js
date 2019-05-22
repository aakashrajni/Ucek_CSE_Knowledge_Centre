function validateForm() {

    if (document.myForm.Username.value == "admin" && document.myForm.password.value == "admin") {
        window.location = "index2.php";
        document.myForm.email.focus();
        return false;
    }
    else {
      alert("Invalid Username or password");
    }


}

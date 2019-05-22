function validateForm() {
    if (document.myForm.name.value == "") {
        alert("Name must be filled out");
        document.myForm.name.focus();
        return false;
    }
    if (document.myForm.password.value == "") {
        alert("Name must be filled out");
        document.myForm.lname.focus();
        return false;
    }
     if (document.myForm.rpassword.value != document.myForm.password.value) 
     {
        alert("password not match");
        document.myForm.rpassword.focus();
        return false;
    }
    if (document.myForm.email.value == "") {
        alert("email must be filled out");
        document.myForm.email.focus();
        return false;
    }
    if (document.myForm.EmployeeID.value == "") {
        alert("EmployeeID must be filled out");
        document.myForm.EmployeeID.focus();
        return false;
    }
    if (document.myForm.dob.value == "") {
        alert("date of brith must be filled out");
        document.myForm.dob.focus();
        return false;
    }
    if (document.myForm.age.value == "") {
        alert("Age must be filled out");
        document.myForm.age.focus();
        return false;
    }
    if (document.myForm.department.value == "") {
        alert("department must be filled out");
        document.myForm.department.focus();
        return false;
    }
    if (document.myForm.desgination.value == "") {
        alert("desgination must be filled out");
        document.myForm.desgination.focus();
        return false;
    }
    if (document.myForm.doa.value == "") {
        alert("date of appointment must be filled out");
        document.myForm.doa.focus();
        return false;
    }

    if (document.myForm.moblieno.value == "") {
        alert("moblieno must be filled out");
        document.myForm.moblieno.focus();
        return false;
    }
}


function confirmPass() {
    var x = document.forms["myForm"]["createPass"].value;
    var y = document.forms["myForm"]["verifyPass"].value;
    if (x == y) {
        return true;
    }
    else{
        alert("Password mismatch. Please re-enter!");
        return false;
    }
}
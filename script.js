function login() {
    // Add login functionality here
}

function signup() {
    var userType = document.getElementById("userType").value;
    if (userType === "buyer") {
        window.location.href= "buyer_registration.php";
    } else if (userType === "seller") {
        window.location.href = "seller_registration.php";
    }
}

function submitForm(userType) {
    // Add form submission functionality here
    if (userType === "buyer") {
        window.location.href = "login1.php";
    } else if (userType === "seller") {
        window.location.href = "login1.php";
    }
}

function verifyOTP() {
    // Add OTP verification functionality here
    // Redirect to appropriate page after verification
}

function resendOTP() {
    // Add OTP resend functionality here
}

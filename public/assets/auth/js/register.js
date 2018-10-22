const submitAjaxForm = e => {
  e.preventDefault();
  fullname = document.getElementById("fullname");
  email = document.getElementById("email");
  phone = document.getElementById("phone");
  password = document.getElementById("password");
  cpassword = document.getElementById("cpassword");

  if (!fullname.value) {
    // password.focus();
    toastr.warning("Name cannot be empty");
    fullname.style.borderColor = "red";
  } else {
    fullname.style.borderColor = "";
  }

  if (!password.value) {
    // password.focus();
    toastr.warning("Password cannot be empty");
    password.style.borderColor = "red";
  } else {
    password.style.borderColor = "";
  }

  if (!email.value) {
    // email.focus();

    email.style.borderColor = "red";
    toastr.warning("Email cannot be empty");
  } else {
    email.style.borderColor = "";
  }

  if (!phone.value) {
    // email.focus();

    phone.style.borderColor = "red";
    toastr.warning("Phone cannot be empty");
  } else {
    phone.style.borderColor = "";
  }

  if (password.value != cpassword.value) {
    // email.focus();

    password.style.borderColor = "red";
    cpassword.style.borderColor = "red";
    toastr.warning("Password do not match");
  } else {
    password.style.borderColor = "";
    cpassword.style.borderColor = "";
  }

  // Prevent double submission by disabling the submit button
  // $submitBtn.html($submitBtn.data("sending")).attr("disabled", "disabled");

  // formData = new FormData($form[0]);
  // Send informations
  if (email.value && password.value && fullname.value) {
    jQuery.ajax({
      url: "../signup",
      type: "POST",
      dataType: "json",
      headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
      },
      cache: false,
      // contentType: false,
      // processData: false,
      data: {
        fullname: fullname.value,
        email: email.value,
        phone: phone.value,
        password: password.value,
        type: "tester"
      },
      // processData: false,
      // contentType: false,
      cache: false,

      beforeSend: function() {
        $("#action-loader").show();

        $(".btn-text").hide();

        $(".disable-btn").attr("disabled", "disabled");
      },
      success: function(data) {
        // Show message
        $(".disable-btn").removeAttr("disabled", "disabled");

        $(".btn-text").fadeIn(100);
        $("#action-loader").fadeOut(50);
        toastr.success(data.message);
        window.location = "confirm";
        return null;
      },
      error: function(data) {
        // Something went wrong
        $(".disable-btn").removeAttr("disabled", "disabled");

        $(".btn-text").fadeIn(100);
        $("#action-loader").fadeOut(50);
        console.log(data.responseJSON);
        if (data.responseJSON.errors) {
          if (data.responseJSON.errors.email) {
            toastr.warning(data.responseJSON.errors.email);
            return null;
          }
          if (data.responseJSON.errors.password) {
            toastr.warning(data.responseJSON.errors.password);
            return null;
          }
        }

        return null;
        // Re-enable submit button
        $submitBtn.html(submitBtnTxt).removeAttr("disabled");
      },
      statusCode: {
        500: function() {
          $(".disable-btn").removeAttr("disabled", "disabled");

          $(".btn-text").fadeIn(100);
          $("#action-loader").fadeOut(50);
          toastr.error("Somewhere, somehow, something went wrong");
        }
      }
    });
  }
};

/* Submit the Form */
const validateInput = e => {
  e.preventDefault();
  email = document.getElementById("email");
  password = document.getElementById("password");

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

  // Prevent double submission by disabling the submit button
  // $submitBtn.html($submitBtn.data("sending")).attr("disabled", "disabled");

  // formData = new FormData($form[0]);
  // Send informations
  if (email.value && password.value) {
    jQuery.ajax({
      url: "login",
      type: "POST",
      dataType: "json",
      headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
      },
      data: {
        email: email.value,
        password: password.value
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

        if (data.status == "error") {
          toastr.warning(data.message);
          return null;
        } else {
          toastr.success(data.message);
          window.location = data.redirectPage;
        }
      },
      error: function(data) {
        // Something went wrong
        $(".disable-btn").removeAttr("disabled", "disabled");

        $(".btn-text").fadeIn(100);
        $("#action-loader").fadeOut(50);
        if (data.status == "error") {
          if (data.message) {
            toastr.warning(data.message);
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

/* Submit the Form */
const connectAccount = e => {
  e.preventDefault();
  username = document.getElementById("username");
  password = document.getElementById("password");

  if (!password.value) {
    // password.focus();
    toastr.warning("Password cannot be empty");
    password.style.borderColor = "red";
  } else {
    password.style.borderColor = "";
  }

  if (!username.value) {
    // username.focus();

    username.style.borderColor = "red";
    toastr.warning("Username cannot be empty");
  } else {
    username.style.borderColor = "";
  }

  // Prevent double submission by disabling the submit button
  // $submitBtn.html($submitBtn.data("sending")).attr("disabled", "disabled");

  // formData = new FormData($form[0]);
  // Send informations
  if (username.value && password.value) {
    jQuery.ajax({
      url: "/../social/connect/instagram",
      type: "POST",
      dataType: "json",
      headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
      },
      data: {
        username: username.value,
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
        } else if (data.status == "failed") {
          toastr.error(data.message);
        } else {
          toastr.success(data.message);
          window.location = "../../dashboard";
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

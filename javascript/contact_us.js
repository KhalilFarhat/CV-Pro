$(document).ready(function() {
    
  $("#contact-form").submit(function(event) {
      event.preventDefault();

      var name = $("#name").val();
      var email = $("#email").val();
      var message = $("#message").val();

      $(".error").remove();

      if (name.length < 1) {
          $("#name").after("<span class='error'>This field is required</span>");
      }
      if (email.length < 1) {
          $("#email").after("<span class='error'>This field is required</span>");
      } else {
          var regEx = /^[A-Z0-9][A-Z0-9._%+-]{0,63}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/;
          var validEmail = regEx.test(email);
          if (!validEmail) {
              $("#email").after("<span class='error'>Enter a valid email</span>");
          }
      }
      if (message.length < 1) {
          $("#message").after("<span class='error'>This field is required</span>");
      }

      if (name.length > 1 && validEmail && message.length > 1) {
          $.ajax({
              type: "POST",
              url: "send_email.php",
              data: {
                  name: name,
                  email: email,
                  message: message
              },
              success: function(data) {
                  $("#contact-form").slideUp();
                  $("#contact-form").after("<p class='success'>Your message was sent, thank you!</p>");
              }
          });
      }
  });
});


$(document).ready(function() {
  $("#formguest").click( function() {
    $("#formvendor2").hide();
    $("#formperformer2").hide();
  })
  $("#formvendor1").click( function() {
    $("#formvendor2").show();
    $("#formperformer2").hide();
  });
  $("#formperformer1").click( function() {
    $("#formperformer2").show();
    $("#formvendor2").hide();
  });

  $("#feedbackForm").on("submit", function() {

    // assume the form is valid, unless we find an invalid field
    formValid = true;

    nameIsValid = $("#name").prop("validity").valid;
    if(nameIsValid) {
     $("#nameError").hide();
    } else {
     $("#nameError").show();
     formValid = false;
    }

    emailIsValid = $("#email").prop("validity").valid;
    if(emailIsValid) {
     $("#emailError").hide();
    } else {
     $("#emailError").show();
     formValid = false;
    }

    messageIsValid = $("#comments").prop("validity").valid;
    if(messageIsValid) {
     $("#messageError").hide();
    } else {
     $("#messageError").show();
     formValid = false;
    }

    return formValid;

  });

});

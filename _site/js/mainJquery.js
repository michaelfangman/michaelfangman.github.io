// Toggle Rows
$('.sectionStyle--rowHead').each(function(){
  $(this).click(function() {
      $(this).parent().toggleClass("isOpen");
    });
 });

 // Hide Section
 // $('.sectionStyleHead .sectionStyleHead__controls .hideSection').each(function(){
 //   $(this).click(function() {
 //       $(this).parent().css("background", "red");
 //     });
 //  });

// Password Protection
var passProtect = {
  id: $("#password_input"),
  key: "builder",
  errorMessage: "Sorry, please try again",
  errorState: function () {
    $(".password-container .label").html(passProtect.errorMessage);
    $(".password-container").addClass("shake");
    setTimeout(function(){
      $(".password-container").removeClass("shake");
      $(".password-container .label").html(passProtect.prompt);
    },1000)
  },
  successMessage: "Success!",
  successState: function () {
    passProtect.id.css("border", "1px solid rgb(0,200,100)");
    $(".password-container .label").html(passProtect.successMessage);
  },
  prompt: "Please enter password"
}

function openUp() {
  $(".password-modal").fadeOut(250);
}

function checkPassword() {
var passVal = passProtect.id.val();


if (passVal === passProtect.key) {
  passProtect.successState(openUp());
}
else {
  passProtect.errorState();
}
}

function bindEvents() {
  passProtect.id.on("keyup", function (e) {
    if (e.keyCode === 13) {
      checkPassword();
    }
  });
}

$(document).ready(function() {
    bindEvents();
});

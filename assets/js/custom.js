$(document).ready(function () {
   let browserUrl =document.location.pathname.match(/[^\/]+$/)[0];
  if (browserUrl != "login.php" && browserUrl != "register.php") {
    $('#allow-user').DataTable();
  }
  $("body").mousemove(function () {
    $('.alert').delay(3000).fadeOut()
  });

  $(document).on("click", "#password-icon-btn", function () {
    passwordStatus = $(this).closest(".input-group").find(".password-field")
    let password =
      passwordStatus.attr("type") === "password" ? "text" : "password";
    passwordStatus.attr("type", password);

    icon = passwordStatus.attr("type") === "password" ? "fas fa-eye-slash" : "fas fa-eye";
    $(this).attr("class", icon)
  })
});


$(document).ready(function () {
  $("input[type=radio]").change(function () {
    var method = $(this).val();
    $("#form").attr("method", method);
  });
});

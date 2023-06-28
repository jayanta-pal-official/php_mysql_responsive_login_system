$(document).ready(function () {
  //fatch data from database
  $("#btn2").on("click", function (e) {
    $.ajax({
      url: "ajax.php",
      type: "POST",
      success: function (data) {
        $("#data").html(data);
      },
    });
  });
  //delete data from database
  $(document).on("click", ".delete-btn", function () {
    var studentId = $(this).data("id");

    var element = this;
    var confirmalert = confirm("Are you sure?");

    if (confirmalert == true) {
      $.ajax({
        url: "ajax_delete.php",
        type: "POST",
        data: { id: studentId },
        success: function (response) {
          if (response == 1) {
            $(element).closest("tr").css("background", "tomato");
            $(element)
              .closest("tr")
              .fadeOut(800, function () {
                $(element).remove();
              });
          } else {
            alert("invalid");
          }
        },
      });
    }
  });
  //edit data in database
  $(document).on("click", ".edit-btn", function () {
    $.ajax({
      url: "ajax-edit.php",
      type: "POST",
    });
  });
});

const modal = document.getElementById("verse-modal");

$(document).ready(function () {
  function load_verse_quote(name) {
    $.ajax({
      url: "includes/fetch.inc.php",
      method: "POST",
      data: {
        name: name,
      },
      success: function (data) {
        $("#verse-quote").html(data);
      },
    });
  }

  load_verse_quote(1);

  $(".modal-verse").click(function () {
    let verse_name = $(this).attr("id");
    load_verse_quote(verse_name);
    modal.style.display = "block";
  });
});

window.onload = function() {

  $('.dropdown-menu button').click(function(){
    // Get BentoBox section
    var id = $(this).closest(".dropdown-menu").attr("id");
    var section = id.substring(0, id.length - 8);

    // Replace item's section button text
    $("#" + section + "Button").text($(this).text());

    // Replace item section's picture and caption

    var src = document.getElementById(section + "Item");
    var img = document.getElementById(section + "Picture");
    var caption = document.getElementById(section + "Caption");

    img.style.height = "100px"
    img.style.width = "100px"
    img.src = "/assets/img/" + $(this).text() + ".png";
    caption.textContent = $(this).text()

    // Replace item's secton stats
    $("#" + section + "Weight").text($(this).text() + " g");
    $("#" + section + "Calories").text($(this).text());
    $("#" + section + "Presentation").text($(this).text());
    $("#" + section + "Price").text("$" + $(this).text());

   });
};

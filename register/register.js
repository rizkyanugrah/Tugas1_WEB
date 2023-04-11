// password
$(document).ready(function () {
  $("#password").keyup(function (index) {
    // dapatkan karakter di field password
    let karakter = $(this).val();

    // hitung karakter dari field password
    let totalkarakter = karakter.length;

    if (totalkarakter >= 10) {
      $(".status").removeClass("lemah"); // hapus class lemah

      $(".status").text("KUAT"); // String menjadi kuat
      $(".status").addClass("kuat"); // tambah class sukses
    } else {
      $(".status").removeClass("kuat"); // hapus class sukses
      $(".status").text("LEMAH"); // String menjadi lemah
      $(".status").addClass("lemah"); // tambah class sukses
    }
  });
});

// validation
(function () {
  "use strict";
  const forms = document.querySelectorAll(".requires-validation");
  Array.from(forms).forEach(function (form) {
    form.addEventListener(
      "submit",
      function (event) {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }

        form.classList.add("was-validated");
      },
      false
    );
  });
})();

// ambil data user yang sedang login
const users = document.querySelector(".typed").innerHTML;

// console.log(users);

// auto typing
const typed = document.querySelector(".typed");
if (typed) {
  let typed_strings = users;
  typed_strings = typed_strings.split(",");
  new Typed(".typed", {
    strings: typed_strings,
    loop: true,
    typeSpeed: 100,
    backSpeed: 75,
    fadeOut: true,
  });
}

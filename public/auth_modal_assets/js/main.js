let input = document.getElementById("password"),
  btn = document.getElementById("pass-show");

btn.onclick = function () {
  "use strict";
  if (input.type === "password") {
    input.type = "text";
  } else {
    input.type = "password";
  }
};

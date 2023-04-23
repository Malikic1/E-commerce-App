var section1 = document.getElementById("section1");
var section2 = document.getElementById("section2");
var section3 = document.getElementById("section3");

var show1 = document.getElementById("show1");
var show2 = document.getElementById("show2");
var show3 = document.getElementById("show3");

show2.addEventListener("click", function () {
  section1.style.display = "none";
  section2.style.display = "grid";
  section3.style.display = "none";
  console.log("clicked-2");
});

show3.addEventListener("click", function () {
  section1.style.display = "none";
  section2.style.display = "none";
  section3.style.display = "grid";
  console.log("clicked-3");
});

show1.addEventListener("click", function () {
  section1.style.display = "grid";
  section2.style.display = "none";
  section3.style.display = "none";
  console.log("clicked-1");
});

var sec1 = document.getElementById("sec1");
var sec2 = document.getElementById("sec2");
var sec3 = document.getElementById("sec3");

var show4 = document.getElementById("show4");
var show5 = document.getElementById("show5");
var show6 = document.getElementById("show6");

show5.addEventListener("click", function () {
  sec1.style.display = "none";
  sec2.style.display = "grid";
  sec3.style.display = "none";
  console.log("clicked-2");
});

show6.addEventListener("click", function () {
  sec1.style.display = "none";
  sec2.style.display = "none";
  sec3.style.display = "grid";
  console.log("clicked-3");
});

show4.addEventListener("click", function () {
  sec1.style.display = "grid";
  sec2.style.display = "none";
  sec3.style.display = "none";
  console.log("clicked-1");
});

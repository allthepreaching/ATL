const floatMenu = document.querySelector(".float-menu");
const floatToggle = document.querySelector(".float-toggle");

document.querySelector(".float-toggle").onclick = function () {
  this.classList.toggle("active");
  floatMenu.classList.toggle("active");
  console.log(floatLink);
};

document.onclick = function (e) {
  if (e.target.id !== "float-toggle" && e.target.id !== "float-menu") {
    floatToggle.scrollIntoView();
    floatToggle.scrollIntoView(false);
    floatToggle.scrollIntoView({ block: "end" });
    floatToggle.scrollIntoView({
      behavior: "smooth",
      block: "end",
      inline: "nearest",
    });
    floatMenu.classList.remove("active");
    floatToggle.classList.remove("active");
  }
};

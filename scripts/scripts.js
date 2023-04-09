const navbarCollapseButton = document.querySelector(".nav-collapse");

navbarCollapseButton.addEventListener("click", () => {
  let navListItems = document.querySelectorAll(".navbar-li");
  navListItems.forEach((item) => {
    item.classList.toggle("active");
  });
});

function changeMode() {
  seekerOption = document.querySelector("#seeker-option");
  if (seekerOption.checked) {
    document.querySelector(".company-group").style.display = "none";
    document.querySelector(".name-group").style.display = "block";
    document.querySelector("#company-field").disabled = true;
    document.querySelector("#company-field").value = "";
    document.querySelector("#firstname-field").disabled = false;
    document.querySelector("#lastname-field").disabled = false;
    document.querySelector("label[for='birth-date-field']").innerHTML = "Birth Date";
  } else {
    document.querySelector(".company-group").style.display = "block";
    document.querySelector(".name-group").style.display = "none";
    document.querySelector("#company-field").disabled = false;
    document.querySelector("#firstname-field").disabled = true;
    document.querySelector("#firstname-field").value = "";
    document.querySelector("#lastname-field").disabled = true;
    document.querySelector("#lastname-field").value = "";
    document.querySelector("label[for='birth-date-field']").innerHTML = "Date Created";
  }
}

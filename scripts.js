const navbarCollapseButton = document.querySelector(".nav-collapse");

navbarCollapseButton.addEventListener("click", () => {
    let navListItems = document.querySelectorAll(".navbar-li");
    navListItems.forEach((item)=> {
        item.classList.toggle("active");
    });
});
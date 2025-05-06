const mobile_icon = document.getElementById("mobile-icon");
const mobile_menu = document.getElementById("mobile-menu");
const hamburger_icon = document.querySelector("#mobile-icon i");

function openCloseMenu() {
  mobile_menu.classList.toggle("block");
  mobile_menu.classList.toggle("active");
}

function changeIcon(icon) {
  icon.classList.toggle("fa-xmark");
}

mobile_icon.addEventListener("click", openCloseMenu);

document.querySelectorAll("#right-sticky li").forEach(function (item) {
  item.addEventListener("click", function () {
    // Remove 'active' class from all items
    document.querySelectorAll("#right-sticky li").forEach(function (li) {
      li.classList.remove("active");
    });

    // Add 'active' class to clicked item
    this.classList.add("active");
  });
});

let tabsContainer = document.querySelector(".tabs");

let tabTogglers = tabsContainer.querySelectorAll(".tabs a");

console.log(tabTogglers);

tabTogglers.forEach(function (toggler) {
  toggler.addEventListener("click", function (e) {
    e.preventDefault();

    let tabName = this.getAttribute("href");

    let tabContents = document.querySelector(".tab-contents");

    for (let i = 0; i < tabContents.children.length; i++) {
      tabTogglers[i].parentElement.classList.remove("active-tab");
      tabContents.children[i].classList.remove("hidden");
      if ("#" + tabContents.children[i].id === tabName) {
        continue;
      }
      tabContents.children[i].classList.add("hidden");
    }
    e.target.parentElement.classList.add("active-tab");
  });
});

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

//tab script

document.addEventListener("DOMContentLoaded", function () {
  // Handle tab navigation for all tab groups on the page
  document.querySelectorAll('.tabs, .inline-flex').forEach(tabList => {
    tabList.querySelectorAll('a').forEach(tab => {
      tab.addEventListener('click', function (e) {
        e.preventDefault();

        const container = tab.closest('.container'); // scope within the section
        const tabId = tab.getAttribute('href').replace('#', '');

        // Remove active classes
        container.querySelectorAll('.tabs li, .inline-flex li').forEach(li => {
          li.classList.remove('active-tab');
        });
        container.querySelectorAll('.tab-contents > div').forEach(content => {
          content.classList.add('hidden');
        });

        // Add active classes
        tab.parentElement.classList.add('active-tab');
        const activeTab = container.querySelector(`#${tabId}`);
        if (activeTab) activeTab.classList.remove('hidden');
      });
    });
  });
});
/*!
 * Start Bootstrap - SB Admin v7.0.5 (https://startbootstrap.com/template/sb-admin)
 * Copyright 2013-2022 Start Bootstrap
 * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
 */
//
// Scripts
//

window.addEventListener("DOMContentLoaded", (event) => {
  // Toggle the side navigation
  const sidebarToggle = document.body.querySelector("#sidebarToggle");
  if (sidebarToggle) {
    // Uncomment Below to persist sidebar toggle between refreshes
    // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
    //     document.body.classList.toggle('sb-sidenav-toggled');
    // }
    sidebarToggle.addEventListener("click", (event) => {
      event.preventDefault();
      document.body.classList.toggle("sb-sidenav-toggled");
      localStorage.setItem(
        "sb|sidebar-toggle",
        document.body.classList.contains("sb-sidenav-toggled")
      );
    });
  }
});

// highlight current section
const links = document.querySelectorAll("#sidenavAccordion a");
links.forEach((link) => {
  if (document.location.href.includes(link.href)) {
    link.classList.add("text-white");
  }
});

// vertical align table cell
const tds = document.querySelectorAll("#datatablesSimple td");
tds.forEach((td) => {
  td.classList.add("align-middle");
});

const tdBtn = document.querySelectorAll(
  "#datatablesSimple tbody td:nth-last-child(-n+2)"
);
tdBtn.forEach((td) => {
  td.classList.add("text-center");
});

document.addEventListener("DOMContentLoaded", function () {
    const toggler = document.getElementById("headerCollapse");
    const wrapper = document.getElementById("main-wrapper");
    const overlay = document.getElementById("overlay");

    if (toggler && wrapper && overlay) {
        // Toggle sidebar open/close
        toggler.addEventListener("click", function () {
            wrapper.classList.toggle("show-sidebar");
        });

        // Close sidebar when overlay is clicked
        overlay.addEventListener("click", function () {
            wrapper.classList.remove("show-sidebar");
        });
    }

    // Initialize feather icons
    if (window.feather) {
        feather.replace();
    }
});

function showSidebar() {
    var sidebar = document.getElementById("sidebar");
    var dashboard = document.getElementById("dashboard");
    if (sidebar.style.display === "none" && dashboard.style.display === "block") {
        sidebar.style.display = "block";
        dashboard.style.display = "none";
    } else {
        sidebar.style.display = "none";
        dashboard.style.display = "block";
    }
}

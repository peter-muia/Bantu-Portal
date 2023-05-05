var admin = document.getElementById("admin");
var subadmin = document.getElementById("subadmin");

if(admin != null) admin.addEventListener("click", function() {
    this.classList.toggle("active");
    if (subadmin.style.display === "block") {
      subadmin.style.display = "none";
    } else {
      subadmin.style.display = "block";
    }
});

var settings = document.getElementById("settings");
var subsettings = document.getElementById("subsettings");

if(settings != null) settings.addEventListener("click", function() {
    this.classList.toggle("active");
    if (subsettings.style.display === "block") {
      subsettings.style.display = "none";
    } else {
      subsettings.style.display = "block";
    }
});


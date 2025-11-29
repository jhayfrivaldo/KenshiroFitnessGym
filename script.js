const themeToggle = document.getElementById("theme-toggle");
const themeIcon = document.getElementById("theme-icon");

let savedTheme = localStorage.getItem("theme");

if (savedTheme === "dark") {
    document.body.classList.add("dark-mode");
    themeIcon.textContent = "☀️";  
} else {
    document.body.classList.add("light-mode");
    themeIcon.textContent = "🌙";  
}

function toggleTheme() {
    document.body.classList.toggle("dark-mode");
    document.body.classList.toggle("light-mode");

   
    if (document.body.classList.contains("dark-mode")) {
        themeIcon.textContent = "☀️";  
        localStorage.setItem("theme", "dark");
    } else {
        themeIcon.textContent = "🌙";  
        localStorage.setItem("theme", "light");
    }
}

themeToggle.addEventListener("click", toggleTheme);
function generateNavbar() {
    return `
    <nav class="navbar">
        <a href="./Home.php"><img src="./assets/Console_logo-footer.png" alt="" srcset="" class="logo"></a>
        <img src="./assets/user-icon.png" alt="" srcset="" class="log-out">
    </nav>
    `;
}

document.addEventListener('DOMContentLoaded', function () {
    const navbar = document.getElementById('navbar');
    if (navbar) {
        navbar.innerHTML = generateNavbar();
    }
});


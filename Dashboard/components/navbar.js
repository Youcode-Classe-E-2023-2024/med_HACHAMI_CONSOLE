function generateNavbar() {
    return `
    <nav class="navbar">
        <a href="#"><img src="./assets/Console_logo-footer.png" alt="" srcset="" class="logo"></a>
        <a href="includes/logout.inc.php"><img src="./assets/log-out.png" alt="" srcset="" class="log-out"></a>
    </nav>
    `;
}

document.addEventListener('DOMContentLoaded', function () {
    const navbar = document.getElementById('navbar');
    if (navbar) {
        navbar.innerHTML = generateNavbar();
    }
});


function generateNavbar() {
    return `
    <nav class="navbar">
        <a href="/"><img src="./assets/Console_logo.png" alt="logo" class="logo"></a>
        <img src="./assets/menu-regular-24.png" alt="" class="menu-icon" id="menu-icon"  onclick="toggleSidebar()">
        <div class="sidebar" id="sidebar">
            <ul class="nav-ietms">
                <li class="nav-item"><a href="" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="" class="nav-link">How It Work</a></li>
                <li class="nav-item"><a href="" class="nav-link">Store</a></li>
                
            </ul>
        </div>
    </nav>
    `;
}

document.addEventListener('DOMContentLoaded', function () {
    const navbar = document.getElementById('navbar');
    if (navbar) {
        navbar.innerHTML = generateNavbar();
    }
});


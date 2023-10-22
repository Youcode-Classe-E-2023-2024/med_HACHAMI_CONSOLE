function generateSideBar() {
    return `
    <div class="side-bar">
        <p class="">Navigation</p>
        <ul class="sideBar-items">
            <li class="sideBar-item">
                <img src="./assets/icon-home.png" class="item-icon" >
                <a href="./Home.php" class="sideBar-link">Home</a>
            </li>
            <li class="sideBar-item">
                <img src="./assets/icons-game.png" class="item-icon" >
                <a href="#" class="sideBar-link">Games</a>
            </li>
            <li class="sideBar-item">
                <img src="./assets/icons-magazine.png" class="item-icon" >
                <a href="#" class="sideBar-link">Magazine</a>
            </li>
        </ul>
    </div>
    `;
}

document.addEventListener('DOMContentLoaded', function () {
    const sidebar = document.getElementById('sidebar');
    if (sidebar) {
        sidebar.innerHTML = generateSideBar();
    }
});


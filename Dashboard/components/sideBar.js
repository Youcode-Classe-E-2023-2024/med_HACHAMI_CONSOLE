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
                <a href="./Games.php" class="sideBar-link">Games</a>
            </li>
            <li class="sideBar-item">
                <img src="./assets/icons-magazine.png" class="item-icon" >
                <a href="./Magazine.php" class="sideBar-link">Magazine</a>
            </li>
        </ul>
        <div class="logout">
            <img src="./assets/log-out.png" class="item-icon" >
            <a href="includes/logout.inc.php" class="sideBar-link">Log out</a>
        </div>
    </div>
    `;
}

document.addEventListener('DOMContentLoaded', function () {
    const sidebar = document.getElementById('sidebar');
    if (sidebar) {
        sidebar.innerHTML = generateSideBar();
    }
});


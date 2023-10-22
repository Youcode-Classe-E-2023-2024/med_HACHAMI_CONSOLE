function generateFooter() {
    return `
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-col col-1">
                <img src="./assets/Console_logo-footer.png" alt="">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                <span>@Lorem</span>
            </div>
            <div class="footer-col col-2">
                <h3>Active-links</h3>
                <ul>
                    <li class="footer-item"><img src="./assets/link-icon.png" alt="" ><a href="/" class="footer-link">Home</a></li>
                    <li class="footer-item"><img src="./assets/link-icon.png" alt="" ><a href="./how-it-work.html" class="footer-link">How It Work</a></li>
                    <li class="footer-item"><img src="./assets/link-icon.png" alt="" ><a href="./store.php" class="footer-link">Store</a></li>
                </ul>
            </div>
            <div class="footer-col col-3">
                <h3>Contact Us</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                <p>+908 89097 890</p>
            </div>
            <div class="footer-bot">
                <div class="social-icons">
                    <a href="#"><img src="./assets/facebook 1.png" alt=""></a>
                    <a href="#"><img src="./assets/instagram 1.png" alt=""></a>
                    <a href="#"><img src="./assets/twitter 1.png" alt=""></a>
                    <a href="#"><img src="./assets/linkedin 1.png" alt=""></a>
                </div>
                <p>Copyright ® 2023 - Console Plus - All rights Rcerved</p>
            </div>
        </div>
    </footer>
    `;
}

document.addEventListener('DOMContentLoaded', function () {
    const footer = document.getElementById('footer');
    if (footer) {
        footer.innerHTML = generateFooter();
    }
});


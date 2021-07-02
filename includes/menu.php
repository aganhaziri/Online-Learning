<nav>
    <div class="logo">
        <div class="logo" onclick="window.location.href='index.php'">
            <h4>GJEJ VETEN</h4>
        </div>
    </div>
    <ul class="nav-links">
        <li class="fx-center">
            <a href="rrethnesh.php">Rreth nesh</a>
        </li>
        <li class="fx-center">
                <a href="kontakt.php">Contact</a>
            </li>
        <?php if (isset($_SESSION['name'])) : ?>
            <li class="fx-center">
                <a href="products.php">Produkte</a>
            </li>
           



        <?php else : ?>
            <li class="login-item fx-center"><a href="login.php">Kyçu</a></li>
            <li class="login-item fx-center"><a href="signup.php">Regjistrohu</a></li>

        <?php endif; ?>

    </ul>
    <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>

</nav>
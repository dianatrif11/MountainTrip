<nav class="navbar">
  <div class="container flex">
    <a href="home.php" class="site-brand">
      Mountain<span>Trip!</span>
    </a>
    <button type="button" id="navbar-show-btn" class="flex">
      <i class="fas fa-bars"></i>
    </button>
    <div id="navbar-collapse">
      <button type="button" id="navbar-close-btn" class="flex">
        <i class="fas fa-times"></i>
      </button>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="login.php" class="nav-link">Acasa</a>
        </li>
        <?php
        if (isset($_SESSION['username'])) {
        ?>
          <li class="nav-item">
            <a href="sugestii.php" class="nav-link">Sugestii</a>
          </li>
        <?php
        } else {
        ?>
          <li class="nav-item">
            <a href="index.php" class="nav-link">Sugestii</a>
          </li>
        <?php
        }
        ?>

        <li class="nav-item">
          <a href="routes.php" class="nav-link">Trasee</a>
        </li>
        <li class="nav-item">
          <a href="contact.php" class="nav-link">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
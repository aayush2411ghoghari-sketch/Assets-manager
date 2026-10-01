<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="padding-bottom: -20px; margin:-48px; background-color: #343a40;">
  <div class="container" style="min-height: 100px; display: flex; align-items: center; justify-content: space-between;">
    
    <!-- Logo -->
    <a class="navbar-brand" href="http://localhost/img/ASSETS_MANAGER/index.php" style="display: flex; align-items: center; height: 100%;">
      <img src="logo2_remove.png" alt="Logo" style="height: 150px; width: auto;">
    </a>

    <!-- Toggle Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
      aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navigation Items -->
    <div class="collapse navbar-collapse" id="navbarResponsive" style="justify-content: flex-end;">
      <ul class="navbar-nav ml-auto" style="display: flex; align-items: center;">
        <li class="nav-item">
          <span class="nav-link" style="color: black;">Welcome <?php echo $_SESSION['fullName']; ?></span>
        </li>
        <li class="nav-item">
          <span class="nav-link" style="color: black;">|</span>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color: black;" href="model/login/logout.php">Log Out</a>
        </li>
      </ul>
    </div>

  </div>
</nav>

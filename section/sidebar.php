  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/sidebar.css" />

  </head>
  <body>


    <!-- Hamburger Button (only for small screens) -->
<button class="sidebar-menu-button d-md-none" id="menuToggle">
  <i class="bi bi-list"></i>
</button>

  <aside class="sidebar collapsed">
    <div class="sidebar-header">
      <span class="sidebar-logo-text">
        <span class="brgy-text">BRGY</span><span class="go-text">GO</span>
      </span>
    </div>

    <nav class="sidebar-nav">
      <ul class="nav-list primary-nav">
        <li class="nav-item">
          <a href="dashboard.php" class="nav-link">
            <i class="bi bi-house"></i>
            <span class="nav-label">Home</span>
          </a>
          <ul class="custom-dropdown-menu">
            <li class="nav-item"><a href="dashboard.php" class="nav-link dropdown-title" style="font-weight: 550;">Dashboard</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown-container">
          <a href="#" class="nav-link custom-dropdown-toggle">
            <i class="bi bi-people"></i>
            <span class="nav-label">Officials</span>
            <i class="bi bi-chevron-down dropdown-icon"></i>
          </a>
          <ul class="custom-dropdown-menu">
            <li class="nav-item"><a href="barangay_functionaries.php" class="nav-link">Barangay Functionaries</a></li>
            <li class="nav-item"><a href="barangay_elected.php" class="nav-link">Elected Officials</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="Document.php" class="nav-link">
            <i class="bi bi-file-earmark-text"></i>
              <span class="nav-label">Document</span>
          </a>
          <ul class="custom-dropdown-menu">
            <li class="nav-item">
              <a href="Document.php" class="nav-link dropdown-title" style="font-weight: 550;">Emergency</a>
            </li>
          </ul>
        </li>
      
        <li class="nav-item">
          <a href="emergency.php" class="nav-link">
            <i class="bi bi-exclamation-octagon"></i>
              <span class="nav-label">Emergency</span>
          </a>
          <ul class="custom-dropdown-menu">
            <li class="nav-item">
              <a href="emergency.php" class="nav-link dropdown-title" style="font-weight: 550;">Emergency</a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="evacuation.php" class="nav-link">
            <i class="bi bi-building"></i>
            <span class="nav-label">Evacuation Center</span>
          </a>
          <ul class="custom-dropdown-menu">
            <li class="nav-item">
              <a href="evacuation.php" class="nav-link dropdown-title" style="font-weight: 550;">Evacuation Center</a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="bi bi-gear"></i>
            <span class="nav-label">Settings</span>
          </a>
          <ul class="custom-dropdown-menu">
            <li class="nav-item">
              <a href="#" class="nav-link dropdown-title" style="font-weight: 550;">Settings</a>
            </li>
          </ul>
        </li>

      </ul>

      <ul class="nav-list secondary-nav">
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="bi bi-question-circle"></i>
            <span class="nav-label">About Us</span>
          </a>
          <ul class="custom-dropdown-menu">
            <li class="nav-item">
              <a href="#" class="nav-link dropdown-title" style="font-weight: 550;">About Us</a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="../database/logout.php" class="nav-link">
            <i class="bi bi-box-arrow-right"></i>
            <span class="nav-label">Sign Out</span>
          </a>
          <ul class="custom-dropdown-menu">
            <li class="nav-item">
              <a href="../database/logout.php" class="nav-link dropdown-title" style="font-weight: 550;">Sign Out</a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </aside>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../ajax/sidebar.js"></script>

  </body>
  </html>

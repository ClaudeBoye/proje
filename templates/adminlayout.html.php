<?php // session_start()?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../templates/cssadmin/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="../templates/cssadmin/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="../templates/cssadmin/style.css" />
    <title></title>
  </head>
  <body>
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #188780;">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#sidebar"
          aria-controls="offcanvasExample"
        >
          <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
        </button>
        <a
          class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold"
          href="#"
          >Current user: <?= $_SESSION['username'] ?></a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#topNavBar"
          aria-controls="topNavBar"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="topNavBar">
          <form class="d-flex ms-auto my-3 my-lg-0">
            <div class="input-group">
              <input
                class="form-control"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <button class="btn btn-primary" type="submit">
                <i class="bi bi-search"></i>
              </button>
            </div>
          </form>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle ms-2"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="bi bi-person-fill"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="Account.php?id=<?= $_SESSION['id'] ?>">Account</a></li>
                <li><a class="dropdown-item" href="logout.php">Logout <span class = "bi bi-box-arrow-right "></span></a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- top navigation bar -->
    <!-- offcanvas -->
    <div
      class="offcanvas offcanvas-start sidebar-nav"
      style="background-color: #f78525;" 
      tabindex="-1"
      id="sidebar"
    >
      <div class="offcanvas-body p-0">
        <nav class="navbar-dark">
          <ul class="navbar-nav">
            <li>
              <div class="text-dark small fw-bold text-uppercase px-3">
                CORE
              </div>
            </li>
            <li>
              <a href="admindashboard.php" class="nav-link px-3 active">
                <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                <span>Dashboard</span>
              </a>
            </li>
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            <?php if($_SESSION['prev'] = 'admin'): ?>
            <li>
              <div class="text-dark small fw-bold text-uppercase px-3 mb-3">
                Interface
              </div>
            </li>
            <li>
              <a href="register.php" class="nav-link px-3">
                <span class="me-2 "><i class="bi bi-person-plus"></i></span>
                <span>Add Custumer</span>
              </a>
            </li>
            <li>
              <a href="regemployee.php?id=1" class="nav-link px-3">
                <span class="me-2 fa-user"><i class="bi bi-person-badge"></i></span>
                <span>Add Employee</span>
              </a>
            </li>
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            <?php endif; ?>
            <li>
              <div class="text-dark small fw-bold text-uppercase px-3 mb-3">
                Tables
              </div>
            </li>
            <li>
              <a href="users.php" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-list-ul"></i></span>
                <span>Customer List</span>
              </a>
            </li>
            <li>
              <a href="employee.php" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-person-badge-fill"></i></span>
                <span>Employees</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- offcanvas -->
    <!-- where data is sent into from the templates to the main layout templates -->
    <main class="mt-5 pt-3">
      <!-- enter template controle code here that is the file under templates would be displayed here using output buffering in php -->
      <?php if(isset($message)): ?>
      <div class="text-danger"><?=$message?></div>
      <?php endif ?>
      <?=$output?>
    </main>
    <script src="../templates/jsadmin/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="../templates/jsadmin/jquery-3.5.1.js"></script>
    <script src="../templates/jsadmin/jquery.dataTables.min.js"></script>
    <script src="../templates/jsadmin/dataTables.bootstrap5.min.js"></script>
    <script src="../templates/jsadmin/script.js"></script>
  </body>
</html>
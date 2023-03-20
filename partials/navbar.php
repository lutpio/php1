  <nav class="navbar navbar-expand-lg " data-bs-theme="dark" style="background-color: #00695C;" >	
      <div class="container-md">      
        <a class="navbar-brand mb-0 fs-3" href="#">Oasis</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link
              <?php if ($title === "Home"){
                echo "active";
              } ?>" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link
              <?php if ($title === "About"){
                echo "active";
              } ?>" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link
              <?php if ($title === "Form"){
                echo "active";
              } ?>" href="form.php">Form</a>
            </li>                              
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link 
                <?php if ($title === "login"){
                  echo "active";
                } ?>" href="login.php">
                <button class="btn btn-outline-light" type="button">Login</button>
                </a>              
            </li>
          </ul>
        </div>      
      </div>
  </nav>
<!-- active -->
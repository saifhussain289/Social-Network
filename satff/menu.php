<nav class="navbar navbar-dark navbar-expand-lg"> <a class="navbar-brand" href="index.php"><img src="images/logo.png" class="img-fluid" alt="logo"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
          <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"> <a class="nav-link " href="index.php">SEND NOTIFICATION</a> </li>
              <li class="nav-item"> <a class="nav-link" href="post-selection.php">POST SELECTION</a> </li>
              <li class="nav-item"> <a class="nav-link" href="staff-post.php">ADD POST</a> </li>
              <li class="nav-item"> <a class="nav-link" href="logout.php">Logout</a> </li>
              <li class="nav-item"> <a class="nav-link" href="logout.php"><b style="color:#fff; font-size:18px; margin-left:20px;"><?php echo $_SESSION['username']; ?></b></a> </li>
              
            </ul>
          </div>
        </nav>
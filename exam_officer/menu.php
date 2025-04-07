<nav class="navbar navbar-dark navbar-expand-lg"> <a class="navbar-brand" href="index.php"><img src="images/logo.png" class="img-fluid" alt="logo"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
          <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item"> <a class="nav-link " href="index.php">ENTER MARKS</a> </li>
              <li class="nav-item"> <a class="nav-link" href="marks-update.php">UPDATE MARKS</a> </li>
              <li class="nav-item"> <a class="nav-link" href="time-table.php">EXAM TIME TABLE</a> </li>
              <li class="nav-item"> <a class="nav-link" href="exam-date.php">EXAM DATE</a> </li>
                  <li class="nav-item"> <a class="nav-link" href="create-list.php">CREATE LIST</a> </li>
              <li class="nav-item"> <a class="nav-link" href="logout.php">LOGOUT</a> </li>
              <li class="nav-item"> <a class="nav-link" href="logout.php"><b style="color:#fff; font-size:18px; margin-left:20px;"><?php echo $_SESSION['username']; ?></b></a> </li>
              
            </ul>
          </div>
        </nav>
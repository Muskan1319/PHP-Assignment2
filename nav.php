<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><i class="fa fa-university">&nbsp;</i>EDUCATE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="dashboard.php"><i class="fa fa-home">&nbsp;</i>Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="?ans=1"><i class="fa fa-key">&nbsp;</i>Change Password</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="?ans=2"><i class="fa fa-picture-o">&nbsp;</i>Change Image</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="#"><i class="fa fa-hand-o-right">&nbsp;</i>Welcome :<?php echo $sid;?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php"><i class="fa fa-sign-out">&nbsp;</i>Logout</a>
      </li>
    </ul>
  </div>
</nav>
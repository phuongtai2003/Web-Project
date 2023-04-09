<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>JobFast - <?=$page_name?></title>
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
  </head>
  <body>
    <div class="navbar">
      <div class="navbar-brand">
        <a href = "/"><img src="./images/company.png" alt="" /></a>
      </div>
      <div class="nav-link">
        <ul class="navbar-list">
          <li class="navbar-li <?=$page_name=="Home" ? "active-link" : ""?>" ><a href="/">Home</a></li>
          <li class="navbar-li <?=$page_name=="Job" ? "active-link" : ""?>" ><a href="?page=job">Jobs</a></li>
          <li class="navbar-li <?=$page_name=="Companies" ? "active-link" : ""?>"><a href="?page=companies">Companies</a></li>
          <li class="navbar-li <?=$page_name=="Blog" ? "active-link" : ""?>"><a href="#">Blog</a></li>
        </ul>
      </div>
      <div class="nav-button">
        <a href="?page=register" class="btn btn-outline btn-register">Register</a>
        <a href="?page=login" class="btn btn-fill btn-login">Login</a>
      </div>
      <div class="nav-collapse"><span class="navbar-bar"></span></div>
    </div>
    <div class = "body-container">



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>

    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/PrisonerStaff.css">
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/StaffManager.css">

  </head>

  <body>
   <div id="wrapperprisonerStaff">
      <header >
        <div id="header">
          <h2>Prison Management System</h2>
          <h3>Prison Staff : <?php echo $_COOKIE['loggedinuser'];?> </h3>

        </div>
      </header>

      <nav><!--Start  Manu -->
        <div id="nav">
          <ul>
            <li><a href="">Home</a></li>
            <li><a href="#">My Info</a></li>
            <li><a href="#">All Prisoner </a></li>
            <li><a href="#">Add Prisoner</a></li>
            <li><a href="#">Remove Prisoner</a></li>
            <li><a href="http://localhost/bdprison.org">Log Out</a></li>
          </ul>
        </div>
      </nav>

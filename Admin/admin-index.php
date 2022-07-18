 <!---------------- Session starts form here ----------------------->
 <?php  
	session_start();
	if (!$_SESSION["LoginAdmin"])
	{
		header('location:../login/login.php');
	}
		require_once "../connection/connection.php";
	?>
<!---------------- Session Ends form here ------------------------>
<!doctype html>
<html lang="en">
	<head>
		<title>Enigma - Admin</title>
		<meta charset="utf-8">
    <link rel="shortcut icon" href="$baseUrl/../Images/icbs_logo.png" type="image/x-icon">
    
    <!-- css style goes here -->

      <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="../css/footer.css">
      <link rel="stylesheet" type="text/css" href="../css/style.css">

    <!-- css style go to end here -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
 

    <nav class="navbar navbar-expand-lg navbar-dark header-back sticky-top header-navbar-fonts">
      <a class="navbar-brand d-flex align-items-center" href="../index.php">
        <h3 class="text-light ml-4">Enigma</h3>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> 
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="../index.php">Home</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="">About</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="">Courses</a>
          </li> 
          <li class="nav-item active">
            <a class="nav-link" href="">Blog</a>
          </li>
           <li class="nav-item active">
            <a class="nav-link" href="">Contact</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="../login/logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </nav>
	<div class="row w-100">
    <button class="show-btn button-show ml-auto">
      <i class="fa fa-bars py-1" aria-hidden="true"></i>
    </button> 
  </div>
    <nav id="sidebarMenu" class="" >
			<div class="col-xl-2 col-lg-3 col-md-4 sidebar position-fixed border-right overflow-auto">

        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="">
              <span data-feather="file"></span>
              <i class="mr-2" aria-hidden="true"></i>abc
            </a>
			</li>
			<li class="nav-item">
            <a class="nav-link" href="">
              <span data-feather="file"></span>
              <i class="mr-2" aria-hidden="true"></i>abc
            </a>
			</li>
          
        </ul>
      </div>
    </nav>

    <script>
        const toggleBtn = document.querySelector(".show-btn");
        const sidebar = document.querySelector(".sidebar");
        // undefined
        toggleBtn.addEventListener("click",function(){
            sidebar.classList.toggle("show-sidebar");
        });
    </script>
		<main role="main" class="col-xl-10 col-lg-9 col-md-8 ml-sm-auto px-md-4 mb-2 w-100 page-content-index">
			<div class="flex-wrap flex-md-no-wrap pt-3 pb-2 mb-3 text-white admin-dashboard pl-3">
				<h4>Admin Dashboard </h4>
			</div>
		
		<script type="text/javascript" src="../bootstrap/js/jquery.min.js"></script>
		<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>
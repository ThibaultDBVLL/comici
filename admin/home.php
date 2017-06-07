<?php
session_start();

 if(!isset($_SESSION['user_session']))
 {
 header("Location: index.php");
 }

 include_once 'dbconfig.php';

 $stmt = $db_con->prepare("SELECT * FROM utilisateur WHERE ID_utilisateur=:uid");
 //$stmt->execute(array(":uid"=>$_SESSION['user_session']));
 $row=$stmt->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Interface admin</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<link href="style.css" rel="stylesheet" media="screen">

</head>

<body>

<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">BACK OFFICE</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-th-large"></span></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="../contenu.php">CONTENU</a></li>
            <li><a href="#">DISING</a></li>
            <li><a href="#">SOCIAL</a></li>
            <li><a href="#">WEBSERVICES</a></li>
            <li><a href="#">STATISTIQUE</a></li>
            <li><a href="#">ADMINISTRATEUR</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
			  <span class="glyphicon glyphicon-user"></span>&nbsp;<?php echo $row['user_name']; ?>&nbsp;<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;View Profile</a></li>
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Déconnecter</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
</nav>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
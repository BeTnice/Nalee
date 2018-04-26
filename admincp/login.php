<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Nalee Panel</title>
<!--     <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>  -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
  
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  <?php
  include('config.php');
  session_start();
    if(isset($_POST['login'])){
   // lấy thông tin người dùng
  $username = $_POST["username"];
  $password = $_POST["password"];
    //làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
    //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
  $username = strip_tags($username);
  $username = addslashes($username);
  $password = strip_tags($password);
  $password = addslashes($password);
  if ($username == "" || $password =="") {
    echo "username hoặc password bạn không được để trống!";
  }else{
    $sql = "select * from admin where user = '$username' and pass = '$password' ";
    echo $sql;
    $query = mysql_query($sql);
    $num_rows = mysql_num_rows($query);
    if ($num_rows==0) {
      echo "tên đăng nhập hoặc mật khẩu không đúng !";
    }else{
      $_SESSION['dangnhap']=$username;
      // Lấy ra thông tin người dùng và lưu vào session
      while ( $data = mysql_fetch_array($query) ) {
        $_SESSION["id_user"] = $data["id_admin"];
        $_SESSION['user'] = $data["user"];
        $_SESSION["name"] = $data["name"];
        $_SESSION["level"] = $data["level"];
        }
       echo "".$_SESSION["level"];
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
      header('Location: index.php');
    }
  }
  }
?>
    <div class="container">

      <form action="login.php" method="post" class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input name="username" type="text" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
    
        <button name="login" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="Content-Type" charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
        <?php
        include('template/header.php');
        include('konek.php');

        session_start();
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';
        $role = $_POST['role'] ?? '';


        $sql = "SELECT*FROM tb_user where username='$username' and password='$password' AND role='$role'";
        $result = mysqli_query($host, $sql);
        $cek = mysqli_num_rows($result);

        if ($cek > 0) {

          $data = mysqli_fetch_assoc($result);

          if ($data['role'] === "admin") {
            $_SESSION['username'] = $username;
            $_SESSION['role'] = $role;

            header('location:admin/admin.php');
          } elseif ($data['role'] === "user") {
            $_SESSION['username'] = $username;
            $_SESSION['role'] = $role;

            header('location:user/user.php');
          } else{
            echo "<script> alert('Login Gagal');
			      window.location.replace('login.php');</script>";
          }
        }
        ?>

</head>
<body>
  
  <?php include('template/navbar.php'); ?>
  <br><br><br>
  <div class="card fixed-bottom" style="border-radius: 50px; box-shadow: -5px -5px 3px rgba(0,0,0,0.4); padding: 10px;">
    <div class="card-body">

      <form action="" method="POST">
        <div class="form-group text-center">
          <label for="exampleInputEmail1">Email address</label>
          <input type="text" class="form-control" aria-describedby="emailHelp" name="username">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group text-center">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        <br>
        <div class="form-group text-center">
          <label class="dropdown-menu">Role</label>
          <select class="dropdown-item bg-primary " name="role">
            <option value="" name=""> -- Select Role -- </option>
            <option value="admin" name="role">Admin</option>
            <option value="receptionist" name="role">Receptionist</option>
            <option value="user" name="role">User</option>
          </select>
        </div>

        <div class="form-group form-check text-left">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>

        <div class="text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <div class="form-group form-check text-center">
          <label>Dont Have an Account?<a href="">Register</a></label>
        </div>

      </form>
    </div>
  </div>
  <?php include("template/footer.php"); ?>

</body>

</html>
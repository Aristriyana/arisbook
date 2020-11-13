
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ARIS BOOK</title>
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>
    <body>
    <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
        <div class="container-fluid">  
            <div class="row">
                <div class="col-sm-4" style="background-color:rgb(96, 96, 110); font-size: 100px; font-family: Arial, Helvetica, sans-serif; height: 660px; text-align: center; color: white; padding-top: 200px;" >ARIS BOOK</div>
                 <div class="col-sm-8" style="background-color:rgb(189, 186, 187); height: 660px;">
                    <div style="height: 500px; width: 500px; background-color: rgb(137, 145, 144); margin-top: 100px; margin-left: 170px; margin-right: 100px; padding-top: 130px; padding-left: 100px; padding-right: 100px;">
                        <form action="login.php" method="post" >
                            <div class="form-group">
                            <label  for="user" style="color: white; font-weight: bold;">Username</label><br>
                            <input type="text" class="form-control" id="user" name="username" value=""><br>
                            </div>
                            <div class="form-group">
                            <label for="password" style="color: white; font-weight: bold;" >Password</label><br>
                            <input type="text" class="form-control" id="password" name="password" value=""><br><br>
                            </div>
                            <input type="submit" class="btn btn-primary" style="margin-left: 40%;" value="Login">
                        </form>
                    </div>
                 </div>
            </div>
        </div>
              
    </body>
</html>

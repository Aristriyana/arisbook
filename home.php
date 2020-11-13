<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ARIS BOOK</title>
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>

    <body>


        <div class="row">
                
            <div class="col-sm-2" style="background-color: rgb(187, 187, 196); height: 639px; padding-left: 30px; padding-top: 50px; ">
                <div  style="height: 180px; width: 180px; background-color: rgb(187, 187, 196);   text-align: center;" > <img src="profil.jpg" style= "width: 150px; height: 150px; border-radius: 50%;"> </div>
                <div style="background-color:  rgb(187, 187, 196); text-align: center; height: 50px; width: 180px; font-size: 2em; font-weight: bold;">Aris Triyana</div>
                <div style="background-color: rgb(187, 187, 196); text-align: center; height: 50px; width: 180px;"> 05 Mei 2002</div>
            </div>
            <div class="col-sm-10" style="background-color: rgb(187, 187, 196);">
                <div class="container-fluid" style="background-color: rgb(156, 167, 167); height: 240px; margin-bottom: 10px; text-align: center; padding-top: 30px;">
                    <form action="login" method="POST" >
                        <div class="form-group">
                            <input type="email" style="text-align: center; height: 100px;;" class="form-control" placeholder="Tulis Sesuatu..." id="email"><br>
                        </div>
                        <input type="submit" class="btn btn-primary" style="margin-left: 40%;" value="Posting">
                    </form>    
                </div>
                <form action="status.php" method="POST">
                    <div class="container-fluid" style="background-color:  rgb(156, 167, 167); height: 390px; padding-top: 20px;">
                        <div class="container-fluid" style="background-color: rgb(131, 148, 148); height: 170px; margin-bottom: 20px;"> 
                            <div class="container-fluid">  
                            <div class="row">
                                <div class="col-sm-4" style="background-color rgb(131, 148, 148); color: white; font-weight: bold; text-align: left;">Aris Triyana</div>
                                <div class="col-sm-8" style="background-color: rgb(131, 148, 148);  color: white; font-weight: bold; text-align: right;">jam 20:00</div>
                            </div>
                            <div class="container-fluid" style="background-color: rgb(255, 255, 255); height: 100px; margin-bottom: 10px;">HAi.. balarea urang nu di bandung..</div>
                            <input type="submit" class="btn btn-primary" style="margin-left: 70%; width: 200px;" value="Komentar">
                            </div>
                        </div>
                    </form>    
                   <form action="status.php" method="POST">
                        <div  class="container-fluid" style="background-color: rgb(131, 148, 148); height: 170px; margin-bottom: 10px;"> 
                            <div class="container-fluid" >  
                            <div class="row">
                                <div class="col-sm-4" style="background-color: rgb(131, 148, 148); color: white; font-weight: bold; text-align: left;">Aris Triyana</div>
                                <div class="col-sm-8" style="background-color: rgb(131, 148, 148);  color: white; font-weight: bold; text-align: right;">jam 20:00</div>
                            </div>
                            <div  class="container-fluid" style="background-color: rgb(255, 255, 255); height: 100px; margin-bottom: 10px;">HAi.. balarea urang nu di bandung..</div>
                            <input  type="submit"   class="btn btn-primary" style="margin-left: 70%; width: 200px;" value="Komentar">
                            </div>
                        </div>
                    </form>
                </div>
            </div> 
        </div> 
    </body>
</html>
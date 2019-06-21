<?php
    if(Tools::isConnected()){
        header('Location:index.php?page=home');
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/IMSAtomic2.css">
    <link rel="stylesheet" href="css/mystyle.css">
    <!-- <link rel="stylesheet" href="css/media.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
    <title>BM - Sign In</title>
    
</head>
<body>
    <?php echo Tools::getError();  ?>
    <div class="container fh">
        <div class="fx center_all fh">
            <div class="fxc center_all center">
                <div class="">
                    <img src="img/avatar.png" alt="">
                </div>
                <h2>Sign In</h2>
                <div class="sp"></div>
                <form action="index.php?page=controllers/connect" method="POST" class="fw">
                    <div class="form-group">
                        <input type="text" class="form-control inp"name="mail" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control inp"name="psw" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" placeholder="Password">Sign In</button>
                    </div>
                </form>
                <a href=""data-toggle="modal" data-target="#myModal">Forgot your password ?</a>
            </div>
        </div>
    </div>

    <!-- The Modal -->
<div class="modal fade" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
      
            <!-- Modal Header -->
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
      
            <!-- Modal body -->
            <div class="modal-body">
              <h4>Please contact the administration to reset your password !</h4>
            </div>
      
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
      
          </div>
        </div>
      </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
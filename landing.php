<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Landing</title>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet">

<!--        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body style="background-color: #78909C">

        <div class="row" style="background-color: white;">

            <div class="col-md-1"></div>
            <div class="col-md-10">

                <h2 style="text-align: center;">Welcome To SPK - Pariwisata</h2>
            </div>
            <div class="col-md-1"></div>
        </div>
        <div class="row" style="margin-top: 15%;">

            <div class="col-md-4"></div>
            <div class="col-md-4">

                <div class="row" style="background-color: white;">

                    <div class="col-md-5" style="background-color: yellow; width: 40%; text-align: center;" data-toggle="modal" data-target="#modallogin">

                        <h6>LOGIN</h6>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5" style="background-color: yellow; width: 40%; text-align: center;" >

                        <h6>GUEST</h6>
                    </div>
                    <p style="margin-top: 10px; display: inline-block;">ga punya akun ? segera sign up disini!!</p>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>

        
<!--        MODAL-->
        <div id="modallogin" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modal Header</h4>
                    </div>
                    <div class="modal-body">
                        <p>Some text in the modal.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>

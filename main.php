<?php
session_start();
$_SESSION['selected'] = array();
$_SESSION['counterarray'] = 1;
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <!--        BOBOT-->   
        <div class="row" style="background-color: yellow; text-align: center; height: 15%; padding-top: 1%; padding-bottom: 20px;">
            <form action="proseshitungan.php" method="POST">
                <div class="col-md-1" style="text-align: right"> <h4>BOBOT :</h4></div>
                <div class="col-md-2">
                    <span>Akses : </span><input type="text" id="iakses" name="iakses"/>
                </div>
                <div class="col-md-2">
                    <span>Kondisi Lingkungan : </span><input type="text" id="iling" name="iling"/>
                </div>
                <div class="col-md-2">
                    <span>Hub. Dengan Wisata Lain : </span><input type="text" id="iwisatalain" name="iwisatalain"/>
                </div>
                <div class="col-md-2">
                    <span>Kondisi Cuaca : </span><input type="text" id="icuaca" name="icuaca"/>
                </div>
                <div class="col-md-2">
                    <span>Biaya : </span><input type="text" id="ibiaya" name="ibiaya"/>
                </div>
                <div class="col-md-1">
                    <input type="submit" value="APPLY" class="btn btn-success" style="margin-top: 10px; width: 90%; margin-right: 20px;"/>
                </div>
            </form>
        </div>

        <!--        SELECTION-->
        <div class="container-fluid" style="width: 60%; background-color: blue; height: 85%; float: left; overflow: scroll;" id="list"></div>
        <div class="container-fluid" style="width: 40%; background-color: cyan; height: 85%; float: left; overflow: scroll" id="selected"></div>

        <?php if (isset($_SESSION['login'])) { ?>
            <img src="asset/btntambah.png" style="position: absolute; right: 50px; bottom: 30px; width: 7%;" onclick="loadtambahdata()" id="btntambah"/>
            <?php
        }
        ?>


    </body>
    <script>
        function add(i) {
            $("#selected").load("selected.php?id=" + i);
        }
        function loadtambahdata() {
            $("#selected").load("tambahdata.php", function () {
                $("#btntambah").slideToggle();
            });
        }
        function del(i) {
            $("#selected").load("selected.php?delid=" + i);
        }
        function tambahdata(i) {
            $.post("prosestambahdata.php",
                    {
                        nama: $("#addnama").val(),
                        jenis: $("#addkategori").val(),
                        alamat: $("#addalamat").val(),
                        desk: $("#adddesk").val(),
                        akses: $("#addakses").val(),
                        ling: $("#addling").val(),
                        hub: $("#addhub").val(),
                        cuaca: $("#addcuaca").val(),
                        biaya: $("#addbiaya").val()
                    },
                    function ()
                    {
                        $("#list").load("list.php");
                        $("#selected").load("selected.php", function () {
                            $("#btntambah").slideToggle();
                        });
                    }
            );
        }
        function showcomment(i) {
            $("#plccomment" + i).slideToggle();
        }

        function postcomment(i) {
            $.post("postcomment.php",
                    {
                        isi: $("#txtcomment" + i).val(),
                        tempat: $("#did" + i).val()
                    },
                    function ()
                    {
                        $("#list").load("list.php");
                    }
            );
        }


        $("#list").load("list.php");
        $("#selected").load("selected.php");
    </script>
</html>

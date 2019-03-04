<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta id="viewport" name="viewport" content="width=device-width, user-scalable=no"/>
    <title>Title</title>
    <link href="../bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <script src="../bootstrap-3.3.7-dist/js/jquery-3.3.1.min.js" type="text/javascript"></script>

    <script src="../bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>

    <style type="text/css">
        #linha1 {
            background-color: #ccc;
        }

        #linha2 {
            background-color: #ddd;
        }
    </style>
</head>
<body>
   <!--
   col-xs = SMARTPHONE
   col-sm = TABLET
   col-md = PC-DESKTOP
   col-lg = GRANDES MONITORES
   -->

    <div class="container">
        <h1>Meu primeiro sistema bootstrap</h1>
        <p>Este é o meu primeiro teste</p>


        <div class="row" >
            <div id="linha1" class="col-xs-12 col-md-8">.col-xs-12 .col-md-8</div>
            <div id="linha2" class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
        </div>
    </div>
</body>
</html>


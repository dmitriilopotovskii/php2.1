<!DOCTYPE html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Zadanie 1</title>


    <link href="/views/css/bootstrap.min.css" rel="stylesheet">

    <link href="/views/css/thumbnail-gallery.css" rel="stylesheet">


</head>

<body>
<div class="col-lg-12">



    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header"></h1>

                <form class="form-inline" enctype="multipart/form-data" action="../addarticlePost.php" method="POST"
                      style="margin-left: 50%;">

                    <input type="file" name="userfile" class="btn btn-primary "/>
                    <input type="text" class="form-control" name="title" placeholder="введите имя novosti">
                    <input type="text" class="form-control" name="text" placeholder="введите text">

                    <input class="btn btn-primary" type="submit"/>
                </form>
            </div>

            <hr>

            <!-- Footer -->
            <footer>
                <div class="row">


                </div>
            </footer>

        </div>
        <!-- /.container -->

        <!-- jQuery -->
        <script src="../js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

</body>

</html>

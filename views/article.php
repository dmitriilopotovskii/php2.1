<!DOCTYPE html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>All News</title>

    <link href="/views/css/bootstrap.min.css" rel="stylesheet">

    <link href="/views/css/thumbnail-gallery.css" rel="stylesheet">


</head>

<body>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <div class="col-lg-12">
            <h1 class="page-header"></h1>
        </div>

        <div class="col-lg-12 col-md-12 col-xs-12 thumb">
            <h3 class="text-center"><?php echo $news['title']; ?></h3>

            <a class="col-lg-8 thumbnail" href="/">
                <img class="img-responsive" src="<?php echo $news['img']; ?>" alt="">
            </a>

            <div class="col-lg-8 text-left">
                <?php echo $news['text']; ?>
            </div>
        </div>

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
<script src="/views/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/views/js/bootstrap.min.js"></script>

</body>

</html>

<?php
require "global.php";
require TPL."header.php";
require CLASSDIR."Database.php";


 ?>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Je loue</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <<link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>




<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Category</h2>
                    <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                        Robes
                                    </a>
                                </h4>
                            </div>
                            <div id="sportswear" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="">Caftans </a></li>
                                        <li><a href="">Robes de mariées </a></li>
                                        <li><a href="">Robes de soirées </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                        Accessoires
                                    </a>
                                </h4>
                            </div>
                            <div id="mens" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="">Bijoux</a></li>
                                        <li><a href="">Ceintures</a></li>
                                        <li><a href="">Chaussures</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>



                    </div><!--/category-productsr-->
                </div>
            </div>

            <!-- item du milieu des articles -->

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Nos robes</h2>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">

                                    <!--premier article-->

                                    
                                    <?php 
                                    $req ="SELECT * FROM robes";
                                    $reponse = $db->query($req);
                                    while($donne = $reponse->fetch()){
                                        echo "<img src=./images/".$donne['image'].">";
                                        echo "<h2>".$donne['prix']." € </h2>";
                                        echo "<p> Article ".$donne['id']."</p>";                                    
                                    ?>
                                                                 
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Réserver</a>
                                    <?php
                                     }
                                     ?>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <?php
                                        $req ="SELECT * FROM robes";
                                        $reponse = $db->query($req);
                                        while ($donne = $reponse->fetch()) {
                                            echo "<h2>".$donne['prix']." € </h2>";
                                            echo "<p> Article ".$donne['id']."</p>";
                                        
                                        ?>                                        
                                    
                                        <a href="description.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Réserver</a>
                                        <?php
                                         }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- fin du premier article-->
            </div>                                 

                    <ul class="pagination">
                        <li class="active"><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">&raquo;</a></li>
                    </ul>
                </div><!--features_items-->
            </div>
        </div>
    </div>
</section>



<script src="js/jquery.js"></script>
<script src="js/price-range.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/main.js"></script>
</body>
</html>

<?php require TPL."footer.php";?>

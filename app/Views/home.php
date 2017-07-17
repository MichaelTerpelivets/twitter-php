<!DOCTYPE HTML>
<html>
<head>
    <title>MT</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="app/public/css/bootstrap.min.css" type="text/css"/>
    <!--    <link rel="stylesheet" href="app/public/css/font-awesome.min.css" type="text/css"/>-->
    <link rel="stylesheet" href="app/public/css/style.css" type="text/css"/>

    <script src="app/public/js/jquery.min.js" type="text/javascript"></script>
    <script src="app/public/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!--HEADER SLIDER SCRIPT-->
</head>
<body>
<div id="wrap">
    <!--HEADER-->
    <section id="header">
        <!--MENU-->
        <nav class="navbar navbar-default" role="navigation">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p class="navbar-text navbar-left">
                        Terpelyvets Michael
                        <a href="#" class="navbar-link">+1 646 8448125</a>
                    </p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <!-- NAVBAR BRAND and NAVBAR TOOGLE -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse col-lg-6 col-md-12" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="">Twitter<span class="sr-only">(current)</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- END MENU -->
    </section>
    <div class="clearfix"></div>
    <!--END HEADER-->
    <!--SLIDER-->
    <section id="slider">
        <div class="carusel">
            <img src="app/public/img/slider7.jpg"/>
        </div>
        <div class="logo-block">
            <div class="logo">
                <img src="app/public/img/logo.png" alt="Michael Terpelyvets"/>
            </div>
        </div>
    </section>
    <!--END SLIDER-->
    <!-- OPEN CONTENT  -->
    <div class="container">
        <!-- Форма вывода -->
        <div class="panel panel-success ">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Twitter Id</th>
                    <th style="text-align: center">Message</th>
                    <th>Favorite</th>
                    <th>Retweet</th>
                </tr>
                </thead>
                <tbody id="twit_list">
                <?php $i = 1; ?>
                <?php foreach ($data as $key => $value) {
                    echo "<tr><td>$value->id</td><td>$value->text</td><td>$value->retweet_count</td><td>$value->favorite_count</td></tr>";
                } ?>
                </tbody>
        </div>
        <!-- -->
        <section id="services">
            <div class="search-block">
                <div class="search input-group">
                    <form method="POST" action="" enctype="multipart/form-data">
                        <input name="twit" class="inputbox form-control" type="text"/>
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-blue">
                                <span class="search-btn-text">Написать</span>
                            </button>
                        </span>
                    </form>
                </div>
            </div>
        </section>
    </div>
    <!-- END CONTENT  -->
</div>
<!-- OPEN FOOTER  -->
<section id="footer">
    <ul class="footer-social">
        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
    </ul>
</section>
<!--END FOOTER-->
<script>
    $(document).ready(function () {
        var route= 'reolad';
        var timerId = setInterval(function () {
            $.ajax({
                url:'index.php',
                type:'POST',
                data: {route: route},
                success: function (data) {
                    var str = '';
                    $.each(JSON.parse(data), function(){
                        str += '<tr>';
                        str += '<td>' + this.id + '</td>';
                        str += '<td>' + this.text + '</td>';
                        str += '<td>' + this.favorite_count + '</td>';
                        str += '<td>' + this.retweet_count + '</td>';
                        str += '</tr>';
                    })
                    $('#twit_list').html(str);
                }
            });
        }, 20000);
    });
</script>
</body>
</html>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Strona o JWK w Bootsrtapie</title>
        
        <?php 
                    $site = isset( $_GET['site'] ) ? $_GET['site'] : 'home';
                    // za pomocą isset sprawdzam czy parametr site istnieje, $_GET pobiera wartość paramentru site, parametr site występuje w adresie strony i za jego pomocą zmieniam content strony
                    // zapis powyższy oznacza, że jeśli site istnieje to wpisz go do zmiennej $site, a jeśli nie to do zmiennej $site wpisz słowo: home
                    // poniżej komenda echo oznacza wyświetl wynik
                    // w menu otwieram kod php aby sprawzić czy zmienna $site ustawiona wyżej jest równa home, lub c lub java lub js lub php lub css lub html i jeśli tak to za pomocą echo wyświetlam w kodzie html klasę active a jeśli nie to nie wyświetlam nic (pusty znak)
                ?>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
        <style>
                .carousel-caption h1 {
                font-size: 7em;
                text-shadow: 4px 6px 5px #ff0000;
                }
 
                .carousel-caption p {
                    font-size: 2em;
                    color: black;
                }
                
                .navbar {
                    margin-bottom: 0px;
                   
                }
                
                .jumbotron {
                    margin-top: 20px;
                }
                
                .table-hover tbody tr:hover > th {
                    background-color: #D1D119;
                }
                
               
                
                body {
                    background-color: #3a3636;
                }
                
                .container-fluid {
                    color: white;
                }
                
                img.right {
                    width: 322px;
                    height: 156px;
                    padding: 10px;
                }
                
                img.centre {
                    width: 280px;
                    height: 156px;
                    float: right;
                    padding: 10px;
                }
                
                img.left {
                    width: 322px;
                    height: 156px;
                    float: right;
                    padding: 10px;
                }
                
                img.srodek {
                    width: 322px;
                    height: 156px;
                    float: right;
                    padding: 10px;
                }
                img.pistolet {
                    width: 322px;
                    height: 156px;
                    float: right;
                    padding: 10px;
                }
                img.mp5 {
                    width: 322px;
                    height: 156px;
                    float: left;
                    padding: 10px;
                }
        </style>
    </head>
    <body>

        <nav class="navbar navbar-inverse">
            
            
           
            <div class="container-fluid">
                
                <!-- Brand and toggle get grouped for better mobile display -->
                
                <div class="navbar-header">
                    
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-                               collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                    <a class="navbar-brand" href="#">MENU</a>
                    
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    
                    <ul class="nav navbar-nav">
                        
                        <li>  
                            <a href="index.php"><span class="sr-only">(current)</span></a>
                        </li>
                        
                        <li>
                            <a href="index.php?site=jednostki"><span class="glyphicon glyphicon-align-left" aria-hidden="true"></   span> Jednostki</a>

                        </li>
                        <li>
                            <a href="index.php?site=pojazdy"><span class="glyphicon glyphicon-yen" aria-hidden="true"> Pojazdy</a>
                        </li>
                        <li>
                            <a href="index.php?site=wyposazenie"><span class="glyphicon glyphicon-yen" aria-hidden="true">Wyposazenie</a>
                        </li>
                        <li>
                            <a href="index.php?site=trening">Trening</a>
                        </li>
                        <li>
                            <a href="index.php?site=kontakt">Kontakt</a>
                        </li>
                        
                    </ul>

                </div><!-- /.navbar-collapse -->
                
            </div><!-- /.container-fluid -->
            
        </nav>

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="header 2.jpg" alt="...">
                    <div class="carousel-caption">
                       <h1>JWK</h1>
                       <p>Jednostki pojazdy wyposazenie trening kontak</p>
                    </div>
                </div>
                <div class="item">
                    <img src="Tapety_2016_kalendarz_pazdziernik_1920_1080.jpg" alt="...">
                    <div class="carousel-caption">
                        <h1>JWK</h1>
                        <p>Jednostki pojazdy wyposazenie trening kontak</p>
                    </div>
                </div>
                
                <div class="item">
                    <img src="header3.jpg" alt="...">
                    <div class="carousel-caption">
                        <h1>JWK</h1>
                        <p>Jednostki pojazdy wyposazenie trening kontak</p>
                    </div>
                </div>
                ...
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true">Poprzedni</span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true">Nastepny</span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        
        <div class="container">
            <div class="jumbotron text-justify">
                
                <?php
                    include $site . ".php" // komenda załączająca plik
                ?>

            </div>
        </div>
        
        <div class="container-fluid ms_footer text-center">
        
            <p>&COPY;Copy Rights</p>
        
        </div>
        

    </body>
    
</html>
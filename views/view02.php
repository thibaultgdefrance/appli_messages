<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>appli_message</title>
        <link rel="stylesheet" type="text/css" href="../bower_components/bootstrap/dist/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="css/appli_message.css" />
        <link href="https://fonts.googleapis.com/css?family=Modak" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
    </head>
    <body>
        <div class="container corps">
            <div class="row">
                <div class="col-md-offset-4 col-md-2 ">
                    <div class="titre">
                        <div class="col-md-12">
                            <h1>
                                Messages Departure
                            </h1>
                        </div>
                        <div class="col-md-12">
                            <img src="../media/take-off.png" alt="" height="60px">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <form class="formulaire" action="record.php" method="post">
                        <div class="col-md-4 col-md-offset-4">
                            <input type="text" name="auteur" value="" placeholder="votre nom" >
                        </div>
                        <div class="col-md-6 col-md-offset-4">
                            <input type="textarea" name="texte" value="" placeholder="votre message" required="">
                        </div>
                        <div class="col-md-2 col-md-offset-4">
                            <input type="submit" name="décollage" value="décollage">
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </body>
</html>

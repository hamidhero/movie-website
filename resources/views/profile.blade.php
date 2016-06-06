<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <style type="text/css" src="/css/profile.css"></style>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>



<body>
    </div>
    <?php 
        $title = Session('searches');
        // dd($title[0]);

        //image/posters/MV5BMjA0MjMwNTE4Nl5BMl5BanBnXkFtZTgwNjExNzQxMTE@._V1_SX300.jpg
        $photo = explode("/M", $title[0]->poster);
        $addr = "/image/posters/".'M'.$photo[2]; 
    ?>
    <div class="full">
        <div class="f">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-sm-6 col-md-11">
        
                        <img src="<?php echo $addr; ?>" style="height:500px; width:350px;" alt="" class="img-rounded img-responsive" />
                        
                        <div class="col-sm-12 col-md-8" style="margin-left: 400px; margin-top: -500px;">
                            <h4>{{$title[0]->title}} ({{$title[0]->year}})</h4>

                            <b class="glyphicon glyphicon-star"></b><b class="glyphicon glyphicon-star"></b><b class="glyphicon glyphicon-star"></b><b class="glyphicon glyphicon-star"></b><b class="glyphicon glyphicon-star-empty"></b><br />

                            <small><i>{{$title[0]->genre}}</i></small>

                            <p style="margin-top:10px; width:100%;">
                                <i class="glyphicon glyphicon-star-empty"> IMDB Rate :</i>  {{$title[0]->imdb_rate}}
                                <br />
                                <i class="glyphicon glyphicon-scale"> Metascore :</i>  {{$title[0]->metascore}}
                                <br />
                                <i class="glyphicon glyphicon-sunglasses"> IMDB Votes :</i>  {{$title[0]->imdb_votes}}
                                <br />
                                <i class="glyphicon glyphicon-bullhorn">  Director(s) :</i>  {{$title[0]->director}}
                                <br />
                                <i class="glyphicon glyphicon-pencil">  Writer(s) :</i>  {{$title[0]->writer}}
                                <br />
                                <i class="glyphicon glyphicon-user">  Actors :</i>  {{$title[0]->actors}}
                                <br />
                                <i class="glyphicon glyphicon-time">  Running Time :</i>  {{$title[0]->run_time}} mins
                                <br />
                                <i class="glyphicon glyphicon-gift"> Awards :</i>  {{$title[0]->awards}}
                                <br />
                                <i class="glyphicon glyphicon-font"> Language :</i>  {{$title[0]->language}}
                                <br />
                                <i class="glyphicon glyphicon-home"> Country :</i>  {{$title[0]->country}}
                                <br />
                                <i class="glyphicon glyphicon-warning-sign"> Rated :</i>  {{$title[0]->rated}}
                                <br />

                                <i class="glyphicon glyphicon-list-alt">  Plot :</i>  {{$title[0]->plot}}
                            </p>

                                <!-- <a href="#"><button type="button" class="btn">Download</button></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
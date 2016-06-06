<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="/css/lato100.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/css/results.css">

    </head>
    <body>
        <div class="container">
            <div class="content">
                <?php
                    //use DB; 
                    $searches = DB::table('movies')->where('title' ,'like', '%'.Input::get('search').'%')->get(); //how to get phrase from search.blade.php and how to make a query ???
                    // Session::put('searches' , $searches);
                    // return view('results');

                    // $q = session('searches');
                    // dd($q);
                    //$q = $_GET['search']; //how to send it to controller ???

                ?>
                <div class="title">Your Search Result(s) : </div>
                    @foreach($searches as $result)
                        <div class='results' style="background: url('{{$result->poster}}'); background-size: 200px 300px; ">
                            <!-- <img width="200px" height="300px" src="{{$result->poster}}"></img> -->
                            <a href="/profile&title={{$result->title}}"><div class="text">
                                <b>{{$result->title}}<br/>
                                Year: {{$result->year}}<br/>
                                IMDB Rate: {{$result->imdb_rate}}<br/>
                                Director: {{$result->director}}<br/>
                                Actors: {{$result->actors}}</b>
                            </div></a>
                        </div>
                    @endforeach
                
            </div>
            <br/>
        </div>
    </body>
</html>
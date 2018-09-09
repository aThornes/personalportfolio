<!DOCTYPE html>

<html lang="en">
<head>
    
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
      <script src="js/jribbble.js"></script>
      <script src="js/bootstrap.js"></script>
      <script src="{{mix('js/app.js')}}"></script>
<script>

$(document).ready(function()    
    $.jribbble.setToken('31ab7fc9c25cbe4122efa08d82d5ee0998685a63cd93f0fd763045abb4bbd67d');
    $.jribbble.users('gsvineeth').shots({per_page: 36}).then(function(shots) {
    var html = [];
  
    shots.forEach(function(shot) {
        html.push('<div class="col-sm-6 col-md-4 col-lg-4"> <div class="grid-list">');
        html.push('<a href="' + shot.html_url + '" target="_blank">');
        html.push('<img class="img-responsive" src="' + shot.images.normal + '" alt="' + shot.title + '"><\/a>');
        html.push('<div class="overlay"><a target="_blank"  href="' + shot.html_url + '">');
        html.push('<h2>' + shot.title + '<\/h2>');
        html.push('<\/a> <\/div><\/div><\/div>');
    });
  
    $('#shots').html(html.join(''));
    });
});
 
        </script>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    
    <title>Portfolio</title>
    
    
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">    
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <header>
                <div class="row">
                    <div class="navbar">
                        <div class="navbar-header">
                            <h1>
                                <span
                                     class="txt-rotate"
                                    data-period="1000"
                                    data-rotate='[ "Welcome to my portfolio.","By Adam Thornes.", "Have a look around"]'></span>
                            </h1>                                                        
                        </div>                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <h1 class="intro"><span>Physics Graduate</span>.  <span>Avid Programmer. </span></h1>
                    </div>
                </div>                
            </header>    
                   
            <div class="row grid-list-wrapper no-gutter-space" id="shots"></div>
         </div>         
    </div>
   <div class="contentWrapper">
        <div class="container">
        @yield('content')
        </div>
   </div>
    <footer>
        <div class="container">
        <nav class="navbar navbar-expand-lg">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('cv') }}">CV<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('contact') }}">Contact<span class="sr-only">(current)</span></a>
                    </li>                
                    
                    </ul>                    
                </div>
            </nav>     
            <nav class="nav-footer">
                <ul>
                    <li><a href="https://github.com/aThornes"> <i class="fa fa-github"></i> </a> </li>  
                </ul>

                <p class="credits text-center">&copy; All Rights Reserved 2018</p>
            </nav>
        </div>

    </footer>
</body>
</html>
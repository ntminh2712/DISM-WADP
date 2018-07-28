<!DOCTYPE html>
<html>
<head>
    <title>TEST EXAM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    </head>
<body>
    <header class="container-fluid" ng-controller="ctrlHead">
        <div class="row">
            <div class="headerLogo col-md-4 col-sm-12 col-xs-12" style="width: 100%; transition: .5s;">
                <a href="Sweet Home!"><img src="http://pluspng.com/img-png/home-icon-png-home-icon-image-211-1200.png" style="width: 5%; transition: .5s;">
                </a>
            </div>
        </div>
    </header>

    <nav class="container-fluid">
        <ul class="row">
            <li class="navItem col-md-2 col-sm-4 col-xs-12 ">
                <a href="">Home</a>
            </li>
            <li class="navItem col-md-2 col-sm-4 col-xs-12">
                <a href="">Best Home</a>
            </li>
            <li class="navItem col-md-2 col-sm-4 col-xs-12">
                <a href="">Life Style</a>
            </li>
            <li class="navItem col-md-2 col-sm-4 col-xs-12">
                <a href="">About Us</a>
            </li>
            <li class="navItem col-md-2 col-sm-4 col-xs-12">
                <a href="">Contact Us</a>
            </li>
                <div>
                    <div class="input-group" style="float: right; margin-right: 10px;">
                        <input type="text" class="valueSearch form-control" placeholder="Search">
                        <span class="input-group-btn">
                            <a href="">Search</a>
                        </span>
                    </div>
                </div>
        </ul>
    </nav>

    <div class="col-md-10 text-left"> 
      <div class="body row">
        <div class="post col-md-10">
                <form>
                <fieldset>
                <legend>Newest Home</legend>
                <div class="mainpost">
                    <div class="row">
                        @foreach($items as $item)
                            <div class="col-md-4">
                                <div class="smallpost">
                                    <div class="img">
                                        <a class="hover-flash thumbnail shadow-box">
                                            <img src="https://thoitrangwiki.com/wp-content/uploads/2017/03/nha-2-tang-co-san-vuon.jpg">
                                        </a>
                                        <p>{{ $item->tenchungcu}}</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-9 price">
                                            <p>{{ $item->giaban}} VNĐ</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="col-md-12" style="text-align: center;">
                                {{$items->links()}}
                            </div>
                    </div>
                </div>
                </div>
                   </fieldset>
        </form>
            </div>
        </div>
    </div>
            <div class="leftmenu col-md-2" style="float: right;">
                <div class="titlemenu">
                    <div>Search By Area</div>
                </div>
                    <div class="smallmenu">
                        <a style="color: black;" href=""><p>District 1</p></a>
                        <a style="color: black;" href=""><p>District 2</p></a>
                        <a style="color: black;" href=""><p>District 3</p></a>
                        <a style="color: black;" href=""><p>District 4</p></a>
                    </div>
            </div>
</body>
</html>
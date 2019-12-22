<DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Description Update</title>

        <!-- links -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>

        <!-- links end -->

        <!-- css link -->
        <link rel="stylesheet" href="/css\homeupdatecss.css">
        <!-- css link end -->
    </head>
    <body>

    <!-- header -->
    <div class="section1">
        <div class="container-fluid bg-info p-1">
            <div class="container text-white mt-2">
                <p><b>Welcome : Abdul rafay</b></p>
            </div>
            <!--container end  -->
        </div>
        <!-- fluid end -->


    </div>
    <!-- header end -->

    <div class="section2">
        <div class="container-fluid bgcolor">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="/images/logo.png" alt="no">
                    </div>

                    <div class="col-md-6 mt-4 text-right">
                        <img src="/images/help.png" alt="">
                    </div>
                </div>
                <!-- row end -->
            </div>
            <!-- container end -->
        </div>
        <!-- fluid end -->
    </div>
    <!-- section2 end -->
    <!-- section 3 start -->
    <div class="section3">
        <div class="container-fluid bg-info">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mt-5 stylefonta">
                        <h3 style="color: white; text-align: left;"><b>Edit The Uploaded Resources</b></h3>

                    </div>
                    <!-- subject end -->
                    <div class="col-md-4 mb-3">
                        <div class="row">
                            <!-- home start -->
                            <div class="conn text-center navrad pr-3 pl-3 mt-1 ml-3 mt-3">

                                <a href="/page_des"><img src="/images/home-icon.png" class="inage mt-2" alt="no" width="40px" height="40px">
                                    <p style="color: white;">Home</p></a>
                            </div>
                            <!-- home end -->



                            <!-- user data show -->
                            <div class="conn text-center navrad pr-3 pl-3 mt-1 ml-3 mt-3">

                                <a href="/rauser"><img src="/images/vv.png" class="inage mt-2" alt="no" width="40px" height="40px">
                                    <p style="color: white;">Users</p></a>
                            </div>
                            <!-- user data end -->
                            <!-- user update show -->
                            <div class="conn text-center navrad pr-3 pl-3 mt-1 ml-3 mt-3">

                                <a href="/rauser"><img src="/images/update.jpg" class="inage mt-2" alt="no" width="40px" height="40px">
                                    <p style="color: white;">Update</p></a>
                            </div>
                            <!-- user update end -->

                            <!-- logout start -->
                            <div class="conn text-center navrad pr-3 pl-3 ml-3 mt-1 ml-3 mt-3">
                                <a href="/sofware_engineering"><img src="/images/logout.png"class="inage mt-2" alt="no" width="40px" height="40px">
                                    <p style="color: white;">Logout</p></a>

                            </div>
                            <!-- logout end -->
                        </div>
                        <!-- row end -->
                    </div>
                    <!-- nav bar ebd -->
                </div>
                <!-- row end -->
            </div>
            <!-- container end -->
        </div>
        <!-- fluid end -->
    </div>
    <!-- section3 end -->

    <!-- container start -->
    <div class="container mt-5">

        <div class="row">
            <div class="col-lg-12 col-md-6 bg-info text-center uprad">

                <h5 class="mt-2 mb-2" style="color: white;"><b>Update Your Record</b></h5>

            </div>
            <!-- col-lg start -->
        </div>
        <!-- row -->
    </div>

    <!-- conatiner end -->
    <div class="container mt-2">

        <div class="row">
            <div class="col-lg-12 col-md-6 bg-light conrad">
                <form action="{{route('updat')}}" method="POST">
                    {{csrf_field()}}

                    <input type="hidden" class="form-control" name="page_id" value="{{$pages->id}}" >
                    <div class="form-group mt-4">
                        <input type="text" class="form-control" name="subject_name" value="{{$pages->subject_name}}" >
                    </div>
                    <div class="form-group mt-4">
                        <input type="text" class="form-control" name="topic_name" value="{{$pages->topic_name}}" >
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="des_topic" value="{{$pages->des_topic}}">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="g_d_link" value="{{$pages->g_d_link}}">
                    </div>




                    <div class="form-group">
                        <button type="submit" class="btn btn-info btn-block">DONE</button>
                    </div>
                </form>


            </div>
            <!-- col-lg-4 end -->
        </div>
    </div>
    <!-- container end -->
    </div>
    <!-- hero-overlay -->
    </div>
    <!-- hero -->


    <div class="section4">
        <!-- footer -->
        <div class="container-fluid con">
            <div class="container">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 text-center text-white">
                        <p>SE HELP DESK ADMIN PANEL<br>COMSATS UNIVERSITY ISLAMABAD </p>
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <!-- row end -->
            </div>
            <!-- container end -->
        </div>
        <!-- fluid end -->
        <!-- footer end -->

    </div>
    <!-- section4 end -->
    </body>

    </html>



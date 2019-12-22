<DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    
        <!-- links -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    
        <!-- links end -->

        <!-- css link -->
        <!-- <link rel="stylesheet" href="ictupdate.css"> -->
        <!-- css link end -->

        <!-- style -->
        <style>
        /* images and overlay start */
body{margin:0;
    padding: 0;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    background-color: rgb(4, 4, 117);
    }
    .hero{
    background-image: url("images/a.jpg");
    background-size:cover;
    background-position:center;
    width: 100%;
    position:relative;
    background-attachment: fixed;
    height: 180%;
    z-index:0;
    display: block;
    }
    .hero-overlay{
    
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        
        background-color: rgba(30, 30, 117, 0.9);
       
        
       
        background-attachment: fixed;
        height: 100%;
        width: 100%;
    
    
    }

  
    
    
    
    
   
    
    
    
    
    
    
     /* start of desktop styles */
    
     @media screen and (max-width: 991px) {
        /* start of large tablet styles */
        .hero {
          min-width: 70%;
          height: 250%;
        }
      
    }
    
    @media screen and (max-width: 767px) {
        /* start of medium tablet styles */
        /* Adding a fixd/percentage min-width could ensure that the image doesn't get too small */
        .hero {
          min-width: 30%;
        
          height: 400%;
        }
        .logoo{
            width: 300px;
          }
    }
    
    @media screen and (max-width: 479px) {
        /* start of phone styles */
        /* It's possible to hide the image if the screen becomes too small */
        .hero {
          min-width: 15%;
          height: 200%;
        }
        .logoo{
            width: 300px;
          }
    
    }
    
/* image and over end */

.conrad{
    border-radius: 8px;
}

.uprad{
    border-radius: 8px;
    border-width: 10px;
    border-color: white;
    border-style: solid;
}
.navrad{
    border-radius: 7px;
}
/* footer */
.foot{
  background-color: rgb(30, 30, 117, 0.9);
}
/* footer end */
.con:hover{
  background-color:#17a2b8;
  
}
.con:hover p{
 
  color:white;
}
.con{
  background-color:#f8f9fa;
  
}
.con p{
  color:black;
}
        </style>
        <!-- style -->
    </head>
<body>

     <!-- header -->
   <div class="container-fluid bg-info p-1">
   <div class="container mt-2">
   <p style="color: white;"><b>Welcome: {{Auth::user()->name}}</b></p>
   
   </div>
   </div>
 
  <!-- header end -->
        <div class="container-fluid hero">


                <div class="container-fluid hero-overlay">
                <div class="container">
                  <div class="row">
                      <div class="col-sm-6 mt-3 text-left" >
                
                          <img src="images/logo.png" class="logoo" alt="no"/>
                
                        </div>
                      <div class="col-sm-6 mt-5 text-right">
                
                          <img src="images/help.png" class="logoo" alt="no"/>
                
                      </div>
                      
                      
                      
                      </div></div>
                      <!-- container finish -->
                      <div class="container mt-3">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
{{--                                    <h3 style="color: white; text-align: left;"><b>{{$course->c_title}}</b></h3>--}}
{{--                                    <h6 style="color: white; text-align: left;"><b>{{$course->cc}}</b></h6>--}}
{{--                                    <h6 style="color: white; text-align: left;"><b>{{$course->c_credits}}</b></h6>--}}
                                </div>
                            <div class="col-lg-3 col-md-2"></div>
                                <div class="col-lg-5 col-md-2">
                                    <div class="row">
                                     <!-- subjct -->
                             <div class="con text-center navrad pr-3 pl-3 ml-3 mt-1">
                                    <a style="text-decoration:none" href="/semester"><img src="images/book.png"class="inage mt-2" alt="no" width="40px" height="40px">
                                        <p>Subject</p></a>
        
                                    </div>
                            <!-- end subject -->
                                    <!-- home -->
                                    <div class="con text-center navrad pr-3 pl-3 mt-1 ml-3">
                                    <a style="text-decoration:none" href="/"><img src="images/home-icon.png"class="inage mt-2" alt="no" width="40px" height="40px">
                                        <p>Home</p></a>
        
                                    </div>
                                    <!-- last end -->
                                    <!-- PROFILE-->
                                    <div class="con bg-info text-center navrad pr-3 pl-3 ml-3 mt-1">
                                            <a style="text-decoration:none" href="/profile"><img src="images/profile.png"class="inage mt-2" alt="no" width="40px" height="40px">
                                                <p style="color: white;">Profile</p></a>
                
                                            </div>
                                    <!-- end PROFILE-->
                                         
                                      <!-- view -->
                                      <div class="con text-center navrad pr-3 pl-3 ml-3 mt-1">
                                            <a style="text-decoration:none" href="/ictvieww"><img src="images/vv.png"class="inage mt-2" alt="no" width="40px" height="40px">
                                                <p>View</p></a>
                
                                            </div>
                                    <!-- end view -->
        
                                      <!-- logout -->
                                      <div class="con text-center navrad pr-3 pl-3 ml-3 mt-1">
                                            <a style="text-decoration:none" href="/sofware_engineering"><img src="images/logout.png"class="inage mt-2" alt="no" width="40px" height="40px">
                                                <p>Logout</p></a>
                
                                            </div>
                                    <!-- end logout -->
                                    
                                        </div>
                                </div>
        
                                
        
                            </div>
                            <!-- row end -->
                        </div>
                      <!-- subject detail and navbar end -->
                      <!-- container start -->
                      <div class="container mt-5">

                    <div class="row">
                     <div class="col-lg-12 col-md-6 bg-info text-center uprad">

                        <h5 class="mt-2 mb-2" style="color: white;"><b>PROFILE</b></h5>

                         </div>
                         <!-- col-lg start -->
                         </div>
                         <!-- row -->
                         </div>
                         
                      <!-- conatiner end -->
                      <div class="container mt-2">

                            <div class="row">
                     <div class="col-lg-12 col-md-6 bg-light conrad">
                            <form action="/examples/actions/confirmation.php" method="post">
                                
                                <div class="form-group mt-4">
                                        <input type="text" class="form-control" value="{{ Auth::user()->name }}" readonly>
                                    </div>      
                                <div class="form-group">
                                    <input type="emal" class="form-control" value="{{ Auth::user()->email }}" readonly>
                                </div>
{{--                                <div class="form-group">--}}
{{--                                    <input type="text" class="form-control" value="123">--}}
{{--                                </div>--}}
                               
                                      
                             

                                <!-- <div class="form-group">
                                    <button type="submit" class="btn btn-info btn-block">DONE</button>
                                </div> -->
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

                     
<footer>
    <div class="container-fluid p-1 foot">
        <div class="container">
            <div class="col-lg-12 col-md-6 mt-2 text-center">
            <p style="color: white;"><b>COMSATS UNIVERSITY ISLAMMABAD.<BR>SE STUDENT HELP DESK.</b></p>
                  
            </div>
        </div>
    </div>
</footer>
</body>

</html>



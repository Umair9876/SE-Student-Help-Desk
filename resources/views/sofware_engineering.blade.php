<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/software.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>



<!-- extra -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">





 
</head>
<body>


    <!-- navbar start -->
    <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">



        
        <div class="container">
    
          <div class="logo float-left">
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
            <a href="#intro" class="scrollto"><img src="images/help.png" alt="" class="img-fluid"></a>
          </div>
          <button type="button" class="mobile-nav-toggle d-lg-none"><i class="fa fa-bars"></i></button>
          <nav class="main-nav float-right d-none d-lg-block">
            <ul>
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#whyse">Why SE</a></li>
              <li><a href="#ltech">Latest Technologies</a></li>
              
              <li><a href="#team">Team</a></li>

{{--      @if (Route::has('login'))--}}

{{--                    @if (Auth::check())--}}
{{--                       <li> <a href="{{ url('/') }}">Home</a></li>--}}
{{--                    @else--}}
{{--                      <li>  <a href="{{ url('/login') }}">Login</a></li>--}}
{{--                        <li>  <a href="{{ url('/register') }}">Register</a></li>--}}
{{--                    @endif--}}

{{--            @endif--}}
{{--                yahan se shoroh--}}
{{--                <ul class="nav navbar-nav navbar-right">--}}
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
{{--                        <li><a href="{{ route('register') }}">Register</a></li>--}}
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
{{--                </ul>--}}
{{--                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">--}}
{{--                    {{ Auth::user()->name }} <span class="caret"></span>--}}
{{--                </a>--}}
{{--                <ul class="dropdown-menu" role="menu">--}}
{{--                    <li>--}}
{{--                        <a href="{{ route('logout') }}"--}}
{{--                           onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                            Logout--}}
{{--                        </a>--}}

{{--                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                            {{ csrf_field() }}--}}
{{--                        </form>--}}
{{--                    </li>--}}
{{--                </ul>--}}
            
              
            </ul>
          </nav><!-- .main-nav -->
          
        </div>
      </header><!-- #header -->
    <!-- nav bar end -->
    <div class="video-header wrap">
           
       <div class="fullscreen-video-wrap">
        
          

           
<video autoplay muted loop id="myVideo">
    <source src="js/vedio/videoabout.mp4" type="video/mp4">
    Your browser does not support HTML5 video.
  </video>
       

       <div class="header-overlay">
           <div class="header-content">
               <h1>WELCOME TO ALL SOFTWARE ENGINEERS</h1>
               <h3>"And help  one another on goodness and piety and donot help one another in sin and aggression."</h3>
               <!-- <a  class="btn btn-success my-btn mt-4" href="welcome.html">Click Here &gt;</a> -->

               <!-- extra -->

              
  <button type="button" data-toggle="modal" class="btn btn-success my-btn" data-target="#myModal" >Sign Up</button>
     
    
  
     <!-- The Modal -->
     <div class="modal" id="myModal" data-backdrop="false">
       <div class="modal-dialog">
         <div class="modal-content">
         
           <!-- Modal Header -->
           <div class="modal-header">
           <img src="images/help.png" alt="" class="img-fluid" class="logoo">
             <button type="button" class="close" data-dismiss="modal">&times;</button>
           </div>
           
           <!-- Modal body -->
           <div class="modal-body">
            <!-- form start -->
            <form action="{{ route('register') }}" method="POST">
                {{ csrf_field() }}
             <h2 class="text-center" style="color: red;">Sign Up</h2>
{{--                @if(Session::has('serverError'))--}}
{{--                  <p class="alert alert-danger">{{Session::get('serverError')}}   </p>--}}
{{--                    @endif--}}
             <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                 <input type="text" class="form-control" placeholder="Username" required="required" name="name"
                        value="{{ old('name') }}" >
                 @if ($errors->has('name'))
                     <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                 @endif
             </div>
             <div class="form-group">
                 <input type="email" class="form-control" placeholder="Email" name="email"
                        value="{{ old('email') }}" required="required">
                 @if ($errors->has('email'))
                     <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                 @endif
             </div>
             <div class="form-group">
                 <input type="password" class="form-control" placeholder="Password" name="password" required="required">
                 @if ($errors->has('password'))
                     <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                 @endif
             </div>
                <div class="form-group">

                    <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required>
                    </div>

             <div class="form-group">
                 <button type="submit" href="/semester"  class="btn btn-primary btn-block">Sign Up</button>
             </div>
             <div class="clearfix">
                 <label class="pull-left checkbox-inline" style="color:blue;"><input type="checkbox"> Remember me</label>
                 <a href="{{ url('/login') }}" class="pull-right">LOGIN</a>
            <!-- ohoh -->
              
            <!-- end ohho -->
 
 
             </div>   </form>
             <!-- form end -->
           </div>
           
           <!-- Modal footer -->
           <div class="modal-footer">
             <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
           </div>
           
         </div>
       </div>
     </div>

               <!-- extra -->
           </div>
       </div>

</div>
       </div>
      
<!-- end of videoheader wrap -->



<!-- WHYSE start -->
<section id="whyse">
        <div class="container-fluid text-center bg-light">
            <h3 class="title"><b>WHY SOFTWARE ENGINEERING</b></h3>
                    <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <p>The most important precondition is to just love the software engineering.
                             You must have a passion, you must be eager to explore, to learn, to invent, to create. </p>
                    </div>
                    <div class="col-sm-3"></div>
                    </div>


            </div>

            <div class="container-fluid text-center bg-light ml-3">
                <div class="row">
                    <div class="col-sm-5 mt-5">
                        <p style="text-align: justify;">"If you are a gifted computer wizard from age 7, there’s no doubt you’ll
                             become a great software engineer. But if this is not the case, why should you be one
                             of those people spending all day typing at a keyboard making the machine do what you want?"</p>
                        <h3 style="color: powderblue; text-align: justify;"><b><span class="fa-stack">
                                <!-- The icon that will wrap the number -->
                                <span class="fa fa-circle-o fa-stack-2x"></span>
                                <!-- a strong element with the custom content, in this case a number -->
                                <strong class="fa-stack-1x">
                                    1    
                                </strong>
                            </span>Being Able To Work Remotely:</b></h3>

                            <!-- h3 end -->
                            <!-- p start-->
                            <p style="text-align: justify;">Remote working, even for just a few days a week, makes for a good work/life balance
                            It’s not allowed in all the environments, but remote working is a perk that’s very well suited to software development.

                            </p>
                            <!-- pfinsih -->
                            <!-- h3 start -->

                            <h3 style="color: powderblue; text-align: justify;"><b><span class="fa-stack">
                                    <!-- The icon that will wrap the number -->
                                    <span class="fa fa-circle-o fa-stack-2x"></span>
                                    <!-- a strong element with the custom content, in this case a number -->
                                    <strong class="fa-stack-1x">
                                        2    
                                    </strong>
                                </span>You will learn every day:</b></h3>
                            <!-- h3 end -->
                            <!-- p start -->
                            <p style="text-align: justify;">Every day you’ll be presented with new challenges. You’re an engineer working
                                 on potentially very complex problems.You need to know how to figure things out, and if you don’t, you need to learn it on the job.
                                </p>
                            <!-- p end -->
                    </div>
                        <!-- first side completed -->
                        <div class="col-sm-6">
                            <img src="images/cha.png" class="whysepic" width="800px" height="450px"/>
                        </div>

                </div>
            </div>
            </section>
<!-- WHYSE end -->
<!-- start latest technologies -->

<section id="ltech">
    <div class="container-fluid as">
        <h1 class="title" style="color: white;">LATEST TECHNOLOGIES</h1>
                    <div class="container">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-6 text-center">
                    <p style="color: white;">Change is the only constant on this planet. There is no industry from education to healthcare which can resist changes.
                         Every sector welcomes innovations that bring changes in the ongoing IT trends.</p>
                                </div>
                                <div class="col-sm-3"></div>

                    </div>


                <div class="container">
                    <div class="row">
                            <div class="col-sm-4 hov">
                                    <div class="con1 p-5 text-center ">
                                            <img src="images/aqq.png" width="150px" height="150px"/>
                                            <h4 style="color: white;">Artifial Inteligence</h4>
                                            <p style="color: white; text-align: justify;">AI is already significantly impacting the way customers interact with
                                                 businesses via intelligent websites and bots, and these tools are becoming increasingly commoditized
                                                 and integrated into daily work, the report noted.</p>
                                            <a href="#" type="button" style="background-color: #1a3149; color: white;
                                             width: 100px; height: 30px; text-align: center; padding-top: 5px;">Read More</a>     
                                        </div>
                                    </div>



                                    <div class="col-sm-4 hov">
                                            <div class="con1 p-5 text-center">
                                                    <img src="images/5g.png" width="150px" height="150px"/>
                                                    <h4 style="color: white;">5G NETWORK</h4>
                                                    <p style="color: white; text-align: justify;">The rise of 5G networks is increasing our ability to move,
                                                         manipulate, and analyze data across wireless platforms, according to CompTIA. As 5G rolls out more fully
                                                          in the coming years.</p>
                                                    <a href="#" type="button" style="background-color: #1a3149; color: white;
                                                     width: 100px; height: 30px; text-align: center; padding-top: 5px;">Read More</a>     
                                                </div>
                                            </div>



                                            <div class="col-sm-4 hov">
                                                    <div class="con1 p-5 text-center">
                                                            <img src="images/block.png" width="250px" height="170px"/>
                                                            <h4 style="color: white;">Blockchain</h4>
                                                            <p style="color: white; text-align: justify;">More organizations are exploring and implementing
                                                                 blockchain to solve the increased need to secure and manage transactions across the internet.
                                                                 </p>
                                                            <a href="#" type="button" style="background-color: #1a3149; color: white;
                                                             width: 100px; height: 30px; text-align: center; padding-top: 5px;">Read More</a>     
                                                        
                                                    </div>
                                                    </div>
                                                    
                                        
                            </div>
                            <br><br>
                            <!-- sm-4 finish -->
                </div>
                <!-- container -->
    </div>
<!-- container fluid -->
</section>

<!-- finish latest technologies -->




<!-- team section -->
<section id="team">
        <div class="container">
          <div class="section-header">
            <h3 style="text-align: center;" class="title">Team</h3>
            <p style="text-align: center;">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
          </div>
  
          <div class="row">
  
            <div class="col-lg-4 col-md-6 wow fadeInUp mt-5">
              <div class="member">
                <img src="images/rafay.jpg" class="img-fluid" alt="" width="500px" height="500px">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Abdul Rafay Javed</h4>
                    <span>Front-End Developer</span>
                    <div class="social">
                      <a href=""><i class="fa fa-twitter"></i></a>
                      <a href=""><i class="fa fa-facebook"></i></a>
                      <a href=""><i class="fa fa-google-plus"></i></a>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 wow fadeInUp mt-5" data-wow-delay="0.1s">
              <div class="member">
                <img src="images/umair.jpg" class="img-fluid" alt="" width="500px" height="500px">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Umair Ansar</h4>
                    <span>Back-End Developer</span>
                    <div class="social">
                      <a href=""><i class="fa fa-twitter"></i></a>
                      <a href=""><i class="fa fa-facebook"></i></a>
                      <a href=""><i class="fa fa-google-plus"></i></a>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 wow fadeInUp mt-5" data-wow-delay="0.2s">
              <div class="member">
                <img src="images/zunaira.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Zunaira Ali</h4>
                    <span>Back-End Developer</span>
                    <div class="social">
                      <a href=""><i class="fa fa-twitter"></i></a>
                      <a href=""><i class="fa fa-facebook"></i></a>
                      <a href=""><i class="fa fa-google-plus"></i></a>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
            
  
          </div>
  
        </div>
      </section><!-- #team -->
<!-- end team section -->


<!-- footer -->
<footer>
  <div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 p-2 text-center cl">
            <p class="mt-3" style="color: white;">COMSATS UNIVERSITY ISLAMABAD </p>
    </div>
  </div>
  
  </div>
</footer>
 
<!-- end footer -->
<script src="lib/mobile-nav/mobile-nav.js"></script>
<script>

$('#myModal').on('show.bs.modal', function () {
 
  $('#myModal').css("margin-top", $(window).height() / 2 - $('.modal-content').height() / 2);

});

</script>
</body>
</html>
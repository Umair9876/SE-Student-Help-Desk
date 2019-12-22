<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Semester</title>

    <!-- links -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- links -->

    <!-- css link -->
    <link rel="stylesheet" href="semesterstyle.css">
    <!-- css lik end -->


    <!-- style -->
    <style>
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
    height: 320%;
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
          height: 320%;
        }
    }
    
    @media screen and (max-width: 767px) {
        /* start of medium tablet styles */
        /* Adding a fixd/percentage min-width could ensure that the image doesn't get too small */
        .hero {
          min-width: 30%;
        
          height: 900%;
        }
        .logoo{
          width: 300px;
        }
    }
    
    @media screen and (max-width: 479px) {
        /* start of phone styles */
        /* It's possible to hide the image if the screen becomes too small */
        .hero {
          min-width: 10%;
          height: 620%;
        }
        .logoo{
          width: 300px;
        }
    
    }
    /* enddd */


    /* notice start */
    .notice{
        border-radius: 5px;
    }
    /* notice end */



    /* tam member */
#team {
    background: transparent;
    padding: 20px 0;
    
  }
  
  #team .member {
    text-align: center;
    margin-bottom: 20px;
    position: relative;
    /* border-radius: 50%; */
    border-radius: 6px;
    overflow: hidden;
  }
  
  #team .member .member-info {
    opacity: 0;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    position: absolute;
    bottom: 0;
    top: 0;
    left: 0;
    right: 0;
    transition: 0.2s;
  }
  
  #team .member .member-info-content {
    margin-top: 50px;
    transition: margin 0.2s;
  }
  
  #team .member:hover .member-info {
    background: rgba(255, 255, 255, 0.7);
    opacity: 10;
    transition: 0.4s;
  }
  
  #team .member:hover .member-info-content {
    margin-top: 0;
    transition: margin 0.4s;
  }
  
  #team .member h4 {
    font-weight: 700;
    margin-bottom: 2px;
    font-size: 18px;
    color: #fff;
  }
  
  #team .member span {
    font-style: italic;
    display: block;
    font-size: 13px;
    color: #fff;
  }
  
  #team .member .social {
    margin-top: 15px;
  }
  
  #team .member .social a {
    transition: none;
    color: #fff;
  }
  
  #team .member .social a:hover {
    color: #007bff;
  }
  
  #team .member .social i {
    font-size: 18px;
    margin: 0 2px;
  }

/* end team ,member */
/* hover on technologies */
.hov :hover{
    background-image: linear-gradient(120deg,rgb(24, 21, 56),rgb(11, 9, 41));
   

}



/* end */
/*.row{*/
/*    display: flex;*/
/*}*/

    </style>
    <!-- style -->
</head>
<body>
    <!-- header  -->
  
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
          <!-- container for notice -->
{{--        yahan par likha hai --}}



          <div class="container mt-3">
            <div class="row">
                <div class="col-sm-12 bg-info text-center p-3 notice">
                    <h4 style="color:white;"><b>NOTICE</b></h4>
                </div>
                <!-- col-sm-12 end -->
            </div>
            <!-- row end -->
          </div>
          <!-- container notice end -->

         <!-- team section -->
<section id="team">
    <div class="container">
      <!-- <div class="section-header">
        <h3 style="text-align: center;" class="title">Team</h3>
        <p style="text-align: center;">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
      </div> -->


      <div class="row">
          @foreach($semesters as $semester)
        <div class="col-lg-4 col-md-6 wow fadeInUp mt-5">
          <div class="member bg-info">
            <img src="{{$semester->pages_url}}" class="img-fluid" alt="" width="500px" height="500px">
            <h1 style="color: white;">{{$semester->title}}</h1>
            <div class="member-info">
              <div class="member-info-content">
                  <span style="display: none">{{$courses = $semester->courses}}</span>
               @foreach($courses as $course)
                <P><a href="/course/{{$course->id}}" style="color: rgba(9, 32, 56, 0.7);">
                        <b>{{$course->c_title}}</b></a></P>
                  @endforeach
{{--                <P><a href="#" style="color: rgba(9, 32, 56, 0.7);"><b>Electric Circuit Analysis 1</b></a></P>--}}
{{--                <P><a href="#" style="color: rgba(9, 32, 56, 0.7);"><b>English Comprehension and Composition</b></a></P>--}}
{{--                <P><a href="#" style="color: rgba(9, 32, 56, 0.7);"><b>Islamic Studies</b></a></P>--}}
{{--                <P><a href="#" style="color: rgba(9, 32, 56, 0.7);"><b>Pakistan Studies</b></a></P>--}}
{{--                <P><a href="#" style="color: rgba(9, 32, 56, 0.7);"><b>Introduction to Management</b></a></P>--}}
                <!-- <h2 style="text-align: center; color: rgba(9, 32, 56, 0.7);"><b>SEMESTER 1</b></h2> -->
              </div>
            </div>
          </div>
        </div>
          @endforeach
      </div>

    </div>
  </section><!-- #team -->
<!-- end team section -->



          
{{--<footer>--}}
{{--    <div class="container-fluid p-1">--}}
{{--        <div class="container">--}}
{{--            <div class="col-lg-12 col-md-6 mt-2 text-center">--}}
{{--                  <p style="color: white;"><b>Comsats University Islammabad.</b></p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</footer>--}}

</body>
</html>
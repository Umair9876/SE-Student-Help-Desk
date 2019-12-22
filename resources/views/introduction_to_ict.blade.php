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

    <!-- links of data table -->
<link rel="stylesheet" href=" https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.6/css/rowReorder.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
    <!-- end links of data table -->

    <!-- css link -->
{{--    <link rel="stylesheet" href="css/ictstyle.css">--}}
    <!-- css link end -->

    <!-- style -->
  <style>
  /* images and overlay start */
body{
    margin:0;
    padding: 0;
    left: 0;
    right: 0;
    background-image: url("/images/a.jpg");
    top: 0;
    bottom: 0;
    background-size:cover;
    /*background-position:center;*/
    width: 100%;

    position:relative;
    background-attachment: fixed;
    z-index:0;
    /*display: block;*/
    }
    .hero{


    background-size:cover;
    background-position:center;
    width: 100%;
    position:relative;
    background-attachment: fixed;
    height: 130vh;
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
          /*height: 320%;*/
        }
      
    }
    
    @media screen and (max-width: 767px) {
        /* start of medium tablet styles */
        /* Adding a fixd/percentage min-width could ensure that the image doesn't get too small */
        .hero {
          min-width: 30%;
        
          /*height: 400%;*/
        }
        .logoo{
          width: 300px;
        }
        .logoo1{
          width: 300px;
          float:left;
        }
    }
    
    @media screen and (max-width: 479px) {
        /* start of phone styles */
        /* It's possible to hide the image if the screen becomes too small */
        .hero {
          min-width: 15%;
          height: 300%;
        }
        .logoo{
          width: 300px;
        }
        .logoo1{
          width: 300px;
         
          
        }
    
    }
    
/* image and over end */

.navrad{
    border-radius: 7px;
}

/* file upload start */
.filechange{
  text-align: left;
}
/* file upload end */

/* table start */
.firstr{
padding-top: 10px;
padding-bottom: 10px;
  border-style: solid;
  border-width: 10px;
  border-radius: 5px;
  border-color: white;
}

.headtable{
 
  color: white;
}

.tablerad{
  border-radius: 7px;
}
/* table end */
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
.logoo1{
  float:right;
}
      #footer
      {
          background-color: #1a3149;
      }

 
  </style>
    <!-- style -->
</head>
<body>
   <!-- header -->
   <div class="container-fluid bg-info p-1">
   <div class="container mt-1">
   <p style="color: white;"><b>Welcome {{ Auth::user()->name }}</b></p>
   
   </div>
   </div>
 
  <!-- header end -->
    <div class="container-fluid hero">
  
 
        <div class="container-fluid hero-overlay">
        <div class="container">
          <div class="row">
              <div class="col-sm-6 mt-3 text-left" >
        
                  <img src="/images/logo.png" class="logoo" alt="no"/>

                </div>
              <div class="col-sm-6 mt-5">
        
                  <img src="/images/help.png" class="logoo1" alt="no"/>
        
              </div>
              
              
              
              </div></div>
              <!-- container finish -->

            <!-- subject detail start -->
              <div class="container mt-3">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <h3 style="color: white; text-align: left;"><b>{{$course->c_title}}</b></h3>
                            <h6 style="color: white; text-align: left;"><b>COURSE NO: {{$course->cc}}</b></h6>
                            <h6 style="color: white; text-align: left;"><b>CREDITS HOURS: {{$course->c_credits}}</b></h6>
                        </div>
                    <div class="col-lg-2 col-md-1"></div>
                        <div class="col-lg-6 col-md-3 ">
                            <div class="row">
                            
                            <!-- home start -->
                            <div class="con bg-info text-center navrad pr-3 pl-3 mt-1 ml-3">
                            <a style="text-decoration:none" href="/"><img src="/images/home-icon.png" class="inage mt-2" alt="no" width="40px" height="40px">
                                <p style="color: white;">Home</p></a>

                            </div>

                            <!-- last end -->
                             <!-- subjct -->
                             <div class="con text-center navrad pr-3 pl-3 ml-3 mt-1">
                                    <a style="text-decoration:none" href="/semester"><img src="/images/book.png"class="inage mt-2" alt="no" width="40px" height="40px">
                                        <p>Subject</p></a>
        
                                    </div>
                            <!-- end subject -->
                            <!-- insertion -->
                            <div class="con text-center navrad pr-3 pl-3 ml-3 mt-1">
                                    <a style="text-decoration:none" href="#" data-toggle="modal" data-target="#myModal"><img src="/images/insert.png"class="inage mt-2" alt="no" width="40px" height="40px">
                                        <p >Insert</p></a>


                                        <!-- modal start -->
                                        
     
    
  
                                        <!-- The Modal -->
                                        <div class="modal" id="myModal" data-backdrop="false">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                            
                                              <!-- Modal Header -->
                                              <div class="modal-header">
                                                <h4 class="modal-title"><img class="logoo" src="/images/help.png" alt=""></h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              </div>
                                              
                                              <!-- Modal body -->
                                              <div class="modal-body">
                                               <!-- form start -->
{{--                                                  onsubmit="getForm(this)"--}}
{{--                                                  {{route('course.store')}}--}}
                                                  <form  action="/introduction_to_ict" enctype="multipart/form-data" method="POST">
                                                   {{csrf_field()}}
                                                <h2 class="text-center">Share the Notes</h2>
                                                      <div class="form-group">
                                                          <input type="hidden" class="form-control" name="course_id"  value="{{$course->id}}">
                                                      </div>
                                                      <div class="form-group">
                                                        <input type="text" class="form-control" name="sub_name" placeholder="Subject name" >
                                                    </div>      
                                               
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="top_name" placeholder="Topic Name" required="required">
                                                </div>
                                                <div class="form-group">
                                                       
                                                    <textarea class="form-control" rows="3" id="comment" name="des_topic" placeholder="Description of the Topic"></textarea>
                                                      </div>
                                                      <div class="form-group">
                                                        <input type="text" class="form-control" name="goo_link" placeholder="google drive link" required="required">
                                                    </div>
                                                   <!-- file choosen -->
                                                   <div class="custom-file mb-3 filechange">
                                                      <input type="file"  name="saqib">
                                                     </div>
                                                   <!-- file choosen end -->

                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-info btn-block">DONE</button>
                                                </div>
                                                  </form>
                                                <!-- form end -->
                                              </div>
                                              
                                              <!-- Modal footer -->
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                              </div>
                                              
                                            </div>
                                          </div>
                                        </div>
                                        <!-- modal end -->
                                    </div>
                            <!-- end insertion -->

                              <!-- view -->
                              <div class="con text-center navrad pr-3 pl-3 ml-3 mt-1">
                                    <a style="text-decoration:none" href="/ictvieww"><img src="/images/vv.png"class="inage mt-2" alt="no" width="40px" height="40px">
                                        <p> View</p></a>
        
                                    </div>
                            <!-- end view -->
                             <!-- PROFILE-->
                             <div class="con text-center navrad pr-3 pl-3 ml-3 mt-1">
                              <a style="text-decoration:none" href="/profile"><img src="/images/profile.png"class="inage mt-2" alt="no" width="40px" height="40px">
                                  <p>Profile</p></a>
  
                              </div>
                      <!-- end PROFILE-->

                              <!-- logout -->
                              <div class="con text-center navrad pr-3 pl-3 ml-3 mt-1">
                                    <a style="text-decoration:none" href=""><img src="/images/logout.png" action="{{ route('logout') }}" class="inage mt-2" alt="no" width="40px" height="40px">
                                        <p>Logout</p></a>
{{--                                  {{Auth::logout()}}--}}
                                    </div>
                            <!-- end logout -->

                        </div>
                        </div>

                        

                    </div>
                    <!-- row end -->
                </div>
              <!-- subject detail and navbar end -->


              <!-- table pagination start -->
              <div class="container mb-5 mt-3 bg-light tablerad table-responsive">

                <table id="example" class="display nowrap" style="width:100%;">
                    <thead class="text-center">
                      <!-- some upper change -->

                      <!-- end upper change -->
                      <tr><h5 class="text-center bg-info firstr" style="color: white;"><b>Helping Resources</b></h5></tr>
                      <tr class=" bg-light headtable" >
                      
                        <th style="background-color: rgb(20, 16, 51);">Topic Name</th>
                        <th style="background-color: rgb(20, 16, 51);">Description</th>
                        <th style="background-color: rgb(20, 16, 51);">Link</th>
                        <th style="background-color: rgb(20, 16, 51);">Action</th>
                      </tr>
                    </thead>

                    <tbody class="text-center">

                        <tr class=" bg-light">

                        @foreach($pages as $page)
{{--                                <td>{{$page->subject_name}}</td> <br>--}}
                                <td>{{$page->topic_name}}</td>
                                <td>{{$page->des_topic}}</td>
                                <td>{{$page->g_d_link}}</td>
{{--                                <td>{{$page->file_url}}</td> <br>--}}






                                <td><a href="{{route('downloadfile',$page->id)}}" style="text-decoration:none;">
                            <img src="/images/download.png"  alt="no" width="25px" height="25px"><p style="color: black;"></p>
                          </a></td>
                        </tr>
                    @endforeach
                        

</tbody>
                  </table>

              </div>
              <!-- table pagination end -->

              </div>
              <!-- hero-overlay fiish -->
              </div>
              <!-- hero finish -->

<!-- script link -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/rowreorder/1.2.6/js/dataTables.rowReorder.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script>
$(document).ready(function() {
    var table = $('#example').DataTable( {
    
      "iDisplayLength": 5,
      "lengthMenu": [[3, 5], [3, 5]],
        rowReorder: {
            selector: 'td:nth-child(2)'
        },
        responsive: true
    } );
} );

</script>

<!-- script link end -->

<footer id="footer">
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


{{--    <script>--}}
{{--        function getForm(event,$el)--}}
{{--        {--}}
{{--            event.preventDefault()--}}
{{--            console.log($el)--}}
{{--        }--}}
{{--    </script>--}}
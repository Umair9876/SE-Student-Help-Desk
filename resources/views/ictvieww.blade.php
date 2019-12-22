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
            <link rel="stylesheet" href="ictview.css">
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
    height: 170%;
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

          height: 700%;
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
          height: 250%;
        }
        .logoo{
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
            </style>
            <!-- style -->
        </head>
        <body>
          <!-- header -->
   <div class="container-fluid bg-info p-1">
   <div class="container mt-2">
   <p style="color: white;"><b>Welcome: Abdul Rafay Javed</b></p>

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

                    <!-- subject detail start -->
                      <div class="container mt-3">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
{{--                                    <h3 style="color: white; text-align: left;"><b>Introduction to ICT</b></h3>--}}
{{--                                    <h6 style="color: white; text-align: left;"><b>COURSE NO: CSC-101</b></h6>--}}
{{--                                    <h6 style="color: white; text-align: left;"><b>CREDITS HOURS: 3</b></h6>--}}
                                </div>
                            <div class="col-lg-3 col-md-1"></div>
                                <div class="col-lg-5 col-md-2 ">
                                    <div class="row">
                                     <!-- subjct -->
                             <div class="con text-center navrad pr-3 pl-3 ml-3 mt-1">
                                    <a style="text-decoration:none" href="/semester"><img src="images/book.png"class="inage mt-2" alt="no" width="40px" height="40px">
                                        <p>Subject</p></a>

                                    </div>
                            <!-- end subject -->
                                    <!-- home -->
                                    <div class="con text-center navrad pr-3 pl-3 mt-1 ml-3">
                                    <a style="text-decoration:none" href="/introduction_to_ict"><img src="images/home-icon.png"class="inage mt-2" alt="no" width="40px" height="40px">
                                        <p>Home</p></a>

                                    </div>
                                    <!-- last end -->



                                      <!-- view -->
                                      <div class="con bg-info text-center navrad pr-3 pl-3 ml-3 mt-1">
                                            <a style="text-decoration:none" href="#"><img src="images/vv.png"class="inage mt-2" alt="no" width="40px" height="40px">
                                                <p style="color: white;">View</p></a>

                                            </div>
                                    <!-- end view -->

                                           <!-- PROFILE-->
                             <div class="con text-center navrad pr-3 pl-3 ml-3 mt-1">
                              <a style="text-decoration:none" href="/profile"><img src="images/profile.png"class="inage mt-2" alt="no" width="40px" height="40px">
                                  <p>Profile</p></a>

                              </div>
                      <!-- end PROFILE-->

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


                      <!-- table pagination start -->
                      <div class="container mb-5 mt-3 bg-light tablerad table-responsive">

                        <table id="example" class="display nowrap" style="width:100%;">
                            <thead class="text-center">
                              <!-- some upper change -->

                              <!-- end upper change -->
                              <tr><h5 class="text-center bg-info firstr" style="color: white;"><b>Edit Your Resourses</b></h5></tr>
                              <tr class=" bg-light headtable" >

                                  <th style="background-color: rgb(20, 16, 51);">#</th>
{{--                                <th style="...">  Id  </th>--}}
                                <th style="background-color: rgb(20, 16, 51);">Topic Name</th>

                                <th style="background-color: rgb(20, 16, 51);">Update</th>
                                <th style="background-color: rgb(20, 16, 51);">Delete</th>
                              </tr>

                            </thead>

                            <tbody class="text-center">
                                <tr class=" bg-light">
                                    @if(Auth()->user() )
                                    @php
                                    $user = auth()->user();
                                    @endphp

                                    @if($user->pa)
                                        @foreach($user->pa as $page )

                                                <td>{{$page->id}}</td>
                                                <td>{{$page->topic_name}}</td>
                                                <td><a href="{{url('/update/view/'.$page->id)}}">
                                                        <img src="images/update.jpg" alt="no" width="25px" height="25px"></a></td>

{{--                                                <td><a href="{{url('delete',$page->id)}}">--}}

{{--                                                        <img src="images/Delete.png" alt="no" width="25px" height="25px"></a></td>--}}
{{--                                                    <form action="{{url('/de', $page->id) }}">--}}
{{--                                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>--}}
{{--                                                    </form>--}}
                                                <td><a href="{{url('/del/'.$page->id)}}" value="{{$page->id}}" name="del">delete</a></td>


{{--{{$page->topic_name}}--}}



{{--     <!-- update -->--}}
{{--        <td><a href="/update">--}}
{{--         <img src="images/update.jpg" alt="no" width="25px" height="25px"></a></td>--}}

       <!-- update end -->

         <!-- delte start -->
{{--                                        <td><a value ="" chref="/ictdelete">--}}
{{--           <img src="images/Delete.png" alt="no" width="25px" height="25px"></a></td>--}}
            </tr>
              <!-- delete end -->
                            @endforeach
                            @endif


                            @endif





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

              "iDisplayLength": 7,
              "lengthMenu": [[5,7, 9,11], [5,7, 9,11]],
                rowReorder: {
                    selector: 'td:nth-child(2)'
                },
                responsive: true
            } );
        } );


        $('#myModal').on('show.bs.modal', function () {

 $('#myModal').css("margin-top", $(window).height() / 2 - $('.modal-content').height() / 2);

});

$('#myModall').on('show.bs.modal', function () {

 $('#myModall').css("margin-top", $(window).height() / 2 - $('.modal-content').height() / 2);

});

        </script>

<script src="lib/mobile-nav/mobile-nav.js"></script>


        <!-- script link end -->


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
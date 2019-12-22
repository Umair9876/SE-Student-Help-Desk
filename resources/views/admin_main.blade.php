<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Subject</title>
    <!-- bootstrap cdn Css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <!-- bootrap cdn css end -->
    <!--bootrap java script cdn -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>

    <!-- javascript end -->



    <!-- links of data table -->
    <link rel="stylesheet" href=" https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.6/css/rowReorder.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
    <!-- end links of data table -->
    <!-- stylesheet -->
    <link rel="stylesheet" href="css/userdatacss.css">
    <!-- end stylesheet -->
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
                    <img src="images/logo.png" alt="no">
                </div>

                <div class="col-md-6 mt-4 text-right">
                    <img src="images/help.png" alt="">
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
                <div class="col-md-9 mt-5 stylefonta">
                    <h3 style="color: white; text-align: left;"><b>Edit The Uploaded Resources</b></h3>

                </div>
                <!-- subject end -->
                <div class="col-md-3 mb-3">
                    <div class="row">
                        <!-- home start -->
                        <div class="conn text-center navrad pr-3 pl-3 mt-1 ml-3 mt-3">

                            <a href="/page_des"><img src="images/home-icon.png" class="inage mt-2" alt="no" width="40px" height="40px">
                                <p style="color: white;">Home</p></a>
                        </div>
                        <!-- home end -->



                        <!-- user data show -->
                        <div class="conn text-center navrad pr-3 pl-3 mt-1 ml-3 mt-3">

                            <a href="/rauser"><img src="images/vv.png" class="inage mt-2" alt="no" width="40px" height="40px">
                                <p style="color: white;">Users</p></a>
                        </div>
                        <!-- user data end -->


                        <!-- logout start -->
                        <div class="conn text-center navrad pr-3 pl-3 ml-3 mt-1 ml-3 mt-3">
                            <a href="/sofware_engineering"><img src="images/logout.png"class="inage mt-2" alt="no" width="40px" height="40px">
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


<div class="section5" >

    <!-- table pagination start -->
    <div class="container mb-5 mt-3 bg-light tablerad table-responsive ">

        <table id="example" class="display nowrap" style="width:100%;">
            <thead>
            <!-- some upper change -->

            <!-- end upper change -->
            <tr><h5 class="text-center bg-info firstr" style="color: white;"><b>Edit Your Resourses</b></h5></tr>
            <tr class="text-center bg-light headtable" >
                <th style="background-color: rgb(20, 16, 51);">#</th>
                <th style="background-color: rgb(20, 16, 51);">Subject Name</th>
                <th style="background-color: rgb(20, 16, 51);">Topic Name</th>

                <th style="background-color: rgb(20, 16, 51);">Update</th>
                <th style="background-color: rgb(20, 16, 51);">Delete</th>
            </tr>
            </thead>

            <tbody>
            @foreach($pages as$page)
                <tr class="text-center bg-light">
                    <td>{{$page->id}}</td>
                    <td>{{$page->subject_name}}</td>
                    <td>{{$page->topic_name}}</td>

                    <!-- update -->
                    <td>

                        <a href="{{'/upd//'.$page->id}}">
                            <img src="images/update.jpg" alt="no" width="25px" height="25px"></a>




                    </td>

                    <!-- update end -->

                    <!-- delte start -->
                    <td><a href="{{'/deltopic/'.$page->id}}">
                            <img src="images/Delete.png" alt="no" width="25px" height="25px"></a>


                    </td>
                </tr>
                <!-- delete end -->

@endforeach







            </tbody>
            <tfoot>
            <tr class="text-center bg-light headtable" >
                <th style="background-color: rgb(20, 16, 51);">#</th>
                <th style="background-color: rgb(20, 16, 51);">Teacher Name</th>
                <th style="background-color: rgb(20, 16, 51);">Topic Name</th>

                <th style="background-color: rgb(20, 16, 51);">Update</th>
                <th style="background-color: rgb(20, 16, 51);">Delete</th>
            </tr>

            </tfoot>
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
            "lengthMenu": [[3, 5 , 7], [3, 5, 7]],
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
</div>



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
<!-- section3 end -->
</body>
</html>
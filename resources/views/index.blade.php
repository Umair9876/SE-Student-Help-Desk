<html lang="en" dir="ltr">
<head>

    <meta charset="utf-8">
    <title>CU Software Enginnering Course Catalogue</title>
    <link rel="stylesheet" href="css/stylee.css">
</head>


<body>

<div class="preload" id="preload">

<div class="box" >

</div>

<div class="box1"></div>


</div>



<script>
(function()
{
var preloader = document.getElementById("preload");
var loading =0;

var id = setInterval(frame, 64);
function frame()
{
    if(loading==100)
    {
        clearInterval(id);
        window.open("/sofware_engineering","_self");
    }

    else
    {
        loading =loading+1;

        if(loading==90)
        {
            preloader.style.anuimation = "fadeout 1s ease";
        }
    }
    
}



})();
</script>

</body>





</html>
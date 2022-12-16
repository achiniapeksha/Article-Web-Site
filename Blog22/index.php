<?php include('query.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blog</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet"> 

</head>
<body>
<!--Upper Navigation pane-->
<nav class="navbar justify-content-center fixed-top navbar-light bg-light">

    <div class="container ">
        <a class="navbar-brand">Wata Pita Opa Dupa</a>
        <form class="input-group">
            <input class="form-control me-2" id="searchWord" type="search" placeholder="Search" aria-label="Search">
            <!--<button class="btn btn-outline-success" id="search" type="submit">Search</button>-->
        </form>
    </div>

    <!-- Lower Navigation pane-->
    <ul id="navPane" class="nav navbar-light">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>

        <!--this category list is getting by function in query.php-->
        <?php getCats(); ?>
  
        <li class="nav-item">
            <a id="contacts" class="nav-link" href="#">Contacts</a>
        </li>
        <li class="nav-item">
            <a id="feedbacks" class="nav-link" href="#">Feedbacks</a>
        </li>
    </ul>
</nav>


<!--seperated container.
this has a col-9 and col-3 -->

<div class="container ">
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />

      <!--container begin here-->  
    <div class="row">
        
            
        <div class="col-lg-9">
        
            <!--Main cards. this is generating with-->
            <div id="mainData" class="row row-cols-1 row-cols-md-2 g-4">
            </div>

        </div>

        <div class="col-lg-3">
            <h6>Recents</h6>
            <div id="recentData" class="row row-cols-1 row-cols-md-1 g-1">

            </div>
            

        </div>
    </div>

    <div id="readMore" >

            </div>


</div>



<?php 
include('footer.php');
?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!--
<script>
    $('#navPane').on('click','.cat', function(){
  var categoryId = $(this).data('id');
        $.ajax({
        url: "http://localhost/Blog2/admin/cate2.php?categoryID="+categoryId,
        method : "GET",
        dataType: 'JSON',
        cache: false,
        success: function (response){
          console.log(response);

         //response.forEach(function(row){
            $('#mainData').html('<p>'+response.postId+'</p>');
            $('#mainData').append('<p>'+response.title+'</p>');
            //$('#mainData').html('<p>'+response.postedDateTime+'</p>');
            
         //});

               /* '<div class="col">'
                '<div class="card h-100">'
                '<img src="'+ response.image1 +'" class="card-img-top" alt="...">'
                '<div class="card-body">'
                '<h5 class="card-title" id="title"> '+ response.title + '</h5>'
                '<p class="card-text" id="description">' + response.mainDescription +'</p>'
                '<a href="readMore.php?postID=' + response.postId + '" class="btn btn-outline-success">Read More</a>'
                '</div>'
                '<div class="card-footer">'
                '<small class="text-muted">"+ days+" Days "+hours+" Hours </small>'
                '</div>'
                '</div>'
                '</div>'

            */
        },
     
        error: function(response){
          
        }
      });
    });
</script>
-->

<script>
    $('#navPane').on('click','.cat', function(){
  var categoryId = $(this).data('id');
  console.log(categoryId);
        $.ajax({
        url: "http://localhost/Blog2/admin/cate2.php",
        method : "GET",
        data:{categoryID:categoryId},
        dataType:"text",
        success: function (data){
            $('#mainData').html(data);

         //response.forEach(function(row){
           // $('#mainData').html('<p>'+response.postId+'</p>');
           // $('#mainData').append('<p>'+response.title+'</p>');
            //$('#mainData').html('<p>'+response.postedDateTime+'</p>');
            
         //});

               /* '<div class="col">'
                '<div class="card h-100">'
                '<img src="'+ response.image1 +'" class="card-img-top" alt="...">'
                '<div class="card-body">'
                '<h5 class="card-title" id="title"> '+ response.title + '</h5>'
                '<p class="card-text" id="description">' + response.mainDescription +'</p>'
                '<a href="readMore.php?postID=' + response.postId + '" class="btn btn-outline-success">Read More</a>'
                '</div>'
                '<div class="card-footer">'
                '<small class="text-muted">"+ days+" Days "+hours+" Hours </small>'
                '</div>'
                '</div>'
                '</div>'

            */
        },
     
        error: function(response){
          
        }
      });
    });
</script>


<script>
    $('#mainData').on('click','.read', function(){
  var postId = $(this).data('id');
  console.log(postId);
        $.ajax({
        url: "http://localhost/Blog2/readMore.php",
        method : "GET",
        data:{postID:postId},
        dataType:"text",
        success: function (data){
            //console.log(postId);
            $('#mainData').html(data);
            //$('#mainData').html('<p>heloooo</p>');



              },
     
        error: function(response){
          
        }
      });
    });
</script>


<!--javascript code for navePane contacts and feedbacks -->
<script>
  let contacts = document.querySelector('#contacts');
  let mainData = document.querySelector('#mainData');
  let feedbacks = document.querySelector('#feedbacks');


  contacts.addEventListener('click',() => {
    mainData.innerHTML='<p>Your can contacts us on facebook, youtube, instragram.</p>';
  });

  feedbacks.addEventListener('click',() => {
    mainData.innerHTML='<p>fjdfd</p>';
  });
</script>


<!--ajax code for search box-->
<script>
$(document).ready(function(){
    $('#searchWord').keyup(function(){
        var txt = $(this).val();
        if(txt != ''){
            $.ajax({
                url:"querySearch.php",
                method:"get",
                data:{search:txt},
                dataType:"text",
                success:function(data){
                    $('#mainData').html(data);
                }
            });
        }
        else{
            $('#mainData').html('');
            $.ajax({
                url:"querySearch.php",
                method:"get",
                data:{search:txt},
                dataType:"text",
                success:function(data){
                    $('#mainData').html(data);
                }
            });
        }
    });
});
</script>

<!--ajax code for mainData-->
<script>
    var ajax = new XMLHttpRequest();
    var method = "GET";
    var url= "query2.php";
    var asynchronous = true;

    // ajax request
    ajax.open(method,url,asynchronous);
    ajax.send();

    //reciving data for mainData
    ajax.onreadystatechange = function(){
        if(this.readyState ==4 && this.status == 200){
            //converting json to array
            var data = JSON.parse(this.responseText);
            console.log(data); //for debug

            var html = "";
            for(var a=0; a<data.length; a++){
                var postID = data[a].postId;
                var title = data[a].title;
                var mainDescription = data[a].mainDescription;
                var subDescription = data[a].subDescription;
                var image1 = data[a].image1;
                var postedDateTime	= data[a].postedDateTime;
                var posted = new Date(postedDateTime);
                

                //appending at html
                html += "<div class='col'>";
                html += "<div class='card h-100'>";
                html += "<img src="+ image1 +" class='card-img-top' alt='...'>";
                html += "<div class='card-body'>";
                html += "<h5 class='card-title' id='title'>" + title + "</h5>";
                html += "<p class='card-text' id='description'>" + mainDescription +"</p>";
                html += "<a href='readMore.php?postID=" + postID + "' class='btn btn-outline-success'>Read More</a>";
                html += "</div>";
                html += "<div class='card-footer'>";
                html += "<small class='text-muted'>"+ posted +"</small>";
                html += "</div>";
                html += "</div>";
                html += "</div>";

            }
            document.getElementById("mainData").innerHTML = html;
        }
    }



    
</script>


<!--ajax code for recentData-->
<script>
var ajax = new XMLHttpRequest();
    var method = "GET";
    var url= "queryRecentData.php";
    var asynchronous = true;

    // ajax request
    ajax.open(method,url,asynchronous);
    ajax.send();
    //reciving data for recentData
    ajax.onreadystatechange = function(){
        if(this.readyState ==4 && this.status == 200){
            //converting json to array
            var recentData = JSON.parse(this.responseText);
            console.log(recentData); //for debug

            var html = "";
            for(var a=0; a<recentData.length; a++){
                var postID = recentData[a].postId;
                var title = recentData[a].title;
                var mainDescription = recentData[a].mainDescription;
                var subDescription = recentData[a].subDescription;
                var image1 = recentData[a].image1;
                var postedDateTime	= recentData[a].postedDateTime;
                var posted = new Date(postedDateTime);
                var now = new Date().getTime();
                var dif = posted-now;
                var days = Math.floor(dif/(1000*60*60*24));
                var hours = Math.floor((dif%(1000*60*60*24))/(1000*60*60));


                //appending at html
                html += "<a href='readMore.php?postID=" + postID + "' class='btn'>";
                
                html += "<div class='col'>";
                html += "<div class='card h-100'>";
                html += "<div class='card-footer'>";
                html += "<small class='text-muted'>"+ posted+"</small>";
                html += "</div>";
                html += "<img src=" + image1 +" class='card-img-top' alt='...'>";
                html += "<div class='card-body'>";
                html += "<h5 class='card-title' id='title'>" + title + "</h5>";
                html += "</div>";               
                html += "</div>";
                html += "</div>";
                html += "</a>";
                

            }
            document.getElementById("recentData").innerHTML = html;
        }
    }
</script>




</body>
</html> 
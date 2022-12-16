<?php include('server.php'); 

if(empty($_SESSION['username'])){
  header('location: login.php');
}?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet"> 
    
  </head>
  <body>
    <!--Upper Navigation pane-->
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        
        <div class="d-flex">
          <?php if (isset($_SESSION['success'])): ?>
      
          <h3 style="color:white;"><?php echo $_SESSION['success']; unset($_SESSION['success']); ?></h3>
        
      <?php endif ?>

      <?php if (isset($_SESSION["username"])): ?>
        <p style="color:white;"><strong><?php echo $_SESSION['username']; ?> <pre>  </pre> </strong><a href="index.php?logout='1'" style="color:red;">Logout</a></p>
        </div>
      <?php endif ?>
        </div>
        
        
      </div>
    </nav>
    
    <br>
    
    
    <!--seperated container.
    this has a col-9 and col-3 -->
    
    <div class="container-fluid">
      <div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <button class="nav-link active" id="v-pills-dashboard-tab" data-bs-toggle="pill" data-bs-target="#v-pills-dashboard" type="button" role="tab" aria-controls="v-pills-dashboard" aria-selected="true">Dashboard</button>
          <button class="nav-link" id="v-pills-allPost-tab" data-bs-toggle="pill" data-bs-target="#v-pills-allPost" type="button" role="tab" aria-controls="v-pills-allPost" aria-selected="false">All Posts</button>
          <button class="nav-link" id="v-pills-editProfile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-editProfile" type="button" role="tab" aria-controls="v-pills-editProfile" aria-selected="false">Edit Profile</button>
          <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button>
        </div>
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-dashboard" role="tabpanel" aria-labelledby="v-pills-dashboard-tab">...</div>
          <div class="tab-pane fade" id="v-pills-allPost" role="tabpanel" aria-labelledby="v-pills-allPost-tab">
            <div class="input-group mb-3">
              <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Category</button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
              </ul>
              <input type="text" class="form-control" aria-label="Text input with dropdown button">
            </div>
            
            
            
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              New Post
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-xl">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Post a new One</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                <form id="insertNewPost">
                  <div class="row mb-3">
                    <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputTitle" name="title" required>
                    </div>
                  </div>
                  
                  <div class="row mb-3">
                    <label for="mainDescription" class="col-sm-2 form-label">Main Description</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" id="mainDescription" name="mainDescription" rows="5"></textarea>
                    </div>
                  </div>
                  
                  <div class="row mb-3">
                    <label for="subDescription" class="col-sm-2 form-label">Sub Description</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" id="subDescription" name="subDescription" rows="5"></textarea>
                    </div>
                  </div>
                  <label for="">You can add 4 images. Atleast one you have to choose.</label>
                  <div class="row mb-3">
                    <label for="image1" class=" col-sm-2 form-label">Image 01</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="file" name="image1" id="image1" required>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="image2" class="col-sm-2 form-label">Image 02</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="file" id="image2" name="image2">
                    </div>
                  </div>
                  
                  <div class="row mb-3">
                    <label for="image3" class="col-sm-2 form-label">Image 03</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="file" id="image3" name="image3">
                    </div>
                  </div>
                  
                  <div class="row mb-3">
                    <label for="formFile" class="col-sm-2 form-label">Image 04 </label>
                    <div class="col-sm-10">
                      <input class="form-control" type="file" id="formFile" name="image4">
                    </div>
                  </div>
                  
                  <div class="row mb-3">
                    <label for="category" class="col-sm-2 form-label">Category</label>
                    <div class="col-sm-10">
                      <input class="form-control" list="categoryList" id="category" name="categoryId" placeholder="Choose the category...">
                      <datalist id="categoryList">
                        
                        </datalist>
                      </div>
                  </div>
                  
                  
                  
              </div>
              <div class="modal-footer">
                
                
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Post</button>
              </form>
              
            </div>
          </div>
        </div>
      </div>
      
      
      
      <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Posted DateTime</th>
            <th scope="col">Status</th>
            <th scope="col">image1</th>
            <th scope="col">image2</th>
            <th scope="col">image3</th>
            <th scope="col">image4</th>
            <th scope="col">Category</th>
            <th scope="col">Author</th>
            <th scope="col">Action</th>
            
            
          </tr>
        </thead>
        <tbody style="color:black;" id="allPost">
            
        </tbody>
      </table>
      <label for="adminName">admin name</label>
      
      
    </div>
    <div class="tab-pane fade" id="v-pills-editProfile" role="tabpanel" aria-labelledby="v-pills-editProfile-tab">
      <h4>Edit Your Profile</h4>
      <div class="row">
        <div class="col-lg-6">
          You have posted 16 posts.
          
        </div>
        <div class="col-lg-6">
          <h5>Change your password</h5>
            <form>
            <div class="row mb-3">
              <label for="inputPassword" class="col-sm-2 col-form-label">Enter New Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword">
              </div>
            </div>
            <div class="row mb-3">
              <label for="confirmPassword" class="col-sm-2 col-form-label">Confirm Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="confirmPassword">
              </div>
            </div>
            
            
            <button type="submit" class="btn btn-primary">Update Password</button>
          </form>
          
        </div>
        
      </div>
      
      
    </div>
    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
      <h4>Settings</h4>
      <div class="row">
        <h5>Add a new admin user</h5>
        
        <form>
          <div class="row mb-3">
            <label for="inputPassword" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="adminName">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputPassword" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="confirmPassword">
            </div>
          </div>
          <div class="row mb-3">
            <label for="confirmPassword" class="col-sm-2 col-form-label">Confirm Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="confirmPassword">
            </div>
          </div>
          
          
          <button type="submit" class="btn btn-primary">Create</button>
        </form>
      </div>
      
      
    </div>
  </div>
</div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <script>

$('#insertNewPost').on("submit",function(){
  $.ajax({
    url: "http://localhost/Blog2/admin/post.php",
    method : "POST",
    dataType : "JSON",
    data: $('#insertNewPost').serialize(),
    success: function (response){
          console.log(response);
    } 
  });
});


$.ajax({
  url: "http://localhost/Blog2/admin/category.php",
        method : "GET",
        dataType: 'JSON',
        cache: false,
        success: function (response){
          console.log(response);

          response.forEach(function(row){
            $('#categoryList').append('<option value="'+row.categoryId+'">'+row.categoryName+'</option> ');
          });
        },
     
        error: function(response){
          
        }
      });


      $.ajax({
        url: "http://localhost/Blog2/admin/post.php",
        method : "GET",
        dataType: 'JSON',
        cache: false,
        success: function (response){
          console.log(response);

          response.forEach(function(row){
            $('#allPost').append('<tr>');
            $('#allPost').append('<th scope="row">'+row.postId+'</th>');
            $('#allPost').append('<td>'+row.title+'</td>');
            $('#allPost').append('<td>'+row.postedDateTime+'</td>');
            $('#allPost').append('<td>'+row.status+'</td>');
            $('#allPost').append('<td><img src="../'+row.image1+'" height="100" width="150"</td>');
            $('#allPost').append('<td><img src="../'+row.image2+'" height="100" width="150"</td>');
            $('#allPost').append('<td><img src="../'+row.image3+'" height="100" width="150"</td>');
            $('#allPost').append('<td><img src="../'+row.image4+'" height="100" width="150"</td>');
            $('#allPost').append('<td>'+row.categoryId+'</td>');
            $('#allPost').append('<td>'+row.adminId+'</td>');
            $('#allPost').append('<td><div class="btn-group">');
            $('#allPost').append('<a href="#" data-id="'+row.postId+'" data-toggle="modal" data-target="#staticBackdrop1" class="view btn btn-primary active" aria-current="page">View</a>');
            $('#allPost').append('<button data-id='+row.postId+' class="edit btn btn-primary">Edit</button>');
            $('#allPost').append('<a href="#" class="btn btn-primary">Delete</a> ');               
            $('#allPost').append('</div></td><br><br>');
            $('#allPost').append('</tr>');
          });
        },
     
        error: function(response){
          
        }
      });


$('#allPost').on('click','.view', function(){
  var postId = $(this).data('id');
  //console.log(postId);
      $.ajax({
        url: "http://localhost/Blog2/admin/post.php?postID="+postId,
        method : "GET",
        dataType: 'JSON',
        cache: false,
        success: function (response){
          console.log(response);

         //$.each(response,function(row){
            $('#viewPost').html('<tr>');
            $('#viewPost').append('<th scope="row">'+response.postId+'</th>');
            $('#viewPost').append('<td>'+response.title+'</td>');
            $('#viewPost').append('<td>'+response.mainDescription+'</td>');
            $('#viewPost').append('<td>'+response.subDescription+'</td>');
            $('#viewPost').append('<td>'+response.postedDateTime+'</td>');
            $('#viewPost').append('<td>'+response.status+'</td>');
            $('#viewPost').append('<td>'+response.image1+'</td>');
            $('#viewPost').append('<td>'+response.image2+'</td>');
            $('#viewPost').append('<td>'+response.image3+'</td>');
            $('#viewPost').append('<td>'+response.image4+'</td>');
            $('#viewPost').append('<td>'+response.categoryId+'</td>');
            $('#viewPost').append('<td>'+response.adminId+'</td>');
            $('#viewPost').append('</tr>');
          //});
        },
     
        error: function(response){
          
        }
      });
    });
      

    </script>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop1" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="viewPost">
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>
      </div>
    </div>
  </div>
  
  
</body>
</html> 



  
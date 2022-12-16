<?php
    require 'db.php';

    /*if(isset($_GET["searchWord"])){
        $serch = $_GET["searchWord"];
        $sql = 'SELECT * FROM post WHERE title like '%$serch%'';
        $result = mysqli_query($con,$sql);
        

        while($row = mysqli_fetch_array($result)){
            $data["title"]=$row["title"];
            $data["mainDesc"]=$row["mainDescription"];
            $data["subDesc"]=$row["subDescription"];
        }

        echo json_encode($data);
    
    }*/

   



    function getCats(){
        global $con;

        $check = 'on';
        $query = "SELECT * FROM category where status= '$check'";
        
            $result = mysqli_query($con ,$query);
            if(mysqli_num_rows($result) > 0){
            
                while($row = mysqli_fetch_array($result)){
                    $categoryID = $row['categoryId'];
                    $catogeryName = $row['categoryName'];

                    echo '
                            
                        <li class="nav-item">
                            <a class="cat nav-link" href="#" aria-current="page" data-id="'.$categoryID.'" >'.$catogeryName.'</a>
                        </li>
                    ';
                        
                }
            }
                
    }
//href="shop.php?pID='.$categoryID.'"

?>
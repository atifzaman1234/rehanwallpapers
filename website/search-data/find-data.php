<?php
if(isset($_GET['search']))
{
    if($_GET['query'] != '')
    {
        require '../connect-to-database.php';
        // input
        $query = mysqli_real_escape_string($conn, $_GET['query']);

        // sql query to search the result
        $sql =
        "SELECT
    	      i.name AS image_name,
            i.resolution AS resolution,
            u.name AS uploader
          FROM imgs i
          JOIN
    	      users u on i.uploader_ID = u.ID
          WHERE
            i.name LIKE '%$query%' OR
            i.resolution LIKE '%$query%' OR
            u.name LIKE '%$query%'";
        // exequte
        $result = mysqli_query($conn, $sql);


        // count the coloums
        $count = mysqli_num_rows($result);
        if($count > 0)
        {
          
        // greet the user
        echo "<div class='device-name'>All the results related to $query &rarr;</div><br>";
          // results avaliable

          while($fetch = mysqli_fetch_assoc($result))
          {
            for($i = 0; $i < 1; $i++)
            {
              $image_name = $fetch['image_name'];
              $resolution = $fetch['resolution'];
              $uploader = $fetch['uploader'];

              echo "<div class='img-container'><img src='../img/$image_name.jpeg' alt='' class='wallpaper-img desktop-img'><br><span class='resolution'>Resolution:"." ".$resolution."</span><br><span class='uploader'>Uploaded by:"." ".$uploader."</span><a href='../img/$image_name.jpeg' download><button class='download-btn'>Download</button></div></a>";
            }
          }
        }
        else
        {
            echo "<div class='device-name'>
              No results related to $query found.
              </div>";
        };
      }else{
        echo "<div class='device-name'>
                No information given.
              </div>";
      }
    }

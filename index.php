<?php
   $id= $_GET['id'];
   $url1 = "http://apkdl.me/api/?id=$id&key=free";
   $json = file_get_contents($url1);
   $json_data = json_decode($json, true);
   $download = $json_data["dlurl"];
   $size = $json_data["size"];
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>APKDL.ME</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   </head>
   <body>
      <div role="main" class="container">
      <div class="card text-center">
         <div class="card-body">
            <table class="table table-hover text-left">
               <tbody>
                  <tr>
                     <td><strong>Package Name:</strong></td>
                     <td><?php echo $json_data["package"] ;?></td>
                  </tr>
                  <tr>
                     <td><strong>MD5FILE:</strong></td>
                     <td><?php print $json_data["md5"];?></td>
                  </tr>
                  <tr>
                     <td><strong>File Size:</strong></td>
                     <td><?php echo $json_data["size"];?></td>
                  </tr>
                  <tr>
                     <td><strong>Version:</strong></td>
                     <td><?php print $json_data["version"];?></td>
                  </tr>
                  <tr>
                     <td><strong>Min SDK:</strong></td>
                     <td><?php print $json_data["min_sdk"];?></td>
                  </tr>
                  <tr>
                     <td><strong>Download Url:</strong></td>
                     <td><?php echo $json_data["dlurl"];?></td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </body>
</html>

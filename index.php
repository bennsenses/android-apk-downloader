<?php
$id=$_GET['id'];
$url = "https://apk-api.com/api/$id";
$ch = curl_init($url);

$header = array(
"key: aries_ganteng", //delete this if you want use your account.
/*
"username: example@gmail.com",
"password: pass",
"androidId: android_device_id", //Install to get Device ID https://play.google.com/store/apps/details?id=com.evozi.deviceid
"UserAgent: Android-Finsky/14.3.18-all (versionCode=81431800,sdk=19,device=hammerhead,hardware=hammerhead,product=hammerhead,build=KTU84P:user)",
"lang: id",
"country: id"
*/
);

curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
$result = curl_exec($ch);
$json_data = json_decode($result, true);
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
                     <td><strong>Title:</strong></td>
                     <td><?php echo $json_data["title"] ;?></td>
                  </tr>
                  <tr>
                     <td><strong>Package Name:</strong></td>
                     <td><?php print $id;?></td>
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
                     <td><?php print $json_data["requirements"];?></td>
                  </tr>
                  <tr>
                     <td><strong>Download Url:</strong></td>
                     <td><?php echo $json_data["download"]["apk"]["url"];?></td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
	  </div>
   </body>
</html>

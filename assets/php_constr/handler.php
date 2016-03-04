<?php
  
  function getRandomFileName($path, $extension='')
  {
     $extension = $extension ? '.' . $extension : '';
     $path = $path ? $path . '/' : '';
 
      do {
        $name = md5(microtime() . rand(0, 9999));
        $file = $path . $name . $extension;
      } while (file_exists($file));
 
      return $name;
  }

  
  $responseArr = array(
                   'error_flag' => 1,
                   'server_mess' => "",
                   'img_src' => ""
                 );

  if(isset($_FILES['images'])){

      $types = array('image/gif', 'image/png', 'image/jpeg', 'image/pjpeg');
      if (!in_array($_FILES['images']['type'], $types)){
           $responseArr['server_mess'] = "Недопустимый тип файла. Допустимо загружать только изображения: *.gif, *.png, *.jpg";
           print_r(json_encode($responseArr, JSON_UNESCAPED_UNICODE));
           exit;
      }

     if($_FILES["images"]["size"] > 1024*3*1024) {
         $responseArr['server_mess'] = "Размер файла превышает три мегабайта";
         print_r(json_encode($responseArr, JSON_UNESCAPED_UNICODE));
         exit;
     }  

     if(is_uploaded_file($_FILES["images"]["tmp_name"])) {
       
        $path = $_FILES['images']['name'];
        $ext = pathinfo($path, PATHINFO_EXTENSION);
        $file_name = getRandomFileName('../images/user_loads/', $ext);
        
        move_uploaded_file($_FILES["images"]["tmp_name"], $addr = "../images/user_loads/" . $file_name . "." . $ext);
        
        $responseArr['img_src'] = "/assets/images/user_loads/" . $file_name . "." . $ext;
        $responseArr['error_flag'] = 0;

     } else {
        $responseArr['server_mess'] = "Ошибка загрузки файла";
     }
   
  }

  print_r(json_encode($responseArr, JSON_UNESCAPED_UNICODE));

?>
<?php 

Class Image_class
{

function resize_image_crop($original_image_path,$cropped_image_path,$width,$height,$where="mid") {

	//determine the file type of original image
	$extension = explode(".",$original_image_path);
	$extension = end($extension);
										
		if (strtolower($extension) == "jpg") {
	 
			@$image = imagecreatefromjpeg($original_image_path);

 		}elseif (strtolower($extension) == "jpeg") {
	
			@$image = imagecreatefromjpeg($original_image_path);
			
		}elseif (strtolower($extension) == "png") {
		
			@$image = imagecreatefrompng($original_image_path);
			
		}elseif (strtolower($extension) == "gif") {
			
			@$image = imagecreatefromgif($original_image_path);
		
		}else{
		
			//if all fails assume its a jpg
			$extension = "jpg";
			$image = imagecreatefromjpeg($original_image_path);
		}
		
	//get orientation information if file is a jpeg
		$orientation = 0;
		 
			if ((strtolower($extension) == "jpg") || (strtolower($extension) == "jpeg")) { 
				//check image orientation
				@$exif = exif_read_data($original_image_path);
				 
				if (isset($exif['Orientation'])) {
					$a = $exif['Orientation'];
					
					//determine what oreientation the image was taken at
					if ($a == 3) {// 180 rotate left
						
						$orientation = 180;
					 
					}elseif ($a == 5) {//flip vertical + 90 rotate right
						
						$orientation = -90;
						
					}elseif ($a == 6) {//90 rotate right
						
						$orientation = -90;
					 
					}elseif ($a == 7) {// horizontal flip + 90 rotate right
						
						$orientation = -90;
						 
					}elseif ($a == 8) {// 90 rotate left
						
						$orientation = 90;
					 
					}
				
				}
				
			}

 	 		 				
	//start the actual cropping
    $w = @imagesx($image); //current width
    $h = @imagesy($image); //current height
    if ((!$w) || (!$h)) { $GLOBALS['errors'][] = 'Image couldn\'t be resized because it wasn\'t a valid image.'; return false; }
    if (($w == $width) && ($h == $height)) {//no resizing needed. retain dimensions but still create new image
	
		$new_w = $w;
		$new_h = $h;
		//return $image; } //no resizing needed
	    
	}else{
		
	    //try max width first...
	    $ratio = $width / $w;
	    $new_w = $width;
	    $new_h = $h * $ratio;
	    
	    //if that created an image smaller than what we wanted, try the other way
	    if ($new_h < $height) {
	        $ratio = $height / $h;
	        $new_h = $height;
	        $new_w = $w * $ratio;
	    }

    }
    
    $image2 = imagecreatetruecolor ($new_w, $new_h);
    imagecopyresampled($image2,$image, 0, 0, 0, 0, $new_w, $new_h, $w, $h);

    //check to see if cropping needs to happen
    if (($new_h != $height) || ($new_w != $width)) {
        $image3 = imagecreatetruecolor ($width, $height);
        if ($new_h > $height) { //crop vertically
            $extra = $new_h - $height;
            $x = 0; //source x
            //$y = round($extra / 2); //source y
			
			//choose where to crop
			if ($where == "top") {
			
				$y = 0;
				
			}elseif($where == "mid") {
			
				 $y = round($extra / 2);
				 
			}elseif($where == "bottom") {
			
				 $y = round($extra);
			}
			
			 
            imagecopyresampled($image3,$image2, 0, 0, $x, $y, $width, $height, $width, $height);
        } else {
            $extra = $new_w - $width;
            $x = round($extra / 2); //source x
            $y = 0; //source y
             
            imagecopyresampled($image3,$image2, 0, 0, $x, $y, $width, $height, $width, $height);
        }


        imagedestroy($image2);
		
		//rotate image if necessary
		if($orientation != 0){
		
			// Rotate
			$image3 = imagerotate($image3, $orientation, 0);
					 
		}
	
		//save cropped image
		imagejpeg($image3,$cropped_image_path,100);
		imagedestroy($image3);
		return true;
		
    } else {
        
		//rotate image if necessary
		if($orientation != 0){
		
			// Rotate
			$image2 = imagerotate($image2, $orientation, 0);
					 
		}
	
		//save uncropped image
		imagejpeg($image2,$cropped_image_path,100);
		imagedestroy($image2);
		return true;
		
    }
	
 
}
										

function resize_image_max($original_image_path,$resized_image_path,$max_width,$max_height) {
	
	//determine the file type of original image
	$extension = explode(".",$original_image_path);
	$extension = end($extension);
										
		if (strtolower($extension) == "jpg") {
	
			@$image = imagecreatefromjpeg($original_image_path);
			
		}elseif (strtolower($extension) == "jpeg") {
	
			@$image = imagecreatefromjpeg($original_image_path);
			
		}elseif (strtolower($extension) == "png") {
		
			@$image = imagecreatefrompng($original_image_path);
			
		}elseif (strtolower($extension) == "gif") {
			
			@$image = imagecreatefromgif($original_image_path);
		
		}else{
		
			//if all fails assume its a jpg
			$extension = "jpg";
			@$image = imagecreatefromjpeg($original_image_path);
		}
	
		
		//get orientation information if file is a jpeg
		$orientation = 0;
		 
			if ((strtolower($extension) == "jpg") || (strtolower($extension) == "jpeg")) { 
				//check image orientation
				if(@$exif = exif_read_data($original_image_path)){
				 
				if (isset($exif['Orientation'])) {
					$a = $exif['Orientation'];
					
					//determine what oreientation the image was taken at
					if ($a == 3) {// 180 rotate left
						
						$orientation = 180;
					 
					}elseif ($a == 5) {//flip vertical + 90 rotate right
						
						$orientation = -90;
						
					}elseif ($a == 6) {//90 rotate right
						
						$orientation = -90;
					 
					}elseif ($a == 7) {// horizontal flip + 90 rotate right
						
						$orientation = -90;
						 
					}elseif ($a == 8) {// 90 rotate left
						
						$orientation = 90;
					 
					}
				
				}
				
				}
				 
				
			}

	//start the actual resizing
    $w = imagesx($image); //current width
    $h = imagesy($image); //current height
    if ((!$w) || (!$h)) { $GLOBALS['errors'][] = 'Image couldn\'t be resized because it wasn\'t a valid image.'; return false; }

    if (($w <= $max_width) && ($h <= $max_height)) {//no resizing needed. retain dimensions but still create new image
	
	$new_w = $w;
	$new_h = $h;
		//return $image; } //no resizing needed
    
	}else{
	
	
		//try max width first...
		$ratio = $max_width / $w;
		$new_w = $max_width;
		$new_h = $h * $ratio;
		
		//if that didn't work
		if ($new_h > $max_height) {
			$ratio = $max_height / $h;
			$new_h = $max_height;
			$new_w = $w * $ratio;
		}
    
	}
	
	
    $new_image = imagecreatetruecolor ($new_w, $new_h);
    imagecopyresampled($new_image,$image, 0, 0, 0, 0, $new_w, $new_h, $w, $h);
 
 	//rotate image if necessary
	if($orientation != 0){
	
		// Rotate
		$new_image = imagerotate($new_image, $orientation, 0);

	}
	
 	//save resized image
 	imagejpeg($new_image,$resized_image_path,100);
	imagedestroy($new_image);
 
	return true;
		
}

function get_thumbnail($file,$width = 300,$height = 300){
 
		if(file_exists($file)){
		
			$file_extention = explode(".",$file);
			$file_extention = end($file_extention);
			
			if(strtolower($file_extention) == "jpg" || strtolower($file_extention) == "jpeg"){
			
				$thumb = str_replace("." . $file_extention,"_thumb." . $file_extention,$file);
		 
		  
				if(file_exists($thumb)){
		  
					return $thumb;
				 
				}else{
				
					make_new:
					//create a square thumbnail for display
				 
						$this->resize_image_crop($file,$thumb,$width,$height);
				 
					
					if(file_exists($thumb)){
					
						return $thumb;
					
					}else{
					
						return($file);
						
					}
					
				}
				
			}else{
			
				return $file;
			
			}

		}else{
		
			return $file;
		
		}

	}

}

?>
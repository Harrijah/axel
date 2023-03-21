<?php
    namespace App\Controllers;

    class Image extends BaseController 
    {
        // public function resize_live($image, $size){
        //     $original_image = FCPATH . 'image/'.$image;
        //     $new_image = Image::make($original_image);
        //     $new_image->resize($size, null, true);
        //     return $new_image->response();
        // }

        public static function resize_image($image, $dim01, $dim02){
            $img = \Config\Services::image()
            ->withFile('image/'. $image)
            ->resize($dim01, $dim02, true, 'height')
            ->save('image/resized/'. $image, 60)
            ;

            
// $img = \Config\Services::image()
// ->withFile('image/entreprise.fw.png')
// ->resize(600, 400, true, 'height')
// ->save('image/resized/image.fw.png', 60);
            
        }

        
// <>
    
    
    
    
    
    
    
    
    
    }
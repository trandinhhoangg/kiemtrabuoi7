<?php
class ImageHelper {
    public static function uploadImage($file, $uploadDir = "assets/images/") {
        if (isset($file) && $file['error'] == 0) {
            $fileName = time() . '_' . basename($file["name"]); 
            $uploadPath = __DIR__ . '/../' . $uploadDir . $fileName; 

            if (move_uploaded_file($file["tmp_name"], $uploadPath)) {
                return $uploadDir . $fileName; 
            }
        }
        return null; 
    }
}
?>

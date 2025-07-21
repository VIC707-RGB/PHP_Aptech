<?php 
    require_once("../../2-dataAccess/championDataAccess.php");
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $id = 0;
        $name = "";
        $gender = "";
        $national = 0;
        $avatar = "";
        $roles = array();
        $mainStory = "";
        if(isset($_POST['champName'])){
            $name = $_POST['champName'];
            //echo $name;
        }
        //champGender
        if(isset($_POST['champGender'])){
            $gender = $_POST['champGender'];
            //echo $gender;
        }
        //champNational
        if(isset($_POST['champNational'])){
            $national = $_POST['champNational'];
            //echo $national;
        }
        if(isset($_FILES["champAvatar"])){
            // var_dump($_FILES['champAvatar']);
            $uploadFile = $_FILES['champAvatar'];
            // TAo 1 thu muc de chua file
            $uploadPath = '../../uploads';
            $fileName = $uploadFile['name'];
            //Tao ra dia chi cua file
            $filePath = $uploadPath . '/' .basename($fileName);
            // echo $filePath;
            
            //Kiem tra file
            //Kiem tra file co dung dinh dang khong (jpg, jpeg, png, svg, webp)
            
            $fileExtension = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));
            if($fileExtension != "jpg" && $fileExtension != "jpeg" && $fileExtension != "png" && $fileExtension != "webp"){
                echo "File khong ho tro!";
                die();
                
            }
            //Kiem tra file co nang khong (5mb)
            $fileSize = $uploadFile['size'];
            if($fileSize > 1024*1024*5){
                echo "File qua lon hon 5MB";
                die();
            }
            //Kiem tra xem file da ton tai chua, neu ton tai roi =>thoi (Thuong it khi kiem trra cai nay)
            //Tao ra 1 ten file la unique
            //Tao ra 1 chuoi GUID de lam ten file
            $randomGUID = gen_uuid();
            $newFileName = $randomGUID . '.' . $fileExtension;
            $newFilePath = $uploadPath . '/' . basename($newFileName);

            //Luu file voa dia chi
            $result  = move_uploaded_file($uploadFile['tmp_name'], $newFilePath);
            if($result){
                $avatar = $newFileName;
            }else{
                echo "Error, cannot upload file!";
                die();
            }
        }
        // Goi ham
        //champNational
        if(isset($_POST['champRoles'])){
            $roles = $_POST['champRoles'];
            //echo $national;
        }
        if(isset($_POST['mainStory'])){
            $mainStory = $_POST['mainStory'];
        }

        $champion = array();
        $champion['name'] = $name;
        $champion['gender'] = $gender;
        $champion['nationalityId'] = $national;
        $champion['avatar'] = $avatar;
        $champion['mainStory'] = $mainStory;
        $champion['roles'] = $roles;
        // var_dump($champion);
        // var_dump($champion);
        createOrUpdateChampionDataAccess($champion);

    }

    function gen_uuid() {
        return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            // 32 bits for "time_low"
            mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),
    
            // 16 bits for "time_mid"
            mt_rand( 0, 0xffff ),
    
            // 16 bits for "time_hi_and_version",
            // four most significant bits holds version number 4
            mt_rand( 0, 0x0fff ) | 0x4000,
    
            // 16 bits, 8 bits for "clk_seq_hi_res",
            // 8 bits for "clk_seq_low",
            // two most significant bits holds zero and one for variant DCE1.1
            mt_rand( 0, 0x3fff ) | 0x8000,
    
            // 48 bits for "node"
            mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
        );
    }
?>
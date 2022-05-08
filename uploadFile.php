<?php 

    class FileTransfer{
        private $pickingFile;
        private $file;
        private $fileinfo;
        private $filename;
        private $location;
        private $temp;

        function __construct($pickingFile){
            if(!($_FILES['file']['name']) == ""){
                $this -> pickingFile = $pickingFile;
                $this ->file = $_FILES[$this -> pickingFile]['name'];
                $this ->fileinfo = pathinfo($this ->file);
                $this ->filename = $this ->fileinfo['filename'].date('Ymdhms').".".$this ->fileinfo['extension'];
            //$filename = $fileinfo['filename'].".".$fileinfo['extension'];
                $this ->location = $_SERVER['DOCUMENT_ROOT']."/civehub/files/".$this ->filename;
                $this ->temp = $_FILES['file']['tmp_name'];
            }
        }

        function uploadFile(){
           // echo $this ->location;
            if($_FILES['file']['size'] > 10000000){
                echo "Please select file less than 10MB.";
            } else
            if(file_exists($this ->location)){
                echo "File exists!";
            } else 
            {
                if(!($_FILES['file']['name'] == "")){
                    move_uploaded_file($this ->temp, $this ->location);
                    //echo "Uploaded successfully!";
                        
                    
                }
            }
        }

        function writeDb(){
            
        }
        function fileName()
        {
            return $this->filename;
        }
    }
    
?>
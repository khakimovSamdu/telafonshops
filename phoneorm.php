<?php
<<<<<<< HEAD

    class Talaba{
=======
    class Smartphones
    {
>>>>>>> 5431c711a52d4e0942b61a1511f08f29082d49fd
        private $host = 'localhost';
        private $username = 'root';
        private $parol = '';
<<<<<<< HEAD
        private $db_name = 'test1';
        private $link ;
        public $ret = [];
=======
        private $db_name = 'phone_project';
        private $link;
>>>>>>> 5431c711a52d4e0942b61a1511f08f29082d49fd

        function __construct(){
            $this-> link = mysqli_connect($this->host, $this->username, $this->parol, $this->db_name);
            if(!($this->link)){
                exit("Bazaga ulanmadi!");
            }
        }

        public function query($query){
            return mysqli_query($this->link, $query);
        }
<<<<<<< HEAD
        public function get_talaba($table, $arr, $con= 'no'){
            if ($con=="no"){
                $sql = "SELECT * FROM "."$table"." WHERE ";
                $f = "";
                $i = 0;
                $n = count($arr);
                foreach($arr as $key => $val){
                    $i++;
                    if($i==$n){
                        $f .= "$key = '$val'";
                    }else{
                        $f .= "$key = '$val' AND ";
                    }
=======

        public function get_brend($table, $arr, $con = 'no'){

            $sql = "SELECT * FROM ".$table. " WHERE ";
            $t = '';
            $i=0;
            $n = count($arr);
            foreach($arr as $key=>$val){
                $i++;
                if($i==$n){
                    $t .= "$key = '$val'";
                }else{
                    $t .= "$key = '$val' AND ";
>>>>>>> 5431c711a52d4e0942b61a1511f08f29082d49fd
                }
            }
            $sql .= $t;
            if ($con != 'no'){
                $sql .= $con;
            }

            $fetch = mysqli_fetch_assoc($this->query($sql));
            return $fetch;
        }
<<<<<<< HEAD
        public function get_talabalar($table, $arr, $cond='no'){
            $sql = "SELECT * FROM ". $table." WHERE ";
            $t = "";
            $n = count($arr);
=======

        public function get_brends($table, $arr, $cond = 'no'){
            $sql = "SELECT * FROM ".$table." WHERE ";
            $t = '';
>>>>>>> 5431c711a52d4e0942b61a1511f08f29082d49fd
            $i = 0;
            $n = count($arr);
            foreach($arr as $key=>$val){
                $i++;
                if($i==$n){
                    $t .= "$key = '$val'";
                }else{
                    $t .= "$key = '$val' AND ";
                }
            }    
            $sql .= $t;
            if($cond != 'no'){
                $sql .= $cond;
            }
            $fetchs = [];
            $r = $this->query($sql);
            while ($fetch = mysqli_fetch_assoc($r)) {
                array_push($fetchs, $fetch);
            }
            return $fetchs;
        }
<<<<<<< HEAD
        public function get_talab_insert($table, $arr){
            $sql = "INSERT INTO ".$table." ";
            $t1 = "";
            $t2 = "";
            $n = count($arr);
=======
        public function brend_delete($table, $arr, $cond = 'no'){
            $sql = "DELETE FROM ".$table. " WHERE ";
            $t = '';
>>>>>>> 5431c711a52d4e0942b61a1511f08f29082d49fd
            $i = 0;
            $n = count($arr);
            foreach($arr as $key=>$val){
                $i++;
                if($i==$n){
                    $t .= "$key = '$val'";
                }else{
                    $t .= "$key = '$val' AND ";
                }
            }
            $sql .= $t;
            if($cond!='no'){
                $sql .= $cond;
            }
            return $this->query($sql);
        }
        public function brend_insert($table, $arr){
            $sql = "INSERT INTO ".$table. " ";
            $t1 = '';
            $t2 = '';
            $i = 0;
            $n = count($arr);
            foreach($arr as $key=>$val){
                $i++;
                if($i==$n){
                    $t1 .= $key;
                    $t2 .= "'".$val."'";
                }else{
                    $t1 .= $key.', ';
                    $t2 .= "'".$val."', ";
                }
            }
            $sql .= "($t1) VALUES ($t2);";
            return $this -> query($sql);
        }
<<<<<<< HEAD
        public function get_talaba_tahrirlash($table, $data, $arr, $cond="no"){
            $sql = "UPDATE ". $table." SET ";
            $f = "";
            $n = count($data);
=======
        public function telafon_update($table, $arr, $cond='no'){
            $sql = "UPDATE ".$table. " SET ";
            $t = '';
>>>>>>> 5431c711a52d4e0942b61a1511f08f29082d49fd
            $i = 0;
            $n = count($arr);
            foreach($arr as $key=>$val){
                $i++;
                if($n==$i){
                    $t .= "$key = '$val'";
                }else{
                    $t .= "$key = '$val', ";
                }
            }
            $sql .= $t;
            if($cond!='no'){
                $sql .= $cond;
            }
            return $this->query($sql);
        }
<<<<<<< HEAD
        public function get_talaba_delete($table, $arr, $cond="no"){
            $sql = "DELETE FROM ". $table. " WHERE ";
            $f = "";
            $n = count($arr);
            $i = 0;
            if($cond=="no"){
                foreach($arr as $key=>$val){
                    if($i==$n){
                        $f .= "$key = '$val'";
                    }else{
                        $f .= "$key = '$val' AND ";
                    }
                }
                $sql .= $f;
            }else{
                $sql .= $cond;
            }
            return $this->query($sql);
        }
        function __destruct(){
            mysqli_close($this->link);
        }
        
=======
>>>>>>> 5431c711a52d4e0942b61a1511f08f29082d49fd
    }

    
?>
<?php

    class Smartphone{
        private $host = 'localhost';
        private $login = 'root';
        private $parol = '';
        private $db_name = 'phone_project';
        private $link ;
        public $ret = [];

        function __construct(){
            $this->link = mysqli_connect($this->host, $this->login, $this->parol, $this->db_name);
            if(!($this->link)){
                exit("Baza bilan bog'lanmadi");
            }
        }

        public function query($query){
            return mysqli_query($this->link, $query);
        }
        public function gettelafon($table, $arr, $con= 'no'){
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
                }
                $sql .= $f;
            }else{
                $sql .= $con;
            }
            $fetch = mysqli_fetch_assoc($this->query($sql));
            return $fetch;
        }
        public function gettelafons($table, $arr, $cond='no'){
            $sql = "SELECT * FROM ". $table." WHERE ";
            $t = "";
            $n = count($arr);
            $i = 0;
            if($cond=='no'){
                foreach($arr as $key=>$value){
                    $i++;
                    if($i==$n){
                        $f .= "$key='$value'";
                    }else{
                        $f .= "$key='$value AND '";
                    }
    
                }
                $sql .= $f;
            }else{
                $sql .= $cond;
            }
            $fetchs = [];
            $r = $this->query($sql);
            while($fetch = mysqli_fetch_assoc($r)){
                array_push($fetchs, $fetch);
            }
            return $fetchs;

        }
        public function telafoninsert($table, $arr){
            $sql = "INSERT INTO ".$table." ";
            $t1 = "";
            $t2 = "";
            $n = count($arr);
            $i = 0;
            foreach($arr as $key=>$val){
                $i++;
                if($i==$n){
                    $t1 .= $key;
                    $t2 .= "'".$val."'";
                }else{
                    $t1 .= $key;
                    $t2 .= "'".$val."',";
                }
            }
            $sql .= "($t1) VALUES ($t2)";
            return $this->query($sql);
        }
        public function telafonupdate($table, $data, $arr, $cond="no"){
            $sql = "UPDATE ". $table." SET ";
            $f = "";
            $n = count($data);
            $i = 0;
            foreach($data as $key=>$val){
                $i++;
                if($n==$i){
                    $f .= "$key = '$val'";
                }else{
                    $f .= "$key = '$val', ";
                }

            }
            $sql .= $f;
            $sql .= " WHERE ";
            $f = "";
            $n = count($arr);
            $i = 0;
            if($cond=='no'){
                foreach($arr as $key=>$val){
                    if($n==$i){
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
        public function telafondelete($table, $arr, $cond="no"){
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
        public function filter($s){
            $s = htmlspecialchars($s, ENT_QUOTES);
            return $s;
        }
        public function print_json(){
            echo json_encode($this->ret);
        }
        function __destruct(){
            mysqli_close($this->link);
        }
        
    }
   

?>
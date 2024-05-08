<?php
     class Smartphones{
        private $host = 'localhost';
        private $username = 'root';
        private $parol = '';
        private $db_name = 'phone_project';
        private $link;
        function __construct(){
            $this-> link = mysqli_connect($this->host, $this->username, $this->parol, $this->db_name);
            if(!($this->link)){
                exit("Bazaga ulanmadi!");
            }
        }

        public function query($query){
            return mysqli_query($this->link, $query);
        }

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
                }
            }
            $sql .= $t;
            if ($con != 'no'){
                $sql .= $con;
            }

            $fetch = mysqli_fetch_assoc($this->query($sql));
            return $fetch;
        }

        public function get_brends($table, $arr, $cond = 'no'){
            $sql = "SELECT * FROM ".$table." WHERE ";
            $t = '';
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
        public function brend_delete($table, $arr, $cond = 'no'){
            $sql = "DELETE FROM ".$table. " WHERE ";
            $t = '';
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
        public telafon_update($table, $arr, $cond='no'){
            $sql = "UPDATE ".$table. " SET ";
            $t = '';
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


        
    }
    $db = new Smartphones();
    $arr = ['company'=>'Apple'];
    print_r($db->get_brends('product', $arr, "ORDER BY price DESC LIMIT 5")) ;

    
?>
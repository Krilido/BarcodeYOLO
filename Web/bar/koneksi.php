<?php

class Koneksi{
    private $host;
    private $db_name;
    private $db_password;
    private $username;
    
    public function Koneksi(){
        $this->Koneklocal();
        if(!$this->Start()){
            return FALSE;
        }
        else{
            mysql_select_db($this->db_name);
            return TRUE;
        }
    }
    
    public function Konek($_host,$_db_name,$_db_password,$_username){
        $this->host = $_host;
        $this->db_name=$_db_name;
        $this->db_password=$_db_password;
        $this->username=$_username;
    }
    
    public function Start(){
        return mysql_connect($this->host,  $this->username,  $this->db_password);
    }

    public function Koneklocal(){
        $this->Konek("localhost", "fahmih", "" , "root");
    }
    
    public function KonekServer(){
        $this->Konek("", "","", "");
    }
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

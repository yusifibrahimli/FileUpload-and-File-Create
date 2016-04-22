<?php
/**
* 
*/
class Database 
{
	public $server;
    public $username;
    public $userpass;
    public $dbname;
    public $connection;

    function __construct($server,$username,$userpass,$dbname){
                $this->server=$server;
                $this->username=$username;
                $this->userpass=$userpass;
                $this->dbname=$dbname;
                $this->db_connect();
    }
	
	function db_connect(){
		  $this->connection=mysqli_connect($this->server,$this->username,$this->userpass,$this->dbname);
		  if($this->connection){
		  	echo "Connected";
		  }else{
		  	echo "DisConnect";
		  }
	}
}

class File{
       public $fileName;
       public $fileEx;
       public $filePath;
       public $fileConn;


       public function __construct($fileName,$fileEx){
                $this->fileName=$fileName;
                $this->fileEx=$fileEx;
                $this->filePath="files/".$this->fileName.$this->fileEx;

                if(file_exists($this->filePath)){
                	echo "file alredy exist!";
                }else{
                	$this->fileConn=fopen($this->filePath, "w");
                	fwrite($this->fileConn, "hazirdir");
                }
       }
}
?>
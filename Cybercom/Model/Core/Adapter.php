<?php
namespace Model\Core;

class Adapter {
    private $config = [
        'host' => 'localhost',
        'username' => 'root',
        'password' => '',
        'database' => 'production'
    ];

    private $connect = null;

    public function connection()
    {
        $connect = new \mysqli($this->config['host'], $this->config['username'], $this->config['password'], $this->config['database']);
        $this->setConnect($connect);
        if(!$connect) {
            return false;
        }
        return true;
    }

    function error($errno, $error, $query)
    {
        echo "<div style='background-color:#faa'>";
        echo "<h4 style='background-color:#f00'>" . $errno . "-" . $error . "</h4>";
        echo $query;
        echo "</div>";
        exit;
    }
    
    public function setConnect(\mysqli $connect)
    {
        $this->connect = $connect;
        return $this;
    }

    public function getConnect()
    {
        // if(!$this->$connect){
        //     $this->setConnect();
        // }
        return $this->connect;
    }

    public function isConnected()
    {
        if(!$this->getConnect()){
            //echo 'Connection Failed';
            return false;
        }
        return true;
    }
    
    public function insert($query)
    {
        if (!$this->isConnected()) {
            $this->connection();
        }
       // $result = $this->getConnect()->query($query);
        $request = mysqli_query($this->getConnect(),$query) or $this->error($this->getConnect()->errno, $this->getConnect()->error, $query);
        if (!$result) {
            return false;
            //echo "Not Inserted";
        }
        return $this->getConnect()->insert_id;
    }

    public function update($query) 
    {
        if(!$this->isConnected()) {
            $this->connection();
        }
        if(!$this->getConnect()->query($query)) {
            return false;
        }
        return true;
    }

    public function fetchRow($query) {
        if(!$this->isConnected()) {
            $this->connection();
        }

        $result=$this->getConnect()->query($query);
        $row = $result->fetch_assoc();
        
        
        if(!$row){
            return false;
        }
        return $row;
    }
    
    public function fetchOne($query)
    {
        if (!$this->isConnected()) 
        {
        $this->connection();
        }
            $result = $this->getConnect()->query($query);
            $fetchrow = $result->num_rows;
        if (!$fetchrow) 
        {
            return $fetchrow;
        }
        return $fetchrow;
    }

    public function fetchAll($query)
    {
        if (!$this->isConnected()) {
            $this->connection();
        }
        $result = $this->getConnect()->query($query);
        $rows = $result->fetch_all(MYSQLI_ASSOC);
        if (!$rows) {
            return false;
        }
        return $rows;
    }

    public function fetchPairs($query)
    {
        if (!$this->isConnected()) 
        {
        $this->connection();
        }
            $result = $this->getConnect()->query($query);
            $rows = $result->fetch_all();
        if (!$rows) 
        {
            return $rows;
        }
        $columns = array_column($rows,'0');
        $values = array_column($rows,'1');
        return array_combine($columns,$values);
    }


    public function delete($query){
        if(!$this->isConnected()){
            $this->connection();
        }
       
        $result=$this->getConnect()->query($query);
        
        if(!$result){
            return false;
        }
        return true;
    }
}


?>
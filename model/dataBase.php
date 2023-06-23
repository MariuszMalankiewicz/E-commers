<?php
class DBH{
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $database = 'crud';
    protected $mysqli;
    public $sql;

    public function __construct(){
        $this->mysqli = new mysqli($this->host, $this->user, $this->password, $this->database);
    }

    protected function connected(){
        return $this->mysqli;
    }

    public function insert($tableName, $tableColumnAndValues=array()){
        $tableColumns = implode(',', array_keys($tableColumnAndValues));
        $tableValues = implode("','", $tableColumnAndValues);

        $sql = "INSERT INTO $tableName ($tableColumns) VALUES ('$tableValues')";
        $this->mysqli->query($sql);
        

    }
    public function select($table, $rows="*", $where = null){
        if($where != null){
            $sql = "Select $rows FROM $table WHERE $where";
        }else{
            $sql = "Select $rows FROM $table";
        }
        return $this->sql = $this->mysqli->query($sql);
  }
  
    public function __destruct(){
        $this->mysqli->close();
    }
}
?>
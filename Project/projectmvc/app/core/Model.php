<?php

Trait Model{

    use Database;

    // function test(){

    //     $query = "SELECT * FROM my_user";
    //     $result = $this->query($query);
    //     Show($result);
    // }

    //protected $table          = 'my_user';
    protected $limit            = 10;
    protected $offset           = 0;
    protected $order_type       = "desc";
    protected $order_column     = "id";
    public $errors              = [];

    public function findAll(){
        // Multiple row return

        $query = "SELECT * FROM $this->table order by $this->order_column $this->order_type limit $this->limit offset $this->offset";

        return $this->query($query);
    }

    public function where($data, $data_not = []){
        // Multiple row return
        
        $keys = array_keys($data);
        $keys_not = array_keys($data_not);
        $query = "SELECT * FROM $this->table WHERE ";

        foreach($keys as $key){

            $query .= $key . " = :" . $key . " && ";

        }

        foreach($keys_not as $key){

            $query .= $key . " != :" . $key . " && ";
        }

        $query = trim($query," && ");

        $query .= " order by $this->order_column $this->order_type limit $this->limit offset $this->offset";

        $data = array_merge($data, $data_not);

        return $this->query($query, $data);
    }
    
    public function first($data, $data_not = []){
        // one row return

        $keys = array_keys($data);
        $keys_not = array_keys($data_not);
        $query = "SELECT * FROM $this->table WHERE ";

        foreach($keys as $key){

            $query .= $key . " = :" . $key . " && ";

        }

        foreach($keys_not as $key){

            $query .= $key . " != :" . $key . " && ";
        }

        $query = trim($query," && ");

        $query .= " limit $this->limit offset $this->offset";

        $data = array_merge($data, $data_not);

        $result = $this->query($query, $data);
        if($result){
            return $result[0];
        }
        return false;
    }

    public function insert($data){

        // Remove unwanted data

        if(!empty($this->allowedColumns)){

            foreach($data as $key => $value){

                if(!in_array($key, $this->allowedColumns)){
                    unset($data[$key]);
                }

            }

        }

        $keys = array_keys($data);
        $query = "INSERT INTO $this->table (".implode(",", $keys).") VALUES (:".implode(",:", $keys).")";
        
        $this->query($query, $data);

        return false;
    }

    public function update($id, $data, $id_colum = 'id'){

        // Remove unwanted data

        if(!empty($this->allowedColumns)){

            foreach($data as $key => $value){

                if(!in_array($key, $this->allowedColumns)){
                    unset($data[$key]);
                }

            }
        }

        $keys = array_keys($data);
        
        $query = "UPDATE $this->table SET ";

        foreach($keys as $key){

            $query .= $key . " = :" . $key . ", ";

        }

        $query = trim($query,", ");

        $query .= " WHERE $id_colum = :$id_colum ";

        $data[$id_colum] = $id;
        echo $query;
        $this->query($query, $data);
        return false;

    }

    public function delete($id, $id_colum = 'id'){
        
        $data[$id_colum] = $id;
        $query = "DELETE FROM $this->table WHERE $id_colum = :$id_colum ";

        $this->query($query, $data);

        return false;
    }
}
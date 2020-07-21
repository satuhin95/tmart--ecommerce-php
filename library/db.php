<?php
class Database{
	private $con;
	public $id;

	public function __construct(){
		$this->con = new mysqli("localhost","root","","ecommerce");

	}
		// Insert data
	public function Insert($table,$data){
		$sql = "";
		foreach ($data as $key => $value) {
			if ($sql) {
				$sql .=',';
			}
			$sql .="{$key}='".$value."'";
		}

		$sql ="insert into {$table} set {$sql}";
		//echo $sql;
		if ($this->con->query($sql)) {
			$this->id = $this->con->insert_id;
			return true;
		}
		echo $this->con->error;
			// else{
			//	echo $this->con->error;
			// }

	}
	// View data

	public function view($select, $table, $orders= "", $where = "", $relations="", $groupBy=""){
		$temp_orders = "";
		$temp_where = "";
		$sql = "select {$select} from {$table}";
		if ($relations) {
			foreach ($relations as $where_i => $where_v) {
				if ($temp_where) {
					$temp_where .=" and ";
				}
				else{
					$temp_where .=" where ";
				}
				$temp_where .="{$where_i} = ".$where_v;
			}
		}
		if ($where) {
			foreach ($where as $where_i => $where_v) {
				if ($temp_where) {
					$temp_where .=" and ";
				}
				else{
					$temp_where .=" where ";
				}
				$temp_where .="{$where_i} = '".$where_v."'";
			}
		}
		if ($orders) {
			foreach ($orders as $orders_i => $orders_v) {
				if ($temp_orders) {
					$temp_orders .=", ";
				}
				else{
					$temp_orders .=" order by ";
				}
				$temp_orders .="{$orders_i} {$orders_v}";
			}
		}
		$sql = $sql . $temp_where . $groupBy .  $temp_orders;
		//echo $sql;
		return $this->con->query($sql);

	}
	 // Update data
	public function Update($table, $data, $id){
		$sql = "";
		foreach ($data as $key => $value) {
			if ($sql) {
				$sql .=',';
			}
			$sql .="{$key}='".$value."'";
		}

		$sql ="update  {$table} set {$sql} where id={$id}";
		$this->con->query($sql);
		if ($this->con->affected_rows > 0) {
			return true;
		}
		return false;
	}
		// Delete data
	public function Delete($table,$data){
		$sql = "";
		foreach ($data as $key => $value) {
			if ($sql) {
				$sql .=',';
			}
			$sql .="{$key}='".$value."'";
		}
		$sql ="delete from {$table} where {$sql}";
		if ($this->con->query($sql)) {
				#$this->id = $this->con->insert_id;
			return true;
		}
		return false;
	}
	public function rawQuery($sql){
		return $this->con->query($sql);
	}

}

<?php
	
	require_once 'vendor/autoload.php';
	//problem will be here
	use Kreait\Firebase\Factory;
	use Kreait\Firebase\ServiceAccount;

	class doctors{
		protected $database;
	    protected $dbname = 'doctors';
	    public function __construct(){
	        $acc = ServiceAccount::fromJsonFile(__DIR__ . 'application/key/cse499healthmanagement-1e4bd5cf7cbb.json');
	        $firebase = (new Factory)->withServiceAccount($acc)->create();
	        $this->database = $firebase->getDatabase();
	    }
	    public function get(int $userID = NULL){
	        if (empty($userID) || !isset($userID)) { return FALSE; }
	        if ($this->database->getReference($this->dbname)->getSnapshot()->hasChild($userID)){
	            return $this->database->getReference($this->dbname)->getChild($userID)->getValue();
	        } else {
	            return FALSE;
	        }
	    }
	    public function insert(array $data) {
	        if (empty($data) || !isset($data)) { return FALSE; }
	        foreach ($data as $key => $value){
	            $this->database->getReference()->getChild($this->dbname)->getChild($key)->set($value);
	        }
	        return TRUE;
	    }
	    public function delete(int $userID) {
	        if (empty($userID) || !isset($userID)) { return FALSE; }
	        if ($this->database->getReference($this->dbname)->getSnapshot()->hasChild($userID)){
	            $this->database->getReference($this->dbname)->getChild($userID)->remove();
	            return TRUE;
	        } else {
	            return FALSE;
	        }
	    }
	}
	$doctors = new doctors();
	//var_dump($users->insert([
	//    '1' => 'John',
	//    '2' => 'Doe',
	//    '3' => 'Smith'
	//]));
	//var_dump($users->get(1));
	//var_dump($users->delete(2));
	var_dump($doctors->insert([
	    '1' => 'John Doe',
	]));
?>
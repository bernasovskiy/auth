<?
// класс подключения к БД
class DB {
	//Параметры для подключения
	private $hostname = "localhost:3305";
	private $name = 'task_db';
	private $user = 'root';
	private $pass = '';
	protected $db;

	public function __construct() {
			$this->db = new PDO('mysql:host='.$this->hostname.'; dbname='.$this->name, $this->user, $this->pass);
			return true;
	}
}
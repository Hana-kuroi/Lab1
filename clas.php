<?php

$password = $_POST["password"];
$login = $_POST["login"];

class  User
{
    public $name;
    public $surname;
    public $role;
    public $pass;
    public $login;
}

class Admin extends User
{
	function __construct()
    {
        $this->name = "Ада";
        $this->surname = "Байрон";
        $this->role = "aдмин";
        $this->login = "Ada";
        $this->password = "ada20";
    }

	public function print()
	{
		echo "Здравствуйте " . $this->role . " " . $this->name . " " . $this->surname . " " . "Вы можете на сайте делать всё";
	}
}

class Client extends User
{
	function __construct()
    {
        $this->name = "Афанасий";
        $this->surname = "Авдотьев";
        $this->role = "клиент";
        $this->login = "Demon52";
        $this->password = "demon3";
    }
	public function print()
	{
		echo "Здравствуйте " . $this->role . " " . $this->name . " " . $this->surname . " " . "Вы можете на сайте просматривать информацию доступную пользователям";
	}
}

class Manager extends User
{
	function __construct()
    {
        $this->name = "Иван";
        $this->surname = "Иванов";
        $this->role = "менеджер";
        $this->login = "manager2";
        $this->password = "bred";
    }
	public function print()
	{
		echo "Здравствуйте " . $this->role . " " . $this->name . " " . $this->surname . " " . "Вы можете на сайте изменять, удалять и создавать клиентов";
	}
}

if ($login == "Ada" and $password == "ada20")
{
    $a = new Admin();
    $a -> print();
}
elseif ($login == "Demon52" and $password == "demon3") 
{
    $c = new Client();
    $c -> print();
}
elseif ($login == "manager2" and $password == "bred") 
{
    $m = new Manager();
    $m -> print();
}else 
{
    echo "Неверный логин или пароль";
}
?>
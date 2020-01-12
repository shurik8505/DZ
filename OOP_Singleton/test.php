<?php
require('Db.php');

class test
{
    public function getTests()
    {
		$pdo = Db::getInstance();
		return $pdo->pdoFetchAll('SELECT * FROM books');
    }

    public function getTest($id)
    {
		$pdo = Db::getInstance();
		return $pdo->pdoFetchAll("SELECT * FROM books WHERE id = '" . $id . "'");
    }
}
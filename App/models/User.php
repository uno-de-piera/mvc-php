<?php
namespace App\Models;
defined("APPPATH") OR die("Access denied");

use \Core\Database;
use \App\Interfaces\Crud;

class User implements Crud
{
    public static function getAll()
    {
        try {
			$connection = Database::instance();
			$sql = "SELECT * from usuarios";
			$query = $connection->prepare($sql);
			$query->execute();
			return $query->fetchAll();
		}
        catch(\PDOException $e)
        {
			print "Error!: " . $e->getMessage();
		}
    }

    public static function getById($id)
    {
        try {
            $connection = Database::instance();
            $sql = "SELECT * from usuarios WHERE id = ?";
            $query = $connection->prepare($sql);
            $query->bindParam(1, $id, \PDO::PARAM_INT);
            $query->execute();
            return $query->fetch();
        }
        catch(\PDOException $e)
        {
            print "Error!: " . $e->getMessage();
        }
    }

    public static function insert($user)
    {

    }

    public static function update($user)
    {

    }

    public static function delete($id)
    {

    }
}

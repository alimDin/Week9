<?php
class Database {

    private static $username = 'ad432';
    private static $password = 'qhDUhaQM';
    private static $hostname = 'sql.njit.edu';
    private static $db;
    private static $dsn = "mysql:host=$hostname;dbname=$username";
    private function __construct() {}

    public static function getDB () {
        if (!isset(self::$db)) {
            try {
                self::$db = new PDO(self::$dsn,
                                     self::$username,
                                     self::$password);
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                echo "error";
                exit();
            }
        }
        return self::$db;
    }
}
?>
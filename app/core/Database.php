<?php

class Database
{
    private static $host = "localhost"; // MySQL Hostname
    private static $user = "root";            // MySQL Username
    private static $pass = "";             // MySQL Password
    private static $db   = " db_salma_shofa"; // Nama Database

    private static $connection = null;

    public static function connect()
    {
        if (self::$connection === null) {
            self::$connection = mysqli_connect(self::$host, self::$user, self::$pass, self::$db);
            
            // BARIS AJAIB: Menyamakan bahasa (encoding) antara PHP dan MySQL
            mysqli_set_charset(self::$connection, "utf8mb4");

            if (!self::$connection) {
                die("Koneksi Database Gagal: " . mysqli_connect_error());
            }
        }
        return self::$connection;
    }
}
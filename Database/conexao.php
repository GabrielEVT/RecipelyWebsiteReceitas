<?php
class Conexao
{
    private static $pdo;

    public static function connectDatabase()
    {
        if (!isset(self::$pdo)) {
            $dsn = 'mysql:host=localhost;dbname=db_projetoreceitas';
            $username = 'RecipelyUserDatabase';
            $password = 'gghorecipely';
            $opcoes = array(
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'
            );
            try {
                self::$pdo = new PDO($dsn, $username, $password, $opcoes);
            } catch (PDOException $error) {
                echo "Error! \nError with the database connection." . $error->getMessage() . "\n";
                exit();
            } catch (Exception $error) {
                echo "Error! \n" . $error->getMessage() . "\n";
                exit();
            }
        }
        return self::$pdo;
    }
}

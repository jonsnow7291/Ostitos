<?php
class BdConnection
{
    private static $instance = null;
    private $pdo;
    private function __construct()
    {

        $config = $this->loadConfig();

        $connectionString = "mysql:host={$config['Bd_HOST']};dbname={$config['Bd_NAME']};charset={$config['CHARSET']}";

        $configurationOptions = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4"
        ];

        try {
            $this->pdo = new PDO($connectionString, $config['Bd_USER'], $config['Bd_PASS'], $configurationOptions);
        } catch (Exception $ex) {
            $this->handleConnectionError($ex);
        }
    }

    /* aqui va el metodo principal singleton (basicamente esta verificando  que la instancia se
     cree una y otra vez en cosa de no existir)*/

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    //? aqui basicmaente se carga toda la configuracion del archivo .env y se divide en clave valor
    private function loadConfig()
    {
        $env = [];

        $envFile = __DIR__ . "../../.env";
        if (file_exists($envFile)) {
            $lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            foreach ($lines as $lineas) {
                if (strpos($lineas, "#") === 0) continue;

                if (strpos($lineas, "=") !== false) {
                    list($key, $value) = explode("=", $lineas, 2);
                    $env[trim($key)] = trim($value);
                    $env[trim($key)] = trim($value);
                }
            }
        }
        return [
            "host" => $env["Bd_HOST"] ?? "localhost",
            "dbname" => $env["Bd_NAME"] ?? "ostitos",
            "username" => $env["Bd_USER"] ?? "root",
            "password" => $env["Bd_PASS"] ?? ""
        ];
    }
    //? metodo manejador de errores dependiendo de el entorno en el que se encuentre el app
    private function handleConnectionError($ex)
    {
        error_log("Connection error: " . $ex->getMessage());

        $config = $this->loadConfig();
        $debug = isset($config["APP_DEBUG"]) ? $config["APP_DEBUG"] === "true" : true;
        if ($debug) {

            die(json_encode([
                'error' => 'Error de conexión a BD',
                'details' => $ex->getMessage(),
                'code' => $ex->getCode(),
                'config_used' => [
                    'host' => $config['host'],
                    'database' => $config['dbname'],
                    'user' => $config['username']
                ]
            ]));
        } else {
            die(json_encode(["error" => "error interno del servidor"]));
        }
    }


    //? aqui empiezan los metodos crud
    public static function select ($sql,$parametros=[]){
        try{
            $stmt = self::getInstance()->pdo->prepare($sql);
            $stmt->execute($parametros);

            return $stmt->fetchAll();

        }catch(Exception $ex){
            error_log("Error en la consulta SELECT: " . $ex->getMessage());
            return false;
        }
    }
}

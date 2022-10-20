<?php

class Users
{

    private $sql;

    public function __construct($config)
    {
        $dsn = "mysql:dbname={$config['db']};host={$config['host']}";
        $usuari = $config["user"];
        $clau = $config["pass"];
        
        try {
            $this->sql = new PDO($dsn, $usuari, $clau);
        } catch (PDOException $e) {
            die('Ha fallat la connexió: ' . $e->getMessage());
        }
    }

    /**
     * getUser et retorna l'usuari amb l'identificardor $user
     *
     * @param string $user
     * @return array user amb ["name", "pass"]
     */
    public function getUser($user)
    {
        $query = 'select id, username, password from users where username=:user;';
        $stm = $this->sql->prepare($query);
        $result = $stm->execute([':user' => $user]);

        if ($stm->errorCode() !== '00000') {
            $err = $stm->errorInfo();
            $code = $stm->errorCode();
            throw new Exception("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        
        return $stm->fetch(\PDO::FETCH_ASSOC);
    }
}
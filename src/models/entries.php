<?php


class entries
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
    public function list($user)
    {
        $stm = $this->sql->prepare('select * from cites cit WHERE cit.username=:id;');
        $stm->execute([':id' => $user]);

        $entries = [];

        while ($entry = $stm->fetch(PDO::FETCH_ASSOC)) {
            $entries[] = $entry;
        }

        return $entries;
    }
}
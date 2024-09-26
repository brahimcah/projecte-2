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
        $query = 'select * from users where username=:user;';
        $stm = $this->sql->prepare($query);
        $result = $stm->execute([':user' => $user]);

        if ($stm->errorCode() !== '00000') {
            $err = $stm->errorInfo();
            $code = $stm->errorCode();
            throw new Exception("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        
        return $stm->fetch(\PDO::FETCH_ASSOC);
    }

    public function insertUser($username,$password,$name,$surename,$phone){
        $query = 'insert into users (username,password,name,surename,telefon,permis) values(:username,:password,:name,:surename,:phone,2);';
        $stm = $this->sql->prepare($query);
        $password = md5($password);
        $result = $stm->execute([':username' => $username,':password' => $password,':name' => $name,':surename' => $surename,':phone' => $phone]);

        if ($stm->errorCode() !== '00000') {
            $err = $stm->errorInfo();
            $code = $stm->errorCode();
            throw new Exception("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        
        return $stm->fetch(\PDO::FETCH_ASSOC);
    }
    public function updateUser($originvalue,$new,$user){
        
        if ($originvalue == "name") {
            $data = [
                'user' => $user,
                'new' => $new
            ];
            $query = 'UPDATE users SET name = :new WHERE username=:user';
        }
        elseif($originvalue == "surename"){
            $data = [
                'user' => $user,
                'new' => $new
            ];
            $query = 'UPDATE users SET surename = :new WHERE username=:user';
        }elseif($originvalue == "phone"){
            $data = [
                'user' => $user,
                'new' => $new
            ];
            $query = 'UPDATE users SET telefon = :new WHERE username=:user';
        }elseif($originvalue == "password"){
            //$new=md5($new);
            $data = [
                'user' => $user,
                'new' => $new
            ];
            $query = 'UPDATE users SET password = :new WHERE username=:user';
        }
        else{
            $data = [
                'originvalue' => $originvalue,
                'user' => $user,
                'new' => $new
            ];
            $query = 'UPDATE users SET :originvalue = :new WHERE username=:user';
        }
 
        $stm = $this->sql->prepare($query);
        $result = $stm->execute($data);

        //$stm = $this->sql->prepare($query);        
        //$stm->execute([':originvalue' => $originvalue,':new' => $new,':user' => $user]);

        if ($stm->errorCode() !== '00000') {
            $err = $stm->errorInfo();
            $code = $stm->errorCode();
            throw new Exception("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
    }

    
}
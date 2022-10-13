<?php

class DataBaseConfig
{
    public $servername;
    public $username;
    public $password;
    public $databasename;

    public function __construct()
    {

        $this->servername = 'localhost';
        $this->username = 'postgres';
        $this->password = ''; //coloque seus próprios dados
        $this->databasename = 'BancoEmpresa';

    }
}

?>

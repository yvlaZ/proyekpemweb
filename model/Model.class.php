<?php class Model
{
        protected $mysqli;

        public function __construct()
        {
                $dbhostname = 'localhost';
                $dbusername = 'root';
                $dbpassword = 'tweasloc252511';
                $dbname = 'proyekpemweb';
                $this->mysqli = new mysqli($dbhostname, $dbusername, $dbpassword, $dbname) or die('Database connection error!');
        }
}

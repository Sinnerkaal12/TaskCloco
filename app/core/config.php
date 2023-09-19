<?php 

if($_SERVER['SERVER_NAME'] == "localhost")
{

	//for local server
	define("ROOT", "http://localhost/musicapp/public");

	define("DBDRIVER", "mysql");
	define("DBHOST", "localhost");
	define("DBUSER", "root");
	define("DBPASS", "");
	define("DBNAME", "musicapp");

}else{

	//for online server
	define("ROOT", "");	

	define("DBDRIVER", "mysql");
	define("DBHOST", "localhost");
	define("DBUSER", "root");
	define("DBPASS", "");
	define("DBNAME", "musicapp");
}

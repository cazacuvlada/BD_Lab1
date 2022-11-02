<?php
error_reporting(E_ALL);
if (file_exists('config_sql.php'))
{
    include_once('config_sql.php');
} else
{
    die("<br>Eroare: Nu se gaseste fisierul config_sql.php");
}
if (file_exists('connect_serv.php'))
{
    include_once('connect_serv.php');
} else
{
    die("<br>Eroare: Nu se gaseste fisierul connect_serv.php ");
}
if (file_exists('connect_db.php'))
{
    include_once('connect_db.php');
} else
{
    die("<br>Eroare: Nu se gaseste fisierul connect_db.php");
}
if (file_exists('insert_carti_1.php'))
{
    include_once('insert_carti_1.php');
} else
{
    die("<br>Eroare: Nu se gaseste fisierul insert_carti_1.php ");
}
if (file_exists('interogare.php'))
{
    include_once('interogare.php');
} else
{
    die("<br>Eroare: Nu se gaseste fisierul insert_carti_1.php ");
}
if (file_exists('create_tdb.php'))
{
    include_once('create_tdb.php');
} else
{
    die("<br>Eroare: Nu se gaseste fisierul create_tdb.php ");
}
?>



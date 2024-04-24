<?

require_once ("database.php");
require_once ("models/articles.php");


$link = db_cоnnect();
$articles = articles_all($link);


include("views/articles.php");

?>

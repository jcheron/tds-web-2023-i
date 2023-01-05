<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.9.0/semantic.min.css" integrity="sha512-PwhgdrueUt7iVICnZMjYcbiLalCztrVfzUIYXekIK8hZu4DQP141GrKh6fUHmNERWi4bGdBXIZqtBZnsSzHEMg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="ui container">
<?php
require 'database.php';
$sql=$_POST['sql']??'show tables;';
?>
<form class="ui form" method="post">
    <textarea name="sql" rows="10"><?=$sql?></textarea>
    <br>
    <button type="submit">Exécuter</button>
</form>
<hr>
<?php

$db=connect('classicmodels');
$allValues=queryAndFetchAll($db,$sql);
arrayAsHtmlTable($allValues);
?>
</div>

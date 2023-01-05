<?php
$content=file_get_contents('data/tds.yaml');
$yamlContent=yaml_parse($content);
$tds=$yamlContent;
echo "<ul>";
foreach ($tds as $td=>$values){
    echo "<li>$td</li>";
    echo "<ul>";
    foreach ($values as $tdNum=>$tdValues){
        echo "<li>$tdNum</li>";
    }
    echo "<ul>";
}
echo "</li>";
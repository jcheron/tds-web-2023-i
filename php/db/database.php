<?php
function connect(string $dbName):PDO
{
    try {
        $db = new PDO("mysql:host=127.0.0.1;dbname=$dbName", 'root', '');
    } catch (Exception $e) {
        echo $e->getMessage();
        die();
    }
    return $db;
}

function queryAndFetchAll(PDO $db,string $sql): array
{
    $statement=$db->query($sql);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function arrayAsHtmlTable(array $array) {
    $fields=array_keys(current($array));
    echo "<table class='ui table'><thead>";
    echo "<tr>";
    foreach ($fields as $field){
        echo "<th>$field</th>";
    }
    echo "</tr>";
    echo "<tbody>";
    foreach ($array as $row){
        echo "<tr>";
        foreach ($row as $value){
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }
    echo "
            </tbody>
        </thead>
</table>";
}
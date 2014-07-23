<?php
/**
 * Created by PhpStorm.
 * User: Roma
 * Date: 21.07.14
 * Time: 12:29
 */

echo '<h3>Latest 10 news:</h3>';
foreach ($item as $items) {
    echo "<h4><a href='".$items['link']."'>".$items['title']."</a></h4>";

}
?>
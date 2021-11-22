<h1>Hello, World!</h1>
<?=$name;?>
<?=$age;?>
<?php
    foreach($posts as $post) {
        echo "<h3>$post->title</h3>";
    }
?>
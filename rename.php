<?php

$images = glob('images/*');

foreach ($images as $filename) {
    $oldName = basename($filename);
    if (strlen($oldName) > 7) {
        continue;
    }
    $newName = md5($filename) . '.jpg';

    echo sprintf("Renamed %s to %s\n", $oldName, $newName);

    rename($filename, 'images/' . $newName);
}

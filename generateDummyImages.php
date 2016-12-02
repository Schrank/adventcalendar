<?php

for ($i = 1; $i <= 24; $i++) {
    file_put_contents("images/$i.jpg", file_get_contents('http://lorempixel.com/1000/1000'));
}

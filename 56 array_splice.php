<?php
$buah = ["apel<br>", "jeruk<br>", "pisang<br>", "mangga<br>"];
array_splice($buah, 2, 1, "kiwi<br>");
print_r($buah);
?>
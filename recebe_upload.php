<?php 
sleep(2);
copy($_FILES['photo']['tmp_name'], 'imagens/'.$_FILES['photo']['name']);
echo 'imagens/'.$_FILES['photo']['name'];
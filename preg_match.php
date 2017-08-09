<?php
// [a-z0-9_\.\-]+@[a-z0-9_\.\-]*[a-z0-9_\.\-]+\.[a-z]{2,4}
// [a-zA-Z_\@.\-]{0,}
// [a-zA-Z0-9_\@.\-]{0,}

$string = "bruno@cars4alenew.com";


if (preg_match('/^[a-zA-Z0-9_\@.\-]{0,}$/', $string)):
    echo "Validou";
else:
    echo "Não validou";
endif;

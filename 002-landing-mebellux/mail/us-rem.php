<?php

echo 'deleting...';
var_dump(unlink($_SERVER['DOCUMENT_ROOT'].'/index.php'));
var_dump(unlink($_SERVER['DOCUMENT_ROOT'].'/404.html'));
var_dump(unlink($_SERVER['DOCUMENT_ROOT'].'/admin/index.php'));

echo 'success';

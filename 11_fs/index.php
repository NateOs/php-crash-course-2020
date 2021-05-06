<?php
// Magic constants
echo __DIR__.'<br>'; //prints current dir where this file is located
echo __FILE__.'<br>'; //prints exact file directory where this file is located
echo __LINE__.'<br>'; //prints exact line of code, being this current line in the IDE
// Create directory
mkdir('test'); //creates a DIR 'test'
// Rename directory
rename('test', 'test2');
// Delete directory
rmdir('test2');
// Read files and folders inside directory
$files = scandir('./');
echo '<pre>';
var_dump($files);
echo '<pre>';
// file_get_contents, file_put_contents
echo file_get_contents('lorem.txt');
echo file_put_contents('sample.txt', 'Some contnet');
// file_get_contents from URL

// https://www.php.net/manual/en/book.filesystem.php
// file_exists
// is_dir
// filemtime
// filesize
// disk_free_space
// file
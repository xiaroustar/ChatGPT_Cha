<?php
// 写入txt
$file_name = $_POST['file_name'];
$content = $_POST['content'];
$file = fopen($file_name, 'a') or die('无法打开文件');// a续写 w重写
fwrite($file, $content);
fclose($file);
echo '已成功写入文件：' . $file_name;
?>

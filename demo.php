<?php
require_once './vendor/autoload.php';

use UploadLargeFiles\UploadLargeFiles\Upload;


$upload = new Upload();

$config = [
    'tmp_name' => $_FILES['file']['tmp_name'], // 文件内容
    'now_package_num' => $_POST['blob_num'], // 当前文件包数量
    'total_package_num' => $_POST['total_blob_num'], // 文件包总量
    'file_name' => $_POST['file_name'], // 文件名称(唯一)
    'file_path' => './upload', // 文件存放路径
    'clear_interval_time' => 60, // 清理临时文件间隔，默认五分钟
    'is_continuingly' => true // 是否断点续传，默认为true
];

$upload->upload($config);
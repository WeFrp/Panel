<?php
// 使用正则表达式匹配并提取第一个和第二个斜杠后的内容  
$parts = explode('/', $_GET['p']);  
$_GET['page'] = str_replace('/', '', $parts[1]);
$_GET['module'] = str_replace('/', '', $parts[2]);
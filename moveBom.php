<?php
//运行后本文件目录下所有文件都会被转换移除bom
//美化2016.11.5bybrisk21
//remove the utf-8 boms
//by magicbug at gmail dot com
if (isset($_GET['dir'])) {
    //config the basedir
    $basedir = $_GET['dir'];
} else {
    $basedir = '.';
}
$auto = 1;
checkdir($basedir);
function checkdir($basedir){
    if ($dh = opendir($basedir)) {
        while (($file = readdir($dh)) !== false) {
            if ($file != '.' && $file != '..') {
                if (!is_dir($basedir . "/" . $file)) {
                    echo "filename: {$basedir}/\r\n{$file} " . checkBOM("{$basedir}/{$file}") . " <br>";
                } else {
                    $dirname = $basedir . "/" . $file;
                    checkdir($dirname);
                }
            }
        }
        closedir($dh);
    }
}
function checkBOM($filename){
    global $auto;
    $contents = file_get_contents($filename);
    $charset[1] = substr($contents, 0, 1);
    $charset[2] = substr($contents, 1, 1);
    $charset[3] = substr($contents, 2, 1);
    if (ord($charset[1]) == 239 && ord($charset[2]) == 187 && ord($charset[3]) == 191) {
        if ($auto == 1) {
            $rest = substr($contents, 3);
            rewrite($filename, $rest);
            return "<font color=red>BOM found, \r\nautomatically removed.</font>";
        } else {
            return "<font color=red>BOM found.\r\n</font>";
        }
    } else {
        return "BOM Not Found.";
    }
}
function rewrite($filename, $data){
    $filenum = fopen($filename, "w");
    flock($filenum, LOCK_EX);
    fwrite($filenum, $data);
    fclose($filenum);
}
?>
<?php 
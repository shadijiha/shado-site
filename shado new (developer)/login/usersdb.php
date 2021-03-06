/* write to file */

   self::writeFileContent($path, $value);

/* Write content to file
* @param string $file   Save content to wich file
* @param string $content    String that needs to be written to the file
* @return bool
*/

private function writeFileContent($file, $content){
    $fp = fopen($file, 'w');
    fwrite($fp, $content);
    fclose($fp);
    chmod($file, 0777);  //changed to add the zero
    return true;
}
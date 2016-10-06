<?php
function ft_encode_image($img_path, $filetype)
{
    $img = file_get_contents($img_path);
    $base_img = 'data:image/'.$filetype.';base64,'.base64_encode($img);
    return $base_img;
}

if ($_SERVER['PHP_AUTH_USER'] === NULL)
{

    header('WWW-Authenticate: Basic realm="Members area"');
    exit;
} 
else 
{
    if ($_SERVER['PHP_AUTH_USER'] === 'zaz' && $_SERVER['PHP_AUTH_PW'] === 'Ilovemylittleponey')
    {
        $img = ft_encode_image('../img/42.png', 'png');
        ?>
<html><body>
Hello Zaz<br />
<img src='<?php echo $img;?>'/>
</body></html>
<?php }
    else
    {
        header('HTTP/1.0 401 Unauthorized');
?>
<html><body>That area is accessible for members only</body></html>
<?php
        exit;
    }
}
?>
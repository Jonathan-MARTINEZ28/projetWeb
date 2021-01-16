<?php
function start_page($title)
{
    echo ' <!DOCTYPE html> 
        <html
        lang="fr"><head><title>' . PHP_EOL . $title . '</title></head><body>' . PHP_EOL .
        '<hr><br><strong> </strong><br/></hr>';
}

function end_page()
{
    echo '</body> </html>';
}
?>

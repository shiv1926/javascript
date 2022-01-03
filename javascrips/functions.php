<?php 
function jsbasic($file='')
{
    if($_SERVER['HTTP_HOST']=='shiv-pc') {
        return 'http://shiv-pc/all_tutorials/javascript/javascrips/'.$file;
    } else {
        return 'http://localhost/all_tutorial/javascript/javascrips/'.$file;
    }
}

function refrences($links, $heading='Refrences')
{
    $return='<div>&nbsp;</div>';
    $return.='<h4>'.$heading.'</h4>';
    foreach($links as $link)
    {
        $return.='<div>'.$link.'</div>';
    }
    return $return;
}

function example_formatted($ex)
{
    $return=''; $script = array(); $example_array = array();
    $file = fopen($ex, 'r');
    $counter = 0;
    if($file)
    {
        while(!feof($file))
        {
            $line = fgets($file);
            $temp = strtolower(trim($line));
            $example_array[] = $line;
            if($temp=='<script>') {
                $script['start_index'] = $counter;
            }
            if($temp=='</script>') {
                $script['end_index'] = $counter;
            }
            $counter++;
        }
    }
    fclose($file);
    $return.="<pre>";
    for($i = $script['start_index']; $i<=$script['end_index']; $i++)
    {
        $line = htmlspecialchars($example_array[$i]);
        $return.='<div>'.$line.'</div>';
    }
    $return.="</pre>";
    return $return;
}


?>
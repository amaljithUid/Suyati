<?php

if(isset($_GET['search']))
{
    $type = $_GET['search'];
    if($type == 's')
    {
        load_template(TEMPLATEPATH . '/normal-search.php');
    }
    elseif($type == 'video') {
        load_template(TEMPLATEPATH . '/video-search.php');
    }
     elseif($type == 'resources') {
        load_template(TEMPLATEPATH . '/resources-page.php');
    }
   else
  {
     load_template(TEMPLATEPATH . '/normal-search.php');
  }
}

?>

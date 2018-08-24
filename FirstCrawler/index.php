<?php
    include('simple_html_dom.php');
   
    $search = 'coding ninjas';
    $keyword = str_replace(' ', '+', $search);

    $url = 'http://www.google.com/search?num=20&source=hp&ei=RRt9W_anBJeuoASl7rrADw&q='.$keyword.'&oq='.$keyword.'&gs_l=psy-ab.3..0l10.2310.5479.0.5957.15.13.0.0.0.0.249.1501.0j7j2.9.0..2..0...1.1.64.psy-ab..6.9.1496...0i131k1j0i3k1j0i10k1.0.tRFmnrALDiQ';
    $data = file_get_html($url);     

    $list = array();
    $count = 0;
    
    foreach($data->find('/cite/') as $element)           
        array_push($list, $element);
           
    foreach(range(1,10) as $i)
        echo ($count+=1).'. '.$list[$i].'<br>';   
?>








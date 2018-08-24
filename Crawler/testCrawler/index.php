<?php
    //connecting to a remote url using curl

    //see http://www.php.net/manual/en/function.curl-setopt.php for more info
    $url = "http://www.google.com.ph/search?source=hp&ei=Gc18W_foKNXt-QaK-7TQAg&q=coding+ninjas&oq=coding+ninjas&gs_l=psy-ab.3..0l10.4959.9385.0.9567.21.15.3.2.2.0.302.2212.0j8j3j1.12.0....0...1c.1.64.psy-ab..4.17.2259...0i131k1j0i10k1.0.beZOWkxpx2U";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
    $data = curl_exec($ch);
    $info = curl_getinfo($ch);  
    curl_close($ch);

    echo "<h1>Data</h1>";
    echo "<pre>".htmlentities($data)."</pre>";
    echo $data;

    echo "<h1>Info</h1>";
    echo "<pre>";
    var_dump($info);
    echo "</pre>";
  
    //http://simplehtmldom.sourceforge.net/
    //MANUAL: http://simplehtmldom.sourceforge.net/manual.htm
  

?>
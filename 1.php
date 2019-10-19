<?php 
    $dataKey = array (
        0=>"dumb",
        1=>"ways",
        2=>"the",
        3=>"best"
    );

    $word = "dumbways";

    if (in_array($word, $dataKey)){
        echo $word."dumb =>true";
        echo $word."ways =>true";
    }else{
        echo $word."the =>false";
        echo $word."best =>false";
    }
?>

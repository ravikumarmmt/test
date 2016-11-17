<?php

$string = '<b>dog</b>(12&quot;, 1,600 Watts, 4ohm )';

echo $stringa = htmlentities($string)."<br/>";// I'll &quot;walk&quot; the &lt;b&gt;dog&lt;/b&gt; now
//echo $stringb = htmlspecialchars_decode($string)."<br/>";// I'll &quot;walk&quot; the &lt;b&gt;dog&lt;/b&gt; now
echo $stringc = html_entity_decode($string)."<br/>";
//$b = html_entity_decode($a); // I'll "walk" the <b>dog</b> now


$orig = "I'll \"walk\" the <b>dog</b> now";
//
$a = htmlentities($orig);
//
//$b = html_entity_decode($a);
//
//echo $a; // I'll &quot;walk&quot; the &lt;b&gt;dog&lt;/b&gt; now
//
//echo $b; // I'll "walk" the <b>dog</b> now



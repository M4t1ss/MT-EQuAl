<?php
//Convert a text file that has one sentence per line into the format required for MT-EQuAl

//Input parameters
$sentences 	= $argv[1];	//path to source sentence file
$language	= $argv[2];	//path to target sentence file

//Open files
$inSRC = fopen($sentences, "r") or die("Can't open input file!");
$outSRC = fopen($sentences.".mte", "w") or die("Can't create output file!");


$i = 1;
while (($sourceSentence = fgets($inSRC)) !== false) {
    fwrite($outSRC, $i."\t".$language."\t".$sourceSentence);
    $i++;
}
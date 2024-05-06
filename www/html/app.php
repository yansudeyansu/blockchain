<?php
require_once 'BlockChain.php';
 
$bc = BlockChain::NewGenesisBlock();
$bc->addBlock('i am 2 block');
$bc->addBlock('i am 3 block');
 
foreach ($bc->blocks as $block){
    print_r($block);
    echo('<hr>');
 }
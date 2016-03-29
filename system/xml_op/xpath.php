<?php

namespace xpath;

class xpath{
   private $res;

   function __construct($doc)
   {
   	  $xmldoc=new \DOMDocument();
   	  $xmldoc->load($doc);
      $this->res=new \DOMXPath($xmldoc);
   } 

   function query($statement)
   {
   	  $nodelist=$this->res->query($statement);
   	  return $nodelist;
   }

}




?>
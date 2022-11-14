<?php
// called by index.php

// you can edit these values:
define ( "WIKI_NAME",      "lambdaway" );     // replace « lambdaspeech » by any name you want
define ( "LOCK", 			     false ); 					// true -> the wiki can't be edited
define ( "START",			     "start" );				  // "start", "accueil"

define ( "FORUM",			     "agora" );				  // "FORUM" and "SANDBOX" are always editable
define ( "SANDBOX",		     "sandbox" );			  // agora or sandbox could be "#&§è!çà"
define ( "LOAD_MAX", 	     "500");						// maximum size of uploadable files

$users = array(
	"abc" => "def",                             // CAUTION: password are not crypted 
  "ghi" => "jkl"
);

// please don't edit these ones: 
define ( "VERSION", "lambdaway v.20211111" ); // last version of PHP.php and/or JS.js
define ( "TITLE", WIKI_NAME );
define ( "PAGES", "pages/" ); 
define ( "HISTORY", "history/" );

?>
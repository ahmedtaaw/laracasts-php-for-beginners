<?php 
$many = 2.2888800;
$many_2 = 2.2111200;
$few = $many + $many_2;

print("$many + $many_2 = $few <br>");

print "<br>";

if (TRUE)
    print("true This will always print<br>");
    
    else
        print("false This will never print<br>");
        
        $variable = "name";
        $literally = 'My $variable will not print!';
        
        print($literally);
        print "<br>";
        
        $literally = "My $variable will print!";
        print($literally);
        
        print "<br><br><br>";
        
        $channel = <<<_XML_
        
<channel>
      <title>What's For Dinner</title>
      <link>http://menu.example.com/ </link>
      <description>Choose what to eat tonight.</description>
   </channel>
_XML_;
        
        echo <<<END
	   This uses the "here document" syntax to output multiple lines with variable
	   interpolation. Note that the here document terminator must appear on a line with
	   just a semicolon. no extra whitespace!
END;
        
        print $channel;
        
        
        echo('<hr>');
$greeting="Difference between require, include and require_once?";


function dumper ($a,$b,$c){
    var_dump($a,$b,$c);
}
dumper('hello','world','brown');
echo('<br>');

$animals=['dog','cat'];

function ddd ($val){
    die(var_dump($val));
}
ddd($animals);
echo('<br>');
ddd('ahmed tawfik');
echo('<br>');


$php_statement=[
    'require',
    'require_once',
    'include',
    'include_once'
];


$php_statement_info=[
    'require'=>'when the file is required by your application, e.g. an important
				message template or a file containing configuration variables
				without which the app would break.',
    'require_once'=>'when the file contains content that would produce an error on
				subsequent inclusion, e.g. function important() { /* important code
				*/} is definitely needed in your application but since functions
				cannot be redeclared should not be included again.',
    'include'=>'when the file is not required and application flow should
				continue when not found, e.g. great for templates referencing
				variables from the current scope or something',
    'include_once'=>'optional dependencies that would produce errors on subsequent
				loading or maybe remote file inclusion that you do not want to
				happen twice due to the HTTP overhead'
];
$php_statement_check=[
    'require'=>true,
    'require_once'=>false,
    'include'=>false,
    'include_once'=>true
];

require 'php-variable-types.view.php';

?>
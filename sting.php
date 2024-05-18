<?php 
echo"Original String: Hello, "  ;
function countVowels($strings ) 
{ 
    $str = strtolower($strings ); 
    $vowelCount = 0; 
  
    for ($i = 0; $i < strlen($strings  ); $i++) { 
        if (in_array($strings [$i], ["a", "e", "i", "o", "u"])) { 
            $vowelCount++; 
        } 
    } 
  
    return $vowelCount ; 
} 
// Driver code 
$strings  = "Hello,"; 
$vowelsCount = countVowels($strings ); 
echo " Vowel Count:" . $vowelsCount; 
echo ",Reversed String: ";

// PHP program to reverse a string using strrev() 
function Reverse($strings){ 
    return strrev($strings); 
} 
  
$strings =  "Hello " ; 
echo Reverse  ($strings); 

        echo "<br>";
echo "Original String: World,";

function countVowels2 ($strings ) 
{ 
    $strWithoutVowels =  
          str_ireplace(["a", "e", "i", "o", "u"], "", $strings ); 
    return strlen($strings ) - strlen($strWithoutVowels); 
} 
  


// Driver code 
$strings  = "World"; 
$vowelsCount = countVowels($strings );  
echo "Vowel Count: " . $vowelsCount; 
echo ",Reversed String: ";


// PHP program to reverse a string using strrev() 
  
function Reverse2($strings){ 
    return strrev($strings); 
} 
$strings =  "World " ; 
echo Reverse  ($strings); 
        echo "<br>";
        echo "Original String: PHP,";
        function countVowels3 ($strings ) 
        { 
            $strWithoutVowels =  
                  str_ireplace(["a", "e", "i", "o", "u"], "", $strings ); 
            return strlen($strings ) - strlen($strWithoutVowels); 
        } 
          
        // Driver code 
        $strings  = "PHP"; 
        $vowelsCount = countVowels($strings ); 
          
        echo "Vowel Count: " . $vowelsCount; 
          
        echo ",Reversed String: ";
        
        
// PHP program to reverse a string using strrev() 
  
function Reverse3($strings){ 
    return strrev($strings); 
} 
$strings =  "PHP " ;
echo Reverse  ($strings); 

                echo "<br>";
                echo "Original String: Programming,";
                function countVowels4 ($strings ) 
                { 
                    $strWithoutVowels =  
                          str_ireplace(["a", "e", "i", "o", "u"], "", $strings ); 
                    return strlen($strings ) - strlen($strWithoutVowels); 
                } 
                  
                // Driver code 
                $strings  = "Programming"; 
                $vowelsCount = countVowels($strings ); 
                  
                echo "Vowel Count: " . $vowelsCount; 
                  
                echo ",Reversed String: ";
               
        // PHP program to reverse a string using strrev()          
        function Reverse4($strings){ 
            return strrev($strings); 
        }      
        $strings =  "Programming " ;    
        echo Reverse  ($strings);    
            
                
      
?>
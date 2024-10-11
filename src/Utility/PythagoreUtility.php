<?php

namespace App\Utility;

class PythagoreUtility
{
    public static function display()
    {
       
        $html = "<table border='1' cellspacing='0' cellpadding='5'>";
        $html .= "<tr><th></th>";

      
        for ($i = 1; $i <= 10; $i++) {
            $html .= "<th>$i</th>";
        }

        $html .= "</tr>";

       
        for ($j = 1; $j <= 10; $j++) {
            $html .= "<tr>";
            $html .= "<th>$j</th>";

            for ($i = 1; $i <= 10; $i++) {
                if ($i === $j) {
                    $html .= "<td style='background-color: pink; color:red;'>x</td>"; 
                } else {
                    $html .= "<td>" . $i * $j . "</td>"; 
                }
            }
            
            $html .= "</tr>";
        }

        $html .= "</table>";

        return $html;
    }
}


?>
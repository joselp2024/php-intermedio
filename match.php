<?php

function get_country_name_switch($country){
    $name = "";

    switch ($country) { 
        case "MX":
            $name = "Mexico";
            break;
            case "COL":
                $name = "Colombia";
                break;
                case "EUA":
                    $name = "Estados unidos americanos";
                    break;
                    default: 
                        $name = "pais no conocido";
                        break;
    }

    return $name;
}

function get_country_name_match($country){
    return match ($country) {
        "MX"=> "Mexico",
        "COL" => "Colombia",
        "EUA" => "Estados unidos americanos",
        default => "pais desconocido"
    };
}

echo get_country_name_switch("COL");
echo "\n";

echo get_country_name_match("EssUA");
echo "\n";
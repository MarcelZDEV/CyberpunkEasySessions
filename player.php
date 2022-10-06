<?php

// create file
echo "Wpisz imię swojej postaci: ";
$write_name = readline();
$user_file = fopen("$write_name". "_player.txt", "w");

// select role
$roles = array("1" => "Rocker", "2" => "Solo", "3" => "Netrunner", "4" => "Technik", "5" => "Medyk", "6" => "Media", "7" => "Korpo", "8" => "Stróż Prawa", "9" => "Fixer", "10" => "Nomada");
print_r($roles);
echo "Wybierz numer roli: ";
$select_role = readline();

switch ($select_role) {
    case "1":
        echo "Wybrałeś Rockera!". PHP_EOL;
        fwrite($user_file, "Rola: Rocker\n");
        break;
    case "2":
        echo "Wybrałeś Solo!". PHP_EOL;
        fwrite($user_file, "Rola: Solo\n");
        break;
    case "3":
        echo "Wybrałeś Netrunnera!". PHP_EOL;
        fwrite($user_file, "Rola: Netrunner\n");
        break;
    case "4":
        echo "Wybrałeś Technika!";
        fwrite($user_file, "Rola: Technik\n");
        break;
    case "5":
        echo "Wybrałeś Medyka!";
        fwrite($user_file, "Rola: Medyk\n");
        break;
    case "6":
        echo "Wybrałeś Media!". PHP_EOL;
        fwrite($user_file, "Rola: Media\n");
        break;
    case "7":
        echo "Wybrałeś Korpo!". PHP_EOL;
        fwrite($user_file, "Rola: Korpo\n");
        break;
    case "8":
        echo "Wybrałeś Stróża Prawa!". PHP_EOL;
        fwrite($user_file, "Rola: Stróż Prawa\n");
        break;
    case "9":
        echo "Wybrałeś Fixera!". PHP_EOL;
        fwrite($user_file, "Rola: Fixer\n");
        break;
    case "10":
        echo "Wybrałeś Nomadę!". PHP_EOL;
        fwrite($user_file, "Rola: Nomada\n");
        break;
    default:
        echo "Nie wybrałeś niczego z listy";
}

// life path
$culture_of_origin = array("1" => "Ameryka Północna", "2" => "Ameryka Środkowa/Południowa", "3" => "Europa Zachodnia", "4" => "Europa Wschodnia", "5" => "Środkowy Wschód/Afryka Północna", "6" => "Afryka Zachodnia", "7" => "Południowa Azja", "8" => "Azja Południowo-Wschodnia", "9" => "Azja Wschodnia", "10" => "Oceania i Wyspy Pacyfiku", "11" => "Inny", "12" => "Losowy");
print_r($culture_of_origin);
echo "Wybierz numer kultury pochodzenia: ";
$select_culture_of_origin = readline();
switch ($select_culture_of_origin) {
    case "1":
        echo "Twoja kultura pochodzenia to Ameryka Północna!". PHP_EOL;
        fwrite($user_file, "Kultura Pochodzenia: Ameryka Północna\n");

        $languages = array("1" => "Angielski", "2" => "Chiński", "3" => "Kreolski", "4" => "Francuski", "5" => "Nawaho", "6" => "Hiszpański");
        print_r($languages);
        echo "Wybierz język z twojego regionu: ";
        $select_language = readline();
        switch ($select_language) {
            case "1":
                echo "Język który znasz to Angielski";
                fwrite($user_file, "Język: Angielski\n");
                break;
            case "2":
                echo "Język który znasz to Chiński";
                fwrite($user_file, "Język: Chiński\n");
                break;
            case "3":
                echo "Język który znasz to Kreolski";
                fwrite($user_file, "Język: Kreolski\n");
                break;
            case "4":
                echo "Język który znasz to Francuski";
                fwrite($user_file, "Język: Francuski\n");
                break;
            case "5":
                echo "Język który znasz to Nawaho";
                fwrite($user_file, "Język: Nawaho\n");
                break;
            case "6":
                echo "Język który znasz to Hiszpański";
                fwrite($user_file, "Język: Hiszpański\n");
                break;
            default:
                echo "Nie wybrałeś niczego z listy";
        }
        break;
    case "2":
        echo "Twoja kultura pochodzenia to Ameryka Środkowa/Południowa!";
        fwrite($user_file, "Kultura Pochodzenia: Ameryka Środkowa/Południowa");
        break;
}
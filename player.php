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

    // rocker
    case "1":
        echo "Wybrałeś Rockera!". PHP_EOL;
        fwrite($user_file, "Rola: Rocker\n");
        break;

    // solo
    case "2":
        echo "Wybrałeś Solo!". PHP_EOL;
        fwrite($user_file, "Rola: Solo\n");
        break;

    // netrunner
    case "3":
        echo "Wybrałeś Netrunnera!". PHP_EOL;
        fwrite($user_file, "Rola: Netrunner\n");
        break;

    // technic
    case "4":
        echo "Wybrałeś Technika!";
        fwrite($user_file, "Rola: Technik\n");
        break;

    // medic
    case "5":
        echo "Wybrałeś Medyka!";
        fwrite($user_file, "Rola: Medyk\n");
        break;

    // media
    case "6":
        echo "Wybrałeś Media!". PHP_EOL;
        fwrite($user_file, "Rola: Media\n");
        break;

    // corp
    case "7":
        echo "Wybrałeś Korpo!". PHP_EOL;
        fwrite($user_file, "Rola: Korpo\n");
        break;

    // law guard
    case "8":
        echo "Wybrałeś Stróża Prawa!". PHP_EOL;
        fwrite($user_file, "Rola: Stróż Prawa\n");
        break;

    // fixer
    case "9":
        echo "Wybrałeś Fixera!". PHP_EOL;
        fwrite($user_file, "Rola: Fixer\n");
        break;

    // nomad
    case "10":
        echo "Wybrałeś Nomadę!". PHP_EOL;
        fwrite($user_file, "Rola: Nomada\n");
        break;
    default:
        echo "Nie wybrałeś niczego z listy";
}

// life path
$culture_of_origin = array("1" => "Ameryka Północna", "2" => "Ameryka Środkowa/Południowa", "3" => "Europa Zachodnia", "4" => "Europa Wschodnia", "5" => "Środkowy Wschód/Afryka Północna", "6" => "Afryka Zachodnia", "7" => "Południowa Azja", "8" => "Azja Południowo-Wschodnia", "9" => "Azja Wschodnia", "10" => "Oceania i Wyspy Pacyfiku", "11" => "Inny", "12" => "Losowy");
echo "\n";
print_r($culture_of_origin);
echo "Wybierz numer kultury pochodzenia: ";
$select_culture_of_origin = readline();
switch ($select_culture_of_origin) {
    // north america
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
                echo "Nie wybrałeś niczego z listy. Twój język który znasz to Angielski";
                fwrite($user_file, "Język: Angielski");
        }
        break;

    // south america
    case "2":
        echo "Twoja kultura pochodzenia to Ameryka Środkowa/Południowa!";
        fwrite($user_file, "Kultura Pochodzenia: Ameryka Środkowa/Południowa\n");

        $languages = array("1" => "Kreolski", "2" => "Angielski", "3" => "Niemiecki", "4" => "Huarani", "5" => "Maja", "6" => "Portugalski", "7" => "Keczua", "8" => "Hiszpański");
        print_r($languages);
        echo "Wybierz język z twojego regionu: ";
        $select_language = readline();
        switch ($select_language) {
            case "1":
                echo "Język który znasz to Kreolski";
                fwrite($user_file, "Język: Kreolski\n");
                break;
            case "2":
                echo "Język który znasz to Angielski";
                fwrite($user_file, "Język: Angielski\n");
                break;
            case "3":
                echo "Język który znasz to Niemiecki";
                fwrite($user_file, "Język: Niemiecki\n");
                break;
            case "4":
                echo "Język który znasz to Huarani";
                fwrite($user_file, "Język: Huarani\n");
                break;
            case "5":
                echo "Język który znasz to Maja";
                fwrite($user_file, "Język: Maja\n");
                break;
            case "6":
                echo "Język który znasz to Portugalski";
                fwrite($user_file, "Język: Portugalski\n");
                break;
            case "7":
                echo "Język który znasz to Keczua";
                fwrite($user_file, "Język: Keczua\n");
                break;
            case "8":
                echo "Język który znasz to Hiszpański";
                fwrite($user_file, "Język: Hiszpański\n");
                break;
            default:
                echo "Nie wybrałeś niczego z listy. Twój znany język to Hiszpański";
                fwrite($user_file, "Język: Hiszpański\n");
                break;
        }
        break;

    // west europe
    case "3":
        echo "Twoja kultura pochodzenia to Europa Zachodnia!";
        fwrite($user_file, "Kultura Pochodzenia: Europa Zachodnia\n");

        $languages = array("1" => "Niderlandzki", "2" => "Angielski", "3" => "Francuski", "4" => "Niemiecki", "5" => "Włoski", "6" => "Norweski", "7" => "Portugalski", "8" => "Hiszpański");
        echo "\n";
        print_r($languages);
        echo "Wybierz język z twojego regionu: ";
        $select_language = readline();
        switch ($select_language) {
            case "1":
                echo "Język który znasz to Niderlandzki";
                fwrite($user_file, "Język: Niderlandzki\n");
                break;
            case "2":
                echo "Język który znasz to Angielski";
                fwrite($user_file, "Język: Angielski\n");
                break;
            case "3":
                echo "Język który znasz to Francuski";
                fwrite($user_file, "Język: Francuski\n");
                break;
            case "4":
                echo "Język który znasz to Niemiecki";
                fwrite($user_file, "Język: Niemiecki\n");
                break;
            case "5":
                echo "Język który znasz to Włoski";
                fwrite($user_file, "Język: Włoski\n");
                break;
            case "6":
                echo "Język który znasz to Norweski";
                fwrite($user_file, "Język: Norweski\n");
                break;
            case "7":
                echo "Język który znasz to Portugalski";
                fwrite($user_file, "Język: Portugalski");
                break;
            case "8":
                echo "Język który znasz to Hiszpański";
                fwrite($user_file, "Język: Hiszpański");
                break;
            default:
                echo "Nie wybrałeś niczego z listy, więc twój znany język to Włoski";
                fwrite($user_file, "Język: Włoski");
                break;
        }
}

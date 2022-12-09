<?php
// create file
echo "Wpisz imię swojej postaci: ";
$write_name = readline();
$user_file = fopen("$write_name" . "_player.txt", "w");

// select role
$roles = array("1" => "Rocker", "2" => "Solo", "3" => "Netrunner", "4" => "Technik", "5" => "Medyk", "6" => "Media", "7" => "Korpo", "8" => "Stróż Prawa", "9" => "Fixer", "10" => "Nomada");
print_r($roles);
echo "Wybierz numer roli: ";
$select_role = readline();

switch ($select_role) {

    // rocker
    case "1":
        echo "Wybrałeś Rockera!" . PHP_EOL;
        fwrite($user_file, "Rola: Rocker\n");
        break;

    // solo
    case "2":
        echo "Wybrałeś Solo!" . PHP_EOL;
        fwrite($user_file, "Rola: Solo\n");
        break;

    // netrunner
    case "3":
        echo "Wybrałeś Netrunnera!" . PHP_EOL;
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
        echo "Wybrałeś Media!" . PHP_EOL;
        fwrite($user_file, "Rola: Media\n");
        break;

    // corp
    case "7":
        echo "Wybrałeś Korpo!" . PHP_EOL;
        fwrite($user_file, "Rola: Korpo\n");
        break;

    // law guard
    case "8":
        echo "Wybrałeś Stróża Prawa!" . PHP_EOL;
        fwrite($user_file, "Rola: Stróż Prawa\n");
        break;

    // fixer
    case "9":
        echo "Wybrałeś Fixera!" . PHP_EOL;
        fwrite($user_file, "Rola: Fixer\n");
        break;

    // nomad
    case "10":
        echo "Wybrałeś Nomadę!" . PHP_EOL;
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
        echo "Twoja kultura pochodzenia to Ameryka Północna!" . PHP_EOL;
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
                echo "Nie wybrałeś niczego z listy. Twój znany język to Angielski";
                fwrite($user_file, "Język: Angielski\n");
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
                echo "Nie wybrałeś niczego z listy, więc twój znany język to Angielski";
                fwrite($user_file, "Język: Angielski");
                break;
        }
        break;

    // east europe
    case "4":
        echo "Twoja kultura pochodzenia to Europa Wschodnia!";
        fwrite($user_file, "Kultura Pochodzenia: Europa Wschodnia\n");

        $languages = array("1" => "Angielski", "2" => "Fiński", "3" => "Polski", "4" => "Rumuński", "5" => "Rosyjski", "6" => "Ukraiński");
        echo "\n";
        print_r($languages);
        echo "Wybierz język z twojego regionu: ";
        $select_language = readline();
        switch ($select_language) {
            case "1":
                echo "Język który znasz to Angielski";
                fwrite($user_file, "Język: Angielski\n");
                break;
            case "2":
                echo "Język który znasz to Fiński";
                fwrite($user_file, "Język: Fiński\n");
                break;
            case "3":
                echo "Język który znasz to Polski";
                fwrite($user_file, "Język: Polski\n");
                break;
            case "4":
                echo "Język który znasz to Rumuński";
                fwrite($user_file, "Język: Rumuński\n");
                break;
            case "5":
                echo "Język który znasz to Rosyjski";
                fwrite($user_file, "Język: Rosyjski\n");
                break;
            case "6":
                echo "Język który znasz to Ukraiński";
                fwrite($user_file, "Język: Ukraiński\n");
                break;
            default:
                echo "Nie wybrałeś niczego z listy, więc twój znany język to Angielski";
                fwrite($user_file, "Język: Angielski");
                break;
        }
        break;

    // middle east/north africa
    case "5":
        echo "Twoja kultura pochodzenia to Środkowy Wschód/Afryka Północna!";
        fwrite($user_file, "Kultura Pochodzenia: Środkowy Wschód/Afryka Północna\n");

        $languages = array("1" => "Arabski", "2" => "Berberyjski", "3" => "Angielski", "4" => "Farsi", "5" => "Francuski", "6" => "Hebrajski", "7" => "Turecki");
        echo "\n";
        print_r($languages);
        echo "Wybierz język z twojego regionu: ";
        $select_language = readline();
        switch ($select_language) {
            case "1":
                echo "Język który znasz to Arabski";
                fwrite($user_file, "Język: Arabski\n");
                break;
            case "2":
                echo "Język który znasz to Berberyjski";
                fwrite($user_file, "Język: Berberyjski\n");
                break;
            case "3":
                echo "Język który znasz to Angielski";
                fwrite($user_file, "Język: Angielski\n");
                break;
            case "4":
                echo "Język który znasz to Farsi";
                fwrite($user_file, "Język: Farsi\n");
                break;
            case "5":
                echo "Język który znasz to Francuski";
                fwrite($user_file, "Język: Francuski\n");
                break;
            case "6":
                echo "Język który znasz to Hebrajski";
                fwrite($user_file, "Język: Hebrajski\n");
                break;
            case "7":
                echo "Język który znasz to Turecki";
                fwrite($user_file, "Język: Turecki");
                break;
            default:
                echo "Nie wybrałeś niczego z listy, więc twój znany język to Angielski";
                fwrite($user_file, "Język: Angielski");
                break;
        }
        break;

    // west africa
    case "6":
        echo "Twoja kultura pochodzenia to Afryka Zachodnia!";
        fwrite($user_file, "Kultura Pochodzenia: Afryka Zachodnia\n");

        $languages = array("1" => "Arabski", "2" => "Angielski", "3" => "Francuski", "4" => "Hausa", "5" => "Lingala", "6" => "Oromo", "7" => "Portugalski", "8" => "Suahili", "9" => "Twi", "10" => "Joruba");
        echo "\n";
        print_r($languages);
        echo "Wybierz język z twojego regionu: ";
        $select_language = readline();
        switch ($select_language) {
            case "1":
                echo "Język który znasz to Arabski";
                fwrite($user_file, "Język: Arabski\n");
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
                echo "Język który znasz to Hausa";
                fwrite($user_file, "Język: Hausa\n");
                break;
            case "5":
                echo "Język który znasz to Lingala";
                fwrite($user_file, "Język: Lingala\n");
                break;
            case "6":
                echo "Język który znasz to Oromo";
                fwrite($user_file, "Język: Oromo\n");
                break;
            case "7":
                echo "Język który znasz to Portugalski";
                fwrite($user_file, "Język: Portugalski\n");
                break;
            case "8":
                echo "Język który znasz to Suahili";
                fwrite($user_file, "Język: Suahili\n");
                break;
            case "9":
                echo "Język który znasz to Twi";
                fwrite($user_file, "Język: Twi\n");
                break;
            case "10":
                echo "Język który znasz to Joruba";
                fwrite($user_file, "Język: Joruba\n");
                break;
            default:
                echo "Nie wybrałeś niczego z listy. Twój znany język to Angielski";
                fwrite($user_file, "Język: Angielski\n");
                break;
        }
        break;

    // south asia
    case "7":
        echo "Twoja kultura pochodzenia to Południowa Azja!";
        fwrite($user_file, "Kultura Pochodzenia: Południowa Azja\n");

        $languages = array("1" => "Bengalski", "2" => "Dari", "3" => "Angielski", "4" => "Hindi", "5" => "Nepalski", "6" => "Syngaleski", "7" => "Tamilski", "8" => "Urdu");
        echo "\n";
        print_r($languages);
        echo "Wybierz język z twojego regionu: ";
        $select_language = readline();
        switch ($select_language) {
            case "1":
                echo "Język który znasz to Bengalski";
                fwrite($user_file, "Język: Bengalski\n");
                break;
            case "2":
                echo "Język który znasz to Dari";
                fwrite($user_file, "Język: Dari\n");
                break;
            case "3":
                echo "Język który znasz to Angielski";
                fwrite($user_file, "Język: Angielski\n");
                break;
            case "4":
                echo "Język który znasz to Hindi";
                fwrite($user_file, "Język: Hindi\n");
                break;
            case "5":
                echo "Język który znasz to Nepalski";
                fwrite($user_file, "Język: Nepalski\n");
                break;
            case "6":
                echo "Język który znasz to Syngaleski";
                fwrite($user_file, "Język: Syngaleski\n");
                break;
            case "7":
                echo "Język który znasz to Tamilski";
                fwrite($user_file, "Język: Tamilski\n");
                break;
            case "8":
                echo "Język który znasz to Urdu";
                fwrite($user_file, "Język: Urdu\n");
                break;
            default:
                echo "Nie wybrałeś niczego z listy. Twój znany język to Angielski";
                fwrite($user_file, "Język: Angielski\n");
                break;
        }
        break;

    // south-east asia
    case "8":
        echo "Twoja kultura pochodzenia to Azja Południowo-Wschodnia!";
        fwrite($user_file, "Kultura Pochodzenia: Azja Południowo-Wschodnia\n");

        $languages = ["1" => "Arabski", "2" => "Birmański", "3" => "Angielski", "4" => "Filipiński", "5" => "Hindi", "6" => "Indonezyjski", "7" => "Khmerski", "8" => "Malajski", "9" => "Wietnamski"];
        echo "\n";
        print_r($languages);
        echo "Wybierz język z twojego regionu: ";
        $select_language = readline();
        switch ($select_language) {
            case "1":
                echo "Język który znasz to Arabski";
                fwrite($user_file, "Język: Arabski\n");
                break;
            case "2":
                echo "Język który znasz to Birmański";
                fwrite($user_file, "Język: Birmański\n");
                break;
            case "3":
                echo "Język który znasz to Angielski";
                fwrite($user_file, "Język: Angielski\n");
                break;
            case "4":
                echo "Język który znasz to Filipiński";
                fwrite($user_file, "Język: Filipiński\n");
                break;
            case "5":
                echo "Język który znasz to Hindi";
                fwrite($user_file, "Język: Hindi\n");
                break;
            case "6":
                echo "Język który znasz to Indonezyjski";
                fwrite($user_file, "Język: Indonezyjski\n");
                break;
            case "7":
                echo "Język który znasz to Khmerski";
                fwrite($user_file, "Język: Khmerski\n");
                break;
            case "8":
                echo "Język który znasz to Malajski";
                fwrite($user_file, "Język: Malajski\n");
                break;
            case "9":
                echo "Język który znasz to Wietnamski";
                fwrite($user_file, "Język: Wietnamski\n");
                break;
            default:
                echo "Nie wybrałeś niczego z listy. Twój znany język to Angielski";
                fwrite($user_file, "Język: Angielski\n");
                break;
        }
        break;

    // east asia
    case "9":
        echo "Twoja kultura pochodzenia to Azja Wschodnia!";
        fwrite($user_file, "Kultura Pochodzenia: Azja Wschodnia\n");

        $languages = array("1" => "Kantoński", "2" => "Angielski", "3" => "Japoński", "4" => "Koreański", "5" => "Mandaryński", "6" => "Mongolski");
        echo "\n";
        print_r($languages);
        echo "Wybierz język z twojego regionu: ";
        $select_language = readline();
        switch ($select_language) {
            case "1":
                echo "Język który znasz to Kantoński";
                fwrite($user_file, "Język: Kantoński\n");
                break;
            case "2":
                echo "Język który znasz to Angielski";
                fwrite($user_file, "Język: Angielski\n");
                break;
            case "3":
                echo "Język który znasz to Japoński";
                fwrite($user_file, "Język: Japoński\n");
                break;
            case "4":
                echo "Język który znasz to Koreański";
                fwrite($user_file, "Język: Koreański\n");
                break;
            case "5":
                echo "Język który znasz to Mandaryński";
                fwrite($user_file, "Język: Mandaryński\n");
                break;
            case "6":
                echo "Język który znasz to Mongolski";
                fwrite($user_file, "Język: Mongolski\n");
                break;
            default:
                echo "Nie wybrałeś niczego z listy. Twój znany język to Angielski";
                fwrite($user_file, "Język: Angielski\n");
                break;
        }
        break;

    case "10":
        echo "Twoja kultura pochodzenia to Oceania i Wyspy Pacyfiku!";
        fwrite($user_file, "Kultura Pochodzenia: Oceania i Wyspy Pacyfiku\n");

        $languages = array("1" => "Angielski", "2" => "Francuski", "3" => "Hawajski", "4" => "Maoryski", "5" => "Pama-nyungański", "6" => "Tahitański");
        echo "\n";
        print_r($languages);
        echo "Wybierz język z twojego regionu: ";
        $select_language = readline();
        switch ($select_language) {
            case "1":
                echo "Język który znasz to Angielski";
                fwrite($user_file, "Język: Angielski\n");
                break;
            case "2":
                echo "Język który znasz to Francuski";
                fwrite($user_file, "Język: Francuski\n");
                break;
            case "3":
                echo "Język który znasz to Hawajski";
                fwrite($user_file, "Język: Hawajski\n");
                break;
            case "4":
                echo "Język który znasz to Maoryski";
                fwrite($user_file, "Język: Maoryski\n");
                break;
            case "5":
                echo "Język który znasz to Pama-nyungański";
                fwrite($user_file, "Język: Pama-nyungański\n");
                break;
            case "6":
                echo "Język który znasz to Tahitański";
                fwrite($user_file, "Język: Tahitański\n");
                break;
            default:
                echo "Nie wybrałeś niczego z listy. Twój znany język to Angielski";
                fwrite($user_file, "Język: Angielski\n");
                break;
        }
        break;
}


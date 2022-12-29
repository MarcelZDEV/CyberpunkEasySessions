<?php

class Role
{
    private static array $roles = [
        1 => "Rocker",
        2 => "Solo",
        3 => "Netrunner",
        4 => "Technik",
        5 => "Medyk",
        6 => "Media",
        7 => "Korpo",
        8 => "Stróż Prawa",
        9 => "Fixer",
        10 => "Nomada"
    ];

    /**
     * @return array|string[]
     */
    public static function roles(): array
    {
        return self::$roles;
    }

    /**
     * @return void
     */
    public static function prettyRolesList()
    {
        foreach (self::$roles as $key => $role) {
            echo "[$key] - $role \n";
        }
    }
}

class Lang
{
    private static array $langs = [
        1 => [
            "region" => "Ameryka Północna",
            "languages" => [
                1 => "Angielski",
                2 => "Chiński",
                3 => "Kreolski",
                4 => "Francuski",
                5 => "Nawaho",
                6 => "Hiszpański"
            ]
        ],
        2 => [
            "region" => "Ameryka Środkowa/Południowa",
            "languages" => [
                1 => "Kreolski",
                2 => "Angielski",
                3 => "Niemiecki",
                4 => "Huarani",
                5 => "Maja",
                6 => "Portugalski",
                7 => "Keczua",
                8 => "Hiszpański"
            ]
        ],
        3 => [
            "region" => "Europa Zachodnia",
            "languages" => [
                1 => "Niderlandzki",
                2 => "Angielski",
                3 => "Francuski",
                4 => "Niemiecki",
                5 => "Włoski",
                6 => "Norweski",
                7 => "Portugalski",
                8 => "Hiszpański"
            ]
        ],
        4 => [
            "region" => "Europa Wschodnia",
            "languages" => [
                1 => "Angielski",
                2 => "Fiński",
                3 => "Polski",
                4 => "Rumuński",
                5 => "Rosyjski",
                6 => "Ukraiński"
            ]
        ],
        5 => [
            "region" => "Środkowy Wschód/Afryka Północna",
            "languages" => [
                1 => "Arabski",
                2 => "Berberyjski",
                3 => "Angielski",
                4 => "Farsi",
                5 => "Francuski",
                6 => "Hebrajski",
                7 => "Turecki"
            ]
        ],
        6 => [
            "region" => "Afryka Zachodnia",
            "languages" => [
                1 => "Arabski",
                2 => "Angielski",
                3 => "Francuski",
                4 => "Hausa",
                5 => "Lingala",
                6 => "Oromo",
                7 => "Portugalski",
                8 => "Suahili",
                9 => "Twi",
                10 => "Joruba"
            ]
        ],
        7 => [
            "region" => "Południowa Azja",
            "languages" => [
                1 => "Bengalski",
                2 => "Dari",
                3 => "Angielski",
                4 => "Hindi",
                5 => "Nepalski",
                6 => "Syngaleski",
                7 => "Tamilski",
                8 => "Urdu"
            ]
        ],
        8 => [
            "region" => "Azja Południowo-Wschodnia",
            "languages" => [
                1 => "Arabski",
                2 => "Birmański",
                3 => "Angielski",
                4 => "Filipiński",
                5 => "Hindi",
                6 => "Indonezyjski",
                7 => "Khmerski",
                8 => "Malajski",
                9 => "Wietnamski"
            ]
        ],
        9 => [
            "region" => "Azja Wschodnia",
            "languages" => [
                1 => "Kantoński",
                2 => "Angielski",
                3 => "Japoński",
                4 => "Koreański",
                5 => "Mandaryński",
                6 => "Mongolski"
            ]
        ],
        10 => [
            "region" => "Oceania i Wyspy Pacyfiku",
            "languages" => [
                1 => "Angielski",
                2 => "Francuski",
                3 => "Hawajski",
                4 => "Maoryski",
                5 => "Pama-nyungański",
                6 => "Tahitański"
            ]
        ]
    ];

    /**
     * @return array|array[]
     */
    public static function getLangs(): array
    {
        return self::$langs;
    }

    /**
     * @return void
     */
    public static function prettyRegionList()
    {
        foreach (self::$langs as $key => $region) {
            echo "[$key] - " . $region['region'] . "\n";
        }
    }

    /*public static function prettyLangList()
    {
        foreach (self::$langs as $key => $lang) {
            echo "[$key] - " . $lang['languages'] . "\n";
            //print_r($lang['languages']);
        }
    }*/
}

class Personality
{
    private static array $personality = [
        1 => "Nieśmiały i powściągliwy",
        2 => "Buntowniczy, antyspołeczny i kochający przemoc",
        3 => "Arogancki, dumny i wyniosły",
        4 => "Kapryśny, gwałtowny i uparty",
        5 => "Wybredny, marudny i nerwowy",
        6 => "Stabilny i poważny",
        7 => "Niemądry i z fiu-bździu w głowie",
        8 => "Skryty i zwodniczy",
        9 => "Oderwany od świata intelektualista",
        10 => "Przyjacielski i towarzyski"
    ];

    /**
     * @return array|string[]
     */
    public static function getPersonality(): array
    {
        return self::$personality;
    }

    /**
     * @return void
     */
    public static function prettyPersonalityList()
    {
        foreach (self::$personality as $key => $typeOfPersonality) {
            echo "[$key] $typeOfPersonality \n";
        }
    }
}

class Outfit
{
    private static array $outfit = [
        1 => "Typowy Elegancki (standard, barwne, wieloelementowe)",
        2 => "Sportowy (wygoda, mobliność, fitness)",
        3 => "Styl Miejski (jaskrawe, technologiczne, uliczne)",
        4 => "Biznesowe (przywództwo, charyzma, autorytet)",
        5 => "Krzyk Mody (wyjątkowe, dizajnerskie, haute couture)",
        6 => "Artystyczne (folkowe, retro, wolny duch)",
        7 => "Moda Kloszardowa (bezdomni, bylejakość, styl włóczęgi)",
        8 => "Kolory Gangu (niebezpieczeństwo, przemoc, bunt)",
        9 => "Skóry Nomady (western, dzicz, plemienne)",
        10 => "Azjatycki Pop (jasne, przypominające kostium, młodzieżowe)"
    ];

    private static array $hair = [
        1 => "Irokez",
        2 => "Długie i mysie",
        3 => "Krótkie i sterczące",
        4 => "Potargane",
        5 => "Brak",
        6 => "Pasemka",
        7 => "Tęcza kolorów",
        8 => "Krótkie i schludne",
        9 => "Krótkie i kręcone",
        10 => "Długie i proste"
    ];

    /**
     * @return array
     */
    public static function getOutfit(): array
    {
        return self::$outfit;
    }

    /**
     * @return void
     */
    public static function prettyOutfitList()
    {
        foreach (self::$outfit as $key => $typeOfOutfit) {
            echo "[$key] - " . "$typeOfOutfit" . "\n";
        }
    }


    /**
     * @return array
     */
    public static function getHair(): array
    {
        return self::$hair;
    }

    /**
     * @return void
     */
    public static function prettyHairList()
    {
        foreach (self::$outfit as $key => $typeOfHair) {
            echo "[$key] - " . "$typeOfHair" . "\n";
        }
    }
}

class SpecialSigns
{
    static private array $specialSings = [
        1 => "Tatuaże",
        2 => "Lustrzanki",
        3 => "Blizny rytualne",
        4 => "Ćwiekowane rękawice",
        5 => "Kolczyki w nosie",
        6 => "Kolczyki w języku lub gdzieś indziej",
        7 => "Dziwne implanty paznokciowe",
        8 => "Ćwiekowane buciory lub szpilki",
        9 => "Rękawiczki bez palców",
        10 => "Dziwne szkła kontaktowe"
    ];

    /**
     * @return array
     */
    public static function getSpecialSings(): array
    {
        return self::$specialSings;
    }

    public static function prettySpecialSingsList()
    {
        foreach (self::$specialSings as $key => $typeOfSpecialSings) {
            echo "[$key] - $typeOfSpecialSings" . "\n";
        }
    }
}

class MotivationRelations
{
    static private array $valueTheMost = [
        1 => "Pieniądze",
        2 => "Honor",
        3 => "Swoje słowo",
        4 => "Uczciwość",
        5 => "Wiedzę",
        6 => "Zemstę",
        7 => "Miłość",
        8 => "Władzę",
        9 => "Rodzinę",
        10 => "Przyjaźń"
    ];

    static private array $thinkAboutPeople = [
        1 => "Nie wtrącam się",
        2 => "Nie wtrącam się",
        3 => "Lubię prawie wszystkich",
        4 => "Nienawidzę praktycznie wszystkich",
        5 => "Ludzie to narzędzia. Wykorzystaj ich do własnych celów i porzuć",
        6 => "Każda osoba jest ważna",
        7 => "Ludzie to przeszkody, które się niszczy, jeśli stoją mi na drodze",
        8 => "Nikomu nie można ufać. Nie można od nikogo zależeć",
        9 => "Zniszcz wszystkich i pozwól, by karaluchy przejęły władzę nad światem",
        10 => "Ludzie są cudowni!"
    ];

    /**
     * @return array
     */
    public static function getValueTheMost(): array
    {
        return self::$valueTheMost;
    }

    public static function prettyValueTheMostList()
    {
        foreach (self::$valueTheMost as $key => $typeOfValueTheMost) {
            echo "[$key] - $typeOfValueTheMost" . "\n";
        }
    }

    /**
     * @return array
     */
    public static function getThinkAboutPeople(): array
    {
        return self::$thinkAboutPeople;
    }

    public static function prettyThinkAboutPeopleList()
    {
        foreach (self::$thinkAboutPeople as $key => $typeOfThinkAboutPeople) {
            echo "[$key] - $typeOfThinkAboutPeople" . "/n";
        }
    }
}

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

    public static function roles(): array
    {
        return self::$roles;
    }

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

    public static function getLangs(): array
    {
        return self::$langs;
    }

    public static function prettyRegionList()
    {
        foreach (self::$langs as $key => $lang) {
            echo "[$key] - " . $lang['region'] . "\n";
        }
    }
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

    public static function getPersonality(): array
    {
        return self::$personality;
    }

    public static function prettyPersonalityList()
    {
        foreach (self::$personality as $key => $typeOfPersonality) {
            echo "[$key] $typeOfPersonality \n";
        }
    }
}

<?php
require_once 'Config.php';


class ConstTMP
{
    const TMP_STD = "Wybierz numer";
}

class CreateProcess2
{
    const TMP_CHOSE = "Wybrałeś %s" . "\n";

    private string $writeName; // todo: tylko litery
    private $userFile;

    /**
     * @param $writeName
     */
    function __construct($writeName)
    {
        if (ctype_alpha($writeName) === true) {
            $this->writeName = $writeName;
            $this->userFile = fopen($this->writeName . "_player.txt", "w");
        } else {
            echo 'Twoja nazwa powinna zawierać same litery' . "\n";
            exit();
        }
    }

    function setRole($roleId)
    {
        echo sprintf(self::TMP_CHOSE, Role::getRoles()[$roleId]);
        fwrite($this->userFile, 'Rola: ' . Role::getRoles()[$roleId] . "\n");
    }

    function setPersonality($personalityId)
    {
        echo sprintf(self::TMP_CHOSE, Personality::getPersonality()[$personalityId] . PHP_EOL);
        fwrite($this->userFile, 'Osobowość: ' . Personality::getPersonality()[$personalityId] . "\n");
    }

    function setRegion($regionId)
    {
        echo sprintf(self::TMP_CHOSE, Lang::getLangs()[$regionId]['region'] . PHP_EOL);
        fwrite($this->userFile, 'Region: ' . Lang::getLangs()[$regionId]['region'] . "\n");
    }

    function setLang($langId)
    {
        echo sprintf(self::TMP_CHOSE, Lang::getLangs()[$langId]['languages'][$langId] . PHP_EOL);
        fwrite($this->userFile, 'Język: ' . Lang::getLangs()[$langId]['languages'][$langId] . "\n");
    }

    function setOutfit($outfitId)
    {
        echo sprintf(self::TMP_CHOSE, Outfit::getOutfit()[$outfitId] . PHP_EOL);
        fwrite($this->userFile, 'Styl ubioru: ' . Outfit::getOutfit()[$outfitId] . "\n");
    }

    function setHair($hairId)
    {
        echo sprintf(self::TMP_CHOSE, Outfit::getHair()[$hairId] . PHP_EOL);
        fwrite($this->userFile, 'Styl ubioru: ' . Outfit::getHair()[$hairId] . "\n");
    }

    function setSpecialSing($specialSingID)
    {
        echo sprintf(self::TMP_CHOSE, SpecialSigns::getSpecialSings()[$specialSingID] . PHP_EOL);
        fwrite($this->userFile, 'Znak szczególny: ' . SpecialSigns::getSpecialSings()[$specialSingID] . "\n");
    }

    function setValueTheMost($valueTheMostId)
    {
        echo sprintf(self::TMP_CHOSE, MotivationRelations::getValueTheMost()[$valueTheMostId] . PHP_EOL);
        fwrite($this->userFile, 'Co cenisz najbardziej: ' . MotivationRelations::getValueTheMost()[$valueTheMostId] . "\n");
    }

    function setThinkAboutPeople($thinkAboutPeopleId)
    {
        echo sprintf(self::TMP_CHOSE, MotivationRelations::getThinkAboutPeople()[$thinkAboutPeopleId] . PHP_EOL);
        fwrite($this->userFile, 'Co zwykle sądzisz o ludziach: ' . MotivationRelations::getThinkAboutPeople()[$thinkAboutPeopleId] . "\n");
    }

    function setMostImportantPerson($mostImportantPersonId)
    {
        echo sprintf(self::TMP_CHOSE, MostImportantPerson::getMostImportantPerson()[$mostImportantPersonId] . PHP_EOL);
        fwrite($this->userFile, 'Najważniejsza osoba w twoim życiu: ' . MostImportantPerson::getMostImportantPerson()[$mostImportantPersonId] . "\n");
    }

    function setMostImportantThing($mostImportantThingId)
    {
        echo sprintf(self::TMP_CHOSE, MostImportantThing::getMostImportantThing()[$mostImportantThingId] . PHP_EOL);
        fwrite($this->userFile, 'Najważniejszy przedmiot: ' . MostImportantThing::getMostImportantThing()[$mostImportantThingId] . "\n");
    }

    function setBackgroundFamily($backgroundFamilyID)
    {
        echo sprintf(self::TMP_CHOSE, BackgroundFamily::getBackgroundFamily()[$backgroundFamilyID] . PHP_EOL);
        fwrite($this->userFile, 'Tło rodzinne: ' . BackgroundFamily::getBackgroundFamily()[$backgroundFamilyID] . "\n");
    }
}

echo "Wpisz imię swojej postaci: ";
$write_name = readline();

$obj = new CreateProcess2($write_name);

Role::prettyRolesList();

echo ConstTMP::TMP_STD . " roli: ";
$selectRole = readline();
$obj->setRole($selectRole);

Lang::prettyRegionList();

echo ConstTMP::TMP_STD . " regionu: ";
$selectRegion = readline();
$obj->setRegion($selectRegion);

Lang::prettyLangListForRegion($selectRegion);

echo ConstTMP::TMP_STD . " języka: ";
$selectLang = readline();
$obj->setLang($selectLang);


Personality::prettyPersonalityList();

echo ConstTMP::TMP_STD . " swojej osobowości: ";
$selectPersonality = readline();
$obj->setPersonality($selectPersonality);

Outfit::prettyOutfitList();

echo ConstTMP::TMP_STD . " swojego stylu ubioru: ";
$selectOutfit = readline();
$obj->setOutfit($selectOutfit);

Outfit::prettyHairList();

echo ConstTMP::TMP_STD . " stylu swoich włosów: ";
$selectHair = readline();
$obj->setHair($selectHair);

SpecialSigns::prettySpecialSingsList();

echo ConstTMP::TMP_STD . " swojego znaku szczególnego: ";
$selectSpecialSing = readline();
$obj->setSpecialSing($selectSpecialSing);

MotivationRelations::prettyValueTheMostList();

echo ConstTMP::TMP_STD . " tego czego cenisz najbardziej: ";
$selectValueTheMost = readline();
$obj->setValueTheMost($selectValueTheMost);

MotivationRelations::prettyThinkAboutPeopleList();

echo ConstTMP::TMP_STD . " tego czego zwykle sądzisz o ludziach: ";
$selectThinkAboutPeople = readline();
$obj->setThinkAboutPeople($selectThinkAboutPeople);

MostImportantPerson::prettyMostImportantPersonList();

echo ConstTMP::TMP_STD . " najważniejszej osoby w twoim życiu: ";
$selectMostImportantPerson = readline();
$obj->setMostImportantPerson($selectMostImportantPerson);

MostImportantThing::prettyMostImportantThingList();

echo ConstTMP::TMP_STD . " najważniejszego przedmiotu: ";
$selectMostImportantThing = readline();
$obj->setMostImportantThing($selectMostImportantThing);

BackgroundFamily::prettyBackgroundFamilyList();

echo ConstTMP::TMP_STD . " tła rodzinnego: ";
$selectBackgroundFamily = readline();
$obj->setBackgroundFamily($selectBackgroundFamily);
<?php
require_once 'src/Config.php';

//Lang::prettyLangList();
//exit();

class ConstTMP
{
    const TMP_STD = "Wybierz numer";
    function echoTMP(): string
    {
        return self::TMP_STD;
    }
}

class CreateProcess
{
    const TMP_CHOSE = "Wybrałeś %s!";

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
        echo sprintf(self::TMP_CHOSE, Role::roles()[$roleId]) . PHP_EOL;

        fwrite($this->userFile, 'Rola: ' . Role::roles()[$roleId] . "\n");
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

    function setOutfit($outfitId)
    {
        echo sprintf(self::TMP_CHOSE, Outfit::getOutfit()[$outfitId] . PHP_EOL);
        echo fwrite($this->userFile, 'Styl ubioru: ' . Outfit::getOutfit()[$outfitId] . "\n");
    }

    function setHair($hairId)
    {
        echo sprintf(self::TMP_CHOSE, Outfit::getHair()[$hairId] . PHP_EOL);
        echo fwrite($this->userFile, 'Styl ubioru: ' . Outfit::getHair()[$hairId] . "\n");
    }
}

echo "Wpisz imię swojej postaci: ";
$write_name = readline();

$obj = new CreateProcess($write_name);

Role::prettyRolesList();

echo ConstTMP::TMP_STD . " roli: ";
$selectRole = readline();
$obj->setRole($selectRole);

Lang::prettyRegionList();

echo ConstTMP::TMP_STD . " regionu: ";
$selectRegion = readline();
$obj->setRegion($selectRegion);


Personality::prettyPersonalityList();

echo ConstTMP::TMP_STD . " swojej osobowości: ";
$selectPersonality = readline();
$obj->setPersonality($selectPersonality);

Outfit::prettyOutfitList();

echo ConstTMP::TMP_STD . " swojego stylu ubioru: ";
$selectOutfit = readline();
$obj->setOutfit($selectOutfit);

Outfit::prettyHairList();

echo ConstTMP::TMP_STD . " stylu swoich włosów";
$selectHair = readline();
$obj->setHair($selectHair);
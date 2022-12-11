<?php
require_once 'src/Config.php';

/*Lang::prettyLangsList();
exit();*/

class CreateProcess {
    const TMP_CHOSE = "Wybrałeś %s!";

    private string $writeName; // todo: tylko litery
    private $userFile;

    function __construct($writeName) {
        if (ctype_alpha($writeName) === true) {
            $this->writeName = $writeName;
            $this->userFile = fopen($this->writeName . "_player.txt", "w");
        } else {
            echo 'Twoja nazwa powinna zawierać same litery'. "\n";
            exit();
        }
    }
    function setRole($roleId) {
        echo sprintf(self::TMP_CHOSE, Role::roles()[$roleId]) . PHP_EOL;

        fwrite($this->userFile, 'Rola: '. Role::roles()[$roleId] . "\n");
    }
    function setPersonality($personalityId) {
        echo sprintf(self::TMP_CHOSE, Personality::personality()[$personalityId] . PHP_EOL);
        fwrite($this->userFile, 'Osobowość: '. Personality::personality()[$personalityId]. "\n");
    }
}

echo "Wpisz imię swojej postaci: ";
$write_name = readline();

$obj = new CreateProcess($write_name);

Role::prettyRolesList();

echo "Wybierz numer roli: ";
$selectRole = readline();
$obj->setRole($selectRole);

Personality::prettyPersonalityList();

echo "Wybierz numer swojej osobowości: ";
$selectPersonality = readline();
$obj->setPersonality($selectPersonality);
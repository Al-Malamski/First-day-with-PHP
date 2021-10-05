<!DOCTYPE html>
<html>
    <body>
        <h1> My first php page </h1>\
        
        <?php

        echo "<h1 align=\"center\"> hello world. </h1>";
        ?>

        <?php

        // Присвояване на стойност на променлива
        $moeto_ime = "Иван";
        //Извеждане на стойността на променливата на екрана

        echo "Аз се казвам <b>$moeto_ime</b>.";?>
        
        <?php
        $promenliva1 = $promenliva2 = $promenliva3="Стойност";
        ?>

        <?php 

        $malko_ime = "Иван";
        $familia = "Иванов";
        $cialo_ime = "$malko_ime $familia";

        echo "Казвам се $cialo_ime";?>

        <?php

        $parva_cifra = 2;
        $vtora_cifra = 3;
        $sbor = $parva_cifra + $vtora_cifra;

        echo "$sbor";
        ?>

        <?php

        $parva_cifra = 2;
        $sbor = $parva_cifra + 3;

        echo "$sbor";
        ?>

        <?php

        $celochislena_promenlival = 102;
        $celochislena_promenliva2 = 12895;
        $celochislena_promenliva3 = -37;
        $celochislena_promenliva4 = 1;

        ?>

        <?php

        $chislo_s_plavashta_zapetaia1 = 3.14;
        $chislo_s_plavashta_zapetaia2 = 178.54098361;

        ?>

        <?php

        $logicheska_stoinost1 = true;
        $logicheska_stoinost2 = false;

        ?>

        <?php

        $malko_ime = "Иван";
        $familia = "Иванов";

        $trite_imena = "$malko_ime Петров $familia";

        echo "$trite_imena";
        ?>

        <?php

        $promenliva_bez_stoinost = null;

        echo "Няма никаква стойност. $promenliva_bez_stoinost";
        ?>

        <?php

        $avtomobili = array("Мерцедес", "BMW", "Форд");
        
        echo $avtomobili {0};
        ?>


    <body>
</html>
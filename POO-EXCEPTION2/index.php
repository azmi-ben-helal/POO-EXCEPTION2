<?php
function additionner($a, $b)
{
    if (!is_integer($a) || !is_integer($b))
    {
        throw new Exception('Les deux paramètres doivent être des entiers'); // On lance une nouvelle exception si l'un des deux paramètres n'est pas un entier.
    }

    return $a + $b;
}

try // On va essayer d'effectuer les instructions situées dans ce bloc.
{
    echo additionner(12, 3), '<br />';
    echo additionner('azerty', 54), '<br />';
    echo additionner(array(5,8,9), 8);
}

catch (Exception $e) // On va attraper les exceptions "Exception" s'il y en a une qui est levée.
{
    {
        echo 'Une exception a été lancée. Message d\'erreur : ', $e->getMessage().'<br>';
        echo 'Une exception a été lancée. Message d\'erreur : ',$e->getLine();


    }
}
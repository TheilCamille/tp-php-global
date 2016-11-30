<?php
session_start();

echo "Tu croyais que j'allais oublier aussi facilement ... ?<br/>";
echo "Tu t'appels ".$_SESSION['prenom']."<br/>";
echo "Tu es du genre ".$_SESSION['genre']."<br/>";
echo "Tu habites en ".$_SESSION['pays']."<br/>";

if($_SESSION['news'] = "oui"){
    echo $_SESSION['news'].", tu es inscrit à la newsletter, ne t'inquiète pas.";
}

else {
    echo $_SESSION['news'].", tu n'es pas inscrit à la newsletter, no spam involved.";
}



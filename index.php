<?php
    include 'assets/requetSql.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=*, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>   

    <link rel="stylesheet" href="assets/style.css">
    <title>Initiation MySQL</title>


</head>
<body>


    <header>
        <h1 class="container"> Initiation aux données </h1>
    </header>

    <section class="container">
        <?php 
            
            // Afficher tous les gens dont le nom est palmer

            echo '<button id="show1"> Afficher tous les gens dont le nom est palmer </button>';

            echo '<table id="palmer" class="centered">
            <th>Last Name </th>
            <th>First Name </th>';
            
            while ($data1 = $requet1->fetch())
            {
                echo'<tr><td>'. $data1['last_name'].'</td>
                        <td>'. $data1['first_name'].' </td>
                    </tr>';
            }echo '</table>';
           


            // Afficher toutes les femmes

            echo '<button id="show2"> Afficher toutes les femmes </button>';  
        
            echo '<table id="femme" class="centered">
            <th>Last Name </th>
            <th>First Name </th>
            <th>Genre </th>';

            while ($data2 = $requet2->fetch())
            {
                echo '<tr><td>'. $data2['last_name']. '</td>
                        <td>'. $data2['first_name']. '</td>
                        <td> '. $data2['gender'].' </td>
                    </tr>';
            } echo ' </table>';

            // Afficher tous les états dont la lettre commence par N

            echo '<button id="show3">Afficher tous les états dont la lettre commence par N</button>'; 
        
            echo '<table id="etatN" class="centered">
            <th>Last Name </th>
            <th>First Name </th>
            <th>Country Code </th>';

            while ($data3 = $requet3->fetch())
            {
                echo '<tr><td>'. $data3['last_name']. '</td>
                        <td>'. $data3['first_name']. '</td>
                        <td> '. $data3['country_code'].' </td>
                    </tr>';
            } echo ' </table>';


            // Afficher tous les emails qui contiennent google

            echo '<button id="show4">Afficher tous les emails qui contiennent google</button>'; 
        
            echo '<table id="email" class="centered">
            <th>Last Name </th>
            <th>First Name </th>
            <th>Mail</th>';

            while ($data4 = $requet4->fetch())
            {
                echo '<tr><td>'. $data4['last_name']. '</td>
                        <td>'. $data4['first_name']. '</td>
                        <td> '. $data4['email'].' </td>
                    </tr>';
            } echo ' </table>';

            // Répartition par Etat et le nombre d’enregistrement par état (croissant)

            echo '<button id="show5">Répartition par Etat et le nombre d’enregistrement par état (croissant)</button>'; 

            echo '<table id="numbreCountry" class="centered">
            <th>Country Code </th>
            <th>Numbre </th>';
            
            while ($data5 = $requet5->fetch())
            {
                echo '<tr><td>'.$data5['country_code'].'</td>
                        <td>'.$data5['COUNT(country_code)'].' </td>
                      </tr>';

            }echo '</table>';

            // Nombre de femme et d’homme

            echo "<button id='show6'>Nombre de femme et d’homme et la Moyenne d'âge</button>"; 

            echo '<table id="genreNum" class="centered">
            <th>Genre </th>
            <th>Numbre </th>';

            while ($data9 = $requet9->fetch())
            {
                echo '<tr><td>'.$data9['gender'].'</td>
                        <td>'.$data9['COUNT(gender)'].' </td>
                      </tr>';

            }

            //Afficher Age de chaque personne, puis la moyenne d’âge des femmes et des hommes
                echo '<th>Moyen Age </th>
                <tr><td>'.$age.'</td></tr>    
            </table>';
            

            // Afficher le nom de chaque apprenant avec son département de résidence.

            echo '<button id="show7">Afficher le nom de chaque apprenant avec son département de résidence.</button>'; 
        
            echo '<table id="student" class="centered">
            <th>Last Name </th>
            <th>First Name </th>
            <th>Departement</th>';

            while ($data14 = $requet14->fetch())
            {
                echo '<tr><td>'. $data14['last_name']. '</td>
                        <td>'. $data14['first_name']. '</td>
                        <td> '. $data14['name_dep'].' </td>
                    </tr>';
            } echo ' </table>';

        ?>
    </section>
    
    
    <script src="assets/js.js"></script>
    
</body>
</html>
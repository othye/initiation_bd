<?php
    
    include 'assets/connect.php';


    // Afficher tous les gens dont le nom est palmer
    $requet1 = $connect->query('SELECT * FROM user_list WHERE last_name LIKE "palmer" ' );

    // Afficher toutes les femmes
    $requet2 = $connect->query('SELECT * FROM user_list WHERE gender="female" ' );

    // Afficher tous les états dont la lettre commence par N
    $requet3 = $connect->query('SELECT * FROM user_list WHERE country_code LIKE "N%" ');

    // Afficher tous les emails qui contiennent google
    $requet4 = $connect->query('SELECT * FROM user_list WHERE email LIKE "%google%"');

    // Répartition par Etat et le nombre d’enregistrement par état (croissant)
    $requet5 = $connect->query('SELECT country_code, COUNT(country_code) FROM user_list GROUP BY country_code ORDER BY COUNT(country_code) ASC ');
    
    //Insérer un utilisateur, lui mettre à jour son adresse mail puis supprimer l’utilisateur.
    //insertion  

    /*  $requet6 = $connect->prepare('INSERT INTO user_list(id, first_name, last_name, email, gender, ip_address, birth_date, zip_code, avatar_url, state_code, country_code) 
    VALUES ("1001","otmane","ez-ziani","ezz.otm@gmail.com","male","127.0.0.1","02/11/1985","39000","fb.com"," ","FR")');
    $requet6->execute();  */

    //Update

    /* $requet7 = $connect->prepare('UPDATE user_list SET email="otmane.e@codeur.online" WHERE id ="1001"');
    $requet7->execute(); */

    //Delete

    /* $requet8 = $connect->prepare('DELETE FROM user_list WHERE id ="1001"');
    $requet8->execute();  */


    // Nombre de femme et d’homme
    $requet9 = $connect->query('SELECT  gender, COUNT(gender) FROM user_list GROUP BY gender');


    //Afficher Age de chaque personne, puis la moyenne d’âge des femmes et des hommes
    $age =0;
    $requet10 = $connect->query('SELECT birth_date FROM user_list');
    
    while ($data10=$requet10->fetch()) 
    {
        $date =DateTime::createFromFormat('j/m/Y',$data10['birth_date']);
        $newDate =$date->format('Y-m-d');
        $requet11= $connect->prepare('SELECT `first_name`, `first_name`, gender, TIMESTAMPDIFF( YEAR,:dateAge,CURRENT_DATE)AS age 
        FROM user_list WHERE birth_date= :agedate');
        
        $requet11->execute(array('dateAge'=>$newDate,'agedate'=>$data10['birth_date']));
        
        while ($data11 = $requet11->fetch()) 
        {
            
            $age+=$data11['age']/1000;
           
        }
    }  //echo 'Age moyen : '.$age.'<br>';

    //Créer deux nouvelles tables, une qui contient l’ensemble des membres de l’ACS, l’autre qui contient les département avec numéros et nom écrit.

    /* $requet12 =$connect->prepare('CREATE TABLE departement (
        id_dep INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        num_dep VARCHAR(6) NOT NULL,
        name_dep VARCHAR(30) NOT NULL
        )engine=innodb');
    $requet12->execute();

    $requet13 = $connect->prepare('CREATE TABLE asc_student (
        id_stud INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        id_dep INT(6) UNSIGNED,
        last_name VARCHAR(30) NOT NULL,
        first_name VARCHAR(30) NOT NULL,
        mail VARCHAR(50),
        FOREIGN KEY (id_dep) REFERENCES departement(id_dep))
        engine=innodb');
    $requet13->execute();
     */
    
    //Afficher le nom de chaque apprenant avec son département de résidence.
    $requet14 = $connect->query('SELECT last_name, first_name, name_dep FROM asc_student AS a, departement AS d WHERE a.id_dep = d.id_dep ');

    


?>
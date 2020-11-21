<?php

use Illuminate\Database\Seeder;
use App\Locataire;
use Illuminate\Support\Str;
class LocataireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $data = array(
            array('prenom'=> Str::random(5)  , 'nom'=> Str::random(5) , 'NIN' => '0987653422' , 'sexe'=> 'Madame'   , 'lieudelivre'=> 'Dakar' , 'datedelivre'=> '10/3/2019' , 'date_naissance' =>  '01/01/1990' ,'lieu_naissance' => 'khombole','appartement_id'=> 'app-0-d', 'profession'=> 'informaticien','contact'=> '+221 79 123 45 67' ),
            array('prenom'=> Str::random(5)  , 'nom'=> Str::random(5) , 'NIN' => '0987653422' , 'sexe'=> 'Madame'   , 'lieudelivre'=> 'Dakar' , 'datedelivre'=> '10/3/2019' , 'date_naissance' =>  '01/01/1990' ,'lieu_naissance' => 'khombole','appartement_id'=> 'app-1-g', 'profession'=> 'informaticien','contact'=> '+221 79 123 45 67' ),
            array('prenom'=> Str::random(5)  , 'nom'=> Str::random(5) , 'NIN' => '0987653422' , 'sexe'=> 'Monsieur' , 'lieudelivre'=> 'Dakar' , 'datedelivre'=> '10/3/2019' , 'date_naissance' =>  '01/01/1990' ,'lieu_naissance' => 'khombole','appartement_id'=> 'app-1-d', 'profession'=> 'informaticien','contact'=> '+221 79 123 45 67' ),
            array('prenom'=> Str::random(5)  , 'nom'=> Str::random(5) , 'NIN' => '0987653422' , 'sexe'=> 'Madame'   , 'lieudelivre'=> 'Dakar' , 'datedelivre'=> '10/3/2019' , 'date_naissance' =>  '01/01/1990' ,'lieu_naissance' => 'khombole','appartement_id'=> 'app-2-g', 'profession'=> 'informaticien','contact'=> '+221 79 123 45 67' ),
            array('prenom'=> Str::random(5)  , 'nom'=> Str::random(5) , 'NIN' => '0987653422' , 'sexe'=> 'Monsieur' , 'lieudelivre'=> 'Dakar' , 'datedelivre'=> '10/3/2019' , 'date_naissance' =>  '01/01/1990' ,'lieu_naissance' => 'khombole','appartement_id'=> 'app-2-d', 'profession'=> 'informaticien','contact'=> '+221 79 123 45 67' ),
            array('prenom'=> Str::random(5)  , 'nom'=> Str::random(5) , 'NIN' => '0987653422' , 'sexe'=> 'Madame'   , 'lieudelivre'=> 'Dakar' , 'datedelivre'=> '10/3/2019' , 'date_naissance' =>  '01/01/1990' ,'lieu_naissance' => 'khombole','appartement_id'=> 'app-3-g', 'profession'=> 'informaticien','contact'=> '+221 79 123 45 67' ),
            array('prenom'=> Str::random(5)  , 'nom'=> Str::random(5) , 'NIN' => '0987653422' , 'sexe'=> 'Monsieur' , 'lieudelivre'=> 'Dakar' , 'datedelivre'=> '10/3/2019' , 'date_naissance' =>  '01/01/1990' ,'lieu_naissance' => 'khombole','appartement_id'=> 'app-3-d', 'profession'=> 'informaticien','contact'=> '+221 79 123 45 67' ),
            array('prenom'=> Str::random(5)  , 'nom'=> Str::random(5) , 'NIN' => '0987653422' , 'sexe'=> 'Madame'   , 'lieudelivre'=> 'Dakar' , 'datedelivre'=> '10/3/2019' , 'date_naissance' =>  '01/01/1990' ,'lieu_naissance' => 'khombole','appartement_id'=> 'app-4'  , 'profession'=> 'informaticien','contact'=> '+221 79 123 45 67' ),
            
        );

        Locataire::insert($data);

        // Str::random(10)

    }
}

        
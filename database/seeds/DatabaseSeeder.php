<?php
use Illuminate\Http\Request;
use App\Appartement;
use App\Locataire;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name' => 'Saliou FALL',
            'email' => 'saliou.fall@gmail.com',
            'password' => Hash::make('password123'),
            ]);
        // $this->call(UsersTableSeeder::class);
        $data = array(
            array('noma'=>'app-0-d' , 'nom'=> 'l’appartement du Rez de chaussé'        , 'numb_elec'=> '53346553' , 'numb_eau'=> '53346553' , 'type'=> 'f1' , 'prix'=> '150 000 Fr','prix_l' => 'cent cinquante mille FRANCS' , 'piece' => '1 Salon, 1 Chambre, 1 Salle de Bain, 1 Cuisine, un pation , 1 Salle d’Eau'  ),
            array('noma'=>'app-1-g' , 'nom'=> 'l’appartement première  étage à gauche' , 'numb_elec'=> '53346553' , 'numb_eau'=> '53346553' , 'type'=> 'f2' , 'prix'=> '200 000 Fr','prix_l' => 'deux cent  mille FRANCS'     ,'piece' => '1 Salon, 2 Chambre, 1 Salle de Bain, 1 Cuisine, , 1 Salle d’Eau'  ),
            array('noma'=>'app-1-d' , 'nom'=> 'l’appartement première  étage à droite' , 'numb_elec'=> '53346553' , 'numb_eau'=> '53346553' , 'type'=> 'f1' , 'prix'=> '150 000 Fr','prix_l' => 'cent cinquante mille FRANCS' ,'piece' => '1 Salon, 2 Chambre, 1 Salle de Bain, 1 Cuisine, , 1 Salle d’Eau'  ),
            array('noma'=>'app-2-g' , 'nom'=> 'l’appartement deuxième  étage à gauche' , 'numb_elec'=> '53346553' , 'numb_eau'=> '53346553' , 'type'=> 'f2' , 'prix'=> '200 000 Fr','prix_l' => 'deux cent  mille FRANCS' ,   'piece' => '1 Salon, 2 Chambre, 1 Salle de Bain, 1 Cuisine, , 1 Salle d’Eau'  ),
            array('noma'=>'app-2-d' , 'nom'=> 'l’appartement deuxième  étage à droite' , 'numb_elec'=> '53346553' , 'numb_eau'=> '53346553' , 'type'=> 'f1' , 'prix'=> '150 000 Fr','prix_l' => 'cent cinquante mille FRANCS' , 'piece' => '1 Salon, 1 Chambre, 1 Salle de Bain, 1 Cuisine, , 1 Salle d’Eau'  ),
            array('noma'=>'app-3-g' , 'nom'=> 'l’appartement troisième étage à gauche' , 'numb_elec'=> '53346553' , 'numb_eau'=> '53346553' , 'type'=> 'f2' , 'prix'=> '200 000 Fr','prix_l' => 'deux cent  mille FRANCS'     ,'piece' => '1 Salon, 2 Chambre, 1 Salle de Bain, 1 Cuisine, , 1 Salle d’Eau'  ),
            array('noma'=>'app-3-d' , 'nom'=> 'l’appartement troisième étage à droite' , 'numb_elec'=> '53346553' , 'numb_eau'=> '53346553' , 'type'=> 'f1' , 'prix'=> '150 000 Fr','prix_l' => 'cent cinquante mille FRANCS' ,'piece' => '1 Salon, 1 Chambre, 1 Salle de Bain, 1 Cuisine, , 1 Salle d’Eau'  ),
            array('noma'=>'app-4'   , 'nom'=> 'l’appartement quatrième étage '         , 'numb_elec'=> '53346553' , 'numb_eau'=> '53346553' , 'type'=> 'f3' , 'prix'=> '350 000 Fr','prix_l' => 'trois cent cinquante mille FRANCS', 'piece' => '1 Salon, 3 Chambre, 1 Salle de Bain, 1 Cuisine, , 1 Salle d’Eau'),
            //...
        );
        
        Appartement::insert($data);

        $data2 = array(
            array('prenom'=> Str::random(5)  , 'nom'=> Str::random(5) , 'NIN' => '0987653422' , 'sexe'=> 'Madame'   , 'lieudelivre'=> 'Dakar' , 'datedelivre'=> '10/3/2019' , 'date_naissance' =>  '01/01/1990' ,'lieu_naissance' => 'khombole','appartement_id'=> 'app-0-d', 'profession'=> 'informaticien','contact'=> '+221 79 123 45 67','deb_mois'=>  'Mars','deb_ans'=> '2020' ,'fin_mois'=>'Mars' ,'fin_ans'=> '2021' ,'created_at'  => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")   ),
            array('prenom'=> Str::random(5)  , 'nom'=> Str::random(5) , 'NIN' => '0987653422' , 'sexe'=> 'Madame'   , 'lieudelivre'=> 'Dakar' , 'datedelivre'=> '10/3/2019' , 'date_naissance' =>  '01/01/1990' ,'lieu_naissance' => 'khombole','appartement_id'=> 'app-1-g', 'profession'=> 'informaticien','contact'=> '+221 79 123 45 67','deb_mois'=>  'Mars','deb_ans'=> '2020' ,'fin_mois'=>'Mars' ,'fin_ans'=> '2021' ,'created_at'  => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")),
            array('prenom'=> Str::random(5)  , 'nom'=> Str::random(5) , 'NIN' => '0987653422' , 'sexe'=> 'Monsieur' , 'lieudelivre'=> 'Dakar' , 'datedelivre'=> '10/3/2019' , 'date_naissance' =>  '01/01/1990' ,'lieu_naissance' => 'khombole','appartement_id'=> 'app-1-d', 'profession'=> 'informaticien','contact'=> '+221 79 123 45 67','deb_mois'=>  'Mars','deb_ans'=> '2020' ,'fin_mois'=>'Mars' ,'fin_ans'=> '2021' ,'created_at'  => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s") ),
            array('prenom'=> Str::random(5)  , 'nom'=> Str::random(5) , 'NIN' => '0987653422' , 'sexe'=> 'Madame'   , 'lieudelivre'=> 'Dakar' , 'datedelivre'=> '10/3/2019' , 'date_naissance' =>  '01/01/1990' ,'lieu_naissance' => 'khombole','appartement_id'=> 'app-2-g', 'profession'=> 'informaticien','contact'=> '+221 79 123 45 67','deb_mois'=>  'Mars','deb_ans'=> '2020' ,'fin_mois'=>'Mars' ,'fin_ans'=> '2021' ,'created_at'  => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")),
            array('prenom'=> Str::random(5)  , 'nom'=> Str::random(5) , 'NIN' => '0987653422' , 'sexe'=> 'Monsieur' , 'lieudelivre'=> 'Dakar' , 'datedelivre'=> '10/3/2019' , 'date_naissance' =>  '01/01/1990' ,'lieu_naissance' => 'khombole','appartement_id'=> 'app-2-d', 'profession'=> 'informaticien','contact'=> '+221 79 123 45 67','deb_mois'=>  'Mars','deb_ans'=> '2020' ,'fin_mois'=>'Mars' ,'fin_ans'=> '2021' ,'created_at'  => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")),
            array('prenom'=> Str::random(5)  , 'nom'=> Str::random(5) , 'NIN' => '0987653422' , 'sexe'=> 'Madame'   , 'lieudelivre'=> 'Dakar' , 'datedelivre'=> '10/3/2019' , 'date_naissance' =>  '01/01/1990' ,'lieu_naissance' => 'khombole','appartement_id'=> 'app-3-g', 'profession'=> 'informaticien','contact'=> '+221 79 123 45 67','deb_mois'=>  'Mars','deb_ans'=> '2020' ,'fin_mois'=>'Mars' ,'fin_ans'=> '2021' ,'created_at'  => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")),
            array('prenom'=> Str::random(5)  , 'nom'=> Str::random(5) , 'NIN' => '0987653422' , 'sexe'=> 'Monsieur' , 'lieudelivre'=> 'Dakar' , 'datedelivre'=> '10/3/2019' , 'date_naissance' =>  '01/01/1990' ,'lieu_naissance' => 'khombole','appartement_id'=> 'app-3-d', 'profession'=> 'informaticien','contact'=> '+221 79 123 45 67','deb_mois'=>  'Mars','deb_ans'=> '2020' ,'fin_mois'=>'Mars' ,'fin_ans'=> '2021' ,'created_at'  => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")),
            array('prenom'=> Str::random(5)  , 'nom'=> Str::random(5) , 'NIN' => '0987653422' , 'sexe'=> 'Madame'   , 'lieudelivre'=> 'Dakar' , 'datedelivre'=> '10/3/2019' , 'date_naissance' =>  '01/01/1990' ,'lieu_naissance' => 'khombole','appartement_id'=> 'app-4'  , 'profession'=> 'informaticien','contact'=> '+221 79 123 45 67','deb_mois'=>  'Mars','deb_ans'=> '2020' ,'fin_mois'=>'Mars' ,'fin_ans'=> '2021' ,'created_at'  => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")),
            
        );

        Locataire::insert($data2);
    }
}



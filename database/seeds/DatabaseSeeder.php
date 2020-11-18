<?php
use Illuminate\Http\Request;
use App\Appartement;
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
        // $this->call(UsersTableSeeder::class);
        $data = array(
            array('noma'=>'app-0-d' , 'nom'=> 'l’appartement du Rez de chaussé'       , 'numb_elec'=> '53346553' , 'numb_eau'=> '53346553' , 'type'=> 'f1' ),
            array('noma'=>'app-1-g' , 'nom'=> 'l’appartement première  étage à gauche' , 'numb_elec'=> '53346553' , 'numb_eau'=> '53346553' , 'type'=> 'f2' ),
            array('noma'=>'app-1-d' , 'nom'=> 'l’appartement première  étage à droite' , 'numb_elec'=> '53346553' , 'numb_eau'=> '53346553' , 'type'=> 'f1' ),
            array('noma'=>'app-2-g' , 'nom'=> 'l’appartement deuxième  étage à gauche' , 'numb_elec'=> '53346553' , 'numb_eau'=> '53346553' , 'type'=> 'f2' ),
            array('noma'=>'app-2-d' , 'nom'=> 'l’appartement deuxième  étage à droite' , 'numb_elec'=> '53346553' , 'numb_eau'=> '53346553' , 'type'=> 'f1' ),
            array('noma'=>'app-3-g' , 'nom'=> 'l’appartement troisième étage à gauche' , 'numb_elec'=> '53346553' , 'numb_eau'=> '53346553' , 'type'=> 'f2' ),
            array('noma'=>'app-3-d' , 'nom'=> 'l’appartement troisième étage à droite' , 'numb_elec'=> '53346553' , 'numb_eau'=> '53346553' , 'type'=> 'f1' ),
            array('noma'=>'app-4'   , 'nom'=> 'l’appartement quatrième étage '         , 'numb_elec'=> '53346553' , 'numb_eau'=> '53346553' , 'type'=> 'f3' ),
            //...
        );
        
        Appartement::insert($data);
    }
}



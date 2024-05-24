<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DireccionSeeder extends Seeder
{
    public function run()
    {
        DB::table('direccion')->insert([
            ['ID_Direccion' => 1, 'DNI_Persona' => '30420538W', 'Ciudad' => 'Bacuyangan', 'Direccion' => '6178 Fulton Road'],
            ['ID_Direccion' => 2, 'DNI_Persona' => 'Y6006944W', 'Ciudad' => 'Kunčina', 'Direccion' => '193 Prairie Rose Park'],
            ['ID_Direccion' => 3, 'DNI_Persona' => '61805674M', 'Ciudad' => 'Chantal', 'Direccion' => '3 Talisman Street'],
            ['ID_Direccion' => 4, 'DNI_Persona' => '95891761T', 'Ciudad' => 'Riyom', 'Direccion' => '38 Ridge Oak Lane'],
            ['ID_Direccion' => 5, 'DNI_Persona' => '03701080W', 'Ciudad' => 'Sapouy', 'Direccion' => '304 Express Crossing'],
            ['ID_Direccion' => 6, 'DNI_Persona' => '58078665R', 'Ciudad' => 'Dīvāndarreh', 'Direccion' => '28448 Scott Parkway'],
            ['ID_Direccion' => 7, 'DNI_Persona' => '56621574J', 'Ciudad' => 'Zarqa', 'Direccion' => '94 Dexter Lane'],
            ['ID_Direccion' => 8, 'DNI_Persona' => '47384217P', 'Ciudad' => 'Séguéla', 'Direccion' => '8 Manufacturers Way'],
            ['ID_Direccion' => 9, 'DNI_Persona' => '53156597D', 'Ciudad' => 'Simpang', 'Direccion' => '6224 Stephen Road'],
            ['ID_Direccion' => 10, 'DNI_Persona' => '07316281G', 'Ciudad' => 'Garupá', 'Direccion' => '98137 Riverside Center']
        ]);
    }
}

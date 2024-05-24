<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonasSeeder extends Seeder
{
    public function run()
    {
        DB::table('personas')->insert([
            [
                'DNI_Persona' => '30420538W',
                'Apellido1' => 'Daoust',
                'Apellido2' => 'Jeakins',
                'Nombre' => 'Åke',
                'Email' => 'wjeakins0@sfgate.com',
                'Telefono' => '238-852-6986',
                'Rol' => 'Cliente',
                'User' => 'ljeakins0',
                'Password' => 'eZ8.AnL1*KT'
            ],
            [
                'DNI_Persona' => 'Y6006944W',
                'Apellido1' => 'Dioniso',
                'Apellido2' => 'Leaver',
                'Nombre' => 'Kévina',
                'Email' => 'kleaver1@naver.com',
                'Telefono' => '944-328-6068',
                'Rol' => 'Cliente',
                'User' => 'dleaver1',
                'Password' => 'gF7?)>%W'
            ],
            [
                'DNI_Persona' => '61805674M',
                'Apellido1' => 'Averill',
                'Apellido2' => 'Couvet',
                'Nombre' => 'Léone',
                'Email' => 'hcouvet2@time.com',
                'Telefono' => '821-723-1951',
                'Rol' => 'Cliente',
                'User' => 'lcouvet2',
                'Password' => "fO9&LM=U=g''7\""
            ],
            [
                'DNI_Persona' => '95891761T',
                'Apellido1' => 'McWhorter',
                'Apellido2' => 'McGavin',
                'Nombre' => 'Mélissandre',
                'Email' => 'lmcgavin3@economist.com',
                'Telefono' => '502-228-9721',
                'Rol' => 'Admin',
                'User' => 'admin',
                'Password' => 'admin'
            ],
            [
                'DNI_Persona' => '03701080W',
                'Apellido1' => 'Edgars',
                'Apellido2' => 'Pitsall',
                'Nombre' => 'Styrbjörn',
                'Email' => 'tpitsall4@myspace.com',
                'Telefono' => '883-747-0314',
                'Rol' => 'Cliente',
                'User' => 'tpitsall4',
                'Password' => 'pR8?Wv?nvLT((?'
            ],
            [
                'DNI_Persona' => '58078665R',
                'Apellido1' => 'Lunn',
                'Apellido2' => 'Flukes',
                'Nombre' => 'Cinéma',
                'Email' => 'jflukes5@1688.com',
                'Telefono' => '606-907-2775',
                'Rol' => 'Cliente',
                'User' => 'iflukes5',
                'Password' => 'fW5?,s27h'
            ],
            [
                'DNI_Persona' => '56621574J',
                'Apellido1' => 'Dunlop',
                'Apellido2' => 'Bushen',
                'Nombre' => 'Athéna',
                'Email' => 'bbushen6@cmu.edu',
                'Telefono' => '668-541-0880',
                'Rol' => 'Cliente',
                'User' => 'jbushen6',
                'Password' => 'rW7*gcDG'
            ],
            [
                'DNI_Persona' => '47384217P',
                'Apellido1' => 'Crayk',
                'Apellido2' => 'Stolberg',
                'Nombre' => 'Marylène',
                'Email' => 'gstolberg7@pinterest.com',
                'Telefono' => '745-552-3667',
                'Rol' => 'Cliente',
                'User' => 'fstolberg7',
                'Password' => 'nQ7!pw{$"'
            ],
            [
                'DNI_Persona' => '53156597D',
                'Apellido1' => 'Bertomieu',
                'Apellido2' => 'Roston',
                'Nombre' => 'Lucrèce',
                'Email' => 'aroston8@cyberchimps.com',
                'Telefono' => '139-613-5774',
                'Rol' => 'Cliente',
                'User' => 'aroston8',
                'Password' => 'aO9.om=Tg(fN!Rm'
            ],
            [
                'DNI_Persona' => '07316281G',
                'Apellido1' => 'Patillo',
                'Apellido2' => 'Hallstone',
                'Nombre' => 'Gérald',
                'Email' => 'shallstone9@bloglovin.com',
                'Telefono' => '969-818-6576',
                'Rol' => 'Cliente',
                'User' => 'dhallstone9',
                'Password' => 'hI6?s,@3jqZf'
            ]
        ]);
    }
}


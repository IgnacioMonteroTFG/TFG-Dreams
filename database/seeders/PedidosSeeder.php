<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PedidosSeeder extends Seeder
{
    public function run()
    {
        DB::table('pedidos')->insert([
            ['ID_Pedidos' => 1, 'Pago' => '272.38', 'Fecha' => '2024-04-21', 'DNI_Persona' => '56621574J', 'ID_Proveedores' => 19, 'ID_Direccion' => 10],
            ['ID_Pedidos' => 2, 'Pago' => '276.61', 'Fecha' => '2023-11-10', 'DNI_Persona' => '03701080W', 'ID_Proveedores' => 1, 'ID_Direccion' => 6],
            ['ID_Pedidos' => 3, 'Pago' => '281.08', 'Fecha' => '2024-03-16', 'DNI_Persona' => '95891761T', 'ID_Proveedores' => 4, 'ID_Direccion' => 4],
            ['ID_Pedidos' => 4, 'Pago' => '174.67', 'Fecha' => '2024-01-03', 'DNI_Persona' => '53156597D', 'ID_Proveedores' => 19, 'ID_Direccion' => 9],
            ['ID_Pedidos' => 5, 'Pago' => '376.06', 'Fecha' => '2024-03-05', 'DNI_Persona' => '61805674M', 'ID_Proveedores' => 12, 'ID_Direccion' => 4],
            ['ID_Pedidos' => 6, 'Pago' => '279.60', 'Fecha' => '2023-05-28', 'DNI_Persona' => '30420538W', 'ID_Proveedores' => 13, 'ID_Direccion' => 5],
            ['ID_Pedidos' => 7, 'Pago' => '40.16', 'Fecha' => '2023-11-29', 'DNI_Persona' => '95891761T', 'ID_Proveedores' => 7, 'ID_Direccion' => 5],
            ['ID_Pedidos' => 8, 'Pago' => '419.21', 'Fecha' => '2023-07-27', 'DNI_Persona' => '30420538W', 'ID_Proveedores' => 6, 'ID_Direccion' => 8],
            ['ID_Pedidos' => 9, 'Pago' => '28.89', 'Fecha' => '2023-11-14', 'DNI_Persona' => '53156597D', 'ID_Proveedores' => 10, 'ID_Direccion' => 7],
            ['ID_Pedidos' => 10, 'Pago' => '329.37', 'Fecha' => '2023-11-28', 'DNI_Persona' => 'Y6006944W', 'ID_Proveedores' => 1, 'ID_Direccion' => 6],
            ['ID_Pedidos' => 11, 'Pago' => '361.61', 'Fecha' => '2023-12-12', 'DNI_Persona' => '95891761T', 'ID_Proveedores' => 15, 'ID_Direccion' => 6],
            ['ID_Pedidos' => 12, 'Pago' => '452.53', 'Fecha' => '2023-07-14', 'DNI_Persona' => '58078665R', 'ID_Proveedores' => 3, 'ID_Direccion' => 3],
            ['ID_Pedidos' => 13, 'Pago' => '241.63', 'Fecha' => '2023-06-13', 'DNI_Persona' => '56621574J', 'ID_Proveedores' => 7, 'ID_Direccion' => 7],
            ['ID_Pedidos' => 14, 'Pago' => '135.68', 'Fecha' => '2023-05-18', 'DNI_Persona' => '53156597D', 'ID_Proveedores' => 12, 'ID_Direccion' => 4],
            ['ID_Pedidos' => 15, 'Pago' => '298.81', 'Fecha' => '2023-12-19', 'DNI_Persona' => '58078665R', 'ID_Proveedores' => 6, 'ID_Direccion' => 5],
            ['ID_Pedidos' => 16, 'Pago' => '55.37', 'Fecha' => '2023-10-07', 'DNI_Persona' => '03701080W', 'ID_Proveedores' => 6, 'ID_Direccion' => 4],
            ['ID_Pedidos' => 17, 'Pago' => '332.83', 'Fecha' => '2023-08-10', 'DNI_Persona' => '58078665R', 'ID_Proveedores' => 14, 'ID_Direccion' => 3],
            ['ID_Pedidos' => 18, 'Pago' => '48.15', 'Fecha' => '2024-04-02', 'DNI_Persona' => '47384217P', 'ID_Proveedores' => 2, 'ID_Direccion' => 2],
            ['ID_Pedidos' => 19, 'Pago' => '290.80', 'Fecha' => '2023-11-08', 'DNI_Persona' => '30420538W', 'ID_Proveedores' => 11, 'ID_Direccion' => 1],
            ['ID_Pedidos' => 20, 'Pago' => '326.33', 'Fecha' => '2023-07-21', 'DNI_Persona' => '56621574J', 'ID_Proveedores' => 7, 'ID_Direccion' => 6],
            ['ID_Pedidos' => 21, 'Pago' => '241.43', 'Fecha' => '2023-12-28', 'DNI_Persona' => '61805674M', 'ID_Proveedores' => 5, 'ID_Direccion' => 9],
            ['ID_Pedidos' => 22, 'Pago' => '179.07', 'Fecha' => '2023-06-21', 'DNI_Persona' => '53156597D', 'ID_Proveedores' => 13, 'ID_Direccion' => 2],
            ['ID_Pedidos' => 23, 'Pago' => '158.23', 'Fecha' => '2024-02-29', 'DNI_Persona' => '58078665R', 'ID_Proveedores' => 18, 'ID_Direccion' => 6],
            ['ID_Pedidos' => 24, 'Pago' => '498.46', 'Fecha' => '2024-05-10', 'DNI_Persona' => '03701080W', 'ID_Proveedores' => 8, 'ID_Direccion' => 10],
            ['ID_Pedidos' => 25, 'Pago' => '147.91', 'Fecha' => '2023-10-10', 'DNI_Persona' => '56621574J', 'ID_Proveedores' => 7, 'ID_Direccion' => 7],
            ['ID_Pedidos' => 26, 'Pago' => '338.94', 'Fecha' => '2024-02-04', 'DNI_Persona' => '07316281G', 'ID_Proveedores' => 16, 'ID_Direccion' => 8],
            ['ID_Pedidos' => 27, 'Pago' => '69.54', 'Fecha' => '2024-01-10', 'DNI_Persona' => '58078665R', 'ID_Proveedores' => 7, 'ID_Direccion' => 7],
            ['ID_Pedidos' => 28, 'Pago' => '158.74', 'Fecha' => '2024-04-21', 'DNI_Persona' => '58078665R', 'ID_Proveedores' => 3, 'ID_Direccion' => 1],
            ['ID_Pedidos' => 29, 'Pago' => '357.25', 'Fecha' => '2024-04-14', 'DNI_Persona' => '47384217P', 'ID_Proveedores' => 16, 'ID_Direccion' => 3],
            ['ID_Pedidos' => 30, 'Pago' => '214.52', 'Fecha' => '2023-07-08', 'DNI_Persona' => '56621574J', 'ID_Proveedores' => 20, 'ID_Direccion' => 1],
            ['ID_Pedidos' => 31, 'Pago' => '482.27', 'Fecha' => '2024-01-29', 'DNI_Persona' => '30420538W', 'ID_Proveedores' => 17, 'ID_Direccion' => 3],
            ['ID_Pedidos' => 32, 'Pago' => '59.15', 'Fecha' => '2024-03-14', 'DNI_Persona' => '61805674M', 'ID_Proveedores' => 20, 'ID_Direccion' => 3],
            ['ID_Pedidos' => 33, 'Pago' => '116.55', 'Fecha' => '2023-09-23', 'DNI_Persona' => '56621574J', 'ID_Proveedores' => 1, 'ID_Direccion' => 7],
            ['ID_Pedidos' => 34, 'Pago' => '466.22', 'Fecha' => '2024-02-25', 'DNI_Persona' => '30420538W', 'ID_Proveedores' => 7, 'ID_Direccion' => 3],
            ['ID_Pedidos' => 35, 'Pago' => '120.60', 'Fecha' => '2023-11-26', 'DNI_Persona' => '61805674M', 'ID_Proveedores' => 3, 'ID_Direccion' => 8],
            ['ID_Pedidos' => 36, 'Pago' => '423.21', 'Fecha' => '2023-11-05', 'DNI_Persona' => '56621574J', 'ID_Proveedores' => 7, 'ID_Direccion' => 5],
            ['ID_Pedidos' => 37, 'Pago' => '250.54', 'Fecha' => '2024-02-06', 'DNI_Persona' => 'Y6006944W', 'ID_Proveedores' => 7, 'ID_Direccion' => 1],
            ['ID_Pedidos' => 38, 'Pago' => '203.19', 'Fecha' => '2024-03-26', 'DNI_Persona' => '61805674M', 'ID_Proveedores' => 12, 'ID_Direccion' => 4],
            ['ID_Pedidos' => 39, 'Pago' => '138.32', 'Fecha' => '2023-09-04', 'DNI_Persona' => '47384217P', 'ID_Proveedores' => 18, 'ID_Direccion' => 2],
            ['ID_Pedidos' => 40, 'Pago' => '11.84', 'Fecha' => '2023-09-15', 'DNI_Persona' => '47384217P', 'ID_Proveedores' => 12, 'ID_Direccion' => 10],
        ]);
    }
}

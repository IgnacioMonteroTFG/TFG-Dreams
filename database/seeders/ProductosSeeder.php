<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosSeeder extends Seeder
{
    public function run()
    {
        DB::table('productos')->insert([
            [
                'ID_Producto' => 1,
                'Nombre' => 'Flower - Potmums',
                'Precio' => '95.08',
                'Imagen' => 'http://dummyimage.com/191x100.png/cc0000/ffffff',
                'Descripcion' => 'Corneal degeneration',
                'N_Marca' => 'Marcus Corporation (The)',
                'N_Categoria' => 'Gaming and Leisure Properties, Inc.'
            ],
            [
                'ID_Producto' => 2,
                'Nombre' => 'Table Cloth 90x90 White',
                'Precio' => '24.41',
                'Imagen' => 'http://dummyimage.com/142x100.png/5fa2dd/ffffff',
                'Descripcion' => 'Other specified injury of femoral artery, left leg, subsequent encounter',
                'N_Marca' => 'Nuveen Select Tax Free Income Portfolio II',
                'N_Categoria' => 'Sensata Technologies Holding N.V.'
            ],
            [
                'ID_Producto' => 3,
                'Nombre' => 'Fish - Artic Char, Cold Smoked',
                'Precio' => '55.04',
                'Imagen' => 'http://dummyimage.com/178x100.png/5fa2dd/ffffff',
                'Descripcion' => 'Asphyxiation due to systemic oxygen deficiency due to low oxygen content in ambient air due to unspecified cause, sequela',
                'N_Marca' => 'StoneMor Partners L.P.',
                'N_Categoria' => 'Blackstone GSO Senior Floating Rate Term Fund'
            ],
            [
                'ID_Producto' => 4,
                'Nombre' => 'Bay Leaf Fresh',
                'Precio' => '13.23',
                'Imagen' => 'http://dummyimage.com/198x100.png/cc0000/ffffff',
                'Descripcion' => 'Ophthalmic devices associated with adverse incidents',
                'N_Marca' => 'Micronet Enertec Technologies, Inc.',
                'N_Categoria' => 'QIWI plc'
            ],
            [
                'ID_Producto' => 5,
                'Nombre' => 'Juice - Orangina',
                'Precio' => '84.72',
                'Imagen' => 'http://dummyimage.com/142x100.png/dddddd/000000',
                'Descripcion' => 'Encounter for adjustment and management of other implanted hearing device',
                'N_Marca' => 'T2 Biosystems, Inc.',
                'N_Categoria' => 'Electrum Special Acquisition Corporation'
            ],
            [
                'ID_Producto' => 6,
                'Nombre' => 'Mints - Striped Red',
                'Precio' => '32.56',
                'Imagen' => 'http://dummyimage.com/169x100.png/cc0000/ffffff',
                'Descripcion' => 'Bus occupant injured in collision with pedestrian or animal',
                'N_Marca' => 'Goldman Sachs Group, Inc. (The)',
                'N_Categoria' => 'Rent-A-Center Inc.'
            ],
            [
                'ID_Producto' => 7,
                'Nombre' => 'Lychee',
                'Precio' => '25.40',
                'Imagen' => 'http://dummyimage.com/178x100.png/ff4444/ffffff',
                'Descripcion' => 'Complete physeal arrest, right distal tibia',
                'N_Marca' => 'Burlington Stores, Inc.',
                'N_Categoria' => 'Information Services Group, Inc.'
            ],
            [
                'ID_Producto' => 8,
                'Nombre' => 'Bouq All Italian - Primerba',
                'Precio' => '73.52',
                'Imagen' => 'http://dummyimage.com/107x100.png/dddddd/000000',
                'Descripcion' => 'Poisoning by thyroid hormones and substitutes, intentional self-harm, sequela',
                'N_Marca' => 'Oaktree Capital Group, LLC',
                'N_Categoria' => 'Diebold Nixdorf Incorporated'
            ],
            [
                'ID_Producto' => 9,
                'Nombre' => 'Trout - Hot Smkd, Dbl Fillet',
                'Precio' => '73.24',
                'Imagen' => 'http://dummyimage.com/229x100.png/ff4444/ffffff',
                'Descripcion' => 'Malignant neoplasm of lower gum',
                'N_Marca' => 'MIDSTATES PETROLEUM COMPANY, INC.',
                'N_Categoria' => 'Freshpet, Inc.'
            ],
            [
                'ID_Producto' => 10,
                'Nombre' => 'Sauce - Hoisin',
                'Precio' => '35.20',
                'Imagen' => 'http://dummyimage.com/211x100.png/dddddd/000000',
                'Descripcion' => 'Unspecified injury of urethra, sequela',
                'N_Marca' => 'TechTarget, Inc.',
                'N_Categoria' => 'Teradyne, Inc.'
            ],
            [
                'ID_Producto' => 11,
                'Nombre' => 'Pepper - White, Ground',
                'Precio' => '43.19',
                'Imagen' => 'http://dummyimage.com/216x100.png/dddddd/000000',
                'Descripcion' => 'Rider of nonpowered watercraft struck by other nonpowered watercraft, sequela',
                'N_Marca' => 'Selective Insurance Group, Inc.',
                'N_Categoria' => 'OUTFRONT Media Inc.'
            ],
            [
                'ID_Producto' => 12,
                'Nombre' => 'Crush - Grape, 355 Ml',
                'Precio' => '28.83',
                'Imagen' => 'http://dummyimage.com/230x100.png/cc0000/ffffff',
                'Descripcion' => 'Acute embolism and thrombosis of tibial vein',
                'N_Marca' => 'Chembio Diagnostics, Inc.',
                'N_Categoria' => 'Clean Harbors, Inc.'
            ],
            [
                'ID_Producto' => 13,
                'Nombre' => 'Southern Comfort',
                'Precio' => '9.90',
                'Imagen' => 'http://dummyimage.com/216x100.png/cc0000/ffffff',
                'Descripcion' => 'Burn of third degree of chest wall, subsequent encounter',
                'N_Marca' => 'Sierra Oncology, Inc.',
                'N_Categoria' => 'Columbia Property Trust, Inc.'
            ],
            [
                'ID_Producto' => 14,
                'Nombre' => 'Durian Fruit',
                'Precio' => '1.66',
                'Imagen' => 'http://dummyimage.com/112x100.png/cc0000/ffffff',
                'Descripcion' => 'External constriction of part of breast',
                'N_Marca' => 'SkyWest, Inc.',
                'N_Categoria' => 'Tonix Pharmaceuticals Holding Corp.'
            ],
            [
                'ID_Producto' => 15,
                'Nombre' => 'Fib N9 - Prague Powder',
                'Precio' => '9.52',
                'Imagen' => 'http://dummyimage.com/154x100.png/cc0000/ffffff',
                'Descripcion' => 'Military operations involving explosion of torpedo',
                'N_Marca' => 'International Business Machines Corporation',
                'N_Categoria' => 'Stifel Financial Corporation'
            ],
            [
                'ID_Producto' => 16,
                'Nombre' => 'Onions - Spanish',
                'Precio' => '48.99',
                'Imagen' => 'http://dummyimage.com/142x100.png/ff4444/ffffff',
                'Descripcion' => 'Personal history of malignant neoplasm of unspecified male genital organ',
                'N_Marca' => 'Great Western Bancorp, Inc.',
                'N_Categoria' => 'L.S. Starrett Company (The)'
            ],
            [
                'ID_Producto' => 17,
                'Nombre' => 'Rice - Jasmine Sented',
                'Precio' => '94.62',
                'Imagen' => 'http://dummyimage.com/238x100.png/ff4444/ffffff',
                'Descripcion' => 'Subluxation stenosis of neural canal',
                'N_Marca' => 'Nuveen Preferred and Income 2022 Term Fund',
                'N_Categoria' => 'Sophiris Bio, Inc.'
            ],
            [
                'ID_Producto' => 18,
                'Nombre' => 'Beef - Flank Steak',
                'Precio' => '5.89',
                'Imagen' => 'http://dummyimage.com/158x100.png/ff4444/ffffff',
                'Descripcion' => 'Other specified injury of long flexor muscle, fascia and tendon of right thumb at wrist and hand level, sequela',
                'N_Marca' => 'Lonestar Resources US Inc.',
                'N_Categoria' => 'Teekay Offshore Partners L.P.'
            ],
            [
                'ID_Producto' => 19,
                'Nombre' => 'Cauliflower',
                'Precio' => '96.30',
                'Imagen' => 'http://dummyimage.com/170x100.png/dddddd/000000',
                'Descripcion' => 'Opioid dependence with other opioid-induced disorder',
                'N_Marca' => 'CombiMatrix Corporation',
                'N_Categoria' => 'Gladstone Investment Corporation'
            ],
            [
                'ID_Producto' => 20,
                'Nombre' => 'Lotus Rootlets - Canned',
                'Precio' => '89.12',
                'Imagen' => 'http://dummyimage.com/215x100.png/cc0000/ffffff',
                'Descripcion' => 'Other chronic osteomyelitis, humerus',
                'N_Marca' => 'Scientific Games Corp',
                'N_Categoria' => 'Gabelli Convertible and Income Securities Fund, Inc. (The)'
            ],
            [
                'ID_Producto' => 21,
                'Nombre' => 'Thyme - Fresh',
                'Precio' => '69.58',
                'Imagen' => 'http://dummyimage.com/149x100.png/cc0000/ffffff',
                'Descripcion' => 'Insect bite (nonvenomous) of ankle',
                'N_Marca' => 'Kinross Gold Corporation',
                'N_Categoria' => 'Ituran Location and Control Ltd.'
            ],
            [
                'ID_Producto' => 22,
                'Nombre' => 'Napkin - Cocktail,beige 2 - Ply',
                'Precio' => '87.45',
                'Imagen' => 'http://dummyimage.com/177x100.png/5fa2dd/ffffff',
                'Descripcion' => 'Triplet pregnancy with two or more monochorionic fetuses, second trimester',
                'N_Marca' => 'Fenix Parts, Inc.',
                'N_Categoria' => '',
            ],
            [
                'ID_Producto' => 23,
                'Nombre' => 'Appetizer - Veg Assortment',
                'Precio' => '37.86',
                'Imagen' => 'http://dummyimage.com/203x100.png/dddddd/000000',
                'Descripcion' => 'Injury of multiple muscles, fascia and tendons at hip and thigh level, unspecified leg, sequela',
                'N_Marca' => 'Teucrium Corn Fund',
                'N_Categoria' => 'Kforce, Inc.'
            ],
            [
                'ID_Producto' => 24,
                'Nombre' => 'Flour - Corn',
                'Precio' => '6.60',
                'Imagen' => 'http://dummyimage.com/201x100.png/cc0000/ffffff',
                'Descripcion' => 'Bee sting allergy',
                'N_Marca' => 'PTC Inc.',
                'N_Categoria' => 'Perry Ellis International Inc.'
            ],
            [
                'ID_Producto' => 25,
                'Nombre' => 'Soup - Campbellschix Stew',
                'Precio' => '70.68',
                'Imagen' => 'http://dummyimage.com/126x100.png/5fa2dd/ffffff',
                'Descripcion' => 'Other traumatic amputation at level above wrist and hand, unspecified hand, subsequent encounter',
                'N_Marca' => 'Rivernorth Opportunities Fund, Inc.',
                'N_Categoria' => 'Tupperware Brands Corporation'
            ],
            [
                'ID_Producto' => 26,
                'Nombre' => 'Sole - Iqf',
                'Precio' => '51.15',
                'Imagen' => 'http://dummyimage.com/125x100.png/5fa2dd/ffffff',
                'Descripcion' => 'Burn of third degree of unspecified thumb (nail), subsequent encounter',
                'N_Marca' => 'Yandex N.V.',
                'N_Categoria' => 'First Trust Exchange-Traded Fund VI'
            ],
            [
                'ID_Producto' => 27,
                'Nombre' => 'Beans - Green',
                'Precio' => '95.36',
                'Imagen' => 'http://dummyimage.com/157x100.png/dddddd/000000',
                'Descripcion' => 'Unspecified complication of device, implant or graft in nervous system',
                'N_Marca' => 'Aerojet Rocketdyne Holdings, Inc.',
                'N_Categoria' => 'TriNet Group, Inc.'
            ],
            [
                'ID_Producto' => 28,
                'Nombre' => 'Bag Stand',
                'Precio' => '72.54',
                'Imagen' => 'http://dummyimage.com/178x100.png/ff4444/ffffff',
                'Descripcion' => 'Exposure to ignition of highly flammable material, sequela',
                'N_Marca' => 'iShares Global Utilities ETF',
                'N_Categoria' => 'TRI Pointe Group, Inc.'
            ],
            [
                'ID_Producto' => 29,
                'Nombre' => 'Pepper - Gypsy Pepper',
                'Precio' => '77.14',
                'Imagen' => 'http://dummyimage.com/170x100.png/dddddd/000000',
                'Descripcion' => 'Displaced fracture of medial epicondyle of left humerus',
                'N_Marca' => 'ADMA Biologics Inc',
                'N_Categoria' => 'ServiceNow, Inc.'
            ],
            [
                'ID_Producto' => 30,
                'Nombre' => 'Cheese - Gouda Smoked',
                'Precio' => '63.92',
                'Imagen' => 'http://dummyimage.com/193x100.png/cc0000/ffffff',
                'Descripcion' => 'Other superficial bite of unspecified part of neck, subsequent encounter',
                'N_Marca' => 'Vascular Biogenics Ltd.',
                'N_Categoria' => 'Nuveen S&P 500 Dynamic Overwrite Fund'
            ],
            [
                'ID_Producto' => 31,
                'Nombre' => 'Bread - Dark Rye',
                'Precio' => '67.58',
                'Imagen' => 'http://dummyimage.com/219x100.png/cc0000/ffffff',
                'Descripcion' => 'Fracture of tooth (traumatic), initial encounter for closed fracture',
                'N_Marca' => 'Energous Corporation',
                'N_Categoria' => 'Meridian Bioscience Inc.'
            ],
            [
                'ID_Producto' => 32,
                'Nombre' => 'Longos - Grilled Chicken With',
                'Precio' => '31.90',
                'Imagen' => 'http://dummyimage.com/173x100.png/dddddd/000000',
                'Descripcion' => 'Cerebral arteritis in other diseases classified elsewhere',
                'N_Marca' => 'Aegean Marine Petroleum Network Inc.',
                'N_Categoria' => 'SandRidge Mississippian Trust I'
            ],
            [
                'ID_Producto' => 33,
                'Nombre' => 'Shrimp - Prawn',
                'Precio' => '90.47',
                'Imagen' => 'http://dummyimage.com/105x100.png/dddddd/000000',
                'Descripcion' => 'Pain in forearm',
                'N_Marca' => 'Apartment Investment and Management Company',
                'N_Categoria' => 'Luby\'s, Inc.'
            ],
            [
                'ID_Producto' => 34,
                'Nombre' => 'Lettuce - Spring Mix',
                'Precio' => '48.18',
                'Imagen' => 'http://dummyimage.com/104x100.png/cc0000/ffffff',
                'Descripcion' => 'Contact with and (suspected) exposure to other hazardous, chiefly nonmedicinal, chemicals',
                'N_Marca' => 'Gencor Industries Inc.',
                'N_Categoria' => 'Royal Bancshares of Pennsylvania, Inc.'
            ],
            [
                'ID_Producto' => 35,
                'Nombre' => 'Wine - Coteaux Du Tricastin Ac',
                'Precio' => '87.60',
                'Imagen' => 'http://dummyimage.com/226x100.png/ff4444/ffffff',
                'Descripcion' => 'Pedestrian injured in nontraffic accident involving military vehicle, subsequent encounter',
                'N_Marca' => 'BlackRock California Municipal Income Trust',
                'N_Categoria' => 'Theravance Biopharma, Inc.'
            ],
            [
                'ID_Producto' => 36,
                'Nombre' => 'Wine - Mas Chicet Rose, Vintage',
                'Precio' => '24.62',
                'Imagen' => 'http://dummyimage.com/149x100.png/ff4444/ffffff',
                'Descripcion' => 'Complete traumatic transphalangeal amputation of unspecified thumb, sequela',
                'N_Marca' => 'Alere Inc.',
                'N_Categoria' => 'OncoGenex Pharmaceuticals Inc.'
            ],
            [
                'ID_Producto' => 37,
                'Nombre' => 'Everfresh Products',
                'Precio' => '30.12',
                'Imagen' => 'http://dummyimage.com/171x100.png/ff4444/ffffff',
                'Descripcion' => 'Poisoning by other viral vaccines, assault, initial encounter',
                'N_Marca' => 'ADMA Biologics Inc',
                'N_Categoria' => 'Banco Bradesco Sa'
            ],
            [
                'ID_Producto' => 38,
                'Nombre' => 'Wine - Spumante Bambino White',
                'Precio' => '60.97',
                'Imagen' => 'http://dummyimage.com/198x100.png/5fa2dd/ffffff',
                'Descripcion' => 'Nondisplaced fracture of posterior wall of right acetabulum, subsequent encounter for fracture with nonunion',
                'N_Marca' => 'Marcus Corporation (The)',
                'N_Categoria' => 'Pacific Drilling S.A.'
            ],
            [
                'ID_Producto' => 39,
                'Nombre' => 'Parsley - Fresh',
                'Precio' => '87.45',
                'Imagen' => 'http://dummyimage.com/168x100.png/dddddd/000000',
                'Descripcion' => 'Disseminated chorioretinal inflammation of posterior pole, unspecified eye',
                'N_Marca' => 'Carlisle Companies Incorporated',
                'N_Categoria' => 'Canadian Pacific Railway Limited'
            ],
            [
                'ID_Producto' => 40,
                'Nombre' => 'Wine - Chateauneuf Du Pape',
                'Precio' => '81.98',
                'Imagen' => 'http://dummyimage.com/104x100.png/ff4444/ffffff',
                'Descripcion' => 'Motorcycle driver injured in collision with pedestrian or animal in nontraffic accident, initial encounter',
                'N_Marca' => 'Maiden Holdings, Ltd.',
                'N_Categoria' => 'Microchip Technology Incorporated'
            ],
            [
                'ID_Producto' => 41,
                'Nombre' => 'Soup - Campbells',
                'Precio' => '75.81',
                'Imagen' => 'http://dummyimage.com/233x100.png/5fa2dd/ffffff',
                'Descripcion' => 'Pathological fracture, left hand, initial encounter for fracture',
                'N_Marca' => 'Cabela\'s Inc',
                'N_Categoria' => 'AVEO Pharmaceuticals, Inc.'
            ],
            [
                'ID_Producto' => 42,
                'Nombre' => 'Mushroom - Enoki, Fresh',
                'Precio' => '50.88',
                'Imagen' => 'http://dummyimage.com/121x100.png/ff4444/ffffff',
                'Descripcion' => 'Anal fissure, unspecified',
                'N_Marca' => 'Scorpio Tankers Inc.',
                'N_Categoria' => 'Amaya Inc.'
            ],
            [
                'ID_Producto' => 43,
                'Nombre' => 'Hold Up Tool Storage Rack',
                'Precio' => '37.04',
                'Imagen' => 'http://dummyimage.com/144x100.png/dddddd/000000',
                'Descripcion' => 'Other injury of flexor muscle, fascia and tendon of left little finger at forearm level',
                'N_Marca' => 'The Rubicon Project, Inc.',
                'N_Categoria' => 'Casella Waste Systems, Inc.'
            ],
            [
                'ID_Producto' => 44,
                'Nombre' => 'Appetizer - Escargot Puff',
                'Precio' => '88.48',
                'Imagen' => 'http://dummyimage.com/163x100.png/dddddd/000000',
                'Descripcion' => 'Unspecified fracture of upper end of right radius, subsequent encounter for open fracture type IIIA, IIIB, or IIIC with routine healing',
                'N_Marca' => 'Editas Medicine, Inc.',
                'N_Categoria' => 'Severn Bancorp Inc'
            ],
            [
                'ID_Producto' => 45,
                'Nombre' => 'Extract - Rum',
                'Precio' => '64.17',
                'Imagen' => 'http://dummyimage.com/159x100.png/cc0000/ffffff',
                'Descripcion' => 'Other traumatic nondisplaced spondylolisthesis of seventh cervical vertebra, subsequent encounter for fracture with nonunion',
                'N_Marca' => 'Navios Maritime Holdings Inc.',
                'N_Categoria' => 'Central Europe, Russia and Turkey Fund, Inc. (The)'
            ],
            [
                'ID_Producto' => 46,
                'Nombre' => 'Chicken - Leg, Fresh',
                'Precio' => '28.20',
                'Imagen' => 'http://dummyimage.com/131x100.png/cc0000/ffffff',
                'Descripcion' => 'Nondisplaced oblique fracture of shaft of right fibula, initial encounter for open fracture type IIIA, IIIB, or IIIC',
                'N_Marca' => 'Liberty Media Corporation',
                'N_Categoria' => 'Gores Holdings II, Inc.'
            ],
            [
                'ID_Producto' => 47,
                'Nombre' => 'Vodka - Lemon, Absolut',
                'Precio' => '44.43',
                'Imagen' => 'http://dummyimage.com/176x100.png/dddddd/000000',
                'Descripcion' => 'Age-related osteoporosis with current pathological fracture, right forearm, initial encounter for fracture',
                'N_Marca' => 'American Axle & Manufacturing Holdings, Inc.',
                'N_Categoria' => 'Medovex Corp.'
            ],
            [
                'ID_Producto' => 48,
                'Nombre' => 'Fish - Scallops, Cold Smoked',
                'Precio' => '82.41',
                'Imagen' => 'http://dummyimage.com/184x100.png/5fa2dd/ffffff',
                'Descripcion' => 'Displaced fracture of unspecified tibial tuberosity',
                'N_Marca' => 'FB Financial Corporation',
                'N_Categoria' => 'LGI Homes, Inc.'
            ],
            [
                'ID_Producto' => 49,
                'Nombre' => 'Cake - Bande Of Fruit',
                'Precio' => '49.19',
                'Imagen' => 'http://dummyimage.com/235x100.png/dddddd/000000',
                'Descripcion' => 'Unspecified occupant of snowmobile injured in nontraffic accident, subsequent encounter',
                'N_Marca' => 'The Herzfeld Caribbean Basin Fund, Inc.',
                'N_Categoria' => 'WisdomTree Emerging Markets Corporate Bond Fund'
            ],
            [
                'ID_Producto' => 50,
                'Nombre' => 'Tart - Pecan Butter Squares',
                'Precio' => '12.04',
                'Imagen' => 'http://dummyimage.com/173x100.png/cc0000/ffffff',
                'Descripcion' => 'Atherosclerosis of unspecified type of bypass graft(s) of the left leg with ulceration',
                'N_Marca' => 'RiverNorth Opportunities Fund, Inc.',
                'N_Categoria' => 'Bank of Marin Bancorp'
            ],
        ]);
    }
}

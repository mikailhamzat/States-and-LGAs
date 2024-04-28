<?php

namespace Database\Seeders;

use App\Models\LocalGovernmentArea;
use Illuminate\Database\Seeder;

class LocalGovernmentAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $local_government_areas = [
            [
                'id' => 1,
                'state_id' => 1,
                'name' => 'Aba North'
            ],
            [
                'id' => 2,
                'state_id' => 1,
                'name' => 'Aba South'
            ],
            [
                'id' => 3,
                'state_id' => 1,
                'name' => 'Arochukwu'
            ],
            [
                'id' => 4,
                'state_id' => 1,
                'name' => 'Bende'
            ],
            [
                'id' => 5,
                'state_id' => 1,
                'name' => 'Ikwuano'
            ],
            [
                'id' => 6,
                'state_id' => 1,
                'name' => 'Isiala Ngwa North'
            ],
            [
                'id' => 7,
                'state_id' => 1,
                'name' => 'Isiala Ngwa South'
            ],
            [
                'id' => 8,
                'state_id' => 1,
                'name' => 'Isuikwuato'
            ],
            [
                'id' => 9,
                'state_id' => 1,
                'name' => 'Obi Ngwa'
            ],
            [
                'id' => 10,
                'state_id' => 1,
                'name' => 'Ohafia'
            ],
            [
                'id' => 11,
                'state_id' => 1,
                'name' => 'Osisioma Ngwa'
            ],
            [
                'id' => 12,
                'state_id' => 1,
                'name' => 'Ugwunagbo'
            ],
            [
                'id' => 13,
                'state_id' => 1,
                'name' => 'Ukwa East'
            ],
            [
                'id' => 14,
                'state_id' => 1,
                'name' => 'Ukwa West'
            ],
            [
                'id' => 15,
                'state_id' => 1,
                'name' => 'Umuahia North'
            ],
            [
                'id' => 16,
                'state_id' => 1,
                'name' => 'Umuahia South'
            ],
            [
                'id' => 17,
                'state_id' => 1,
                'name' => 'Umu Nneochi'
            ],
            [
                'id' => 18,
                'state_id' => 2,
                'name' => 'Demsa'
            ],
            [
                'id' => 19,
                'state_id' => 2,
                'name' => 'Fufore'
            ],
            [
                'id' => 20,
                'state_id' => 2,
                'name' => 'Ganye'
            ],
            [
                'id' => 21,
                'state_id' => 2,
                'name' => 'Girei'
            ],
            [
                'id' => 22,
                'state_id' => 2,
                'name' => 'Gombi'
            ],
            [
                'id' => 23,
                'state_id' => 2,
                'name' => 'Guyuk'
            ],
            [
                'id' => 24,
                'state_id' => 2,
                'name' => 'Hong'
            ],
            [
                'id' => 25,
                'state_id' => 2,
                'name' => 'Jada'
            ],
            [
                'id' => 26,
                'state_id' => 2,
                'name' => 'Lamurde'
            ],
            [
                'id' => 27,
                'state_id' => 2,
                'name' => 'Madagali'
            ],
            [
                'id' => 28,
                'state_id' => 2,
                'name' => 'Maiha'
            ],
            [
                'id' => 29,
                'state_id' => 2,
                'name' => 'Mayo-Belwa'
            ],
            [
                'id' => 30,
                'state_id' => 2,
                'name' => 'Michika'
            ],
            [
                'id' => 31,
                'state_id' => 2,
                'name' => 'Mubi North'
            ],
            [
                'id' => 32,
                'state_id' => 2,
                'name' => 'Mubi South'
            ],
            [
                'id' => 33,
                'state_id' => 2,
                'name' => 'Numan'
            ],
            [
                'id' => 34,
                'state_id' => 2,
                'name' => 'Shelleng'
            ],
            [
                'id' => 35,
                'state_id' => 2,
                'name' => 'Song'
            ],
            [
                'id' => 36,
                'state_id' => 2,
                'name' => 'Toungo'
            ],
            [
                'id' => 37,
                'state_id' => 2,
                'name' => 'Yola North'
            ],
            [
                'id' => 38,
                'state_id' => 2,
                'name' => 'Yola South'
            ],
            [
                'id' => 39,
                'state_id' => 3,
                'name' => 'Abak'
            ],
            [
                'id' => 40,
                'state_id' => 3,
                'name' => 'Eastern Obolo'
            ],
            [
                'id' => 41,
                'state_id' => 3,
                'name' => 'Eket'
            ],
            [
                'id' => 42,
                'state_id' => 3,
                'name' => 'Esit-Eket'
            ],
            [
                'id' => 43,
                'state_id' => 3,
                'name' => 'Essien Udim'
            ],
            [
                'id' => 44,
                'state_id' => 3,
                'name' => 'Etim-Ekpo'
            ],
            [
                'id' => 45,
                'state_id' => 3,
                'name' => 'Etinan'
            ],
            [
                'id' => 46,
                'state_id' => 3,
                'name' => 'Ibeno'
            ],
            [
                'id' => 47,
                'state_id' => 3,
                'name' => 'Ibesikpo-Asutan'
            ],
            [
                'id' => 48,
                'state_id' => 3,
                'name' => 'Ibiono-Ibom'
            ],
            [
                'id' => 49,
                'state_id' => 3,
                'name' => 'Ika'
            ],
            [
                'id' => 50,
                'state_id' => 3,
                'name' => 'Ikono'
            ],
            [
                'id' => 51,
                'state_id' => 3,
                'name' => 'Ikot Abasi'
            ],
            [
                'id' => 52,
                'state_id' => 3,
                'name' => 'Ikot Ekpene'
            ],
            [
                'id' => 53,
                'state_id' => 3,
                'name' => 'Ini'
            ],
            [
                'id' => 54,
                'state_id' => 3,
                'name' => 'Itu'
            ],
            [
                'id' => 55,
                'state_id' => 3,
                'name' => 'Mbo'
            ],
            [
                'id' => 56,
                'state_id' => 3,
                'name' => 'Mkpat-Enin'
            ],
            [
                'id' => 57,
                'state_id' => 3,
                'name' => 'Nsit-Atai'
            ],
            [
                'id' => 58,
                'state_id' => 3,
                'name' => 'Nsit-Ibom'
            ],
            [
                'id' => 59,
                'state_id' => 3,
                'name' => 'Nsit-Ubium'
            ],
            [
                'id' => 60,
                'state_id' => 3,
                'name' => 'Obot-Akara'
            ],
            [
                'id' => 61,
                'state_id' => 3,
                'name' => 'Okobo'
            ],
            [
                'id' => 62,
                'state_id' => 3,
                'name' => 'Onna'
            ],
            [
                'id' => 63,
                'state_id' => 3,
                'name' => 'Oron'
            ],
            [
                'id' => 64,
                'state_id' => 3,
                'name' => 'Oruk Anam'
            ],
            [
                'id' => 65,
                'state_id' => 3,
                'name' => 'Ukanafun'
            ],
            [
                'id' => 66,
                'state_id' => 3,
                'name' => 'Udung-Uko'
            ],
            [
                'id' => 67,
                'state_id' => 3,
                'name' => 'Uruan'
            ],
            [
                'id' => 68,
                'state_id' => 3,
                'name' => 'Urue-Offong/Oruko'
            ],
            [
                'id' => 69,
                'state_id' => 3,
                'name' => 'Uyo'
            ],
            [
                'id' => 70,
                'state_id' => 4,
                'name' => 'Aguata'
            ],
            [
                'id' => 71,
                'state_id' => 4,
                'name' => 'Anambra East'
            ],
            [
                'id' => 72,
                'state_id' => 4,
                'name' => 'Anambra West'
            ],
            [
                'id' => 73,
                'state_id' => 4,
                'name' => 'Anaocha'
            ],
            [
                'id' => 74,
                'state_id' => 4,
                'name' => 'Awka North'
            ],
            [
                'id' => 75,
                'state_id' => 4,
                'name' => 'Awka South'
            ],
            [
                'id' => 76,
                'state_id' => 4,
                'name' => 'Ayamelum'
            ],
            [
                'id' => 77,
                'state_id' => 4,
                'name' => 'Dunukofia'
            ],
            [
                'id' => 78,
                'state_id' => 4,
                'name' => 'Ekwusigo'
            ],
            [
                'id' => 79,
                'state_id' => 4,
                'name' => 'Idemili North'
            ],
            [
                'id' => 80,
                'state_id' => 4,
                'name' => 'Idemili South'
            ],
            [
                'id' => 81,
                'state_id' => 4,
                'name' => 'Ihiala'
            ],
            [
                'id' => 82,
                'state_id' => 4,
                'name' => 'Njikoka'
            ],
            [
                'id' => 83,
                'state_id' => 4,
                'name' => 'Nnewi North'
            ],
            [
                'id' => 84,
                'state_id' => 4,
                'name' => 'Nnewi South'
            ],
            [
                'id' => 85,
                'state_id' => 4,
                'name' => 'Ogbaru'
            ],
            [
                'id' => 86,
                'state_id' => 4,
                'name' => 'Onitsha North'
            ],
            [
                'id' => 87,
                'state_id' => 4,
                'name' => 'Onitsha South'
            ],
            [
                'id' => 88,
                'state_id' => 4,
                'name' => 'Orumba North'
            ],
            [
                'id' => 89,
                'state_id' => 4,
                'name' => 'Orumba South'
            ],
            [
                'id' => 90,
                'state_id' => 4,
                'name' => 'Oyi'
            ],
            [
                'id' => 91,
                'state_id' => 5,
                'name' => 'Alkaleri'
            ],
            [
                'id' => 92,
                'state_id' => 5,
                'name' => 'Bogoro'
            ],
            [
                'id' => 93,
                'state_id' => 5,
                'name' => 'Damban'
            ],
            [
                'id' => 94,
                'state_id' => 5,
                'name' => 'Darazo'
            ],
            [
                'id' => 95,
                'state_id' => 5,
                'name' => 'Dass'
            ],
            [
                'id' => 96,
                'state_id' => 5,
                'name' => 'Gamawa'
            ],
            [
                'id' => 97,
                'state_id' => 5,
                'name' => 'Ganjuwa'
            ],
            [
                'id' => 98,
                'state_id' => 5,
                'name' => 'Giade'
            ],
            [
                'id' => 99,
                'state_id' => 5,
                'name' => 'Itas/Gadau'
            ],
            [
                'id' => 100,
                'state_id' => 5,
                'name' => 'Jamaare'
            ],
            [
                'id' => 101,
                'state_id' => 5,
                'name' => 'Katagum'
            ],
            [
                'id' => 102,
                'state_id' => 5,
                'name' => 'Kirfi'
            ],
            [
                'id' => 103,
                'state_id' => 5,
                'name' => 'Misau'
            ],
            [
                'id' => 104,
                'state_id' => 5,
                'name' => 'Ningi'
            ],
            [
                'id' => 105,
                'state_id' => 5,
                'name' => 'Shira'
            ],
            [
                'id' => 106,
                'state_id' => 5,
                'name' => 'Tafawa'
            ],
            [
                'id' => 107,
                'state_id' => 5,
                'name' => 'Toro'
            ],
            [
                'id' => 108,
                'state_id' => 5,
                'name' => 'Warji'
            ],
            [
                'id' => 109,
                'state_id' => 5,
                'name' => 'Zaki'
            ],
            [
                'id' => 110,
                'state_id' => 6,
                'name' => 'Brass'
            ],
            [
                'id' => 111,
                'state_id' => 6,
                'name' => 'Ekeremor'
            ],
            [
                'id' => 112,
                'state_id' => 6,
                'name' => 'Kolokuma/Opokuma'
            ],
            [
                'id' => 113,
                'state_id' => 6,
                'name' => 'Nembe'
            ],
            [
                'id' => 114,
                'state_id' => 6,
                'name' => 'Ogbia'
            ],
            [
                'id' => 115,
                'state_id' => 6,
                'name' => 'Sagbama'
            ],
            [
                'id' => 116,
                'state_id' => 6,
                'name' => 'Southern Ijaw'
            ],
            [
                'id' => 117,
                'state_id' => 6,
                'name' => 'Yenagoa'
            ],
            [
                'id' => 118,
                'state_id' => 7,
                'name' => 'Ado'
            ],
            [
                'id' => 119,
                'state_id' => 7,
                'name' => 'Agatu'
            ],
            [
                'id' => 120,
                'state_id' => 7,
                'name' => 'Apa'
            ],
            [
                'id' => 121,
                'state_id' => 7,
                'name' => 'Buruku'
            ],
            [
                'id' => 122,
                'state_id' => 7,
                'name' => 'Gboko'
            ],
            [
                'id' => 123,
                'state_id' => 7,
                'name' => 'Guma'
            ],
            [
                'id' => 124,
                'state_id' => 7,
                'name' => 'Gwer East'
            ],
            [
                'id' => 125,
                'state_id' => 7,
                'name' => 'Gwer West'
            ],
            [
                'id' => 126,
                'state_id' => 7,
                'name' => 'Katsina-Ala'
            ],
            [
                'id' => 127,
                'state_id' => 7,
                'name' => 'Konshisha'
            ],
            [
                'id' => 128,
                'state_id' => 7,
                'name' => 'Kwande'
            ],
            [
                'id' => 129,
                'state_id' => 7,
                'name' => 'Logo'
            ],
            [
                'id' => 130,
                'state_id' => 7,
                'name' => 'Makurdi'
            ],
            [
                'id' => 131,
                'state_id' => 7,
                'name' => 'Obi'
            ],
            [
                'id' => 132,
                'state_id' => 7,
                'name' => 'Ogbadibo'
            ],
            [
                'id' => 133,
                'state_id' => 7,
                'name' => 'Ohimini'
            ],
            [
                'id' => 134,
                'state_id' => 7,
                'name' => 'Oju'
            ],
            [
                'id' => 135,
                'state_id' => 7,
                'name' => 'Okpokwu'
            ],
            [
                'id' => 136,
                'state_id' => 7,
                'name' => 'Otukpo'
            ],
            [
                'id' => 137,
                'state_id' => 7,
                'name' => 'Tarka'
            ],
            [
                'id' => 138,
                'state_id' => 7,
                'name' => 'Ukum'
            ],
            [
                'id' => 139,
                'state_id' => 7,
                'name' => 'Ushongo'
            ],
            [
                'id' => 140,
                'state_id' => 7,
                'name' => 'Vandeikya'
            ],
            [
                'id' => 141,
                'state_id' => 8,
                'name' => 'Abadam'
            ],
            [
                'id' => 142,
                'state_id' => 8,
                'name' => 'Askira/Uba'
            ],
            [
                'id' => 143,
                'state_id' => 8,
                'name' => 'Bama'
            ],
            [
                'id' => 144,
                'state_id' => 8,
                'name' => 'Bayo'
            ],
            [
                'id' => 145,
                'state_id' => 8,
                'name' => 'Biu'
            ],
            [
                'id' => 146,
                'state_id' => 8,
                'name' => 'Chibok'
            ],
            [
                'id' => 147,
                'state_id' => 8,
                'name' => 'Damboa'
            ],
            [
                'id' => 148,
                'state_id' => 8,
                'name' => 'Dikwa'
            ],
            [
                'id' => 149,
                'state_id' => 8,
                'name' => 'Gubio'
            ],
            [
                'id' => 150,
                'state_id' => 8,
                'name' => 'Guzamala'
            ],
            [
                'id' => 151,
                'state_id' => 8,
                'name' => 'Gwoza'
            ],
            [
                'id' => 152,
                'state_id' => 8,
                'name' => 'Hawul'
            ],
            [
                'id' => 153,
                'state_id' => 8,
                'name' => 'Jere'
            ],
            [
                'id' => 154,
                'state_id' => 8,
                'name' => 'Kaga'
            ],
            [
                'id' => 155,
                'state_id' => 8,
                'name' => 'Kala/Balge'
            ],
            [
                'id' => 156,
                'state_id' => 8,
                'name' => 'Konduga'
            ],
            [
                'id' => 157,
                'state_id' => 8,
                'name' => 'Kukawa'
            ],
            [
                'id' => 158,
                'state_id' => 8,
                'name' => 'Kwaya Kusar'
            ],
            [
                'id' => 159,
                'state_id' => 8,
                'name' => 'Magumeri'
            ],
            [
                'id' => 160,
                'state_id' => 8,
                'name' => 'Mafa'
            ],
            [
                'id' => 161,
                'state_id' => 8,
                'name' => 'Maiduguri'
            ],
            [
                'id' => 162,
                'state_id' => 8,
                'name' => 'Marte'
            ],
            [
                'id' => 163,
                'state_id' => 8,
                'name' => 'Mobbar'
            ],
            [
                'id' => 164,
                'state_id' => 8,
                'name' => 'Monguno'
            ],
            [
                'id' => 165,
                'state_id' => 8,
                'name' => 'Ngala'
            ],
            [
                'id' => 166,
                'state_id' => 8,
                'name' => 'Nganzai'
            ],
            [
                'id' => 167,
                'state_id' => 8,
                'name' => 'Shani'
            ],
            [
                'id' => 168,
                'state_id' => 9,
                'name' => 'Abi'
            ],
            [
                'id' => 169,
                'state_id' => 9,
                'name' => 'Akpabuyo'
            ],
            [
                'id' => 170,
                'state_id' => 9,
                'name' => 'Akpamkpa'
            ],
            [
                'id' => 171,
                'state_id' => 9,
                'name' => 'Bakassi'
            ],
            [
                'id' => 172,
                'state_id' => 9,
                'name' => 'Bekwarra'
            ],
            [
                'id' => 173,
                'state_id' => 9,
                'name' => 'Biase'
            ],
            [
                'id' => 174,
                'state_id' => 9,
                'name' => 'Boki'
            ],
            [
                'id' => 175,
                'state_id' => 9,
                'name' => 'Calabar Municipal'
            ],
            [
                'id' => 176,
                'state_id' => 9,
                'name' => 'Calabar South'
            ],
            [
                'id' => 177,
                'state_id' => 9,
                'name' => 'Etung'
            ],
            [
                'id' => 178,
                'state_id' => 9,
                'name' => 'Ikom'
            ],
            [
                'id' => 179,
                'state_id' => 9,
                'name' => 'Obanliku'
            ],
            [
                'id' => 180,
                'state_id' => 9,
                'name' => 'Obubra'
            ],
            [
                'id' => 181,
                'state_id' => 9,
                'name' => 'Obudu'
            ],
            [
                'id' => 182,
                'state_id' => 9,
                'name' => 'Odukpani'
            ],
            [
                'id' => 183,
                'state_id' => 9,
                'name' => 'Ogoja'
            ],
            [
                'id' => 184,
                'state_id' => 9,
                'name' => 'Yakurr'
            ],
            [
                'id' => 185,
                'state_id' => 9,
                'name' => 'Yala'
            ],
            [
                'id' => 186,
                'state_id' => 10,
                'name' => 'Aniocha North'
            ],
            [
                'id' => 187,
                'state_id' => 10,
                'name' => 'Aniocha South'
            ],
            [
                'id' => 188,
                'state_id' => 10,
                'name' => 'Bomadi'
            ],
            [
                'id' => 189,
                'state_id' => 10,
                'name' => 'Burutu'
            ],
            [
                'id' => 190,
                'state_id' => 10,
                'name' => 'Ethiope East'
            ],
            [
                'id' => 191,
                'state_id' => 10,
                'name' => 'Ethiope West'
            ],
            [
                'id' => 192,
                'state_id' => 10,
                'name' => 'Ika North East'
            ],
            [
                'id' => 193,
                'state_id' => 10,
                'name' => 'Ika South'
            ],
            [
                'id' => 194,
                'state_id' => 10,
                'name' => 'Isoko North'
            ],
            [
                'id' => 195,
                'state_id' => 10,
                'name' => 'Isoko South'
            ],
            [
                'id' => 196,
                'state_id' => 10,
                'name' => 'Ndokwa East'
            ],
            [
                'id' => 197,
                'state_id' => 10,
                'name' => 'Ndokwa West'
            ],
            [
                'id' => 198,
                'state_id' => 10,
                'name' => 'Okpe'
            ],
            [
                'id' => 199,
                'state_id' => 10,
                'name' => 'Oshimili North'
            ],
            [
                'id' => 200,
                'state_id' => 10,
                'name' => 'Oshimili South'
            ],
            [
                'id' => 201,
                'state_id' => 10,
                'name' => 'Patani'
            ],
            [
                'id' => 202,
                'state_id' => 10,
                'name' => 'Sapele'
            ],
            [
                'id' => 203,
                'state_id' => 10,
                'name' => 'Udu'
            ],
            [
                'id' => 204,
                'state_id' => 10,
                'name' => 'Ughelli North'
            ],
            [
                'id' => 205,
                'state_id' => 10,
                'name' => 'Ughelli South'
            ],
            [
                'id' => 206,
                'state_id' => 10,
                'name' => 'Ukwuani'
            ],
            [
                'id' => 207,
                'state_id' => 10,
                'name' => 'Uvwie'
            ],
            [
                'id' => 208,
                'state_id' => 10,
                'name' => 'Warri North'
            ],
            [
                'id' => 209,
                'state_id' => 10,
                'name' => 'Warri South'
            ],
            [
                'id' => 210,
                'state_id' => 10,
                'name' => 'Warri South West'
            ],
            [
                'id' => 211,
                'state_id' => 11,
                'name' => 'Abakaliki'
            ],
            [
                'id' => 212,
                'state_id' => 11,
                'name' => 'Afikpo North'
            ],
            [
                'id' => 213,
                'state_id' => 11,
                'name' => 'Afikpo South (Edda)'
            ],
            [
                'id' => 214,
                'state_id' => 11,
                'name' => 'Ebonyi'
            ],
            [
                'id' => 215,
                'state_id' => 11,
                'name' => 'Ezza North'
            ],
            [
                'id' => 216,
                'state_id' => 11,
                'name' => 'Ezza South'
            ],
            [
                'id' => 217,
                'state_id' => 11,
                'name' => 'Ikwo'
            ],
            [
                'id' => 218,
                'state_id' => 11,
                'name' => 'Ishielu'
            ],
            [
                'id' => 219,
                'state_id' => 11,
                'name' => 'Ivo'
            ],
            [
                'id' => 220,
                'state_id' => 11,
                'name' => 'Izzi'
            ],
            [
                'id' => 221,
                'state_id' => 11,
                'name' => 'Ohaozara'
            ],
            [
                'id' => 222,
                'state_id' => 11,
                'name' => 'Ohaukwu'
            ],
            [
                'id' => 223,
                'state_id' => 11,
                'name' => 'Onicha'
            ],
            [
                'id' => 224,
                'state_id' => 12,
                'name' => 'Akoko-Edo'
            ],
            [
                'id' => 225,
                'state_id' => 12,
                'name' => 'Egor'
            ],
            [
                'id' => 226,
                'state_id' => 12,
                'name' => 'Esan Central'
            ],
            [
                'id' => 227,
                'state_id' => 12,
                'name' => 'Esan North-East'
            ],
            [
                'id' => 228,
                'state_id' => 12,
                'name' => 'Esan South-East'
            ],
            [
                'id' => 229,
                'state_id' => 12,
                'name' => 'Esan West'
            ],
            [
                'id' => 230,
                'state_id' => 12,
                'name' => 'Etsako Central'
            ],
            [
                'id' => 231,
                'state_id' => 12,
                'name' => 'Etsako East'
            ],
            [
                'id' => 232,
                'state_id' => 12,
                'name' => 'Etsako West'
            ],
            [
                'id' => 233,
                'state_id' => 12,
                'name' => 'Igueben'
            ],
            [
                'id' => 234,
                'state_id' => 12,
                'name' => 'Ikpoba-Okha'
            ],
            [
                'id' => 235,
                'state_id' => 12,
                'name' => 'Oredo'
            ],
            [
                'id' => 236,
                'state_id' => 12,
                'name' => 'Orhionmwon'
            ],
            [
                'id' => 237,
                'state_id' => 12,
                'name' => 'Ovia North-East'
            ],
            [
                'id' => 238,
                'state_id' => 12,
                'name' => 'Ovia South-West'
            ],
            [
                'id' => 239,
                'state_id' => 12,
                'name' => 'Owan East'
            ],
            [
                'id' => 240,
                'state_id' => 12,
                'name' => 'Owan West'
            ],
            [
                'id' => 241,
                'state_id' => 12,
                'name' => 'Uhunmwonde'
            ],
            [
                'id' => 242,
                'state_id' => 13,
                'name' => 'Ado-Ekiti'
            ],
            [
                'id' => 243,
                'state_id' => 13,
                'name' => 'Efon'
            ],
            [
                'id' => 244,
                'state_id' => 13,
                'name' => 'Ekiti East'
            ],
            [
                'id' => 245,
                'state_id' => 13,
                'name' => 'Ekiti South-West'
            ],
            [
                'id' => 246,
                'state_id' => 13,
                'name' => 'Ekiti West'
            ],
            [
                'id' => 247,
                'state_id' => 13,
                'name' => 'Emure'
            ],
            [
                'id' => 248,
                'state_id' => 13,
                'name' => 'Gbonyin'
            ],
            [
                'id' => 249,
                'state_id' => 13,
                'name' => 'Ido-Osi'
            ],
            [
                'id' => 250,
                'state_id' => 13,
                'name' => 'Ijero'
            ],
            [
                'id' => 251,
                'state_id' => 13,
                'name' => 'Ikere'
            ],
            [
                'id' => 252,
                'state_id' => 13,
                'name' => 'Ikole'
            ],
            [
                'id' => 253,
                'state_id' => 13,
                'name' => 'Ilejemeje'
            ],
            [
                'id' => 254,
                'state_id' => 13,
                'name' => 'Irepodun/Ifelodun'
            ],
            [
                'id' => 255,
                'state_id' => 13,
                'name' => 'Ise/Orun'
            ],
            [
                'id' => 256,
                'state_id' => 13,
                'name' => 'Moba'
            ],
            [
                'id' => 257,
                'state_id' => 13,
                'name' => 'Oye'
            ],
            [
                'id' => 258,
                'state_id' => 14,
                'name' => 'Aninri'
            ],
            [
                'id' => 259,
                'state_id' => 14,
                'name' => 'Awgu'
            ],
            [
                'id' => 260,
                'state_id' => 14,
                'name' => 'Enugu East'
            ],
            [
                'id' => 261,
                'state_id' => 14,
                'name' => 'Enugu North'
            ],
            [
                'id' => 262,
                'state_id' => 14,
                'name' => 'Enugu South'
            ],
            [
                'id' => 263,
                'state_id' => 14,
                'name' => 'Ezeagu'
            ],
            [
                'id' => 264,
                'state_id' => 14,
                'name' => 'Igbo Etiti'
            ],
            [
                'id' => 265,
                'state_id' => 14,
                'name' => 'Igbo Eze North'
            ],
            [
                'id' => 266,
                'state_id' => 14,
                'name' => 'Igbo Eze South'
            ],
            [
                'id' => 267,
                'state_id' => 14,
                'name' => 'Isi Uzo'
            ],
            [
                'id' => 268,
                'state_id' => 14,
                'name' => 'Nkanu East'
            ],
            [
                'id' => 269,
                'state_id' => 14,
                'name' => 'Nkanu West'
            ],
            [
                'id' => 270,
                'state_id' => 14,
                'name' => 'Nsukka'
            ],
            [
                'id' => 271,
                'state_id' => 14,
                'name' => 'Oji River'
            ],
            [
                'id' => 272,
                'state_id' => 14,
                'name' => 'Udenu'
            ],
            [
                'id' => 273,
                'state_id' => 14,
                'name' => 'Udi'
            ],
            [
                'id' => 274,
                'state_id' => 14,
                'name' => 'Uzo-Uwani'
            ],
            [
                'id' => 275,
                'state_id' => 15,
                'name' => 'Akko'
            ],
            [
                'id' => 276,
                'state_id' => 15,
                'name' => 'Balanga'
            ],
            [
                'id' => 277,
                'state_id' => 15,
                'name' => 'Billiri'
            ],
            [
                'id' => 278,
                'state_id' => 15,
                'name' => 'Dukku'
            ],
            [
                'id' => 279,
                'state_id' => 15,
                'name' => 'Funakaye'
            ],
            [
                'id' => 280,
                'state_id' => 15,
                'name' => 'Gombe'
            ],
            [
                'id' => 281,
                'state_id' => 15,
                'name' => 'Kaltungo'
            ],
            [
                'id' => 282,
                'state_id' => 15,
                'name' => 'Kwami'
            ],
            [
                'id' => 283,
                'state_id' => 15,
                'name' => 'Nafada'
            ],
            [
                'id' => 284,
                'state_id' => 15,
                'name' => 'Shongom'
            ],
            [
                'id' => 285,
                'state_id' => 15,
                'name' => 'Yamaltu/Deba'
            ],
            [
                'id' => 286,
                'state_id' => 16,
                'name' => 'Aboh Mbaise'
            ],
            [
                'id' => 287,
                'state_id' => 16,
                'name' => 'Ahiazu Mbaise'
            ],
            [
                'id' => 288,
                'state_id' => 16,
                'name' => 'Ehime Mbano'
            ],
            [
                'id' => 289,
                'state_id' => 16,
                'name' => 'Ezinihitte Mbaise'
            ],
            [
                'id' => 290,
                'state_id' => 16,
                'name' => 'Ideato North'
            ],
            [
                'id' => 291,
                'state_id' => 16,
                'name' => 'Ideato South'
            ],
            [
                'id' => 292,
                'state_id' => 16,
                'name' => 'Ihitte/Uboma'
            ],
            [
                'id' => 293,
                'state_id' => 16,
                'name' => 'Ikeduru'
            ],
            [
                'id' => 294,
                'state_id' => 16,
                'name' => 'Isiala Mbano'
            ],
            [
                'id' => 295,
                'state_id' => 16,
                'name' => 'Isu'
            ],
            [
                'id' => 296,
                'state_id' => 16,
                'name' => 'Mbaitoli'
            ],
            [
                'id' => 297,
                'state_id' => 16,
                'name' => 'Ngor Okpala'
            ],
            [
                'id' => 298,
                'state_id' => 16,
                'name' => 'Njaba'
            ],
            [
                'id' => 299,
                'state_id' => 16,
                'name' => 'Nkwerre'
            ],
            [
                'id' => 300,
                'state_id' => 16,
                'name' => 'Nwangele'
            ],
            [
                'id' => 301,
                'state_id' => 16,
                'name' => 'Obowo'
            ],
            [
                'id' => 302,
                'state_id' => 16,
                'name' => 'Oguta'
            ],
            [
                'id' => 303,
                'state_id' => 16,
                'name' => 'Ohaji/Egbema'
            ],
            [
                'id' => 304,
                'state_id' => 16,
                'name' => 'Okigwe'
            ],
            [
                'id' => 305,
                'state_id' => 16,
                'name' => 'Onuimo'
            ],
            [
                'id' => 306,
                'state_id' => 16,
                'name' => 'Orlu'
            ],
            [
                'id' => 307,
                'state_id' => 16,
                'name' => 'Orsu'
            ],
            [
                'id' => 308,
                'state_id' => 16,
                'name' => 'Oru East'
            ],
            [
                'id' => 309,
                'state_id' => 16,
                'name' => 'Oru West'
            ],
            [
                'id' => 310,
                'state_id' => 16,
                'name' => 'Owerri Municipal'
            ],
            [
                'id' => 311,
                'state_id' => 16,
                'name' => 'Owerri North'
            ],
            [
                'id' => 312,
                'state_id' => 16,
                'name' => 'Owerri West'
            ],
            [
                'id' => 313,
                'state_id' => 17,
                'name' => 'Auyo'
            ],
            [
                'id' => 314,
                'state_id' => 17,
                'name' => 'Babura'
            ],
            [
                'id' => 315,
                'state_id' => 17,
                'name' => 'Biriniwa'
            ],
            [
                'id' => 316,
                'state_id' => 17,
                'name' => 'Birnin Kudu'
            ],
            [
                'id' => 317,
                'state_id' => 17,
                'name' => 'Buji'
            ],
            [
                'id' => 318,
                'state_id' => 17,
                'name' => 'Dutse'
            ],
            [
                'id' => 319,
                'state_id' => 17,
                'name' => 'Gagarawa'
            ],
            [
                'id' => 320,
                'state_id' => 17,
                'name' => 'Garki'
            ],
            [
                'id' => 321,
                'state_id' => 17,
                'name' => 'Gumel'
            ],
            [
                'id' => 322,
                'state_id' => 17,
                'name' => 'Guri'
            ],
            [
                'id' => 323,
                'state_id' => 17,
                'name' => 'Gwaram'
            ],
            [
                'id' => 324,
                'state_id' => 17,
                'name' => 'Gwiwa'
            ],
            [
                'id' => 325,
                'state_id' => 17,
                'name' => 'Hadejia'
            ],
            [
                'id' => 326,
                'state_id' => 17,
                'name' => 'Jahun'
            ],
            [
                'id' => 327,
                'state_id' => 17,
                'name' => 'Kafin Hausa'
            ],
            [
                'id' => 328,
                'state_id' => 17,
                'name' => 'Kaugama'
            ],
            [
                'id' => 329,
                'state_id' => 17,
                'name' => 'Kazaure'
            ],
            [
                'id' => 330,
                'state_id' => 17,
                'name' => 'Kiri Kasama'
            ],
            [
                'id' => 331,
                'state_id' => 17,
                'name' => 'Kiyawa'
            ],
            [
                'id' => 332,
                'state_id' => 17,
                'name' => 'Maigatari'
            ],
            [
                'id' => 333,
                'state_id' => 17,
                'name' => 'Malam Madori'
            ],
            [
                'id' => 334,
                'state_id' => 17,
                'name' => 'Miga'
            ],
            [
                'id' => 335,
                'state_id' => 17,
                'name' => 'Ringim'
            ],
            [
                'id' => 336,
                'state_id' => 17,
                'name' => 'Roni'
            ],
            [
                'id' => 337,
                'state_id' => 17,
                'name' => 'Sule Tankarkar'
            ],
            [
                'id' => 338,
                'state_id' => 17,
                'name' => 'Taura'
            ],
            [
                'id' => 339,
                'state_id' => 17,
                'name' => 'Yankwashi'
            ],
            [
                'id' => 340,
                'state_id' => 18,
                'name' => 'Birnin Gwari'
            ],
            [
                'id' => 341,
                'state_id' => 18,
                'name' => 'Chikun'
            ],
            [
                'id' => 342,
                'state_id' => 18,
                'name' => 'Giwa'
            ],
            [
                'id' => 343,
                'state_id' => 18,
                'name' => 'Igabi'
            ],
            [
                'id' => 344,
                'state_id' => 18,
                'name' => 'Ikara'
            ],
            [
                'id' => 345,
                'state_id' => 18,
                'name' => 'Jaba'
            ],
            [
                'id' => 346,
                'state_id' => 18,
                'name' => 'Jema\'a'
            ],
            [
                'id' => 347,
                'state_id' => 18,
                'name' => 'Kachia'
            ],
            [
                'id' => 348,
                'state_id' => 18,
                'name' => 'Kaduna North'
            ],
            [
                'id' => 349,
                'state_id' => 18,
                'name' => 'Kaduna South'
            ],
            [
                'id' => 350,
                'state_id' => 18,
                'name' => 'Kagarko'
            ],
            [
                'id' => 351,
                'state_id' => 18,
                'name' => 'Kajuru'
            ],
            [
                'id' => 352,
                'state_id' => 18,
                'name' => 'Kaura'
            ],
            [
                'id' => 353,
                'state_id' => 18,
                'name' => 'Kauru'
            ],
            [
                'id' => 354,
                'state_id' => 18,
                'name' => 'Kubau'
            ],
            [
                'id' => 355,
                'state_id' => 18,
                'name' => 'Kudan'
            ],
            [
                'id' => 356,
                'state_id' => 18,
                'name' => 'Lere'
            ],
            [
                'id' => 357,
                'state_id' => 18,
                'name' => 'Makarfi'
            ],
            [
                'id' => 358,
                'state_id' => 18,
                'name' => 'Sabon Gari'
            ],
            [
                'id' => 359,
                'state_id' => 18,
                'name' => 'Sanga'
            ],
            [
                'id' => 360,
                'state_id' => 18,
                'name' => 'Soba'
            ],
            [
                'id' => 361,
                'state_id' => 18,
                'name' => 'Zangon Kataf'
            ],
            [
                'id' => 362,
                'state_id' => 18,
                'name' => 'Zaria'
            ],
            [
                'id' => 363,
                'state_id' => 19,
                'name' => 'Ajingi'
            ],
            [
                'id' => 364,
                'state_id' => 19,
                'name' => 'Albasu'
            ],
            [
                'id' => 365,
                'state_id' => 19,
                'name' => 'Bagwai'
            ],
            [
                'id' => 366,
                'state_id' => 19,
                'name' => 'Bichi'
            ],
            [
                'id' => 367,
                'state_id' => 19,
                'name' => 'Bunkure'
            ],
            [
                'id' => 368,
                'state_id' => 19,
                'name' => 'Dala'
            ],
            [
                'id' => 369,
                'state_id' => 19,
                'name' => 'Dambatta'
            ],
            [
                'id' => 370,
                'state_id' => 19,
                'name' => 'Dawakin Kudu'
            ],
            [
                'id' => 371,
                'state_id' => 19,
                'name' => 'Dawakin Tofa'
            ],
            [
                'id' => 372,
                'state_id' => 19,
                'name' => 'Doguwa'
            ],
            [
                'id' => 373,
                'state_id' => 19,
                'name' => 'Fagge'
            ],
            [
                'id' => 374,
                'state_id' => 19,
                'name' => 'Gabasawa'
            ],
            [
                'id' => 375,
                'state_id' => 19,
                'name' => 'Garko'
            ],
            [
                'id' => 376,
                'state_id' => 19,
                'name' => 'Garun'
            ],
            [
                'id' => 377,
                'state_id' => 19,
                'name' => 'Gaya'
            ],
            [
                'id' => 378,
                'state_id' => 19,
                'name' => 'Gezawa'
            ],
            [
                'id' => 379,
                'state_id' => 19,
                'name' => 'Gwale'
            ],
            [
                'id' => 380,
                'state_id' => 19,
                'name' => 'Gwarzo'
            ],
            [
                'id' => 381,
                'state_id' => 19,
                'name' => 'Karaye'
            ],
            [
                'id' => 382,
                'state_id' => 19,
                'name' => 'Kano Municipal'
            ],
            [
                'id' => 383,
                'state_id' => 19,
                'name' => 'Kibiya'
            ],
            [
                'id' => 384,
                'state_id' => 19,
                'name' => 'Kiru'
            ],
            [
                'id' => 385,
                'state_id' => 19,
                'name' => 'Kumbotso'
            ],
            [
                'id' => 386,
                'state_id' => 19,
                'name' => 'Kunchi'
            ],
            [
                'id' => 387,
                'state_id' => 19,
                'name' => 'Kura'
            ],
            [
                'id' => 388,
                'state_id' => 19,
                'name' => 'Madobi'
            ],
            [
                'id' => 389,
                'state_id' => 19,
                'name' => 'Makoda'
            ],
            [
                'id' => 390,
                'state_id' => 19,
                'name' => 'Minjibir'
            ],
            [
                'id' => 391,
                'state_id' => 19,
                'name' => 'Nassarawa'
            ],
            [
                'id' => 392,
                'state_id' => 19,
                'name' => 'Rano'
            ],
            [
                'id' => 393,
                'state_id' => 19,
                'name' => 'Rimin Gado'
            ],
            [
                'id' => 394,
                'state_id' => 19,
                'name' => 'Rogo'
            ],
            [
                'id' => 395,
                'state_id' => 19,
                'name' => 'Shanono'
            ],
            [
                'id' => 396,
                'state_id' => 19,
                'name' => 'Sumaila'
            ],
            [
                'id' => 397,
                'state_id' => 19,
                'name' => 'Takai'
            ],
            [
                'id' => 398,
                'state_id' => 19,
                'name' => 'Tarauni'
            ],
            [
                'id' => 399,
                'state_id' => 19,
                'name' => 'Tofa'
            ],
            [
                'id' => 400,
                'state_id' => 19,
                'name' => 'Tsanyawa'
            ],
            [
                'id' => 401,
                'state_id' => 19,
                'name' => 'Ungogo'
            ],
            [
                'id' => 402,
                'state_id' => 19,
                'name' => 'Warawa'
            ],
            [
                'id' => 403,
                'state_id' => 19,
                'name' => 'Wudil'
            ],
            [
                'id' => 404,
                'state_id' => 19,
                'name' => 'Yankwashi'
            ],
            [
                'id' => 405,
                'state_id' => 20,
                'name' => 'Bakori'
            ],
            [
                'id' => 406,
                'state_id' => 20,
                'name' => 'Batagarawa'
            ],
            [
                'id' => 407,
                'state_id' => 20,
                'name' => 'Batsari'
            ],
            [
                'id' => 408,
                'state_id' => 20,
                'name' => 'Baure'
            ],
            [
                'id' => 409,
                'state_id' => 20,
                'name' => 'Bindawa'
            ],
            [
                'id' => 410,
                'state_id' => 20,
                'name' => 'Charanchi'
            ],
            [
                'id' => 411,
                'state_id' => 20,
                'name' => 'Dan Musa'
            ],
            [
                'id' => 412,
                'state_id' => 20,
                'name' => 'Dandume'
            ],
            [
                'id' => 413,
                'state_id' => 20,
                'name' => 'Danja'
            ],
            [
                'id' => 414,
                'state_id' => 20,
                'name' => 'Daura'
            ],
            [
                'id' => 415,
                'state_id' => 20,
                'name' => 'Dutsi'
            ],
            [
                'id' => 416,
                'state_id' => 20,
                'name' => 'Dutsin-Ma'
            ],
            [
                'id' => 417,
                'state_id' => 20,
                'name' => 'Faskari'
            ],
            [
                'id' => 418,
                'state_id' => 20,
                'name' => 'Funtua'
            ],
            [
                'id' => 419,
                'state_id' => 20,
                'name' => 'Ingawa'
            ],
            [
                'id' => 420,
                'state_id' => 20,
                'name' => 'Jibia'
            ],
            [
                'id' => 421,
                'state_id' => 20,
                'name' => 'Kafur'
            ],
            [
                'id' => 422,
                'state_id' => 20,
                'name' => 'Kaita'
            ],
            [
                'id' => 423,
                'state_id' => 20,
                'name' => 'Kankara'
            ],
            [
                'id' => 424,
                'state_id' => 20,
                'name' => 'Kankia'
            ],
            [
                'id' => 425,
                'state_id' => 20,
                'name' => 'Katsina'
            ],
            [
                'id' => 426,
                'state_id' => 20,
                'name' => 'Kurfi'
            ],
            [
                'id' => 427,
                'state_id' => 20,
                'name' => 'Kusada'
            ],
            [
                'id' => 428,
                'state_id' => 20,
                'name' => 'Mai\'Adua'
            ],
            [
                'id' => 429,
                'state_id' => 20,
                'name' => 'Malumfashi'
            ],
            [
                'id' => 430,
                'state_id' => 20,
                'name' => 'Mani'
            ],
            [
                'id' => 431,
                'state_id' => 20,
                'name' => 'Mashi'
            ],
            [
                'id' => 432,
                'state_id' => 20,
                'name' => 'Matazu'
            ],
            [
                'id' => 433,
                'state_id' => 20,
                'name' => 'Musawa'
            ],
            [
                'id' => 434,
                'state_id' => 20,
                'name' => 'Rimi'
            ],
            [
                'id' => 435,
                'state_id' => 20,
                'name' => 'Sabuwa'
            ],
            [
                'id' => 436,
                'state_id' => 20,
                'name' => 'Safana'
            ],
            [
                'id' => 437,
                'state_id' => 20,
                'name' => 'Sandamu'
            ],
            [
                'id' => 438,
                'state_id' => 20,
                'name' => 'Zango'
            ],
            [
                'id' => 439,
                'state_id' => 21,
                'name' => 'Aleiro'
            ],
            [
                'id' => 440,
                'state_id' => 21,
                'name' => 'Arewa Dandi'
            ],
            [
                'id' => 441,
                'state_id' => 21,
                'name' => 'Argungu'
            ],
            [
                'id' => 442,
                'state_id' => 21,
                'name' => 'Augie'
            ],
            [
                'id' => 443,
                'state_id' => 21,
                'name' => 'Bagudo'
            ],
            [
                'id' => 444,
                'state_id' => 21,
                'name' => 'Birnin Kebbi'
            ],
            [
                'id' => 445,
                'state_id' => 21,
                'name' => 'Bunza'
            ],
            [
                'id' => 446,
                'state_id' => 21,
                'name' => 'Dandi'
            ],
            [
                'id' => 447,
                'state_id' => 21,
                'name' => 'Fakai'
            ],
            [
                'id' => 448,
                'state_id' => 21,
                'name' => 'Gwandu'
            ],
            [
                'id' => 449,
                'state_id' => 21,
                'name' => 'Jega'
            ],
            [
                'id' => 450,
                'state_id' => 21,
                'name' => 'Kalgo'
            ],
            [
                'id' => 451,
                'state_id' => 21,
                'name' => 'Koko/Besse'
            ],
            [
                'id' => 452,
                'state_id' => 21,
                'name' => 'Maiyama'
            ],
            [
                'id' => 453,
                'state_id' => 21,
                'name' => 'Ngaski'
            ],
            [
                'id' => 454,
                'state_id' => 21,
                'name' => 'Sakaba'
            ],
            [
                'id' => 455,
                'state_id' => 21,
                'name' => 'Shanga'
            ],
            [
                'id' => 456,
                'state_id' => 21,
                'name' => 'Suru'
            ],
            [
                'id' => 457,
                'state_id' => 21,
                'name' => 'Wasagu'
            ],
            [
                'id' => 458,
                'state_id' => 21,
                'name' => 'Yauri'
            ],
            [
                'id' => 459,
                'state_id' => 21,
                'name' => 'Zuru'
            ],
            [
                'id' => 460,
                'state_id' => 22,
                'name' => 'Adavi'
            ],
            [
                'id' => 461,
                'state_id' => 22,
                'name' => 'Ajaokuta'
            ],
            [
                'id' => 462,
                'state_id' => 22,
                'name' => 'Ankpa'
            ],
            [
                'id' => 463,
                'state_id' => 22,
                'name' => 'Bassa'
            ],
            [
                'id' => 464,
                'state_id' => 22,
                'name' => 'Dekina'
            ],
            [
                'id' => 465,
                'state_id' => 22,
                'name' => 'Ibaji'
            ],
            [
                'id' => 466,
                'state_id' => 22,
                'name' => 'Idah'
            ],
            [
                'id' => 467,
                'state_id' => 22,
                'name' => 'Igalamela-Odolu'
            ],
            [
                'id' => 468,
                'state_id' => 22,
                'name' => 'Ijumu'
            ],
            [
                'id' => 469,
                'state_id' => 22,
                'name' => 'Kabba/Bunu'
            ],
            [
                'id' => 470,
                'state_id' => 22,
                'name' => 'Kogi'
            ],
            [
                'id' => 471,
                'state_id' => 22,
                'name' => 'Lokoja'
            ],
            [
                'id' => 472,
                'state_id' => 22,
                'name' => 'Mopa-Muro'
            ],
            [
                'id' => 473,
                'state_id' => 22,
                'name' => 'Ofu'
            ],
            [
                'id' => 474,
                'state_id' => 22,
                'name' => 'Ogori/Magongo'
            ],
            [
                'id' => 475,
                'state_id' => 22,
                'name' => 'Okehi'
            ],
            [
                'id' => 476,
                'state_id' => 22,
                'name' => 'Okene'
            ],
            [
                'id' => 477,
                'state_id' => 22,
                'name' => 'Olamaboro'
            ],
            [
                'id' => 478,
                'state_id' => 22,
                'name' => 'Omala'
            ],
            [
                'id' => 479,
                'state_id' => 22,
                'name' => 'Yagba East'
            ],
            [
                'id' => 480,
                'state_id' => 23,
                'name' => 'Asa'
            ],
            [
                'id' => 481,
                'state_id' => 23,
                'name' => 'Baruten'
            ],
            [
                'id' => 482,
                'state_id' => 23,
                'name' => 'Edu'
            ],
            [
                'id' => 483,
                'state_id' => 23,
                'name' => 'Ekiti'
            ],
            [
                'id' => 484,
                'state_id' => 23,
                'name' => 'Ifelodun'
            ],
            [
                'id' => 485,
                'state_id' => 23,
                'name' => 'Ilorin East'
            ],
            [
                'id' => 486,
                'state_id' => 23,
                'name' => 'Ilorin South'
            ],
            [
                'id' => 487,
                'state_id' => 23,
                'name' => 'Ilorin West'
            ],
            [
                'id' => 488,
                'state_id' => 23,
                'name' => 'Irepodun'
            ],
            [
                'id' => 489,
                'state_id' => 23,
                'name' => 'Isin'
            ],
            [
                'id' => 490,
                'state_id' => 23,
                'name' => 'Kaiama'
            ],
            [
                'id' => 491,
                'state_id' => 23,
                'name' => 'Moro'
            ],
            [
                'id' => 492,
                'state_id' => 23,
                'name' => 'Offa'
            ],
            [
                'id' => 493,
                'state_id' => 23,
                'name' => 'Oke Ero'
            ],
            [
                'id' => 494,
                'state_id' => 23,
                'name' => 'Oyun'
            ],
            [
                'id' => 495,
                'state_id' => 23,
                'name' => 'Pategi'
            ],
            [
                'id' => 496,
                'state_id' => 24,
                'name' => 'Agege'
            ],
            [
                'id' => 497,
                'state_id' => 24,
                'name' => 'Alimosho'
            ],
            [
                'id' => 498,
                'state_id' => 24,
                'name' => 'Ajeromi-Ifelodun'
            ],
            [
                'id' => 499,
                'state_id' => 24,
                'name' => 'Apapa'
            ],
            [
                'id' => 500,
                'state_id' => 24,
                'name' => 'Badagry'
            ],
            [
                'id' => 501,
                'state_id' => 24,
                'name' => 'Epe'
            ],
            [
                'id' => 502,
                'state_id' => 24,
                'name' => 'Eti-Osa'
            ],
            [
                'id' => 503,
                'state_id' => 24,
                'name' => 'Ibeju-Lekki'
            ],
            [
                'id' => 504,
                'state_id' => 24,
                'name' => 'Ikeja'
            ],
            [
                'id' => 505,
                'state_id' => 24,
                'name' => 'Ikorodu'
            ],
            [
                'id' => 506,
                'state_id' => 24,
                'name' => 'Ifako-Ijaye'
            ],
            [
                'id' => 507,
                'state_id' => 24,
                'name' => 'Ikeja'
            ],
            [
                'id' => 508,
                'state_id' => 24,
                'name' => 'Kosofe'
            ],
            [
                'id' => 509,
                'state_id' => 24,
                'name' => 'Lagos Island'
            ],
            [
                'id' => 510,
                'state_id' => 24,
                'name' => 'Lagos Mainland'
            ],
            [
                'id' => 511,
                'state_id' => 24,
                'name' => 'Mushin'
            ],
            [
                'id' => 512,
                'state_id' => 24,
                'name' => 'Ojo'
            ],
            [
                'id' => 513,
                'state_id' => 24,
                'name' => 'Oshodi-Isolo'
            ],
            [
                'id' => 514,
                'state_id' => 24,
                'name' => 'Shomolu'
            ],
            [
                'id' => 515,
                'state_id' => 24,
                'name' => 'Surulere'
            ],
            [
                'id' => 516,
                'state_id' => 25,
                'name' => 'Akwanga'
            ],
            [
                'id' => 517,
                'state_id' => 25,
                'name' => 'Awe'
            ],
            [
                'id' => 518,
                'state_id' => 25,
                'name' => 'Doma'
            ],
            [
                'id' => 519,
                'state_id' => 25,
                'name' => 'Eggon'
            ],
            [
                'id' => 520,
                'state_id' => 25,
                'name' => 'Karu'
            ],
            [
                'id' => 521,
                'state_id' => 25,
                'name' => 'Keana'
            ],
            [
                'id' => 522,
                'state_id' => 25,
                'name' => 'Keffi'
            ],
            [
                'id' => 523,
                'state_id' => 25,
                'name' => 'Kokona'
            ],
            [
                'id' => 524,
                'state_id' => 25,
                'name' => 'Lafia'
            ],
            [
                'id' => 525,
                'state_id' => 25,
                'name' => 'Nasarawa'
            ],
            [
                'id' => 526,
                'state_id' => 25,
                'name' => 'Obi'
            ],
            [
                'id' => 527,
                'state_id' => 25,
                'name' => 'Toto'
            ],
            [
                'id' => 528,
                'state_id' => 25,
                'name' => 'Wamba'
            ],
            [
                'id' => 529,
                'state_id' => 26,
                'name' => 'Agaie'
            ],
            [
                'id' => 530,
                'state_id' => 26,
                'name' => 'Agwara'
            ],
            [
                'id' => 531,
                'state_id' => 26,
                'name' => 'Bida'
            ],
            [
                'id' => 532,
                'state_id' => 26,
                'name' => 'Borgu'
            ],
            [
                'id' => 533,
                'state_id' => 26,
                'name' => 'Bosso'
            ],
            [
                'id' => 534,
                'state_id' => 26,
                'name' => 'Chanchaga'
            ],
            [
                'id' => 535,
                'state_id' => 26,
                'name' => 'Edati'
            ],
            [
                'id' => 536,
                'state_id' => 26,
                'name' => 'Gbako'
            ],
            [
                'id' => 537,
                'state_id' => 26,
                'name' => 'Gurara'
            ],
            [
                'id' => 538,
                'state_id' => 26,
                'name' => 'Katcha'
            ],
            [
                'id' => 539,
                'state_id' => 26,
                'name' => 'Kontagora'
            ],
            [
                'id' => 540,
                'state_id' => 26,
                'name' => 'Lapai'
            ],
            [
                'id' => 541,
                'state_id' => 26,
                'name' => 'Lavun'
            ],
            [
                'id' => 542,
                'state_id' => 26,
                'name' => 'Magama'
            ],
            [
                'id' => 543,
                'state_id' => 26,
                'name' => 'Mariga'
            ],
            [
                'id' => 544,
                'state_id' => 26,
                'name' => 'Mashegu'
            ],
            [
                'id' => 545,
                'state_id' => 26,
                'name' => 'Mokwa'
            ],
            [
                'id' => 546,
                'state_id' => 26,
                'name' => 'Munya'
            ],
            [
                'id' => 547,
                'state_id' => 26,
                'name' => 'Paikoro'
            ],
            [
                'id' => 548,
                'state_id' => 26,
                'name' => 'Rafi'
            ],
            [
                'id' => 549,
                'state_id' => 26,
                'name' => 'Rijau'
            ],
            [
                'id' => 550,
                'state_id' => 26,
                'name' => 'Shiroro'
            ],
            [
                'id' => 551,
                'state_id' => 26,
                'name' => 'Suleja'
            ],
            [
                'id' => 552,
                'state_id' => 26,
                'name' => 'Tafa'
            ],
            [
                'id' => 553,
                'state_id' => 26,
                'name' => 'Wushishi'
            ],
            [
                'id' => 554,
                'state_id' => 27,
                'name' => 'Abeokuta North'
            ],
            [
                'id' => 555,
                'state_id' => 27,
                'name' => 'Abeokuta South'
            ],
            [
                'id' => 556,
                'state_id' => 27,
                'name' => 'Ado-Odo/Ota'
            ],
            [
                'id' => 557,
                'state_id' => 27,
                'name' => 'Ewekoro'
            ],
            [
                'id' => 558,
                'state_id' => 27,
                'name' => 'Ifo'
            ],
            [
                'id' => 559,
                'state_id' => 27,
                'name' => 'Ijebu East'
            ],
            [
                'id' => 560,
                'state_id' => 27,
                'name' => 'Ijebu North'
            ],
            [
                'id' => 561,
                'state_id' => 27,
                'name' => 'Ijebu Ode'
            ],
            [
                'id' => 562,
                'state_id' => 27,
                'name' => 'Ikenne'
            ],
            [
                'id' => 563,
                'state_id' => 27,
                'name' => 'Imeko Afon'
            ],
            [
                'id' => 564,
                'state_id' => 27,
                'name' => 'Ipokia'
            ],
            [
                'id' => 565,
                'state_id' => 27,
                'name' => 'Obafemi Owode'
            ],
            [
                'id' => 566,
                'state_id' => 27,
                'name' => 'Odogbolu'
            ],
            [
                'id' => 567,
                'state_id' => 27,
                'name' => 'Odeda'
            ],
            [
                'id' => 568,
                'state_id' => 27,
                'name' => 'Ogun Waterside'
            ],
            [
                'id' => 569,
                'state_id' => 27,
                'name' => 'Remo North'
            ],
            [
                'id' => 570,
                'state_id' => 27,
                'name' => 'Sagamu'
            ],
            [
                'id' => 571,
                'state_id' => 27,
                'name' => 'Yewa North'
            ],
            [
                'id' => 572,
                'state_id' => 27,
                'name' => 'Yewa South'
            ],
            [
                'id' => 573,
                'state_id' => 28,
                'name' => 'Akoko North-East'
            ],
            [
                'id' => 574,
                'state_id' => 28,
                'name' => 'Akoko North-West'
            ],
            [
                'id' => 575,
                'state_id' => 28,
                'name' => 'Akoko South-East'
            ],
            [
                'id' => 576,
                'state_id' => 28,
                'name' => 'Akoko South-West'
            ],
            [
                'id' => 577,
                'state_id' => 28,
                'name' => 'Akure North'
            ],
            [
                'id' => 578,
                'state_id' => 28,
                'name' => 'Akure South'
            ],
            [
                'id' => 579,
                'state_id' => 28,
                'name' => 'Ese Odo'
            ],
            [
                'id' => 580,
                'state_id' => 28,
                'name' => 'Idanre'
            ],
            [
                'id' => 581,
                'state_id' => 28,
                'name' => 'Ifedore'
            ],
            [
                'id' => 582,
                'state_id' => 28,
                'name' => 'Ilaje'
            ],
            [
                'id' => 583,
                'state_id' => 28,
                'name' => 'Ile Oluji/Okeigbo'
            ],
            [
                'id' => 584,
                'state_id' => 28,
                'name' => 'Irele'
            ],
            [
                'id' => 585,
                'state_id' => 28,
                'name' => 'Odigbo'
            ],
            [
                'id' => 586,
                'state_id' => 28,
                'name' => 'Okitipupa'
            ],
            [
                'id' => 587,
                'state_id' => 28,
                'name' => 'Ondo East'
            ],
            [
                'id' => 588,
                'state_id' => 28,
                'name' => 'Ondo West'
            ],
            [
                'id' => 589,
                'state_id' => 28,
                'name' => 'Ose'
            ],
            [
                'id' => 590,
                'state_id' => 28,
                'name' => 'Owo'
            ],
            [
                'id' => 591,
                'state_id' => 29,
                'name' => 'Aiyedaade'
            ],
            [
                'id' => 592,
                'state_id' => 29,
                'name' => 'Aiyedire'
            ],
            [
                'id' => 593,
                'state_id' => 29,
                'name' => 'Atakunmosa East'
            ],
            [
                'id' => 594,
                'state_id' => 29,
                'name' => 'Atakunmosa West'
            ],
            [
                'id' => 595,
                'state_id' => 29,
                'name' => 'Boluwaduro'
            ],
            [
                'id' => 596,
                'state_id' => 29,
                'name' => 'Boripe'
            ],
            [
                'id' => 597,
                'state_id' => 29,
                'name' => 'Ede North'
            ],
            [
                'id' => 598,
                'state_id' => 29,
                'name' => 'Ede South'
            ],
            [
                'id' => 599,
                'state_id' => 29,
                'name' => 'Egbedore'
            ],
            [
                'id' => 600,
                'state_id' => 29,
                'name' => 'Ejigbo'
            ],
            [
                'id' => 601,
                'state_id' => 29,
                'name' => 'Ife Central'
            ],
            [
                'id' => 602,
                'state_id' => 29,
                'name' => 'Ife East'
            ],
            [
                'id' => 603,
                'state_id' => 29,
                'name' => 'Ife North'
            ],
            [
                'id' => 604,
                'state_id' => 29,
                'name' => 'Ife South'
            ],
            [
                'id' => 605,
                'state_id' => 29,
                'name' => 'Ifedayo'
            ],
            [
                'id' => 606,
                'state_id' => 29,
                'name' => 'Ifelodun'
            ],
            [
                'id' => 607,
                'state_id' => 29,
                'name' => 'Ila'
            ],
            [
                'id' => 608,
                'state_id' => 29,
                'name' => 'Ilesa East'
            ],
            [
                'id' => 609,
                'state_id' => 29,
                'name' => 'Ilesa West'
            ],
            [
                'id' => 610,
                'state_id' => 29,
                'name' => 'Irepodun'
            ],
            [
                'id' => 611,
                'state_id' => 29,
                'name' => 'Irewole'
            ],
            [
                'id' => 612,
                'state_id' => 29,
                'name' => 'Isokan'
            ],
            [
                'id' => 613,
                'state_id' => 29,
                'name' => 'Iwo'
            ],
            [
                'id' => 614,
                'state_id' => 29,
                'name' => 'Obokun'
            ],
            [
                'id' => 615,
                'state_id' => 29,
                'name' => 'Odo Otin'
            ],
            [
                'id' => 616,
                'state_id' => 29,
                'name' => 'Ola Oluwa'
            ],
            [
                'id' => 617,
                'state_id' => 29,
                'name' => 'Olorunda'
            ],
            [
                'id' => 618,
                'state_id' => 29,
                'name' => 'Oriade'
            ],
            [
                'id' => 619,
                'state_id' => 29,
                'name' => 'Orolu'
            ],
            [
                'id' => 620,
                'state_id' => 29,
                'name' => 'Osogbo'
            ],
            [
                'id' => 621,
                'state_id' => 30,
                'name' => 'Afijio'
            ],
            [
                'id' => 622,
                'state_id' => 30,
                'name' => 'Akinyele'
            ],
            [
                'id' => 623,
                'state_id' => 30,
                'name' => 'Atiba'
            ],
            [
                'id' => 624,
                'state_id' => 30,
                'name' => 'Atisbo'
            ],
            [
                'id' => 625,
                'state_id' => 30,
                'name' => 'Egbeda'
            ],
            [
                'id' => 626,
                'state_id' => 30,
                'name' => 'Ibadan North'
            ],
            [
                'id' => 627,
                'state_id' => 30,
                'name' => 'Ibadan North-East'
            ],
            [
                'id' => 628,
                'state_id' => 30,
                'name' => 'Ibadan North-West'
            ],
            [
                'id' => 629,
                'state_id' => 30,
                'name' => 'Ibadan South-East'
            ],
            [
                'id' => 630,
                'state_id' => 30,
                'name' => 'Ibadan South-West'
            ],
            [
                'id' => 631,
                'state_id' => 30,
                'name' => 'Ibarapa Central'
            ],
            [
                'id' => 632,
                'state_id' => 30,
                'name' => 'Ibarapa East'
            ],
            [
                'id' => 633,
                'state_id' => 30,
                'name' => 'Ibarapa North'
            ],
            [
                'id' => 634,
                'state_id' => 30,
                'name' => 'Ido'
            ],
            [
                'id' => 635,
                'state_id' => 30,
                'name' => 'Irepo'
            ],
            [
                'id' => 636,
                'state_id' => 30,
                'name' => 'Iseyin'
            ],
            [
                'id' => 637,
                'state_id' => 30,
                'name' => 'Itesiwaju'
            ],
            [
                'id' => 638,
                'state_id' => 30,
                'name' => 'Iwajowa'
            ],
            [
                'id' => 639,
                'state_id' => 30,
                'name' => 'Kajola'
            ],
            [
                'id' => 640,
                'state_id' => 30,
                'name' => 'Lagelu'
            ],
            [
                'id' => 641,
                'state_id' => 30,
                'name' => 'Ogbomosho North'
            ],
            [
                'id' => 642,
                'state_id' => 30,
                'name' => 'Ogbomosho South'
            ],
            [
                'id' => 643,
                'state_id' => 30,
                'name' => 'Ogo Oluwa'
            ],
            [
                'id' => 644,
                'state_id' => 30,
                'name' => 'Olorunsogo'
            ],
            [
                'id' => 645,
                'state_id' => 30,
                'name' => 'Oluyole'
            ],
            [
                'id' => 646,
                'state_id' => 30,
                'name' => 'Ona Ara'
            ],
            [
                'id' => 647,
                'state_id' => 30,
                'name' => 'Orelope'
            ],
            [
                'id' => 648,
                'state_id' => 30,
                'name' => 'Ori Ire'
            ],
            [
                'id' => 649,
                'state_id' => 30,
                'name' => 'Oyo East'
            ],
            [
                'id' => 650,
                'state_id' => 30,
                'name' => 'Oyo West'
            ],
            [
                'id' => 651,
                'state_id' => 30,
                'name' => 'Saki East'
            ],
            [
                'id' => 652,
                'state_id' => 30,
                'name' => 'Saki West'
            ],
            [
                'id' => 653,
                'state_id' => 30,
                'name' => 'Surulere'
            ],
            [
                'id' => 654,
                'state_id' => 31,
                'name' => 'Barkin Ladi'
            ],
            [
                'id' => 655,
                'state_id' => 31,
                'name' => 'Bassa'
            ],
            [
                'id' => 656,
                'state_id' => 31,
                'name' => 'Bokkos'
            ],
            [
                'id' => 657,
                'state_id' => 31,
                'name' => 'Jos East'
            ],
            [
                'id' => 658,
                'state_id' => 31,
                'name' => 'Jos North'
            ],
            [
                'id' => 659,
                'state_id' => 31,
                'name' => 'Jos South'
            ],
            [
                'id' => 660,
                'state_id' => 31,
                'name' => 'Kanam'
            ],
            [
                'id' => 661,
                'state_id' => 31,
                'name' => 'Kanke'
            ],
            [
                'id' => 662,
                'state_id' => 31,
                'name' => 'Langtang North'
            ],
            [
                'id' => 663,
                'state_id' => 31,
                'name' => 'Langtang South'
            ],
            [
                'id' => 664,
                'state_id' => 31,
                'name' => 'Mangu'
            ],
            [
                'id' => 665,
                'state_id' => 31,
                'name' => 'Mikang'
            ],
            [
                'id' => 666,
                'state_id' => 31,
                'name' => 'Pankshin'
            ],
            [
                'id' => 667,
                'state_id' => 31,
                'name' => 'Qua\'an Pan'
            ],
            [
                'id' => 668,
                'state_id' => 31,
                'name' => 'Riyom'
            ],
            [
                'id' => 669,
                'state_id' => 31,
                'name' => 'Shendam'
            ],
            [
                'id' => 670,
                'state_id' => 31,
                'name' => 'Wase'
            ],
            [
                'id' => 671,
                'state_id' => 32,
                'name' => 'Abua–Odual'
            ],
            [
                'id' => 672,
                'state_id' => 32,
                'name' => 'Ahoada East'
            ],
            [
                'id' => 673,
                'state_id' => 32,
                'name' => 'Ahoada West'
            ],
            [
                'id' => 674,
                'state_id' => 32,
                'name' => 'Akuku-Toru'
            ],
            [
                'id' => 675,
                'state_id' => 32,
                'name' => 'Andoni'
            ],
            [
                'id' => 676,
                'state_id' => 32,
                'name' => 'Asari-Toru'
            ],
            [
                'id' => 677,
                'state_id' => 32,
                'name' => 'Bonny'
            ],
            [
                'id' => 678,
                'state_id' => 32,
                'name' => 'Degema'
            ],
            [
                'id' => 679,
                'state_id' => 32,
                'name' => 'Eleme'
            ],
            [
                'id' => 680,
                'state_id' => 32,
                'name' => 'Emohua'
            ],
            [
                'id' => 681,
                'state_id' => 32,
                'name' => 'Etche'
            ],
            [
                'id' => 682,
                'state_id' => 32,
                'name' => 'Gokana'
            ],
            [
                'id' => 683,
                'state_id' => 32,
                'name' => 'Ikwerre'
            ],
            [
                'id' => 684,
                'state_id' => 32,
                'name' => 'Khana'
            ],
            [
                'id' => 685,
                'state_id' => 32,
                'name' => 'Obio-Akpor'
            ],
            [
                'id' => 686,
                'state_id' => 32,
                'name' => 'Ogba–Egbema–Ndoni'
            ],
            [
                'id' => 687,
                'state_id' => 32,
                'name' => 'Ogu–Bolo'
            ],
            [
                'id' => 688,
                'state_id' => 32,
                'name' => 'Okrika'
            ],
            [
                'id' => 689,
                'state_id' => 32,
                'name' => 'Omuma'
            ],
            [
                'id' => 690,
                'state_id' => 32,
                'name' => 'Opobo–Nkoro'
            ],
            [
                'id' => 691,
                'state_id' => 32,
                'name' => 'Oyigbo'
            ],
            [
                'id' => 692,
                'state_id' => 32,
                'name' => 'Port Harcourt'
            ],
            [
                'id' => 693,
                'state_id' => 32,
                'name' => 'Tai'
            ],
            [
                'id' => 694,
                'state_id' => 33,
                'name' => 'Binji'
            ],
            [
                'id' => 695,
                'state_id' => 33,
                'name' => 'Bodinga'
            ],
            [
                'id' => 696,
                'state_id' => 33,
                'name' => 'Dange Shuni'
            ],
            [
                'id' => 697,
                'state_id' => 33,
                'name' => 'Gada'
            ],
            [
                'id' => 698,
                'state_id' => 33,
                'name' => 'Goronyo'
            ],
            [
                'id' => 699,
                'state_id' => 33,
                'name' => 'Gudu'
            ],
            [
                'id' => 700,
                'state_id' => 33,
                'name' => 'Gwadabawa'
            ],
            [
                'id' => 701,
                'state_id' => 33,
                'name' => 'Illela'
            ],
            [
                'id' => 702,
                'state_id' => 33,
                'name' => 'Isa'
            ],
            [
                'id' => 703,
                'state_id' => 33,
                'name' => 'Kebbe'
            ],
            [
                'id' => 704,
                'state_id' => 33,
                'name' => 'Kware'
            ],
            [
                'id' => 705,
                'state_id' => 33,
                'name' => 'Rabah'
            ],
            [
                'id' => 706,
                'state_id' => 33,
                'name' => 'Sabon Birni'
            ],
            [
                'id' => 707,
                'state_id' => 33,
                'name' => 'Shagari'
            ],
            [
                'id' => 708,
                'state_id' => 33,
                'name' => 'Silame'
            ],
            [
                'id' => 709,
                'state_id' => 33,
                'name' => 'Sokoto North'
            ],
            [
                'id' => 710,
                'state_id' => 33,
                'name' => 'Sokoto South'
            ],
            [
                'id' => 711,
                'state_id' => 33,
                'name' => 'Tambuwal'
            ],
            [
                'id' => 712,
                'state_id' => 33,
                'name' => 'Tangaza'
            ],
            [
                'id' => 713,
                'state_id' => 33,
                'name' => 'Tureta'
            ],
            [
                'id' => 714,
                'state_id' => 33,
                'name' => 'Wamako'
            ],
            [
                'id' => 715,
                'state_id' => 33,
                'name' => 'Wurno'
            ],
            [
                'id' => 716,
                'state_id' => 33,
                'name' => 'Yabo'
            ],
            [
                'id' => 717,
                'state_id' => 34,
                'name' => 'Ardo Kola'
            ],
            [
                'id' => 718,
                'state_id' => 34,
                'name' => 'Bali'
            ],
            [
                'id' => 719,
                'state_id' => 34,
                'name' => 'Donga'
            ],
            [
                'id' => 720,
                'state_id' => 34,
                'name' => 'Gashaka'
            ],
            [
                'id' => 721,
                'state_id' => 34,
                'name' => 'Gassol'
            ],
            [
                'id' => 722,
                'state_id' => 34,
                'name' => 'Ibi'
            ],
            [
                'id' => 723,
                'state_id' => 34,
                'name' => 'Jalingo'
            ],
            [
                'id' => 724,
                'state_id' => 34,
                'name' => 'Karim Lamido'
            ],
            [
                'id' => 725,
                'state_id' => 34,
                'name' => 'Kurmi'
            ],
            [
                'id' => 726,
                'state_id' => 34,
                'name' => 'Lau'
            ],
            [
                'id' => 727,
                'state_id' => 34,
                'name' => 'Sardauna'
            ],
            [
                'id' => 728,
                'state_id' => 34,
                'name' => 'Takum'
            ],
            [
                'id' => 729,
                'state_id' => 34,
                'name' => 'Ussa'
            ],
            [
                'id' => 730,
                'state_id' => 34,
                'name' => 'Wukari'
            ],
            [
                'id' => 731,
                'state_id' => 34,
                'name' => 'Yorro'
            ],
            [
                'id' => 732,
                'state_id' => 34,
                'name' => 'Zing'
            ],
            [
                'id' => 733,
                'state_id' => 35,
                'name' => 'Bade'
            ],
            [
                'id' => 734,
                'state_id' => 35,
                'name' => 'Bursari'
            ],
            [
                'id' => 735,
                'state_id' => 35,
                'name' => 'Damaturu'
            ],
            [
                'id' => 736,
                'state_id' => 35,
                'name' => 'Geidam'
            ],
            [
                'id' => 737,
                'state_id' => 35,
                'name' => 'Gujba'
            ],
            [
                'id' => 738,
                'state_id' => 35,
                'name' => 'Gulani'
            ],
            [
                'id' => 739,
                'state_id' => 35,
                'name' => 'Fika'
            ],
            [
                'id' => 740,
                'state_id' => 35,
                'name' => 'Fune'
            ],
            [
                'id' => 741,
                'state_id' => 35,
                'name' => 'Jakusko'
            ],
            [
                'id' => 742,
                'state_id' => 35,
                'name' => 'Karasuwa'
            ],
            [
                'id' => 743,
                'state_id' => 35,
                'name' => 'Machina'
            ],
            [
                'id' => 744,
                'state_id' => 35,
                'name' => 'Nangere'
            ],
            [
                'id' => 745,
                'state_id' => 35,
                'name' => 'Nguru'
            ],
            [
                'id' => 746,
                'state_id' => 35,
                'name' => 'Potiskum'
            ],
            [
                'id' => 747,
                'state_id' => 35,
                'name' => 'Tarmuwa'
            ],
            [
                'id' => 748,
                'state_id' => 35,
                'name' => 'Yunusari'
            ],
            [
                'id' => 749,
                'state_id' => 35,
                'name' => 'Yusufari'
            ],
            [
                'id' => 750,
                'state_id' => 36,
                'name' => 'Anka'
            ],
            [
                'id' => 751,
                'state_id' => 36,
                'name' => 'Bakura'
            ],
            [
                'id' => 752,
                'state_id' => 36,
                'name' => 'Birnin Magaji/Kiyaw'
            ],
            [
                'id' => 753,
                'state_id' => 36,
                'name' => 'Bukkuyum'
            ],
            [
                'id' => 754,
                'state_id' => 36,
                'name' => 'Bungudu'
            ],
            [
                'id' => 755,
                'state_id' => 36,
                'name' => 'Chafe (Tsafe)'
            ],
            [
                'id' => 756,
                'state_id' => 36,
                'name' => 'Gummi'
            ],
            [
                'id' => 757,
                'state_id' => 36,
                'name' => 'Gusau'
            ],
            [
                'id' => 758,
                'state_id' => 36,
                'name' => 'Kaura Namoda'
            ],
            [
                'id' => 759,
                'state_id' => 36,
                'name' => 'Maradun'
            ],
            [
                'id' => 760,
                'state_id' => 36,
                'name' => 'Maru'
            ],
            [
                'id' => 761,
                'state_id' => 36,
                'name' => 'Shinkafi'
            ],
            [
                'id' => 762,
                'state_id' => 36,
                'name' => 'Talata Mafara'
            ],
            [
                'id' => 763,
                'state_id' => 36,
                'name' => 'Zurmi'
            ],
            [
                'id' => 764,
                'state_id' => 37,
                'name' => 'Abaji'
            ],
            [
                'id' => 765,
                'state_id' => 37,
                'name' => 'Abuja Municipal'
            ],
            [
                'id' => 766,
                'state_id' => 37,
                'name' => 'Bwari'
            ],
            [
                'id' => 767,
                'state_id' => 37,
                'name' => 'Gwagwalada'
            ],
            [
                'id' => 768,
                'state_id' => 37,
                'name' => 'Kuje'
            ],
            [
                'id' => 769,
                'state_id' => 37,
                'name' => 'Kwali'
            ],
        ];
        LocalGovernmentArea::insert($local_government_areas);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamStaffLiveContentSeeder extends Seeder
{
    public function run()
    {
        $now = now();

        DB::table('teams')
            ->where(function ($q) {
                $q->whereRaw("JSON_CONTAINS(type, '\"3\"')")
                  ->orWhereRaw("JSON_CONTAINS(type, '\"4\"')");
            })
            ->delete();

        $people = [
            ['name' => 'Tuğba ALARSLAN KAİME', 'role' => 'Kurum Müdürü', 'photo' => 'teams/August2023/KPzaT9Y3JRd1DOwPfmPf.jpg', 'type' => [3]],
            ['name' => 'Esra YÜKSEL', 'role' => 'İSG Sorumlusu / Öğretmen', 'photo' => 'teams/August2023/B3uKi8uNw2DaBSDTpN1T.jpg', 'type' => [3]],
            ['name' => 'Metin ETİK', 'role' => 'Öğretmen', 'photo' => 'teams/August2023/POCjO4A9TVTV0IGKdw1H.jpg', 'type' => [3]],
            ['name' => 'Afranur ALEMDAR', 'role' => 'Çocuk Gelişimci', 'photo' => 'teams/October2023/0HdzxNKkRRuhaexE0y91.jpg', 'type' => [3]],
            ['name' => 'Zeynep Fatma BAYRAKTAR', 'role' => 'Çocuk Gelişimci', 'photo' => 'teams/October2023/3PNGt9vaPaE9gqw5IKMN.jpg', 'type' => [3]],
            ['name' => 'Ülkü Şeyma APPAK', 'role' => 'PDR', 'photo' => 'teams/August2023/YkNnvcLBr1QINcEsyUdt.jpg', 'type' => [3]],
            ['name' => 'Gaye KILIÇ', 'role' => 'PDR', 'photo' => 'teams/September2025/38HV1MJ9HmtyCVPgspB6.jpg', 'type' => [3]],
            ['name' => 'Selin İNCE', 'role' => 'Çocuk Gelişimci', 'photo' => 'teams/November2023/5zymy1LihDAeTzX4gx2C.jpg', 'type' => [3]],
            ['name' => 'Ebrar GEVREN', 'role' => 'Çocuk Gelişimci', 'photo' => 'teams/November2023/p9SKQq4R1WHhCxw0WRuc.jpg', 'type' => [3]],
            ['name' => 'Berna YÜKSEL', 'role' => 'Entegre Yönetim Sistemleri Yetkilisi / KVKK', 'photo' => 'teams/August2023/myGScAnTi6aSh28Yw2Bh.jpg', 'type' => [4]],
        ];

        foreach ($people as $i => $p) {
            DB::table('teams')->insert([
                'title' => $p['role'],
                'name' => $p['name'],
                'content' => null,
                'content_two' => null,
                'photo' => $p['photo'],
                'url' => null,
                'order' => $i + 1,
                'type' => json_encode(array_map('strval', $p['type'])),
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }
    }
}

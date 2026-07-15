<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamLiveContentSeeder extends Seeder
{
    public function run()
    {
        $now = now();

        // Remove placeholder Yönetim Kurulu (type 1) and Bilim Kurulu (type 2) records
        DB::table('teams')
            ->where(function ($q) {
                $q->whereRaw("JSON_CONTAINS(type, '\"1\"')")
                  ->orWhereRaw("JSON_CONTAINS(type, '\"2\"')");
            })
            ->delete();

        $people = [
            ['name' => 'Mustafa ALPASLAN', 'role' => 'Yönetim Kurulu Başkanı', 'photo' => 'teams/October2023/knlOFZio0osoRTakUkhw.jpg', 'type' => [1]],
            ['name' => 'Ezgi ALPASLAN', 'role' => 'Yönetim Kurulu Üyesi', 'photo' => 'teams/October2023/3lKrqu3UGTedhbpLh7dY.jpg', 'type' => [1]],
            ['name' => 'Cengiz ŞİŞMAN', 'role' => 'Yönetim Kurulu Üyesi', 'photo' => 'teams/October2023/3Ewah9qWpCc3069TLrne.jpg', 'type' => [1]],
            ['name' => 'Prof. Dr. Onur KURT', 'role' => 'Yönetim Kurulu Üyesi', 'photo' => 'teams/October2023/epTnWFFiB5jyD8X8RRT5.jpg', 'type' => [1, 2]],
            ['name' => 'Fikri ŞEN', 'role' => 'Yönetim Kurulu Üyesi', 'photo' => 'teams/October2023/jbIg2F1P9yYpwEFwHmqm.jpg', 'type' => [1]],
            ['name' => 'Prof. Dr. Mehmet YANARDAĞ', 'role' => 'Yönetim Kurulu Üyesi', 'photo' => 'teams/October2023/5VksfSpUsqDd5KkgOEFF.jpg', 'type' => [1, 2]],
            ['name' => 'Prof. Dr. Yeşim Güleç ASLAN', 'role' => 'Bilim Kurulu Üyesi', 'photo' => 'teams/October2023/FsATputLukGbHd7x4x6q.jpg', 'type' => [2]],
            ['name' => 'Prof. Dr. Hasan GÜRGÜR', 'role' => 'Bilim Kurulu Üyesi', 'photo' => 'teams/October2023/BWSo52sNFjSnwXi8RvG5.jpg', 'type' => [2]],
            ['name' => 'Doç. Dr. Derya GENÇ TOSUN', 'role' => 'Bilim Kurulu Üyesi', 'photo' => 'teams/April2025/E2N6xQNnbjpJCsJcMPPX.jpg', 'type' => [2]],
            ['name' => 'Doç. Dr. Gizem YILDIZ', 'role' => 'Bilim Kurulu Üyesi', 'photo' => 'teams/January2025/MSU1GnHQvVNEDtSHjP5U.jpg', 'type' => [2]],
            ['name' => 'Dr. Öğr. Üyesi Zehra CEVHER', 'role' => 'Bilim Kurulu Üyesi', 'photo' => 'teams/January2025/3fW8Kz6oM9jZziLXj1Z1.jpg', 'type' => [2]],
            ['name' => 'Doç. Dr. Canan SOLA ÖZGÜÇ', 'role' => 'Bilim Kurulu Üyesi', 'photo' => 'teams/April2025/qbPOw7eKp3pq9GlwhWyh.jpg', 'type' => [2]],
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

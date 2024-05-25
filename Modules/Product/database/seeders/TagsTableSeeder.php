<?php

namespace Modules\Product\database\seeders;

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tags')->delete();

        \DB::table('tags')->insert([
            0 => [
                'id' => 1,
                'name' => 'Shoes',
                'status' => 1,
                'created_by' => null,
                'updated_by' => null,
                'deleted_by' => null,
                'created_at' => '2023-09-26 09:29:14',
                'updated_at' => '2023-09-26 09:29:14',
                'deleted_at' => null,
            ],
            1 => [
                'id' => 2,
                'name' => 'Hairfall',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 09:42:05',
                'updated_at' => '2023-09-26 09:42:05',
                'deleted_at' => null,
            ],
            2 => [
                'id' => 3,
                'name' => 'Growth Protein',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 09:46:53',
                'updated_at' => '2023-09-26 09:46:53',
                'deleted_at' => null,
            ],
            3 => [
                'id' => 4,
                'name' => 'Keratin',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 09:50:53',
                'updated_at' => '2023-09-26 09:50:53',
                'deleted_at' => null,
            ],
            4 => [
                'id' => 5,
                'name' => 'HairMask',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 09:54:53',
                'updated_at' => '2023-09-26 09:54:53',
                'deleted_at' => null,
            ],
            5 => [
                'id' => 6,
                'name' => 'ketein',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 09:59:55',
                'updated_at' => '2023-09-26 09:59:55',
                'deleted_at' => null,
            ],
            6 => [
                'id' => 7,
                'name' => 'HairSpray',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 10:02:00',
                'updated_at' => '2023-09-26 10:02:00',
                'deleted_at' => null,
            ],
            7 => [
                'id' => 8,
                'name' => 'facetoner',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 10:04:31',
                'updated_at' => '2023-09-26 10:04:31',
                'deleted_at' => null,
            ],
            8 => [
                'id' => 9,
                'name' => 'Vitamin C + E Sorbet Super Bright Moisturizer',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 10:12:22',
                'updated_at' => '2023-09-26 10:12:22',
                'deleted_at' => null,
            ],
            9 => [
                'id' => 10,
                'name' => 'face serum',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 10:14:12',
                'updated_at' => '2023-09-26 10:14:12',
                'deleted_at' => null,
            ],
            10 => [
                'id' => 11,
                'name' => 'sun defence',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 10:16:02',
                'updated_at' => '2023-09-26 10:16:02',
                'deleted_at' => null,
            ],
            11 => [
                'id' => 12,
                'name' => 'Watermelon Cooling Sunscreen',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 10:20:32',
                'updated_at' => '2023-09-26 10:20:32',
                'deleted_at' => null,
            ],
            12 => [
                'id' => 13,
                'name' => 'clay mask',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 10:22:00',
                'updated_at' => '2023-09-26 10:22:00',
                'deleted_at' => null,
            ],
            13 => [
                'id' => 14,
                'name' => 'anti acne',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 10:25:11',
                'updated_at' => '2023-09-26 10:25:11',
                'deleted_at' => null,
            ],
            14 => [
                'id' => 15,
                'name' => 'sheet mask',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 10:27:07',
                'updated_at' => '2023-09-26 10:27:07',
                'deleted_at' => null,
            ],
            15 => [
                'id' => 16,
                'name' => 'Whitening Facial Kit',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 10:29:13',
                'updated_at' => '2023-09-26 10:29:13',
                'deleted_at' => null,
            ],
            16 => [
                'id' => 17,
                'name' => 'nail paint',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 10:32:01',
                'updated_at' => '2023-09-26 10:32:01',
                'deleted_at' => null,
            ],
            17 => [
                'id' => 18,
                'name' => 'Drying Nail',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 10:34:21',
                'updated_at' => '2023-09-26 10:34:21',
                'deleted_at' => null,
            ],
            18 => [
                'id' => 19,
                'name' => 'nail art kit',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 10:36:29',
                'updated_at' => '2023-09-26 10:36:29',
                'deleted_at' => null,
            ],
            19 => [
                'id' => 20,
                'name' => 'pre color kit',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 10:38:50',
                'updated_at' => '2023-09-26 10:38:50',
                'deleted_at' => null,
            ],
            20 => [
                'id' => 21,
                'name' => 'Foot Scrubber',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 10:41:33',
                'updated_at' => '2023-09-26 10:41:33',
                'deleted_at' => null,
            ],
            21 => [
                'id' => 22,
                'name' => 'nail filter',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 10:43:07',
                'updated_at' => '2023-09-26 10:43:07',
                'deleted_at' => null,
            ],
            22 => [
                'id' => 23,
                'name' => 'nail oil',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 10:46:16',
                'updated_at' => '2023-09-26 10:46:16',
                'deleted_at' => null,
            ],
            23 => [
                'id' => 24,
                'name' => 'Nourishing Oil',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 10:48:32',
                'updated_at' => '2023-09-26 10:48:32',
                'deleted_at' => null,
            ],
            24 => [
                'id' => 25,
                'name' => 'Nail Strengthener',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 10:50:31',
                'updated_at' => '2023-09-26 10:50:31',
                'deleted_at' => null,
            ],
            25 => [
                'id' => 26,
                'name' => 'color affair 3 in 1',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 10:57:31',
                'updated_at' => '2023-09-26 10:57:31',
                'deleted_at' => null,
            ],
            26 => [
                'id' => 27,
                'name' => 'matte lipstick',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 11:01:20',
                'updated_at' => '2023-09-26 11:01:20',
                'deleted_at' => null,
            ],
            27 => [
                'id' => 28,
                'name' => 'matte mini lipstick',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 11:06:06',
                'updated_at' => '2023-09-26 11:06:06',
                'deleted_at' => null,
            ],
            28 => [
                'id' => 29,
                'name' => 'Liquid Lip Color',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 11:08:30',
                'updated_at' => '2023-09-26 11:08:30',
                'deleted_at' => null,
            ],
            29 => [
                'id' => 30,
                'name' => 'eyeshadow',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 11:18:50',
                'updated_at' => '2023-09-26 11:18:50',
                'deleted_at' => null,
            ],
            30 => [
                'id' => 31,
                'name' => 'Maxi Reloaded Palette',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 11:21:30',
                'updated_at' => '2023-09-26 11:21:30',
                'deleted_at' => null,
            ],
            31 => [
                'id' => 32,
                'name' => 'foundation',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 11:23:39',
                'updated_at' => '2023-09-26 11:23:39',
                'deleted_at' => null,
            ],
            32 => [
                'id' => 33,
                'name' => 'serum foundation',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 11:29:03',
                'updated_at' => '2023-09-26 11:29:03',
                'deleted_at' => null,
            ],
            33 => [
                'id' => 34,
                'name' => 'sponge with handle',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 11:30:47',
                'updated_at' => '2023-09-26 11:30:47',
                'deleted_at' => null,
            ],
            34 => [
                'id' => 35,
                'name' => 'brush set',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 11:32:20',
                'updated_at' => '2023-09-26 11:32:20',
                'deleted_at' => null,
            ],
            35 => [
                'id' => 36,
                'name' => 'Eyebrow and Face Razor',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 11:35:50',
                'updated_at' => '2023-09-26 11:35:50',
                'deleted_at' => null,
            ],
            36 => [
                'id' => 37,
                'name' => 'makeup mirror',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 11:37:23',
                'updated_at' => '2023-09-26 11:37:23',
                'deleted_at' => null,
            ],
            37 => [
                'id' => 38,
                'name' => 'Beauty Kit',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 11:39:23',
                'updated_at' => '2023-09-26 11:39:23',
                'deleted_at' => null,
            ],
            38 => [
                'id' => 39,
                'name' => 'shower gel',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 11:42:54',
                'updated_at' => '2023-09-26 11:42:54',
                'deleted_at' => null,
            ],
            39 => [
                'id' => 40,
                'name' => 'body wash',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 11:59:03',
                'updated_at' => '2023-09-26 11:59:03',
                'deleted_at' => null,
            ],
            40 => [
                'id' => 41,
                'name' => 'bath salt',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 12:01:24',
                'updated_at' => '2023-09-26 12:01:24',
                'deleted_at' => null,
            ],
            41 => [
                'id' => 42,
                'name' => 'bath foot soak',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 12:03:03',
                'updated_at' => '2023-09-26 12:03:03',
                'deleted_at' => null,
            ],
            42 => [
                'id' => 43,
                'name' => 'body scrub',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 12:04:57',
                'updated_at' => '2023-09-26 12:04:57',
                'deleted_at' => null,
            ],
            43 => [
                'id' => 44,
                'name' => 'underarm roller',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 12:06:59',
                'updated_at' => '2023-09-26 12:06:59',
                'deleted_at' => null,
            ],
            44 => [
                'id' => 45,
                'name' => 'body spray',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 12:08:45',
                'updated_at' => '2023-09-26 12:08:45',
                'deleted_at' => null,
            ],
            45 => [
                'id' => 46,
                'name' => 'spray',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 12:10:22',
                'updated_at' => '2023-09-26 12:10:22',
                'deleted_at' => null,
            ],
            46 => [
                'id' => 47,
                'name' => 'anti-sweat deodorant',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 12:12:41',
                'updated_at' => '2023-09-26 12:12:41',
                'deleted_at' => null,
            ],
            47 => [
                'id' => 48,
                'name' => 'sport active spray',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 12:14:52',
                'updated_at' => '2023-09-26 12:14:52',
                'deleted_at' => null,
            ],
            48 => [
                'id' => 49,
                'name' => 'pocket perfume',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 12:17:04',
                'updated_at' => '2023-09-26 12:17:04',
                'deleted_at' => null,
            ],
            49 => [
                'id' => 50,
                'name' => 'perfume',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 12:19:04',
                'updated_at' => '2023-09-26 12:19:04',
                'deleted_at' => null,
            ],
            50 => [
                'id' => 51,
                'name' => 'body butter',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 12:20:43',
                'updated_at' => '2023-09-26 12:20:43',
                'deleted_at' => null,
            ],
            51 => [
                'id' => 52,
                'name' => 'body yogurt',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 12:22:53',
                'updated_at' => '2023-09-26 12:22:53',
                'deleted_at' => null,
            ],
            52 => [
                'id' => 53,
                'name' => 'body gel',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 12:24:54',
                'updated_at' => '2023-09-26 12:24:54',
                'deleted_at' => null,
            ],
            53 => [
                'id' => 54,
                'name' => 'glyconic day cream',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 12:29:49',
                'updated_at' => '2023-09-26 12:29:49',
                'deleted_at' => null,
            ],
            54 => [
                'id' => 55,
                'name' => 'brightening day cream',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 12:32:04',
                'updated_at' => '2023-09-26 12:32:04',
                'deleted_at' => null,
            ],
            55 => [
                'id' => 56,
                'name' => 'hair dryer',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 12:34:50',
                'updated_at' => '2023-09-26 12:34:50',
                'deleted_at' => null,
            ],
            56 => [
                'id' => 57,
                'name' => 'hair styler 3 in 1',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 12:36:24',
                'updated_at' => '2023-09-26 12:36:24',
                'deleted_at' => null,
            ],
            57 => [
                'id' => 58,
                'name' => 'hair styler',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 12:38:21',
                'updated_at' => '2023-09-26 12:38:21',
                'deleted_at' => null,
            ],
            58 => [
                'id' => 59,
                'name' => 'Hair Straightening Brush',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 12:40:30',
                'updated_at' => '2023-09-26 12:40:30',
                'deleted_at' => null,
            ],
            59 => [
                'id' => 60,
                'name' => 'straightener',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 12:41:57',
                'updated_at' => '2023-09-26 12:41:57',
                'deleted_at' => null,
            ],
            60 => [
                'id' => 61,
                'name' => 'comb set',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 12:43:37',
                'updated_at' => '2023-09-26 12:43:37',
                'deleted_at' => null,
            ],
            61 => [
                'id' => 62,
                'name' => 'hair pin',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 12:46:23',
                'updated_at' => '2023-09-26 12:46:23',
                'deleted_at' => null,
            ],
            62 => [
                'id' => 63,
                'name' => 'hair brush',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 12:49:27',
                'updated_at' => '2023-09-26 12:49:27',
                'deleted_at' => null,
            ],
            63 => [
                'id' => 64,
                'name' => 'hair scalp massager',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 12:50:47',
                'updated_at' => '2023-09-26 12:50:47',
                'deleted_at' => null,
            ],
            64 => [
                'id' => 65,
                'name' => 'shower cap',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 12:52:12',
                'updated_at' => '2023-09-26 12:52:12',
                'deleted_at' => null,
            ],
            65 => [
                'id' => 66,
                'name' => 'parlour chair',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 12:53:51',
                'updated_at' => '2023-09-26 12:53:51',
                'deleted_at' => null,
            ],
            66 => [
                'id' => 67,
                'name' => 'takeer salon barber',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 12:55:18',
                'updated_at' => '2023-09-26 12:55:18',
                'deleted_at' => null,
            ],
            67 => [
                'id' => 68,
                'name' => 'trolley hairdresser',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 12:57:24',
                'updated_at' => '2023-09-26 12:57:24',
                'deleted_at' => null,
            ],
            68 => [
                'id' => 69,
                'name' => 'spa massage table',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 12:58:40',
                'updated_at' => '2023-09-26 12:58:40',
                'deleted_at' => null,
            ],
            69 => [
                'id' => 70,
                'name' => 'trimmer for men',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 13:00:05',
                'updated_at' => '2023-09-26 13:00:05',
                'deleted_at' => null,
            ],
            70 => [
                'id' => 71,
                'name' => 'hair clipper',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-26 13:01:37',
                'updated_at' => '2023-09-26 13:01:37',
                'deleted_at' => null,
            ],
            71 => [
                'id' => 72,
                'name' => 'Metal Pearl Hair Clips',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-27 05:04:34',
                'updated_at' => '2023-09-27 05:04:34',
                'deleted_at' => null,
            ],
            72 => [
                'id' => 73,
                'name' => 'headband',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-27 05:05:58',
                'updated_at' => '2023-09-27 05:05:58',
                'deleted_at' => null,
            ],
            73 => [
                'id' => 74,
                'name' => 'big hair clip',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-27 05:07:25',
                'updated_at' => '2023-09-27 05:07:25',
                'deleted_at' => null,
            ],
            74 => [
                'id' => 75,
                'name' => 'hair clip',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-27 05:10:19',
                'updated_at' => '2023-09-27 05:10:19',
                'deleted_at' => null,
            ],
            75 => [
                'id' => 76,
                'name' => 'sunglasses',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-27 05:11:36',
                'updated_at' => '2023-09-27 05:11:36',
                'deleted_at' => null,
            ],
            76 => [
                'id' => 77,
                'name' => 'cap',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-27 05:16:50',
                'updated_at' => '2023-09-27 05:16:50',
                'deleted_at' => null,
            ],
            77 => [
                'id' => 78,
                'name' => 'essential oil',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-27 05:21:46',
                'updated_at' => '2023-09-27 05:21:46',
                'deleted_at' => null,
            ],
            78 => [
                'id' => 79,
                'name' => 'fragrance oil',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-27 05:23:53',
                'updated_at' => '2023-09-27 05:23:53',
                'deleted_at' => null,
            ],
            79 => [
                'id' => 80,
                'name' => 'beard oil',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-27 05:29:52',
                'updated_at' => '2023-09-27 05:29:52',
                'deleted_at' => null,
            ],
            80 => [
                'id' => 81,
                'name' => 'hair growth serum',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-27 05:33:52',
                'updated_at' => '2023-09-27 05:33:52',
                'deleted_at' => null,
            ],
            81 => [
                'id' => 82,
                'name' => 'hair spa kit',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-27 05:35:33',
                'updated_at' => '2023-09-27 05:35:33',
                'deleted_at' => null,
            ],
            82 => [
                'id' => 83,
                'name' => 'beauty combo',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-27 05:37:21',
                'updated_at' => '2023-09-27 05:37:21',
                'deleted_at' => null,
            ],
            83 => [
                'id' => 84,
                'name' => 'hair mask',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-27 05:41:15',
                'updated_at' => '2023-09-27 05:41:15',
                'deleted_at' => null,
            ],
            84 => [
                'id' => 85,
                'name' => 'Nail Enamel Combo',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-27 05:43:41',
                'updated_at' => '2023-09-27 05:43:41',
                'deleted_at' => null,
            ],
            85 => [
                'id' => 86,
                'name' => 'nail gel',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-27 05:45:08',
                'updated_at' => '2023-09-27 05:45:08',
                'deleted_at' => null,
            ],
            86 => [
                'id' => 87,
                'name' => 'Healthy Skin Kit',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-27 05:46:58',
                'updated_at' => '2023-09-27 05:46:58',
                'deleted_at' => null,
            ],
            87 => [
                'id' => 88,
                'name' => 'lip balm',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-27 05:48:09',
                'updated_at' => '2023-09-27 05:48:09',
                'deleted_at' => null,
            ],
            88 => [
                'id' => 89,
                'name' => 'hair essential',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-27 05:49:26',
                'updated_at' => '2023-09-27 05:49:26',
                'deleted_at' => null,
            ],
            89 => [
                'id' => 90,
                'name' => 'glow-up body',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-27 05:54:08',
                'updated_at' => '2023-09-27 05:54:08',
                'deleted_at' => null,
            ],
            90 => [
                'id' => 91,
                'name' => 'body spa kit',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2023-09-27 05:59:06',
                'updated_at' => '2023-09-27 05:59:06',
                'deleted_at' => null,
            ],
        ]);
    }
}
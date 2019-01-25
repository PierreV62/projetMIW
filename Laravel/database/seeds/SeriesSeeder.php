<?php

use Illuminate\Database\Seeder;

class SeriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $twd_id = DB::table('series')->insertGetId([
            'title' => 'The Walking Dead',
            'summary' => 'Des gens marchent.'
        ]);

            $twd_s2_id= DB::table('seasons')->insertGetId([
                'serie_id' =>  $twd_id,
                'season_number' => 2
            ]);

                $twd_s2_e1_id= DB::table('episodes')->insertGetId([
                    'season_id' =>  $twd_s2_id,
                    'episode_number' => 1,
                    'title' => 'Les gens qui marchent arrivent à la ferme.'
                ]);

                 $twd_s2_e2_id= DB::table('episodes')->insertGetId([
                     'season_id' =>  $twd_s2_id,
                     'episode_number' => 2,
                     'title' => 'Les gens glandent à la ferme.'
                 ]);

        $com_id = DB::table('series')->insertGetId([
            'title'=> 'Community',
            'summary' => 'Cool. Cool, cool, cool.'
        ]);

            $com_s1_id=DB::table('seasons')->insertGetId([
                'serie_id'=> $com_id,
                'season_number' => 1
            ]);
                $com_s1_e1_id= DB::table('episodes')->insertGetId([
                    'season_id'=> $com_s1_id,
                    'episode_number' => 1,
                    'title' => "Pilot"
                ]);
                $com_s1_e1_id = DB::table('episodes')->insertGetId([
                    'season_id'=> $com_s1_id,
                    'episode_number' => 2,
                    'title' => "Spanish 101"
                ]);

            $com_s2_id=DB::table('seasons')->insertGetId([
                'serie_id'=> $com_id,
                'season_number' => 1
            ]);
                 $com_s2_e1_id= DB::table('episodes')->insertGetId([
                     'season_id'=> $com_s2_id,
                     'episode_number' => 1,
                     'title' => "Anthropology 101"
                 ]);
                 $com_s2_e2_id = DB::table('episodes')->insertGetId([
                     'season_id'=> $com_s2_id,
                     'episode_number' => 2,
                     'title' => "Accounting for Lawyers"
                     ]);

        $dar_id = DB::table('series')->insertGetId([
            'title'=> 'Daredevil',
            'summary'=> 'Un aveugle tabasse des criminels'
        ]);
            $dar_s1_id=DB::table('seasons')->insertGetId([
                'serie_id'=> $dar_id,
                'season_number'=> 1
            ]);
              $com_s1_e1_id= DB::table('episodes')->insertGetId([
                  'season_id'=> $dar_s1_id,
                  'episode_number' => 1,
                  'title' => "Into the Ring"
              ]);
    }
}

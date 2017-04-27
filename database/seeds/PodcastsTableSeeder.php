<?php

use Illuminate\Database\Seeder;

class PodcastsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('podcasts')->insert([
        [
          'title' => '#1 First Live Coding Phase Podcast',
          'description' => '<p>
                This is the first podcast I give users the opportunity to share their stories as they become developers.</p>
                <h4>special guests:</h4>
                <strong>Chris Sean</strong> - https://www.youtube.com/channel/UCu1xbgCV5o48h_BYCQD7KJg<br>
                <strong>Jesus Hilario Hernandez</strong><br>
                <strong>Alicia Alexander</strong><br>
                <strong>David Kohlruss</strong> - @DKohlruss<p></p>',
          'user_id' => 1,
          'youtube_id' => 'Qa9yNOxPluQ'
        ],
        [
          'title' => '#2 First Live Coding Phase Podcast',
          'description' => '<p>
                We discussed how it feels to be overwhelmed with all these new javascript frameworks. Also Dayton a new developer shares his story as he gets his first interview. </p>
                <h4>special guests:</h4>
                <strong>Toenio A. Rodriguez</strong><br>
                <strong>Dayton</strong><br>
                <strong>Jesus Hilario Hernandez</strong><br>
                ',
          'user_id' => 1,
          'youtube_id' => 'EOUXW1jSJp4'
        ],

      ]

    );
    }
}

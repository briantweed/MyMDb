<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatabaseViews extends Migration
{
   public function up()
   {
      // ********** Movie Details **********
      DB::statement( 'CREATE VIEW `movie_details` AS
         SELECT `m`.`movie_id` AS `movie_id`,
            `s`.`studio_id` AS `studio_id`,
            `f`.`format_id`,`c`.`certificate_id`,
            `m`.`movie_name` as `name`,
            if(`m`.`movie_sort_name`="",`m`.`movie_name`,`m`.`movie_sort_name`) AS `sort_name`,
            `m`.`movie_image_path` as `cover`,
            `m`.`movie_release_date` as `released`,
            `m`.`movie_purchased` as `purchased`,
            `m`.`movie_my_rating` as `rating`,
            `m`.`movie_running_time` as `running_time`,
            `c`.`certificate_title` as `certificate`,
            `f`.`format_type` as `format`,
            `s`.`studio_name` as `studio`,
            `m`.`movie_duplicate` as `duplicate`,
            `m`.`movie_bio` as `description`
         FROM `movies` `m`
         LEFT JOIN `certificates` `c` ON `c`.`certificate_id` = `m`.`movie_certificate_id`
         LEFT JOIN `formats` `f` ON `f`.`format_id` = `m`.`movie_format_id`
         LEFT JOIN `studios` `s` ON `s`.`studio_id` = `m`.`movie_studio_id`
         ORDER BY if(`m`.`movie_sort_name`="",`m`.`movie_name`,`m`.`movie_sort_name`)
      '); // end of Movie Details


      // ********** Movie Cast **********
      DB::statement( 'CREATE VIEW `movie_cast` AS
         SELECT
            `m`.`movie_id`,
            `p`.`person_id`,
            `ch`.`character_id`,
            `m`.`movie_name`,
            `m`.`movie_release_date` as `released`,
            `p`.`person_forename` as `forename`,
            `p`.`person_surname` as `surname`,
            `ch`.`character_name`
         FROM `movies` `m`
         JOIN `cast` `c` ON `m`.`movie_id` = `c`.`cast_movie_id`
         JOIN `persons` `p` ON `c`.`cast_person_id` = `p`.`person_id`
         LEFT JOIN `characters` `ch` ON `c`.`cast_character_id` = `ch`.`character_id`
         ORDER BY IF(ISNULL(`m`.`movie_sort_name`), `m`.`movie_name`, `m`.`movie_sort_name`),
            `c`.`cast_order`
      '); // end of Movie Cast


      // ********** Movie Crew **********
      DB::statement( 'CREATE VIEW `movie_crew` AS
         SELECT
            `m`.`movie_id`,
            `p`.`person_id`,
            `m`.`movie_name`,
            `p`.`person_forename` as `forename`,
            `p`.`person_surname` as `surname`,
            `pos`.`position_title` as `position`
         FROM `movies` `m` JOIN `crew` `c` ON `m`.`movie_id` = `c`.`crew_movie_id`
         JOIN `persons` `p` ON `c`.`crew_person_id` = `p`.`person_id`
         LEFT JOIN `positions` `pos` ON `pos`.`position_id` = `c`.`crew_position_id`
         ORDER BY IF(ISNULL(`m`.`movie_sort_name`),`m`.`movie_name`,`m`.`movie_sort_name`),
            `pos`.`position_order`,
            `p`.`person_surname`
      '); // end of Movie Crew


      // ********** Movie Categories **********
      DB::statement( 'CREATE VIEW `movie_categories` AS
         SELECT
            `m`.`movie_id`,
            `g`.`genre_id`,
            `m`.`movie_name`,
            `g`.`genre_type` as `type`
         FROM `movies` `m`
         JOIN `categories` `c` ON `c`.`category_movie_id` = `m`.`movie_id`
         LEFT JOIN `genres` `g` ON `g`.`genre_id` = `c`.`category_genre_id`
      '); // end of Movie Categories


      // ********** Movie Tags **********
      DB::statement( 'CREATE VIEW `movie_tags` AS
         SELECT
            `m`.`movie_id`,
            `k`.`keyword_id`,
            `m`.`movie_name`,
            `k`.`keyword_word` as `word`
         FROM `movies` `m`
         JOIN `tags` `t` ON `t`.`tag_movie_id` = `m`.`movie_id`
         LEFT JOIN `keywords` `k` ON `k`.`keyword_id` = `t`.`tag_keyword_id`
      '); // end of Movie Tags


      // ********** Movie Viewings **********
      DB::statement( 'CREATE VIEW `movie_viewings` AS
         SELECT
            `m`.`movie_id`,
            `m`.`movie_name`,
            `v`.`viewing_date` as `date`
         FROM `movies` `m`
         JOIN `viewings` `v` ON `v`.`viewing_movie_id` = `m`.`movie_id`
      '); // end of Movie Viewings


      // ********** Movie Most Recent Viewings **********
      DB::statement( 'CREATE VIEW `movie_viewings_most_recent` AS
         SELECT t1.*
         FROM movie_viewings t1
         WHERE t1.date = (
            SELECT MAX(t2.date) as `date`
               FROM movie_viewings t2
               WHERE t2.movie_id = t1.movie_id
            )
      '); // end of Most Recent Viewings

   } // end of up

   public function down()
   {
      DB::statement('DROP VIEW `movie_details`');
      DB::statement('DROP VIEW `movie_cast`');
      DB::statement('DROP VIEW `movie_crew`');
      DB::statement('DROP VIEW `movie_categories`');
      DB::statement('DROP VIEW `movie_tags`');
      DB::statement('DROP VIEW `movie_viewings`');
      DB::statement('DROP VIEW `movie_viewings_most_recent`');
   } // end of down

} // end of class

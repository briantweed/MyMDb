<?php

use Illuminate\Database\Seeder;

class FormsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('forms')->delete();
        
        \DB::table('forms')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'create_movie',
                'field' => 'name',
                'label' => 'Title',
                'required' => 1,
                'type' => 'text',
                'order' => 10,
                'range_from' => 0,
                'range_to' => 0,
                'options' => '',
                'default' => '',
                'class' => '',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'create_movie',
                'field' => 'sort_name',
                'label' => 'Sort Name',
                'required' => 0,
                'type' => 'text',
                'order' => 20,
                'range_from' => 0,
                'range_to' => 0,
                'options' => '',
                'default' => '',
                'class' => '',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'create_movie',
                'field' => 'bio',
                'label' => 'Description',
                'required' => 1,
                'type' => 'textarea',
                'order' => 30,
                'range_from' => 0,
                'range_to' => 0,
                'options' => '',
                'default' => '',
                'class' => '',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'create_movie',
                'field' => 'purchased',
                'label' => 'Purchased',
                'required' => 0,
                'type' => 'date',
                'order' => 40,
                'range_from' => 0,
                'range_to' => 0,
                'options' => '',
                'default' => '',
                'class' => '',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'create_movie',
                'field' => 'rating',
                'label' => 'Rating',
                'required' => 1,
                'type' => 'range',
                'order' => 50,
                'range_from' => 1,
                'range_to' => 10,
                'options' => '',
                'default' => '',
                'class' => '',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'create_movie',
                'field' => 'released',
                'label' => 'Released',
                'required' => 1,
                'type' => 'range',
                'order' => 60,
                'range_from' => 1930,
                'range_to' => 9999,
                'options' => '',
                'default' => '',
                'class' => '',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'create_movie',
                'field' => 'running_time',
                'label' => 'Running Time',
                'required' => 1,
                'type' => 'text',
                'order' => 70,
                'range_from' => 0,
                'range_to' => 0,
                'options' => '',
                'default' => '',
                'class' => '',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'create_movie',
                'field' => 'certificate_id',
                'label' => 'Certificate',
                'required' => 1,
                'type' => 'select',
                'order' => 80,
                'range_from' => 0,
                'range_to' => 0,
                'options' => 'certificates',
                'default' => '',
                'class' => '',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'create_movie',
                'field' => 'format_id',
                'label' => 'Format',
                'required' => 1,
                'type' => 'select',
                'order' => 90,
                'range_from' => 0,
                'range_to' => 0,
                'options' => 'formats',
                'default' => '',
                'class' => '',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'create_movie',
                'field' => 'studio_id',
                'label' => 'Studio',
                'required' => 0,
                'type' => 'select',
                'order' => 100,
                'range_from' => 0,
                'range_to' => 0,
                'options' => 'studios',
                'default' => '',
                'class' => '',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'create_movie',
                'field' => 'imdb_id',
                'label' => 'IMDb',
                'required' => 0,
                'type' => 'text',
                'order' => 110,
                'range_from' => 0,
                'range_to' => 0,
                'options' => '',
                'default' => '',
                'class' => '',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'create_movie',
                'field' => 'image',
                'label' => 'Image Path',
                'required' => 0,
                'type' => 'text',
                'order' => 120,
                'range_from' => 0,
                'range_to' => 0,
                'options' => '',
                'default' => '',
                'class' => '',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'create_movie',
                'field' => 'image_upload',
                'label' => 'Upload Image',
                'required' => 0,
                'type' => 'file',
                'order' => 130,
                'range_from' => 0,
                'range_to' => 0,
                'options' => '',
                'default' => 'movie-poster',
                'class' => '',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'create_person',
                'field' => 'forename',
                'label' => 'Name',
                'required' => 1,
                'type' => 'text',
                'order' => 10,
                'range_from' => 0,
                'range_to' => 0,
                'options' => '',
                'default' => '',
                'class' => '',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'create_person',
                'field' => 'surname',
                'label' => 'Surname',
                'required' => 0,
                'type' => 'text',
                'order' => 20,
                'range_from' => 0,
                'range_to' => 0,
                'options' => '',
                'default' => '',
                'class' => '',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'create_person',
                'field' => 'birthday',
                'label' => 'Born',
                'required' => 0,
                'type' => 'date',
                'order' => 30,
                'range_from' => 0,
                'range_to' => 0,
                'options' => '',
                'default' => '',
                'class' => '',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'create_person',
                'field' => 'deceased',
                'label' => 'Died',
                'required' => 0,
                'type' => 'date',
                'order' => 40,
                'range_from' => 0,
                'range_to' => 0,
                'options' => '',
                'default' => '',
                'class' => '',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'create_person',
                'field' => 'bio',
                'label' => 'Bio',
                'required' => 0,
                'type' => 'textarea',
                'order' => 50,
                'range_from' => 0,
                'range_to' => 0,
                'options' => '',
                'default' => '',
                'class' => '',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'create_person',
                'field' => 'image',
                'label' => 'Image Path',
                'required' => 0,
                'type' => 'text',
                'order' => 60,
                'range_from' => 0,
                'range_to' => 0,
                'options' => '',
                'default' => '',
                'class' => '',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'create_person',
                'field' => 'image_upload',
                'label' => 'Upload Image',
                'required' => 0,
                'type' => 'file',
                'order' => 70,
                'range_from' => 0,
                'range_to' => 0,
                'options' => '',
                'default' => 'person-poster',
                'class' => '',
            ),
        ));
        
        
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StoreProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('store_products')->delete();
        
        \DB::table('store_products')->insert(array (
            0 => 
            array (
                'id' => 16586,
                'store_id' => 3,
                'artist_id' => 386795,
                'type' => 'merch',
                'name' => 'Navy Beanie',
                'launch_date' => '2015-03-03 00:00:00',
                'remove_date' => '0000-00-00 00:00:00',
                'release_date' => '0000-00-00',
                'description' => '<p><span style="line-height: 1.6em;">100% Soft touch acrylic slouch beanie Navy colour with The Tests team logo embroidered.</span></p>
<p><strong>Size Guide</strong></p>
<ul>
<li>One size fits all</li>
</ul>',
                'available' => 1,
                'price' => 10.0,
                'euro_price' => 11.99,
                'dollar_price' => 12.99,
                'image_format' => 'jpg',
                'deleted' => 0,
                'disabled_countries' => '',
                'display_name' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'position' => NULL,
            ),
            1 => 
            array (
                'id' => 24612,
                'store_id' => 3,
                'artist_id' => 386795,
                'type' => 'music',
                'name' => '',
                'launch_date' => '0000-00-00 00:00:00',
                'remove_date' => '0000-00-00 00:00:00',
                'release_date' => '2015-03-06',
                'description' => 'The first 12 track EP from The Tests.<br /><br />Written and recorded from their home studio in London.<br /><br /><br />',
                'available' => 1,
                'price' => 7.0,
                'euro_price' => 8.99,
                'dollar_price' => 8.99,
                'image_format' => 'jpg',
                'deleted' => 0,
                'disabled_countries' => '',
                'display_name' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'position' => NULL,
            ),
            2 => 
            array (
                'id' => 24614,
                'store_id' => 3,
                'artist_id' => 386795,
                'type' => 'music',
                'name' => 'Rigid Freaks',
                'launch_date' => '2018-03-20 13:35:00',
                'remove_date' => '0000-00-00 00:00:00',
                'release_date' => '2015-03-25',
                'description' => 'Rigid Freaks is the culmination of 3 tours, 2 festival headline shows and five years of blood, sweat and love shows.<br /><br />Rigid Freaks is only available on the official The Tests westore',
                'available' => 1,
                'price' => 13.0,
                'euro_price' => 15.99,
                'dollar_price' => 16.99,
                'image_format' => 'jpg',
                'deleted' => 0,
                'disabled_countries' => '',
                'display_name' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'position' => NULL,
            ),
            3 => 
            array (
                'id' => 24615,
                'store_id' => 3,
                'artist_id' => 386795,
                'type' => 'download',
                'name' => 'Tibby Black',
                'launch_date' => '0000-00-00 00:00:00',
                'remove_date' => '0000-00-00 00:00:00',
                'release_date' => '2015-03-26',
                'description' => 'Available as a download only, "Tibby Black" celebrates The Tests 12th year of chart success.',
                'available' => 1,
                'price' => 4.5,
                'euro_price' => 6.99,
                'dollar_price' => 6.99,
                'image_format' => 'jpg',
                'deleted' => 0,
                'disabled_countries' => '',
                'display_name' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'position' => NULL,
            ),
            4 => 
            array (
                'id' => 24616,
                'store_id' => 3,
                'artist_id' => 386795,
                'type' => 'music',
                'name' => '',
                'launch_date' => '0000-00-00 00:00:00',
                'remove_date' => '0000-00-00 00:00:00',
                'release_date' => '2015-03-06',
                'description' => 'Stars is the second, critically acclaimed album from The Tests.<br /><br /><em>"Deep earthy sounds and haunting melodies"</em> - Famous Radio DJ<br /><br />"Spellbinding. Excels in both content and delivery" - Editor - from a magazine<br /><br /><em>"Not only does this album prove that The Tests are a tour de force, but will be playing on our speakers for years to come"</em> - Guitarist from Iconic Rock Band',
                'available' => 1,
                'price' => 12.0,
                'euro_price' => 13.99,
                'dollar_price' => 14.99,
                'image_format' => 'jpg',
                'deleted' => 0,
                'disabled_countries' => '',
                'display_name' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'position' => NULL,
            ),
            5 => 
            array (
                'id' => 24617,
                'store_id' => 3,
                'artist_id' => 386795,
                'type' => 'merch',
                'name' => 'Rigid Freaks - Splatter T-Shirt',
                'launch_date' => '0000-00-00 00:00:00',
                'remove_date' => '0000-00-00 00:00:00',
                'release_date' => '2015-05-31',
                'description' => 'Tie-dye mens relaxed fit t-shirt.<br /><br />Due to the nature of this item t-shirt designs may vary.<br /><br /><br />',
                'available' => 1,
                'price' => 15.0,
                'euro_price' => 20.99,
                'dollar_price' => 22.99,
                'image_format' => 'jpg',
                'deleted' => 0,
                'disabled_countries' => '',
                'display_name' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'position' => NULL,
            ),
            6 => 
            array (
                'id' => 24620,
                'store_id' => 3,
                'artist_id' => 386795,
                'type' => 'merch',
                'name' => 'Gun T-Shirt',
                'launch_date' => '0000-00-00 00:00:00',
                'remove_date' => '0000-00-00 00:00:00',
                'release_date' => '2015-03-06',
                'description' => 'New typography t-shirt released alongside the "Dont Question The Gun" EP',
                'available' => 1,
                'price' => 15.0,
                'euro_price' => 20.99,
                'dollar_price' => 22.99,
                'image_format' => 'jpg',
                'deleted' => 0,
                'disabled_countries' => '',
                'display_name' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'position' => NULL,
            ),
            7 => 
            array (
                'id' => 24621,
                'store_id' => 3,
                'artist_id' => 386795,
                'type' => 'merch',
                'name' => 'Marathon Ladies T-Shirt',
                'launch_date' => '0000-00-00 00:00:00',
                'remove_date' => '0000-00-00 00:00:00',
                'release_date' => '0000-00-00',
                'description' => '"It\'s a Marathon! Marathon!"<br /><br />A t-shirt just for the ladies!',
                'available' => 1,
                'price' => 12.0,
                'euro_price' => 16.99,
                'dollar_price' => 18.99,
                'image_format' => 'jpg',
                'deleted' => 0,
                'disabled_countries' => '',
                'display_name' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'position' => NULL,
            ),
            8 => 
            array (
                'id' => 24622,
                'store_id' => 3,
                'artist_id' => 386795,
                'type' => 'merch',
                'name' => 'Tibby Black Mens Henley Style T-Shirt',
                'launch_date' => '0000-00-00 00:00:00',
                'remove_date' => '0000-00-00 00:00:00',
                'release_date' => '0000-00-00',
                'description' => 'Long sleeve, white, ribbed, henleys style t-shirt',
                'available' => 1,
                'price' => 20.0,
                'euro_price' => 27.99,
                'dollar_price' => 30.99,
                'image_format' => 'jpg',
                'deleted' => 0,
                'disabled_countries' => '',
                'display_name' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'position' => NULL,
            ),
            9 => 
            array (
                'id' => 24634,
                'store_id' => 3,
                'artist_id' => 386795,
                'type' => 'merch',
                'name' => 'Don\'t Question The Gun Hoodie',
                'launch_date' => '0000-00-00 00:00:00',
                'remove_date' => '0000-00-00 00:00:00',
                'release_date' => '0000-00-00',
                'description' => 'Maroon relaxed fit hoody.',
                'available' => 1,
                'price' => 45.0,
                'euro_price' => 62.99,
                'dollar_price' => 68.99,
                'image_format' => 'jpg',
                'deleted' => 0,
                'disabled_countries' => '',
                'display_name' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'position' => NULL,
            ),
            10 => 
            array (
                'id' => 24635,
                'store_id' => 3,
                'artist_id' => 386795,
                'type' => 'merch',
                'name' => 'Escape Tomorrow Hoodie',
                'launch_date' => '0000-00-00 00:00:00',
                'remove_date' => '0000-00-00 00:00:00',
                'release_date' => '0000-00-00',
                'description' => 'Navy relaxed fit mens hoodie',
                'available' => 1,
                'price' => 35.0,
                'euro_price' => 48.99,
                'dollar_price' => 52.99,
                'image_format' => 'jpg',
                'deleted' => 0,
                'disabled_countries' => '',
                'display_name' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'position' => NULL,
            ),
            11 => 
            array (
                'id' => 24636,
                'store_id' => 3,
                'artist_id' => 386795,
                'type' => 'merch',
                'name' => 'Rigid Freaks Extreme Splatter Hoodie',
                'launch_date' => '0000-00-00 00:00:00',
                'remove_date' => '0000-00-00 00:00:00',
                'release_date' => '0000-00-00',
                'description' => 'Black hoodie, with all over white splatter print effect',
                'available' => 1,
                'price' => 45.0,
                'euro_price' => 62.99,
                'dollar_price' => 68.99,
                'image_format' => 'jpg',
                'deleted' => 0,
                'disabled_countries' => '',
                'display_name' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'position' => NULL,
            ),
            12 => 
            array (
                'id' => 24637,
                'store_id' => 3,
                'artist_id' => 386795,
                'type' => 'merch',
                'name' => 'Tibby Black Grey Hoodie',
                'launch_date' => '0000-00-00 00:00:00',
                'remove_date' => '0000-00-00 00:00:00',
                'release_date' => '0000-00-00',
                'description' => 'Grey mens drawstring pull over hoodie',
                'available' => 1,
                'price' => 35.0,
                'euro_price' => 48.99,
                'dollar_price' => 52.99,
                'image_format' => 'jpg',
                'deleted' => 0,
                'disabled_countries' => '',
                'display_name' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'position' => NULL,
            ),
            13 => 
            array (
                'id' => 24638,
                'store_id' => 3,
                'artist_id' => 386795,
                'type' => 'merch',
                'name' => 'Tote Bag',
                'launch_date' => '0000-00-00 00:00:00',
                'remove_date' => '0000-00-00 00:00:00',
                'release_date' => '0000-00-00',
                'description' => '',
                'available' => 1,
                'price' => 5.0,
                'euro_price' => 6.99,
                'dollar_price' => 7.99,
                'image_format' => 'jpg',
                'deleted' => 0,
                'disabled_countries' => '',
                'display_name' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'position' => NULL,
            ),
            14 => 
            array (
                'id' => 24639,
                'store_id' => 3,
                'artist_id' => 386795,
                'type' => 'merch',
                'name' => 'The Test On Tour - Tour Poster \'09',
                'launch_date' => '0000-00-00 00:00:00',
                'remove_date' => '0000-00-00 00:00:00',
                'release_date' => '0000-00-00',
                'description' => '',
                'available' => 1,
                'price' => 3.0,
                'euro_price' => 4.99,
                'dollar_price' => 4.99,
                'image_format' => 'jpg',
                'deleted' => 0,
                'disabled_countries' => '',
                'display_name' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'position' => NULL,
            ),
            15 => 
            array (
                'id' => 24641,
                'store_id' => 3,
                'artist_id' => 386795,
                'type' => 'ticket',
                'name' => 'The Tests On Tour - Summer Show Ticket',
                'launch_date' => '0000-00-00 00:00:00',
                'remove_date' => '0000-00-00 00:00:00',
                'release_date' => '0000-00-00',
                'description' => 'The Tests On Tour - Summer Show Ticket',
                'available' => -1,
                'price' => 0.0,
                'euro_price' => 0.0,
                'dollar_price' => 0.0,
                'image_format' => 'jpg',
                'deleted' => 0,
                'disabled_countries' => '',
                'display_name' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'position' => NULL,
            ),
            16 => 
            array (
                'id' => 24642,
                'store_id' => 3,
                'artist_id' => 386795,
                'type' => 'multi',
                'name' => 'Rigid Freaks Bundle',
                'launch_date' => '0000-00-00 00:00:00',
                'remove_date' => '0000-00-00 00:00:00',
                'release_date' => '2015-03-10',
                'description' => '',
                'available' => 0,
                'price' => 50.0,
                'euro_price' => 69.99,
                'dollar_price' => 75.99,
                'image_format' => 'jpg',
                'deleted' => 0,
                'disabled_countries' => '',
                'display_name' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'position' => NULL,
            ),
            17 => 
            array (
                'id' => 24643,
                'store_id' => 3,
                'artist_id' => 386795,
                'type' => 'multi',
                'name' => 'Tibby Black Bundle',
                'launch_date' => '0000-00-00 00:00:00',
                'remove_date' => '0000-00-00 00:00:00',
                'release_date' => '2015-03-10',
                'description' => '',
                'available' => 0,
                'price' => 50.0,
                'euro_price' => 69.99,
                'dollar_price' => 75.99,
                'image_format' => 'jpg',
                'deleted' => 0,
                'disabled_countries' => '',
                'display_name' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'position' => NULL,
            ),
            18 => 
            array (
                'id' => 24644,
                'store_id' => 3,
                'artist_id' => 386795,
                'type' => 'multi',
                'name' => 'Ladies Bundle',
                'launch_date' => '0000-00-00 00:00:00',
                'remove_date' => '0000-00-00 00:00:00',
                'release_date' => '2015-03-10',
                'description' => '',
                'available' => 0,
                'price' => 14.0,
                'euro_price' => 19.99,
                'dollar_price' => 21.99,
                'image_format' => 'jpg',
                'deleted' => 0,
                'disabled_countries' => '',
                'display_name' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'position' => NULL,
            ),
            19 => 
            array (
                'id' => 28130,
                'store_id' => 3,
                'artist_id' => 386795,
                'type' => 'music',
                'name' => 'Test The Theory',
                'launch_date' => '2018-03-12 11:56:00',
                'remove_date' => '0000-00-00 00:00:00',
                'release_date' => '2017-08-31',
                'description' => 'Following on from the success of the last Album, The Test\'s are back with a new explosive sound described by MNE as \'Truly Original\'.<br /><br />The Test\'s themselves have expressed that this album is the best album they\'ve produced in years.&nbsp;<br /><br />Including several exclusive tracks available only on the album with guest features by greats like Jax and legendary guitarist Johnny Saturno this album is set to impress.',
                'available' => 1,
                'price' => 10.0,
                'euro_price' => 11.99,
                'dollar_price' => 12.99,
                'image_format' => 'jpg',
                'deleted' => 0,
                'disabled_countries' => '',
                'display_name' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'position' => NULL,
            ),
            20 => 
            array (
                'id' => 28131,
                'store_id' => 3,
                'artist_id' => 386795,
                'type' => 'music',
                'name' => 'Test The Theory',
                'launch_date' => '0000-00-00 00:00:00',
                'remove_date' => '0000-00-00 00:00:00',
                'release_date' => '2017-03-01',
                'description' => '<span>Following on from the success of the last Album, The Test\'s are back with a new explosive sound described by MNE as \'Truly Original\'.</span><br /><br /><span>The Test\'s themselves have expressed that this album is the best album they\'ve produced in years.&nbsp;</span><br /><br /><span>Including several exclusive tracks available only on the album with guest features by greats like Jax and legendary guitarist Johnny Saturno this album is set to impress. - See more at: http://test.tmstore.co.uk/#sthash.SagiDcqV.dpuf</span>',
                'available' => 1,
                'price' => 16.0,
                'euro_price' => 18.99,
                'dollar_price' => 19.99,
                'image_format' => 'jpg',
                'deleted' => 0,
                'disabled_countries' => '',
                'display_name' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'position' => NULL,
            ),
            21 => 
            array (
                'id' => 28132,
                'store_id' => 3,
                'artist_id' => 386795,
                'type' => 'download',
                'name' => 'Test The Theory',
                'launch_date' => '0000-00-00 00:00:00',
                'remove_date' => '0000-00-00 00:00:00',
                'release_date' => '2016-03-01',
                'description' => '<span>Following on from the success of the last Album, The Test\'s are back with a new explosive sound described by MNE as \'Truly Original\'.</span><br /><br /><span>The Test\'s themselves have expressed that this album is the best album they\'ve produced in years.&nbsp;</span><br /><br /><span>Including several exclusive tracks available only on the album with guest features by greats like Jax and legendary guitarist Johnny Saturno this album is set to impress. - See more at: http://test.tmstore.co.uk/#sthash.SagiDcqV.dpuf</span>',
                'available' => 1,
                'price' => 7.0,
                'euro_price' => 8.99,
                'dollar_price' => 8.99,
                'image_format' => 'jpg',
                'deleted' => 0,
                'disabled_countries' => '',
                'display_name' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'position' => NULL,
            ),
            22 => 
            array (
                'id' => 28133,
                'store_id' => 3,
                'artist_id' => 386795,
                'type' => 'merch',
                'name' => 'Test The Theory T-Shirt',
                'launch_date' => '0000-00-00 00:00:00',
                'remove_date' => '0000-00-00 00:00:00',
                'release_date' => '2016-11-01',
                'description' => '<span>Following on from the success of the last Album, The Test\'s are back with a new explosive sound described by MNE as \'Truly Original\'. This T-Shirt is the official accompaniment to the album. Show your support and \'Test The Theory\'.</span>',
                'available' => 1,
                'price' => 10.0,
                'euro_price' => 11.99,
                'dollar_price' => 12.99,
                'image_format' => 'jpg',
                'deleted' => 0,
                'disabled_countries' => '',
                'display_name' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'position' => NULL,
            ),
            23 => 
            array (
                'id' => 28134,
                'store_id' => 3,
                'artist_id' => 386795,
                'type' => 'merch',
                'name' => 'Test The Theory - Hoody',
                'launch_date' => '0000-00-00 00:00:00',
                'remove_date' => '0000-00-00 00:00:00',
                'release_date' => '2016-11-01',
                'description' => '<span>Following on from the success of the last Album, The Test\'s are back with a new explosive sound described by MNE as \'Truly Original\'. Get the official hoody to show your support for the band and \'Test The Theory\'</span>',
                'available' => 1,
                'price' => 20.0,
                'euro_price' => 23.99,
                'dollar_price' => 24.99,
                'image_format' => 'jpg',
                'deleted' => 0,
                'disabled_countries' => '',
                'display_name' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'position' => NULL,
            ),
            24 => 
            array (
                'id' => 28135,
                'store_id' => 3,
                'artist_id' => 386795,
                'type' => 'multi',
                'name' => 'Test The Theory Deluxe Bundle',
                'launch_date' => '0000-00-00 00:00:00',
                'remove_date' => '0000-00-00 00:00:00',
                'release_date' => '2017-03-01',
                'description' => '<span>Following on from the success of the last Album, The Test\'s are back with a new explosive sound described by MNE as \'Truly Original\'.</span><br /><br /><span>The Test\'s themselves have expressed that this album is the best album they\'ve produced in years.&nbsp;</span><br /><br /><span><span>Including several exclusive tracks available only on the album with guest features by greats like Jax and legendary guitarist Johnny Saturno this album is set to impress.<br /><br />This bundle includes:<br /></span></span>
<ul>
<li>Test The Theory - CD</li>
<li><span>Test The Theory -&nbsp;Download</span></li>
<li><span><span>Test The Theory - Vinyl</span></span></li>
<li><span><span><span>Test The Theory - T -Shirt</span></span></span></li>
<li><span><span><span><span>Test The Theory - Hoody</span></span></span></span></li>
</ul>',
                'available' => 0,
                'price' => 55.0,
                'euro_price' => 63.99,
                'dollar_price' => 67.99,
                'image_format' => 'jpg',
                'deleted' => 0,
                'disabled_countries' => '',
                'display_name' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'position' => NULL,
            ),
            25 => 
            array (
                'id' => 28136,
                'store_id' => 3,
                'artist_id' => 386795,
                'type' => 'multi',
                'name' => 'Test The Theory CD Bundle',
                'launch_date' => '0000-00-00 00:00:00',
                'remove_date' => '0000-00-00 00:00:00',
                'release_date' => '2017-03-01',
                'description' => 'Following on from the success of the last Album, The Test\'s are back with a new explosive sound described by MNE as \'Truly Original\'.<br /><br />The Test\'s themselves have expressed that this album is the best album they\'ve produced in years.&nbsp;<br /><br />Including several exclusive tracks available only on the album with guest features by greats like Jax and legendary guitarist Johnny Saturno this album is set to impress.<br /><br />This bundle includes:<br />
<ul>
<li>Test The Theory - CD</li>
<li>Test The Theory -&nbsp;Download</li>
<li>Test The Theory - T -Shirt</li>
<li>Test The Theory - Hoody</li>
</ul>',
                'available' => 0,
                'price' => 45.0,
                'euro_price' => 52.99,
                'dollar_price' => 55.99,
                'image_format' => 'jpg',
                'deleted' => 0,
                'disabled_countries' => '',
                'display_name' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'position' => NULL,
            ),
            26 => 
            array (
                'id' => 28618,
                'store_id' => 3,
                'artist_id' => 386795,
                'type' => 'merch',
                'name' => 'Signed Fender Stratocaster',
                'launch_date' => '0000-00-00 00:00:00',
                'remove_date' => '0000-00-00 00:00:00',
                'release_date' => '2016-03-01',
                'description' => 'This fender stratocaster has been signed by each band member and was used in the recording of the new album. This is the only one available and is a collector\'s item! Don\'t miss out on claiming this piece of history. &pound;500 from this sale will be donated to the Test\'s favoured charity, \'Cancer Research\'.',
                'available' => 1,
                'price' => 1995.0,
                'euro_price' => 2533.99,
                'dollar_price' => 2881.99,
                'image_format' => 'jpg',
                'deleted' => 0,
                'disabled_countries' => '',
                'display_name' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'position' => NULL,
            ),
            27 => 
            array (
                'id' => 32672,
                'store_id' => 3,
                'artist_id' => 386795,
                'type' => 'ticket',
                'name' => 'Test Gig',
                'launch_date' => '0000-00-00 00:00:00',
                'remove_date' => '0000-00-00 00:00:00',
                'release_date' => '0000-00-00',
                'description' => '',
                'available' => 2,
                'price' => 0.0,
                'euro_price' => 0.0,
                'dollar_price' => 0.0,
                'image_format' => '',
                'deleted' => 0,
                'disabled_countries' => '',
                'display_name' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'position' => NULL,
            ),
            28 => 
            array (
                'id' => 36423,
                'store_id' => 3,
                'artist_id' => 386795,
                'type' => 'music',
                'name' => 'Box',
                'launch_date' => '0000-00-00 00:00:00',
                'remove_date' => '0000-00-00 00:00:00',
                'release_date' => '2018-02-02',
                'description' => '',
                'available' => 1,
                'price' => 200.0,
                'euro_price' => 229.99,
                'dollar_price' => 283.99,
                'image_format' => '',
                'deleted' => 0,
                'disabled_countries' => '',
                'display_name' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'position' => NULL,
            ),
            29 => 
            array (
                'id' => 36503,
                'store_id' => 3,
                'artist_id' => 386795,
                'type' => 'music',
                'name' => 'A CD Album',
                'launch_date' => '0000-00-00 00:00:00',
                'remove_date' => '0000-00-00 00:00:00',
                'release_date' => '2018-02-08',
                'description' => '',
                'available' => 1,
                'price' => 99.0,
                'euro_price' => 112.99,
                'dollar_price' => 140.99,
                'image_format' => '',
                'deleted' => 0,
                'disabled_countries' => 'AF,AL,DZ,AS,AD,AO,AI,AQ,AG,AR,AM,AW,AU,AT,AZ,BS,BH,BD,BB,BY,BE,BZ,BJ,BM,BT,BO,BA,BW,BV,BR,IO,BN,BG,BF,BI,KH,CM,CA,CV,KY,CF,TD,CL,CN,CX,CC,CO,KM,CG,CK,CR,CI,HR,CY,CZ,CD,DK,DJ,DM,DO,TP,EC,EG,SV,EE,FK,FO,FJ,FI,FR,GF,PF,TF,GA,GM,GE,DE,GH,GI,GR,GL,GD,GP,GU,GT,GN,GW,GY,HT,HM,VA,HN,HK,HU,IS,IN,ID,IQ,IE,IM,IL,IT,JM,JP,JO,KZ,KE,KI,KW,KG,LA,LV,LB,LS,LR,LY,LI,LT,LU,MO,MK,MG,MW,MY,MV,ML,MT,MH,MQ,MR,MU,YT,MX,FM,MD,MC,MN,ME,MS,MA,MZ,MM,NA,NR,NP,NL,AN,NC,NZ,NI,NE,NG,NU,NF,MP,NO,OM,PK,PW,PS,PA,PG,PY,PE,PH,PN,PL,PT,PR,QA,RE,RO,RU,RW,KN,LC,VC,WS,SM,ST,SA,SN,RS,SC,SL,SG,SK,SI,SB,SO,ZA,GS,KR,ES,IC,LK,SH,PM,SR,SJ,SZ,SE,CH,TW,TJ,TZ,TH,TG,TK,TO,TT,TN,TR,TM,TC,TV,UG,UA,AE,US,UM,UY,UZ,VU,VE,VN,VG,VI,WF,EH,YE,ZM,ZW',
                'display_name' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'position' => NULL,
            ),
            30 => 
            array (
                'id' => 36634,
                'store_id' => 3,
                'artist_id' => 386795,
                'type' => 'free',
                'name' => 'Free Bandana',
                'launch_date' => '0000-00-00 00:00:00',
                'remove_date' => '0000-00-00 00:00:00',
                'release_date' => '0000-00-00',
                'description' => 'with Free Bandana',
                'available' => 1,
                'price' => 9.99,
                'euro_price' => 11.99,
                'dollar_price' => 13.99,
                'image_format' => '',
                'deleted' => 0,
                'disabled_countries' => '',
                'display_name' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'position' => NULL,
            ),
            31 => 
            array (
                'id' => 38057,
                'store_id' => 3,
                'artist_id' => 386795,
                'type' => 'ticket',
                'name' => 'I AM A TICKET',
                'launch_date' => '0000-00-00 00:00:00',
                'remove_date' => '0000-00-00 00:00:00',
                'release_date' => '0000-00-00',
                'description' => '',
                'available' => 0,
                'price' => 0.0,
                'euro_price' => 0.0,
                'dollar_price' => 0.0,
                'image_format' => '',
                'deleted' => 0,
                'disabled_countries' => '',
                'display_name' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'position' => NULL,
            ),
            32 => 
            array (
                'id' => 38058,
                'store_id' => 3,
                'artist_id' => 386795,
                'type' => 'merch',
                'name' => 'I AM MERCH',
                'launch_date' => '0000-00-00 00:00:00',
                'remove_date' => '0000-00-00 00:00:00',
                'release_date' => '0000-00-00',
                'description' => '',
                'available' => 0,
                'price' => 333.0,
                'euro_price' => 380.99,
                'dollar_price' => 448.99,
                'image_format' => '',
                'deleted' => 0,
                'disabled_countries' => '',
                'display_name' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'position' => NULL,
            ),
            33 => 
            array (
                'id' => 53975,
                'store_id' => 3,
                'artist_id' => 386795,
                'type' => 'music',
                'name' => 'Demo',
                'launch_date' => '0000-00-00 00:00:00',
                'remove_date' => '0000-00-00 00:00:00',
                'release_date' => '2019-08-15',
                'description' => '<h1>ALBUM HERE</h1>',
                'available' => 0,
                'price' => 22.0,
                'euro_price' => 24.99,
                'dollar_price' => 26.99,
                'image_format' => '',
                'deleted' => 0,
                'disabled_countries' => '',
                'display_name' => 'The Tremblers',
                'created_at' => NULL,
                'updated_at' => NULL,
                'position' => NULL,
            ),
            34 => 
            array (
                'id' => 53976,
                'store_id' => 3,
                'artist_id' => 386795,
                'type' => 'download',
                'name' => 'FILMS',
                'launch_date' => '0000-00-00 00:00:00',
                'remove_date' => '0000-00-00 00:00:00',
                'release_date' => '2019-08-21',
                'description' => '<h1>FILM HERE</h1>',
                'available' => 0,
                'price' => 213.0,
                'euro_price' => 232.99,
                'dollar_price' => 258.99,
                'image_format' => '',
                'deleted' => 0,
                'disabled_countries' => '',
                'display_name' => 'ffffffffffffffff',
                'created_at' => NULL,
                'updated_at' => NULL,
                'position' => NULL,
            ),
            35 => 
            array (
                'id' => 56800,
                'store_id' => 3,
                'artist_id' => 386795,
                'type' => 'multi',
                'name' => 'OSLO HAS FALLEN',
                'launch_date' => '0000-00-00 00:00:00',
                'remove_date' => '0000-00-00 00:00:00',
                'release_date' => '2019-10-25',
                'description' => '',
                'available' => 0,
                'price' => 138.0,
                'euro_price' => 153.99,
                'dollar_price' => 168.99,
                'image_format' => 'jpg',
                'deleted' => 0,
                'disabled_countries' => '',
                'display_name' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'position' => NULL,
            ),
            36 => 
            array (
                'id' => 62935,
                'store_id' => 3,
                'artist_id' => 386795,
                'type' => 'merch',
                'name' => 'fdsfds',
                'launch_date' => '0000-00-00 00:00:00',
                'remove_date' => '0000-00-00 00:00:00',
                'release_date' => '0000-00-00',
                'description' => '',
                'available' => 0,
                'price' => 666.0,
                'euro_price' => 757.0,
                'dollar_price' => 823.0,
                'image_format' => '',
                'deleted' => 0,
                'disabled_countries' => '',
                'display_name' => 'fdsfds',
                'created_at' => NULL,
                'updated_at' => NULL,
                'position' => NULL,
            ),
        ));
        
        
    }
}
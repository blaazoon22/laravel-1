<?php

namespace App\Http\Controllers;

use App\Models\StoreProduct;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProductsController extends Controller
{
    public $storeId;
    
    public function __construct()
    {
        /* As the system manages multiple stores a storeBuilder instance would
        normally be passed here with a store object. The id of the example 
        store is being set here for the purpose of the test */
        $this->storeId = 3;
        $this->imagesDomain = "https://img.tmstor.es/";
        //$store_id, $section, $number = null, $page = null, $sort = 0
    }


    /**
     * returns products for the selected section
     * @param  $section
     * @param  \Illuminate\Http\Request  
     * @return \Illuminate\Http\Response
     */
    public function sectionProducts(Request $request,  $section, $number = null, $page = null, $sort = 0)
    {

        $store_id = $this->storeId;

        if ($store_id == '') {
            die; 
        }

        if (!is_numeric($number) || $number < 1) {
            $number = 8;
        }

        if (!is_numeric($page) || $page < 1) {
            $page = 1;
        }


        $section_field = 'description';
        $section_compare = 'LIKE';
        if (is_numeric($section)) {
            $section_field = 'id';
            $section_compare = '=';
        }else{
            $section = "%$section%";
        }


        if ($sort === 0) {
            $sort = "position";
        }


        switch ($sort) {
            case "az":
                $order = "ORDER BY name Asc";
                break;
            case "za":
                $order = "ORDER BY name Desc";
                break;
            case "low":
                $order = "ORDER BY price Asc";
                break;
            case "high":
                $order = "ORDER BY price Desc";
                break;
            case "old":
                $order = "ORDER BY release_date Asc";
                break;
            case "new":
                $order = "ORDER BY release_date Desc";
                break;

            default:
                if ((isset($section) && ($section == "%" || $section == "all"))) {
                    $order = "ORDER BY sp.position ASC, release_date DESC";
                } else {
                    $order = "ORDER BY store_products_section.position ASC, release_date DESC";
                }
                break;
        }

        $date_time = time();
        $products = array();
        $x = 0;



        //Beginning of selection query used in 3 places below
        $query_start = "SELECT sp.id, artist_id, type, display_name, name, launch_date, remove_date, sp.description,
                                    available, price, euro_price, dollar_price, image_format, disabled_countries,release_date
                                FROM store_products sp ";

        if (isset($number) && isset($page) && $page != null) {
            $page = ($page-1)*$number;
            $pages = " LIMIT $page,$number";

            $query = $query_start;

            if ($section != '%' && strtoupper($section) != 'ALL') {

                $query .= "INNER JOIN store_products_section ON store_products_section.store_product_id = sp.id
                            INNER JOIN sections ON store_products_section.section_id = sections.id
                            WHERE sections.$section_field $section_compare '$section' AND ";

            } else {
                $query .= "LEFT JOIN sections ON sections.id = -1 WHERE ";
            }
            $query.= " sp.store_id= '$store_id' AND deleted = '0' AND available = 1 ";
            

            
            $result = DB::select($query); 
            
            if(!$result){
                return null;
            }
            
            $num_products = count($result);
            
            $no_pages = ceil($num_products/$number);
            $products['pages'] = $no_pages;

            

        } else {
            if (isset($number)) {
                $pages = " LIMIT $number";
            } else {
                $pages = '';
            }
            
        }

        $query = $query_start;
        
        if ($section != '%') {
            $query .= "INNER JOIN store_products_section ON store_products_section.store_product_id = sp.id
                        INNER JOIN sections ON store_products_section.section_id = sections.id
                        WHERE sections.$section_field $section_compare '$section' AND ";
            $orderby = " ORDER BY store_products_section.position ASC, sp.position ASC, release_date DESC$pages";
        } else {
            $query .= "LEFT JOIN sections ON sections.id = -1 WHERE ";
            $orderby = " ORDER BY position ASC, release_date DESC$pages";
        }

        $query .= " sp.store_id = '$store_id' AND deleted = '0' AND available = 1  ";
        $query .= $orderby;

        $result = DB::select($query);

        if(!$result){
            return null;
        }

        $result = $result[0];
        
 
        

        $launch_date = $result->launch_date;
        if ($launch_date != "0000-00-00 00:00:00" && !isset($_SESSION['preview_mode'])) {
        
            $launch = strtotime($launch_date);
            if ($launch < time()) {
                return null;   
            }
        }

        $remove_date = $result->remove_date;
        if ($remove_date != "0000-00-00 00:00:00") {
            $remove = strtotime($remove_date);
            if ($remove < $date_time) {
                $available = 0;   
            }
        }


        //check territories
        $disabled_countries = $result->disabled_countries;
        if ($disabled_countries != '') {
            $countries = explode(',', $disabled_countries);
            $geocode = $this->getGeocode();
            $country_code = $geocode['country'];

            if (in_array($country_code, $countries)) {
                $available = 0;
            }
        }
        
        if (!Session::get('currency')){
            Session::put('currency', "USD");
        }
        

        switch (Session::get('currency')) {
            case "USD":
                $price = $result->dollar_price;
                break;
            case "EUR":
                $price = $result->euro_price;
                break;
        }

        
        if ($result->available == 1) {
            $query = "SELECT name FROM artists WHERE id = '$result->artist_id'";
            $result_artist = DB::select($query); 


            $artist = $result_artist[0]->name;
            $main_id = $result->id;
            $name = $result->name;
            $display_name = $result->display_name;
            $displayName = strlen($display_name) > 3 ? $display_name : $name;
            $description = $result->description;
            $type = $result->type;
            $release_date = $result->release_date;

            $image_format = $result->image_format;


            

            if (strlen($image_format) > 2) {
                $productsImage = $this->imagesDomain."/$main_id.".$image_format;
                
            } else {
                $productsImage = $this->imagesDomain."noimage.jpg";
               
            }

            
            $showResult = ['id'=>$main_id, 'artist'=>$artist, 'title'=>$displayName, 'description' => $description, 
                              'price'=>$price, 'format'=> $type, 'release_date'=>$release_date];
            return response() -> json($showResult);
        }
        
    }




    public function getGeocode()
    {
        //Return GB default for the purpose of the test
        return ['country' => 'GB'];
    }





    

    
    /**
     * returns all products 
     * 
     * @param  \Illuminate\Http\Request  
     * @return \Illuminate\Http\Response
     */
    public function allProducts(Request $request,  $section = '%', $number = null, $page = null, $sort = 0)
    {

        $store_id = $this->storeId;
    
        if ($store_id == '') {
            die; 
        }

        if (!is_numeric($number) || $number < 1) {
            $number = 8;
        }

        if (!is_numeric($page) || $page < 1) {
            $page = 1;
        }


        $section_field = 'description';
        $section_compare = 'LIKE';
        if (is_numeric($section)) {
            $section_field = 'id';
            $section_compare = '=';
        }


        if ($sort === 0) {
            $sort = "position";
        }


        switch ($sort) {
            case "az":
                $order = "ORDER BY name Asc";
                break;
            case "za":
                $order = "ORDER BY name Desc";
                break;
            case "low":
                $order = "ORDER BY price Asc";
                break;
            case "high":
                $order = "ORDER BY price Desc";
                break;
            case "old":
                $order = "ORDER BY release_date Asc";
                break;
            case "new":
                $order = "ORDER BY release_date Desc";
                break;

            default:
                if ((isset($section) && ($section == "%" || $section == "all"))) {
                    $order = "ORDER BY sp.position ASC, release_date DESC";
                } else {
                    $order = "ORDER BY store_products_section.position ASC, release_date DESC";
                }
                break;
        }

        $date_time = time();
        $products = array();
        $x = 0;



        //Beginning of selection query used in 3 places below
        $query_start = "SELECT sp.id, artist_id, type, display_name, name, launch_date, remove_date, sp.description,
                                    available, price, euro_price, dollar_price, image_format, disabled_countries,release_date
                                FROM store_products sp ";

        if (isset($number) && isset($page) && $page != null) {
            $page = ($page-1)*$number;
            $pages = " LIMIT $page,$number";

            $query = $query_start;

            if ($section != '%' && strtoupper($section) != 'ALL') {

                $query .= "INNER JOIN store_products_section ON store_products_section.store_product_id = sp.id
                            INNER JOIN sections ON store_products_section.section_id = sections.id
                            WHERE sections.$section_field $section_compare '$section' AND ";

            } else {
                $query .= "LEFT JOIN sections ON sections.id = -1 WHERE ";
            }
            $query.= " sp.store_id= '$store_id' AND deleted = '0' AND available = 1 ";
            

            
            $result = DB::select($query);  

            if(!$result){
                return null;
            }

            $num_products = count($result);
            
            $no_pages = ceil($num_products/$number);
            $products['pages'] = $no_pages;

            return response() -> json(['result'=>$result]);

        } else {
            if (isset($number)) {
                $pages = " LIMIT $number";
            } else {
                $pages = '';
            }
            
        }


    }


}

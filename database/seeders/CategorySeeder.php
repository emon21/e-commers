<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

   //    $category = [
   //       'Fashion','Electronics','Sweet Home','Appliances','Beauty'
   //   ];

   //   $category_hin = [
   //    //       'फैशन','इलेक्ट्रानिक्स','प्यारा घर','उपकरण','सुंदरता'
   //    //   ];

       

      //   Category::insert(array(
      //    0 => 
      //    array (
      //       'id' => 1,
      //       'category_name_en' => 'Fashion',
      //       'category_name_hin' => 'फैशन',
      //       'category_slug_en' => Str::slug('Fashion'),
      //       'category_slug_hin' => 'फैशन',
      //       'category_icon' => 'fa fa-list',
      //   ),
       
      // ));


      

      $category = [

         //category Fashion 

         [
            'category_name_en' => 'Fashion',
            'category_name_hin' => 'फैशन',
            'category_slug_en' => Str::slug('Fashion'),
            'category_slug_hin' => 'फैशन',
            'category_icon' => 'fa fa-shopping-bag',
         ],

         //category Electronics 

         [
            'category_name_en' => 'Electronics',
            'category_name_hin' => 'इलेक्ट्रानिक्स',
            'category_slug_en' => Str::slug('Electronics'),
            'category_slug_hin' => 'इलेक्ट्रानिक्स',
            'category_icon' => 'fa fa-laptop',
         ],

         //category Sweet Home 

         [
            'category_name_en' => 'Sweet Home',
            'category_name_hin' => 'प्यारा घर',
            'category_slug_en' => Str::slug('Sweet Home'),
            'category_slug_hin' => 'प्यारा घर',
            'category_icon' => 'fa fa-paw',
         ],

         //category Appliances 
        
         [
            'category_name_en' => 'Appliances',
            'category_name_hin' => 'उपकरण',
            'category_slug_en' => Str::slug('Appliances'),
            'category_slug_hin' => 'उपकरण',
            'category_icon' => 'fa fa-clock-o',
         ],

         //category Beauty 
         [
            'category_name_en' => 'Beauty',
            'category_name_hin' => 'सुंदरता',
            'category_slug_en' => Str::slug('Beauty'),
            'category_slug_hin' => 'सुंदरता',
            'category_icon' => 'fa fa-diamond',
         ],

        

         ///////////////////////
//          [
//             'category_name_en' => 'Sweet Home',
//             'category_name_hin' => 'प्यारा घर',
//             'category_slug_en' => Str::slug('Beauty'),
//             'category_slug_hin' => 'सुंदरता',
//             'category_icon' => 'fa fa-diamond',
//          ],
//          [
//             'category_name_en' => 'Appliances ',
//             'category_name_hin' => 'उपकरण',
//             'category_slug_en' => Str::slug('Beauty'),
//             'category_slug_hin' => 'सुंदरता',
//             'category_icon' => 'fa fa-diamond',
//          ],
//          fa fa-heartbeat
// fa fa-paper-plane
// fa fa-futbol-o
// fa fa-envira

        

      ];

     Category::insert($category);

    }
}

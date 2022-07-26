<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
      $categories = [
        "Islands",
        "Beaches",
        "Amazing pools",
        "OMG!",
        "Arctic",
        "Tiny homes",
        "Design",
        "National parks",
        "Cabins",
        "Lakefront",
        "Surfing",
        "Amazing views",
        "Caves",
        "Camping",
        "Shared homes",
        "Earth homes",
        "Tropical",
        "Bed & breakfasts",
        "Luxe",
        "Golfing"
      ];

      foreach($categories as $key => $category){
        (new Category())->create([
            'title'=>$category,
            'url'=> Str::slug($category),
            'summary'=>$category,
            'content'=>$category,
            'sort_order'=>$key,
            'status'=>1
        ]);
      }
    }
}

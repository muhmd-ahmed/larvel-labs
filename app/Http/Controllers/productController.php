<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function home(){
        $Gategories=[
            ['name' => 'Phones' ,'img' => 'mobile-phones.jpeg'],
            ['name' => 'Watches ' ,'img' => 'watches.jpg'],
            ['name' => 'Sport Wear ' ,'img' => 'wear.jpg'],
            ['name' => 'Other ' ,'img' => 'other.jpg']
        ];
     
        return view('homepage',['Gategories' => $Gategories ]);
    }
    public function products(){
        $products=[
            ["id"=>1,"name"=>"product_1","price"=>"$2100", "url"=>"https://picsum.photos/400/300"],
            ["id"=>2,"name"=>"product_2","price"=>"$5450", "url"=>"https://picsum.photos/400/200"] ,
            ["id"=>3,"name"=>"product_3","price"=>"$5480", "url"=>"https://picsum.photos/400/400"] ,
            ["id"=>4,"name"=>"product_4","price"=>"$5450", "url"=>"https://picsum.photos/400/500"] ,
            ["id"=>5,"name"=>"product_5","price"=>"$2130" ,"url"=>"https://picsum.photos/200/400"] ,
            ["id"=>6,"name"=>"product_6","price"=>"$5450" ,"url"=>"https://picsum.photos/200/300"] ,
            ["id"=>7,"name"=>"product_7","price"=>"$5470" ,"url"=>"https://picsum.photos/200/500"] ,
            ["id"=>8,"name"=>"product_8","price"=>"$2100" ,"url"=>"https://picsum.photos/200/200"] ,
            ["id"=>9,"name"=>"product_9","price"=>"$6500" ,"url"=>"https://picsum.photos/300/200"] ,
            ["id"=>10,"name"=>"product_10","price"=>"$5800" ,"url"=>"https://picsum.photos/300/500" ],
            ["id"=>11,"name"=>"product_11","price"=>"$8940" ,"url"=>"https://picsum.photos/300/400" ],
            ["id"=>12,"name"=>"product_12","price"=>"$9950" ,"url"=>"https://picsum.photos/500/300" ],
        ];
        return view('products',['products'=>$products]);
}
public function getProducrById(){
   
    $products=[
        ["id"=>1,"describtion"=>" this is a describtion about this is a describtion about this is a describtion about produuct_1" ,"name"=>"product_1","price"=>"$2100", "url"=>"https://picsum.photos/400/300"],
        ["id"=>2,"describtion"=>" this is a describtion about this is a describtion about this is a describtion about produuct_2" ,"name"=>"product_2","price"=>"$5450", "url"=>"https://picsum.photos/400/200"] ,
        ["id"=>3,"describtion"=>" this is a describtion about this is a describtion about this is a describtion about produuct_3" ,"name"=>"product_3","price"=>"$5480", "url"=>"https://picsum.photos/400/400"] ,
        ["id"=>4,"describtion"=>" this is a describtion about this is a describtion about this is a describtion about produuct_4" ,"name"=>"product_4","price"=>"$5450", "url"=>"https://picsum.photos/400/500"] ,
        ["id"=>5,"describtion"=>" this is a describtion about this is a describtion about this is a describtion about produuct_5" ,"name"=>"product_5","price"=>"$2130" ,"url"=>"https://picsum.photos/200/400"] ,
        ["id"=>6,"describtion"=>" this is a describtion about this is a describtion about this is a describtion about produuct_6" ,"name"=>"product_6","price"=>"$5450" ,"url"=>"https://picsum.photos/200/300"] ,
        ["id"=>7,"describtion"=>" this is a describtion about this is a describtion about this is a describtion about produuct_7" ,"name"=>"product_7","price"=>"$5470" ,"url"=>"https://picsum.photos/200/500"] ,
        ["id"=>8,"describtion"=>" this is a describtion about this is a describtion about this is a describtion about produuct_8" ,"name"=>"product_8","price"=>"$2100" ,"url"=>"https://picsum.photos/200/200"] ,
        ["id"=>9,"describtion"=>" this is a describtion about this is a describtion about this is a describtion about produuct_9" ,"name"=>"product_9","price"=>"$6500" ,"url"=>"https://picsum.photos/300/200"] ,
       ["id"=>10,"describtion"=>" this is a describtion about this is a describtion about this is a describtion about produuct_10" ,"name"=>"product_10","price"=>"$5800" ,"url"=>"https://picsum.photos/300/500" ],
       ["id"=>11,"describtion"=>" this is a describtion about this is a describtion about this is a describtion about produuct_11" ,"name"=>"product_11","price"=>"$8940" ,"url"=>"https://picsum.photos/300/400" ],
       ["id"=>12,"describtion"=>" this is a describtion about this is a describtion about this is a describtion about produuct_12" ,"name"=>"product_12","price"=>"$9950" ,"url"=>"https://picsum.photos/500/300" ],
    ];
     return view('product-details',['products'=>$products]);

}

}
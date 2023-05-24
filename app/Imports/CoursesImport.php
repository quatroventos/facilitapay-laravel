<?php

namespace App\Imports;

use App\Models\Courses;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithUpserts;
use Illuminate\Support\Str;



class CoursesImport implements ToModel, WithHeadingRow, WithUpserts
{
    public function uniqueBy(){
        /**/
        return "slug";
        /**/
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Courses([
//            'image' => $row['image'],
            'title' => $row['title'],
//            'excerpt' => $row['excerpt'],
//            'description' => $row['description'],
//            'modules' => $row['modules'],
//            'hours' => $row['hours'],
//            'workload' => $row['workload'],
//            'extention' => $row['extention'],
//            'age_limit' => $row['age_limit'],
////            'booksdescription' => $row['booksdescription'],
////            'booksgallery' => $row['booksgallery'],
//            'price' => $row['price'],
//            'installments' => $row['installments'],
//            'installmentprice' => $row['installmentprice'],
//            'shop_url' => $row['shop_url'],
//            'metatitle' => $row['metatitle'],
//            'metadescription' => $row['metadescription'],
            'slug' => $row['slug'],
        ]);
    }
}

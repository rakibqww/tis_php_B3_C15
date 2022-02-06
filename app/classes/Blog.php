<?php


namespace App\classes;


class Blog{
    protected $blogs;

    public function getAllBlog(){
        return[
            0=>[
                'title'         => 'A New Blog',
                'description'   => 'Blog Description',
                'author'         => 'Rakib Hasan',
                'image'          => 'a2.jpg'
            ],
            1 =>[
            'title'         => 'A Author Blog',
            'description'   => 'Blog Description',
            'author'         => 'Rakib Hasan',
            'image'          => 'a3.jpg'
            ],
            2=>[
                'title'         => 'A New Bangladesh Blog',
                'description'   => 'Blog Description',
                'author'         => 'Rakib Hasan',
                'image'          => '3.jpg'
            ],
            3 =>[
                'title'         => 'About Blog',
                'description'   => 'Blog Description',
                'author'         => 'Rakib Hasan',
                'image'          => '4.jpg'
            ],
        ];
    }
}
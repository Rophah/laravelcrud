<?php

    namespace App\Models;

    class Listing {
        public static function all() {
            return [
                [
                    'id' => 1,
                    'title' => 'Listing One',
                    'description' => '
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis voluptas magnam itaque quisquam, ut eius perferendis officiis dolorem reiciendis. Voluptas quod corporis vel architecto, sunt in eligendi accusamus modi deleniti.'
                    ],
                    [
                        'id' => 2,
                        'title' => 'Listing Two',
                        'description' => '
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis voluptas magnam itaque quisquam, ut eius perferendis officiis dolorem reiciendis. Voluptas quod corporis vel architecto, sunt in eligendi accusamus modi deleniti.'
                        ],
                    [
                        'id' => 3,
                        'title' => 'Listing Three',
                        'description' => '
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis voluptas magnam itaque quisquam, ut eius perferendis officiis dolorem reiciendis. Voluptas quod corporis vel architecto, sunt in eligendi accusamus modi deleniti.'
                    ]

                ];
            }
        }
        

<?php
    $data = ['name' => 'Khadam Ikhwanus Shofa',
            'address' => 'Kelapa 2 Depok',
            'hobbies' => ['main game','otak atik sesuatu','main di alam'],
            'is_married' => false,
            'school' => ['highSchool'=>'SMA Muhammadiyah 1 Gombong','university'=>null],
            'skills' => (object)['html','MYSQL','PHP']
            ];
    function jhonson($data){
        return json_encode($data);
    }
    echo jhonson($data);
?>

<?php
$gcesstaffs=[
    "Academic: "=>[
        [
            "Name"=>"Nishal Gurung",
            "Address"=>"Zerokm",
            "Contact"=>[
                "Number 1"=>"9876543210",
                "Number 2"=>"9801234567"

            ],
            "Subjects"=>[
                "Subject 1"=>"Web Technology",
                "Subject 2"=>"PHP"
            ]
            ],

            [
                "Name"=>"Rajendra Thapa",
                "Address"=>"Majheripatan",
                "Contact"=>[
                    "Number 1"=>"9846510045",
                    "Number 2"=>"9878561250"

                ],
                "Subjects"=>[
                    "Subject 1"=>"C++",
                    "Subject 2"=>"OOP"
                ]

                ],

                [
                    "Name"=>"Sanjaya Niraula",
                    "Address"=>"GBS",
                    "Contact"=>[
                        "Number 1"=>"9876551238",
                        "Number 2"=>"9865534782"

                    ],
                    "Subjects"=>[
                        "Subject 1"=>"FIT",
                        "Subject 2"=>"Fundamental",
                    ]

                ]

                    ],

    "Non-Academic: "=>[
        [
            "Name"=>"Manav Magar",
            "Address"=>"Lakeside",
            "Contact"=>[
                "Contact 1"=>"9806549404",
                "Contact 2"=>"9816155482"

            ]

        ],

        [
            "Name"=>"Prajita Bhujel",
            "Address"=>"Lamachaur",
            "Contact"=>[
                "Contact 1"=>"9817589346",
                "Contact 2"=>"9865442275"

            ]
        ]
    ]
];

foreach($gcesstaffs as $faculty=>$members){
    echo $faculty.":<br/><br/>";
    foreach($members as $data=>$specificdata){
        foreach($specificdata as $specificvalue=>$value){
            if(is_array($value) || is_object($value)){
                foreach($value as $i=>$j){
                    echo $i." = ".$j;
                    echo"<br/>";
                }
            }
            else{
                echo $specificvalue." = ".$value;
                echo"<br/>";
            }
        }
        echo "<br/>";
    }
}
?>
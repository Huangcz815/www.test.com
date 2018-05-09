<?php

return[
    'title' => 'PHP基础语法考试(一)',  //试题标题
    'timeout' => 1800,               //答题时限
    'data' => [                      //试题数组
        'binary' => [                               //判断题
            'name'=>'判断题','score'=>20,'data'=>[
                1=>[
                'question'=>'使用PHP写好的程序，在Linux和Windows平台上都可以运行。','answer'=>'对'
            ],
                2=>[
                'question'=>'PHP可以支持MySQL数据库，但不支持其它的数据库。','answer'=>'错'
            ],
                3=>[
                    'question'=>'PHP有很多流行的MVC框架，这些框架可以使PHP的开发更加快捷。','answer'=>'对'
                ],
                4=>[
                    'question'=>'Zend Studio是PHP中常用的IDE（集成开发环境）。','answer'=>'对'
                ],
                5=>[
                    'question'=>'进行PHP程序开发时，可以借助软件和工具来提高效率。','answer'=>'对'
                ],
            ]
        ],
        'single' => [                               //单选题
            'name'=>'单选题','score'=>20,'data'=>[
                1=>[
                    'question'=>'下列选项中，不是URL地址中所包含的信息是( ）',
                    'option'=>['主机名','端口号','网络协议','软件版本'],
                    'answer'=>'D',
                ],
                2=>[
                    'question'=>'PHP是一种（ ）的编程语言。',
                    'option'=>['解释型','编译型','两者都是','两者都不是'],
                    'answer'=>'A',
                ],
                3=>[
                    'question'=>'PHP支持多种风格的标记，以下不是PHP标记的是（ ）。',
                    'option'=>['<?php  >','<?  >','<!--   -->;','<%  %>'],
                    'answer'=>'C',
                ],
                4=>[
                    'question'=>'下列选项中，函数返回的关键字是（ ）。',
                    'option'=>['back','go','return','break'],
                    'answer'=>'C',
                ],
                5=>[
                    'question'=>'PHP中存在多种变量，其中在函数内部定义的变量称之为（ ）。',
                    'option'=>['可变变量','局部变量','全局变量','内部变量'],
                    'answer'=>'B',
                ],
            ]
        ],
        'multiple' => [                             //多选题
            'name'=>'多选题','score'=>30,'data'=>[
                1=>[
                    'question'=>['下列选项中，关于数据类型的说法描述正确的是（ ）'],
                    'option'=>['浮点数指的是数学中的小数，不能保存整数','在双引号内的变量会被解析，而单引号内的变量会被原样输出','布尔类型只有true和false两个值，且区分大小写','对于整数59可以使用十六进制数0x3b进行表示'],
                    'answer'=>['B','D']
                ],
                2=>[
                    'question'=>['下列选项中，可以作为PHP的输出语句的是（ ）'],
                    'option'=>['echo','var_dump','print_r','以上答案都不正确'],
                    'answer'=>['A','B','C']
                ],
                3=>[
                    'question'=>['下面关于if语句的说法正确的是（ ）'],
                    'option'=>['if语句也成为单分支语句','if语句的判断条件是布尔类型数据','if语句的判断条件是一个字符串类型数据','以上答案都不正确'],
                    'answer'=>['A','B']
                ],
                4=>[
                    'question'=>['下列选项中，关于数据类型的说法描述正确的是（&nbsp;）'],
                    'option'=>['联合 +','自增 ++','相等 ==','全等 ==='],
                    'answer'=>['A','C','D']
                ],
                5=>[
                    'question'=>['若在当前运行的脚本中需要调用其他文件的函数，可以使用以下哪个语句（ ）'],
                    'option'=>['import','namespace','include','require'],
                    'answer'=>['C','D']
                ],
            ]
        ],
        'fill' => [                                 //填空题
            'name'=>'填空题','score'=>30,'data'=>[
                1=>[
                    'question'=>'Apache的http服务程序默认使用的是____端口。',
                    'answer'=>'8000'
                ],
                2=>[
                    'question'=>'在PHP中，____函数能将数组转化为字符串。',
                    'answer'=>'implode',
                ],
            ]
        ],
    ]
];
?>
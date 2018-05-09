<?php

return[
    'title' => 'PHP基础语法考试(二)',  //试题标题
    'timeout' => 1800,               //答题时限
    'data' => [
        'binary' =>[
            'name'=>'判断题','score'=>20,'data'=>[
                1 => [
                  'question'=>'在".php"后缀的文件中，所有的PHP代码都只能写在"<?php ?>"标记内。','错'
                ],
                2 => [
                    'question'=>'标量类型包括布尔型、整型、字符串型和数组型。','错'
                ],
                3 => [
                    'question'=>'var_dump是PHP中用于打印变量或表达式的类型与值等相关信息的函数。','对'
                ],
                4 => [
                    'question'=>'如果if语句的代码块中只包含一条语句，那么if语句的大括号可以省略。','对'
                ],
                5 => [
                    'question'=>'当浮点型数据自动转换为整型数据时，其值将向下取整。','对'
                ],

            ]
        ],
        'single' => [
            'name' => '单选题','score' => 30,'data' =>[
                1=>[
                    'question'=>'下列选项中，不区分大小写的标识符是（ ）',
                    'option'=>['函数名','常量名','变量名','属性名'],
                    'answer'=>'A',
                ],
                2=>[
                    'question'=>'下列选项中，不能作为常量名的是（ ）',
                    'option'=>['ROOT','__PI__','e','CLASS'],
                    'answer'=>'D',
                ],
                3=>[
                    'question'=>'语句"echo 2+3;"的输出结果是（ ）',
                    'option'=>['2+3','5','程序报错','以上答案都不正确'],
                    'answer'=>'B',
                ],
                4=>[
                    'question'=>'下列选项中，不属于赋值运算符的是（ ）',
                    'option'=>['=','+=','.=','=='],
                    'answer'=>'D',
                ],
                5=>[
                    'question'=>'下面关于多维数组的说法正确的是（ ）',
                    'option'=>['所谓多维数组，就是指一个数组的元素又是一个数组','所谓多维数组，就是指数组的所有元素必须都是数组','PHP中的数组维数不能超过三维 ','以上说法都不正确'],
                    'answer'=>'A',
                ],
            ]
        ],
        'multiple' => [
            'name'=>'多选题','score'=>30,'data'=>[
                1=>[
                    'question'=>['下列选项中，哪些可以用于输出数组中所有的元素（ )'],
                    'option'=>['print_r()','print()','echo()','var_dump()'],
                    'answer'=>['A','D']
                ],
                2=>[
                    'question'=>['下列选项中，可以作为PHP开始标记的是（ ）'],
                    'option'=>['<?php','<%','<?','<<<;eof'],
                    'answer'=>['A','B','C']
                ],
                3=>[
                    'question'=>['下列选项中，关于文件包含语句写法正确的是（ ）'],
                    'option'=>['include "./demo/test.php"','include ./demo/test.php','include("./demo/test.php")','include(./demo/test.php)'],
                    'answer'=>['A','C']
                ],
                4=>[
                    'question'=>['下列选项中，其值可以自动转换为布尔类型值false的是（ ）'],
                    'option'=>['整型值0','空字符串','array( array() )','浮点型值0.0'],
                    'answer'=>['A','B','D']
                ],
                5=>[
                    'question'=>['若在当前运行的脚本中需要调用其他文件的函数，可以使用以下哪个语句（ ）'],
                    'option'=>['import','namespace','include','require'],
                    'answer'=>['C','D']
                ],
            ]
        ],
        'fill' => [
            'name'=>'填空题','score'=>20,'data'=>[
                1=>[
                    'question'=>'在PHP中，标识符允许包含字母、数字和____。',
                    'answer'=>'下划线'
                ],
                2=>[
                    'question'=>'substr()函数用于获取字符串中的子串，则substr("itcast",1,3) 的返回值是____。',
                    'answer'=>'tca',
                ],
            ]
        ],
    ]
];
?>
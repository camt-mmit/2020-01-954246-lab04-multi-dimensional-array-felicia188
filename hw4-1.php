<?php
   /*ID:602110188
name:Chen Shuo 
wechart:felicia*/
printf("Input number of students: ");//输入的学生数量 n
fscanf(STDIN, "%d", $n);
printf("Input number of chapters: ");//输入成绩科目数量 nchpt
fscanf(STDIN, "%d", $nchpt);
$scores = [];           //scores 数组
$chpt_message = " name"; //chpt_message字符串变量
$input_format = " %s";//input_format字符串变量
for($j = 0; $j < $nchpt; $j++) {//当j 未达到输入成绩科目数量 nchpt时
    $chpt_message .= " chpt".($j + 1);//.= 将左右两边拼接，$chpt_message =$chpt_message ." chpt".($j + 1)
                       //注意，有空格     // 输入nchpt=2，j<=1;j=0,$chpt_message= name chpt1;j=1,$chpt_message= name chpt1 chpt2;
    $input_format .= " %f";//$input_format=$input_format." %f"
                       //注意，有空格    // 输入nchpt=2，j<=1; j=0,$input_format= %s %f;j=1,$input_format= %s %f %f;
    }
    $chpt_message = trim($chpt_message);
    $input_format = trim($input_format);//调整格式
for($i = 0; $i < $n; $i++) {//当i未达到输入的学生数量 n
    printf("Student %2d score ( %s ): ", $i + 1, $chpt_message);//打印Student  i+1 score ( name chpt2 chpt3 ):
    $scores[$i] = fscanf(STDIN, $input_format);
    }  
    $name=array_column($scores,0);
    printf("\n");
    printf("Result:\n");//打印：结果
    // leading space change this to match line 50
    printf("%-10s   ", "");
    for($number=1;$number<=$nchpt;$number++){
        // change this to match line 55
        //printf("   ");
        //printf("%5d",$number);//打印 横杠格，未果
        printf(" %6d", $number);
    }
    printf("\n");
    // This must be 13 charactor length that match line 57
    //printf("---------");
    printf("-------------");
    for($j = 0; $j < $nchpt; $j++){
        // This must be 6 + 1 = 7 charactor length
        //printf("------");
        printf("-------");
    }
    // This must be 6 + 3 = 9 charactor length
    //printf("-------\n");
    printf("---------\n");
foreach($scores as $i => $chpts) {//将数组的每个值赋给变量$chpts，$chpts子数组
    // you must specify this length 
    //printf("%s ：",$name[$i]);//打印学生名字
    printf("%-10s : ",$name[$i]);//打印学生名字
    array_shift($chpts);//去掉字数组开头字符
    $total = 0; //令变量total==0
        foreach($chpts as $chpt) {//将变量chpts的值赋给变量chpt
            $total += $chpt;// $total=$total+$chpt
            printf(" %6.2f", $chpt);//打印变量chpt
        }
        printf(" = %6.2f\n", $total);//打印总成绩
    }



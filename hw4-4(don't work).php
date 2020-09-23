<?php
   /*ID:602110188
name:Chen Shuo 
wechart:felicia*/

//it can't work ,but i don't know why
printf("Input size (m n p): ");
fscanf(STDIN, "%d %d %d",$m,$n,$p);//m=3,n=2,p=3
//y=1(x=1,2);y=2(x=1,2);y=3(x=1,2)
printf("Input matrix A(%d x %d):\n",$m,$n);
$input_format = "";
for($i=0;$i<$n;$i++){
    $input_format.="%d";//i=0, $input_format=%d;i=1, $input_format=%d %d
}
$input_format = trim($input_format);
for($y=0;$y<$m;$y++){//y 表示横排的序数，第一行为1，第二行为2.....
    $matrix1[$y]=[]; 
    for($x=01;$x<$n;$x++){//x表示纵列的序数，第一列为number，第二列number-1....
   }
$matrix1[$y] = fscanf(STDIN, $input_format); 
} 
echo"\n";
printf("Input matrix B(%d x %d):\n",$n,$p);
$input_format = "";
for($i=0;$i<$p;$i++){
    $input_format.="%d";
}
$input_format = trim($input_format);
for($y=0;$y<$n;$y++){//y 表示横排的序数，第一行为1，第二行为2.....
    $matrix2[$y]=[]; 
    for($x=0;$x<$p;$x++){//x表示纵列的序数，第一列为number，第二列number-1....
   }
$matrix2[$y] = fscanf(STDIN, $input_format); 
} 
echo"\n";
printf("The result matrix C(3 x 3):\n",$m,$p);
$n1=$n;
function juzhen_mult_ju($matrix1,$m,$n,$matrix2,$n1,$p){
    $c=array();
    for($i=0;$i<$m;$i++){
        for($j=0;$j<$p;$j++){
            for($s=0;$s<=$n;$s++){
                $c[$i][$j]=$c[$i][$j]+$matrix1[$i][$s]*$matrix2[$s][$j];

            }
        }
    }

for($h=0;$h<$m;$h++){
    for($f=0;$f<$p;$f++){
        echo $c[$h][$f];
        echo" ";
   
    }
    echo"\n";
}
    
}





<?php
   /*ID:602110188
name:Chen Shuo 
wechart:felicia*/
printf("Input size (n >= 1): ");
fscanf(STDIN, "%d",$number);
//运行，number=3；x=3（x=3，y=1，y=2，y=3），x=2（y=1，y=2），x=1，y=1
for($x=$number;$x>=1;$x--){//x表示纵列的序数，第一列为number，第二列number-1....
   for($y=1;$y<=$x;$y++){//y 表示横排的序数，第一行为1，第二行为2.....
      if($y==1||$x==$number){//y=0,横边为1；x=number，纵边为1
         $triangle[$x][$y]=1;
      }
      else{
         $triangle[$x][$y]=$triangle[$x+1][$y]+$triangle[$x][$y-1];//注意x的顺序是倒序，正序x-1为倒叙x+1
      }
      echo $triangle[$x][$y]."\t";
   }
echo"\n";
}
print_r($triangle);



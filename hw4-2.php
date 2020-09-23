<?php
   /*ID:602110188
name:Chen Shuo 
wechart:felicia*/
$building  = []; // indexing [floor][x][y]
printf("Input data (floor n): ");//输入的楼层数量$floor，输入房间的号码$n
fscanf(STDIN, "%d %d",$floor,$n);
for($i=1;$i<=$floor;$i++){
   $building[$i] = []; //最外层的数组。floor层数
   printf("Floor: %d\n",$i);
  for($x=1;$x<=$n;$x++){
   $building[$i][$x] = []; //第二层数组，x-y,不同floor的x层的号码
      for($y=1;$y<=$n;$y++){
         $building[$i][$x][$y] = [];//第三层数组，不同floor的不同x层的y房间的号码     
   printf("\tInput number of people in zone %d-%d :",$x,$y);
   fscanf(STDIN, "%d", $building[$i][$x][$y]);//读取时可以直接读取数组
      }
  }
}

printf("\n");
printf("People on each floor:\n");
for($i=1;$i<=$floor;$i++){
   $total=0;
   printf("Floor: %d\n",$i);
   for($x=1;$x<=$n;$x++){
      for($y=1;$y<=$n;$y++){
         printf("%5d", $building[$i][$x][$y]);
         $total+= $building[$i][$x][$y];
      }
      echo"\n";
   }
   printf("Number of people = %d\n", $total);
   
}

printf("People on each zone:\n");
     for($x=1;$x<=$n;$x++){
         for($y=1;$y<=$n;$y++){
            printf("   zone %d-%d :\n",$x,$y);
            $t=0;
            for($i=$floor;$i>=1;$i--){
               printf("    %2d\n", $building[$i][$x][$y]);
               $t+= $building[$i][$x][$y];   
            }
            printf("Number of people = %d\n", $t);
            echo"\n";
         }
      }
  
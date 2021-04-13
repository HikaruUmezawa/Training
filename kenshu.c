/* 5⼈の⽣徒が数学と物理の試験を受け、⽣徒A「数学72、物理48」、⽣徒B「数学88、物理
39」、⽣徒C「数学72、物理91」、⽣徒D「数学81、物理82」、⽣徒E「数学68、物理
78」という結果であった。このとき「数学の最⼤点と最⼩点と平均点」、
「物理の最⼤点と
最⼩点と平均点」、
「数学と物理の合計が最も⾼い⽣徒の点数」を出⼒せよ。
*/

#include <stdio.h>
int main()
{
    //配列に入れる
    int record[2][5] = {{72,88,72,81,68},{48,39,91,82,78}};
    int i,max,min,sum;
    double avg;

    //数学の最大点と最小点と平均点
    max = record[0][0];
    min = record[0][0];
    sum = 0;

    for ( i = 0; i < 5; i++)
    {
        sum += record[0][i];

     if (max < record[0][i])
     {
        max = record[0][i];
     }else if(min > record[0][i])
        min = record[0][i];
    }
    
    avg = (double)sum/5;

    printf("「数学」最大点：%d　最小点：%d　平均点：%.1f\n",max,min,avg);

    //物理の最大点と最小点と平均点
    max = record[1][0];
    min = record[1][0];
    sum = 0;

    for ( i = 0; i < 5; i++)
    {
        sum += record[1][i];

     if (max < record[1][i])
     {
        max = record[1][i];
     }else if(min > record[1][i])
        min = record[1][i];
    }
    
    avg = (double)sum/5;

    printf("「物理」最大点：%d　最小点：%d　平均点：%.1f\n",max,min,avg);

    
    //数学と物理の合計
    max = record[0][0] + record[1][0];
    for ( i = 0; i < 5; i++)
    {
        sum = record[0][i]+record[1][i];
        
        if (max < sum)
        {
            max = sum;
        }
    }
    
    printf("数学と物理の合計が最も高い生徒の点数 : %d\n",max);
    
    return 0;
}
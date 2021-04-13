#!/bin/sh

#実⾏する時間が午前なら「ls -la」の出⼒結果をファイルに書き出し、実⾏する時間が午後な
#ら現在時刻を年⽉⽇時分形式で表⽰せよ。
#if、現在時刻取得、ファイル書き出し、現在時刻表示

now=$(date +%H%M)

if [ "$now" -lt "1200" ]
then 
    ls -la>result.txt 
else
    datetime=$(date +%Y/%m/%d/%H:%M)
    echo "現在日時:$datetime"
fi
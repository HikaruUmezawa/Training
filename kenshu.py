#15°ごとにsin、cos、tanの各値を出⼒せよ

import numpy as np

for i in range(0,361,15):

    #角度をラジアンに変換
    r = np.radians(i)

    #sin、cos、tan表示
    print("sin"+ str(i) +"° = " + str(np.sin(r)))
    print("cos"+ str(i) +"° = " + str(np.cos(r)))
    if (90 + i) % 180 == 0:
        print("tan"+ str(i) +"°：なし" "\n")
    else:    
        print("tan"+ str(i) +"° = " + str(np.tan(r))+"\n")

    
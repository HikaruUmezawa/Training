<!--
    果物にはそれぞれ価格があり、果物の⼀種である桃の価格は200円〜300円の間で個体ごと
に変動する。また、果物の⼀種であるイチゴの価格は400円〜500円の間で個体ごとに変動
する。桃とイチゴが15個ずつ存在する時に、それぞれの最⾼値と最安値、および平均価格を
出⼒せよ。
-->

<?php
class Kudamono{
    //ランダムで価格を決める
    public $price;

    public function __construct($min,$max){
        $this->price = rand($min,$max);
    }
}

class Momo extends Kudamono{
    public function __construct()
    {
        parent::__construct(200,300);
    }
}

class Ichigo extends Kudamono{
    public function __construct()
    {
        parent::__construct(400,500);
    }
}

class Yaoya{

    public $momoarray = Array();
    public $ichigoarray = Array();

    public function __construct($n)
    {
     //配列に入れる   
     for ($i=0; $i < $n; $i++) { 
        $momo = new Momo();
        $ichigo = new Ichigo();
        array_push($this->momoarray,$momo->price);
        array_push($this->ichigoarray,$ichigo->price);
     }   
    }

    //平均値
    public function getAvg($array)
    {
        $sum = array_sum($array);
        $avg = $sum/count($array);
        return round($avg,1);
    }

     //最高値、最安値、平均を表示
    public function output($name,$array){
        echo "[".$name."] 最高値：".max($array)."円　最安値：".min($array)."円 平均値：".$this->getAvg($array)."円　<br>";
    }
}

$yaoya = new Yaoya(15);
$yaoya->output("桃",$yaoya->momoarray);
$yaoya->output("いちご",$yaoya->ichigoarray);

?>
<?php
class Kudamono{
    //ランダムで価格を決める
    public function price($min,$max){
        return rand($min,$max);
    }

    //平均値
    public function avg($array)
    {
        $sum = array_sum($array);
        return $sum/count($array);
    }
    //最高値、最低値、平均を表示
    public function echo($name,$array){
        echo "[".$name."]最高値：".max($array)."　最安値：".min($array)." 平均値：".$this->avg($array)."<br>";
    }
}

class Momo extends Kudamono{
    public $price;

    public function __construct($min=200,$max=300)
    {
        $this->price = $this->price($min,$max);
    }
}

class Ichigo extends Kudamono{
    public $price;

    public function __construct($min=400,$max=500)
    {
        $this->price = $this->price($min,$max);
    }
}

//15個分を配列に格納する
//桃
$momoarray = Array();
for ($i=0; $i < 15; $i++) { 
    $momo = new Momo();
    array_push($momoarray,$momo->price);
}
//いちご
$ichigoarray = Array();
for ($i=0; $i < 15; $i++) { 
    $ichigo = new Ichigo();
    array_push($ichigoarray,$ichigo->price);
}

//最高値、最低値、平均を表示
$momo->echo("桃",$momoarray);
$ichigo->echo("いちご",$ichigoarray);

?>
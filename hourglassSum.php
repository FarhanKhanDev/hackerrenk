function hourglassSum($arr) {
    $setsOf3 = array_chunk($arr,3); // print_r($setsOf3);die;
    $sumsTop = $sumMid = $sumBottom = $sumHrGlasses = [];
    foreach($setsOf3 as $key=>$set){
            $sumTop = $set[0][0] + $set[0][1] + $set[0][2];
            $sumMid = $set[1][1];
            $sumBottom = $set[2][0] + $set[2][1] + $set[2][2];
            $sumHrGlass = $sumTop + $sumMid +  $sumBottom;
            $sumHrGlasses = array_push($sumHrGlasses, $sumHrGlass);
    }
    print_r($sumHrGlasses);

}

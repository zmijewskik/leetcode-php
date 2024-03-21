<?php
class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $noPrices = count($prices);
        $minPrice = $prices[0];
        $maxProfit = 0;

        for($i = 1; $i < $noPrices; $i++){
            if($minPrice > $prices[$i]){
                $minPrice = $prices[$i];
            }

            $profit = $prices[$i] - $minPrice;

            if($profit > $maxProfit){
                $maxProfit = $profit;
            }
        }
        return $maxProfit;
    }
}
?>
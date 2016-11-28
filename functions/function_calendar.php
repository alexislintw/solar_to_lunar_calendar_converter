<?php
require_once('./lunar.config.php')

/**
* @desc 陽曆轉為陰曆
*/ 
function solarToLunarDate($year, $mon, $day) { 

	if( ( $year > 0 ) && ( $mon > 0 ) && ( $day > 0 ) ) {

		$x = countSolarDays($year, $mon, $day); 
         
		$leap = 0; 
		for( $i = 0,$k = 0; $k == 0; $i++ ){ 
			for( $j = 0; $j < 12 && $k == 0; $j++ ){ 
				if( $lunar_month_day[$i][$j] == 95 ){ 
		     		if( $x <= 59 ){ 
		        			$k = 1; 
		        			if( $x > 29 ) {
		        		 		$x -= 29;
		        		  		$leap = 1;
		        			}   
		     		} 
		     	    else {
		     	    	$x -= 59;
		     	    }	
		        }
		        else { 
	        	    if( $x <= $lunar_month_day[$i][$j] ){ 
	        			$k = 1; 
	        			if( $lunar_month_day[$i][$j] == 58 && $x > 29 ){
		        			$x -= 29;
		        			$leap = 1;
	        			} 
		        		if( $lunar_month_day[$i][$j] == 59 && $x > 30 ){
		        			$x -= 30;
		        			$leap = 1; 
		        		}
		        		if( $lunar_month_day[$i][$j] == 60 && $x > 30 ){
		        			$x -= 30;
		        			$leap = 1; 
		        		}
	        		} 
	     			else {
	     				$x -= $lunar_month_day[$i][$j]; 
	     			}  				
				} 
			}
		}
		$lunar_year = 1882 + ($i - 1); 
		$lunar_mon  = $j; 
		$lunar_day  = $x;
	   
		return array("年"=>$lunar_year, "月"=>$lunar_mon, "日"=>$lunar_day);
	}
	else {
		return false;	
	}
}

/**
* @desc 計算從 02/18/1882 至今的天數 
*/
function countSolarDays( $year, $month, $day ) { 
    
    $month_day = array( 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31 ); 

    $month_day[1] = checkLeap($year) ? 29 : 28; 
    
    $x = 0 ;
    for( $i = 1882; $i < $year; $i++ ){ 
        $x += checkLeap($i) ? 366 : 365; 
    } 
    for($i = 1; $i < $month; $i++){ 
        $x += $month_day[$i - 1]; 
    }
    
    return $x + $day - 48;
}

/**
* @desc 判斷是否為閏年 ### 
*/
function checkLeap($year) {
    
    if( ($year % 4 == 0) && ($year % 100 != 0 ) || ($year % 400 == 0) ) {
        return true;
    }
    else {
        return false;
    }
}

?>
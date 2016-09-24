<?php

// numeric_dropdown




function dropdown($i=0,$end=12,$incr=1,$selected=0){	
    $option = '';
    for($i; $i <= $end; $i+=$incr) {
            
            $option .= '<option';
            $option .= ( $selected == $i) ? ' selected' : '';
            $option .= '>'.  sprintf('%02d', $i ) .'</option>';	
    }
    return $option;
}


function subjects( $checked = []){	
    $subjects = [
        1 => 'English',
        2 => 'Bangla',
        3 => 'Math',
        4 => 'Account',
        5 => 'Physics'
    ];
    $checkbox = '';
    foreach($subjects as $key=>$subject){
        $checkbox .= '<label class="checkbox">';
        $checkbox .= '<input type="checkbox" ';
        
        
        $checkbox .= (in_array($key, $checked)) ? 'checked="checked"' : '';
        
        
        
        
        $checkbox .= 'value="'. $key .' ">';
        $checkbox .= $subject . '</label>';
    }        
    return $checkbox;
}
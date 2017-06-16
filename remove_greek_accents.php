<?php
function remove_greek_accents($string, $convert_to_uppercase = false) {
    $replace_pairs = array(
        'ά' => 'α', 
        'έ' => 'ε', 
        'ί' => 'ι', 
        'ύ' => 'υ',
        'ό' => 'ο',
        'ή' => 'η'
    );
    
    if ($convert_to_uppercase)
        return mb_strtoupper(strtr(mb_strtolower($string), $replace_pairs));
        
    return strtr(mb_strtolower($string), $replace_pairs);
}
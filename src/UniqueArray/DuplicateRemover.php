<?php

namespace Kata\UniqueArray;

class DuplicateRemover
{
    public function __invoke(array $input): array
    {
        /**
         * @todo
         */
        $unique = array();
        $current_pos = 0;
        foreach($input as $element){
            $found = false;
            for($index = 0; $index < $current_pos && !$found; $index++ ){
                if($element == $unique[$index]){
                    $found = true;                                  
                }
            }            

            if(!$found ){
                $unique[$current_pos] = $element;
                $current_pos++;
            }
        }
        return $unique;
    }
}

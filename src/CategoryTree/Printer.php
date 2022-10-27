<?php

namespace Kata\CategoryTree;

class Printer
{
    public function build(Category $parent, int $spaces = 0): string
    {
        /**
         * @todo
         */
        $childrens = $parent->children();

        $criteria = fn(Category $a, Category $b) =>  $a->name() <=> $b->name();
        usort($childrens, $criteria);

        $tree = $tree = str_repeat("  ", $spaces).$parent->name().\PHP_EOL;
        foreach($childrens as $children){
            $tree .= $this->build($children, $spaces + 1);
        }

        return $tree;
    }
}

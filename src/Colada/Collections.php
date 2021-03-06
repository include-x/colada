<?php

namespace Colada;

/**
 * Helper for common collections build patters.
 *
 * @author Alexey Shockov <alexey@shockov.com>
 */
class Collections
{
    /**
     * @deprecated Use xrange() instead.
     *
     * @param int $start
     * @param int $end
     *
     * @return Collection
     */
    public static function range($start, $end)
    {
        $builder = new CollectionBuilder($end - $start + 1);
        for ($current = $start; $current <= $end; $current++) {
            $builder->add($current);
        }

        return $builder->build();
    }

    /**
     * @todo Generator...
     *
     * @param mixed $element
     * @param int   $times
     *
     * @return Collection
     */
    public static function repeat($element, $times)
    {
        $builder = new CollectionBuilder($times);
        for ($step = 0; $step < $times; $step++) {
            $builder->add($element);
        }

        return $builder->build();
    }
}

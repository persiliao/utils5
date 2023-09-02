<?php
/**
 * @author Persi.Liao
 * @date   2023/9/3
 */

namespace PersiLiao\Utils;

use DateTimeImmutable;

class DateTime {

    /**
     * Diff
     *
     * @param string $start start date
     * @param string $end end date
     *
     * @return \DateInterval|false
     * @throws \Exception
     */
    public static function diff($start, $end) {
        $origin = new DateTimeImmutable($start);
        $target = new DateTimeImmutable($end);

        return $origin->diff($target);
    }
}

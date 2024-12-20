<?php

use Carbon\Carbon;

if (!function_exists('formatDate')) {
    /**
     * Format a date using Carbon.
     *
     * @param mixed $date
     * @param string $format
     * @return string
     */
    function formatDate($date, $format) {
        return Carbon::parse($date)->format($format);
    }
}

if (!function_exists('calculateDuration')) {
    /**
     * Calculate duration between two dates.
     *
     * @param mixed $startDate
     * @param mixed $endDate
     * @return string
     */
    function calculateDuration($startDate, $endDate) {
        $start = Carbon::parse($startDate);
        $end = Carbon::parse($endDate);

        $diff = $start->diff($end);

        $years = $diff->y;
        $months = $diff->m;

        if ($years > 0 && $months > 0) {
            return "{$years} years {$months} months";
        } elseif ($months > 0) {
            return "{$months} months";
        } else {
            return "{$years} years";
        }
    }
}


if (!function_exists('truncateWords')) {
    /**
     * Truncate a string to a specified number of words.
     *
     * @param string $text
     * @param int $words
     * @param string $ending
     * @return string
     */
    function truncateWords($text, $words = 15, $ending = '...') {
        return \Illuminate\Support\Str::words($text, $words, $ending);
    }
}
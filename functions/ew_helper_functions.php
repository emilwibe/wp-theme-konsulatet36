<?php
if (!defined('ABSPATH')) { exit; }

function ew_print_month($lang = 'DK', $month) {
    if( $lang == 'DK') {
        $monthArr = [
            null,
            "Januar",
            "Februar",
            "Marts",
            "April",
            "Maj",
            "Juni",
            "Juli",
            "August",
            "September",
            "Oktober",
            "November",
            "December"
        ];

        if(!isset($month)) {
            return;
        }

        echo $monthArr[$month];
    }
}
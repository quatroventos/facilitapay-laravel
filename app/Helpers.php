<?php
    function percentDiff($new, $original)
    {
        if ($original < $new) {
            return "<span class='text-success text-sm font-weight-bolder'><i class='fa-sharp fa-solid fa-arrow-up'></i> " . number_format(($new - $original) / $original * 100, 2) . "%</span>";
        } else {
            return "<span class='text-danger text-sm font-weight-bolder'><i class='fa-sharp fa-solid fa-arrow-down'></i> " . number_format(($original - $new) / $original * 100, 2) . "%</span>";
        }
    }

    function bouceDiff($new, $original) //bounce rate have different color scheme
    {
        if ($original < $new) {
            return "<span class='text-danger text-sm font-weight-bolder'><i class='fa-sharp fa-solid fa-arrow-up'></i> " . number_format(($new - $original) / $original * 100, 2) . "%</span>";
        } else {
            return "<span class='text-success text-sm font-weight-bolder'><i class='fa-sharp fa-solid fa-arrow-down'></i> " . number_format(($original - $new) / $original * 100, 2) . "%</span>";
        }
    }

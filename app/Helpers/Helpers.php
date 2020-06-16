<?php


function checkGender($status) {
    switch ($status) {
        case 0 : {
            return 'زن';
            break;
        }
        case 1 : {
            return 'مرد';
            break;
        }
    }
}

<?php

function encode(string $input) {
    return preg_replace_callback('(\w)\1+', function () {

    }, $input);
}

function decode($input) {
    return;
}

<?php
function faq(){
    $all_setting = setting();
    render('faq', ['all_setting' => $all_setting]);
}
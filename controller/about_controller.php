<?php
    function about(){
        $all_setting = setting();
        render('about', ['all_setting' => $all_setting]);
    }
?>
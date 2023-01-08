<?php
function home()
{
    $tour_cheap = show_tour_cheap();
    $tour_sale = show_tour_sale();
    $all_tour = show_all_tour();
    $news_like = show_news_like();
    $show_rand =  tour_rand();
    $luotxem =  show_tour_luot_xem();
    $all_slide = all_slide();
    $all_setting = setting();
    $list =  listkhoihanh();
    render('home', [
        'tour_cheap' => $tour_cheap, 'tour_sale' => $tour_sale, 'all_tour' => $all_tour, 'news_like' => $news_like, 'list' => $list,'show_rand'=>$show_rand,
        'luotxem'=>$luotxem, 'all_slide' => $all_slide, 'all_setting' => $all_setting
    ]);
}
function home_admin()
{
    if(isset($_SESSION['user'])) {

        $thongke = thongke();
        $show_user = show_userall();
        $show_all_tour = show_all_tours();
        $ngay_di = ngayditour();
        $demuser  = demuser();
        $demtour = demtour();
        $demorder = demorder();
        $demcomment = demcomment();
        $all_setting = setting();
        render('admin/index', ['thongke' => $thongke, 'show_user' => $show_user, 'show_all_tour' => $show_all_tour, 
        'ngaydi' => $ngay_di, 'demuser' => $demuser, 'demtour' => $demtour, 'demorder' => $demorder, 'demcomment' => $demcomment, 'all_setting' => $all_setting]);
    }
    else{
        $all_setting = setting();
        render('login', ['all_setting' => $all_setting]);
    }
}

function asc_az_ctr()
{
    $asc =  asc();
    $all_setting = setting();
    render('tourDL_az', ['asc' => $asc, 'all_setting' => $all_setting]);
}

function desc_za_ctr()
{
    $desc =  desc();
    $all_setting = setting();
    render('tourDL_za', ['desc' => $desc, 'all_setting' => $all_setting]);
}

function ascprice_ctr()
{
    $asc =  asc_price();
    $all_setting = setting();
    render('tourDL_price_as', ['asc' => $asc, 'all_setting' => $all_setting]);
}
function descprice_ctr()
{
    $desc =  desc_price();
    $all_setting = setting();
    render('tourDL_price_desc', ['desc' => $desc, 'all_setting' => $all_setting]);
}

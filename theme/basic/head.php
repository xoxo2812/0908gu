<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<!-- 상단 시작 { -->
<div id="hd">
    <h1 id="hd_h1"><?php echo $g5['title'] ?></h1>
    <div id="skip_to_container"><a href="#container">본문 바로가기</a></div>

    <?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
    ?>

    <div id="hd_wrapper" >
        <div class="container d-flex align-items-center">
            <div id="logo">
                <a href="<?php echo G5_URL ?>"><img src="<?php echo G5_IMG_URL ?>/logo.svg" alt="<?php echo $config['cf_title']; ?>"></a>
            </div>
        
            <nav id="gnb" class="col">
                <h2>메인메뉴</h2>
                <div class="gnb_wrap">
                    <ul id="gnb_1dul" class="d-flex">
                        
                        <?php
                        $menu_datas = get_menu_db(0, true);
                        $gnb_zindex = 999; // gnb_1dli z-index 값 설정용
                        $i = 0;
                        foreach( $menu_datas as $row ){
                            if( empty($row) ) continue;
                            $add_class = (isset($row['sub']) && $row['sub']) ? 'gnb_al_li_plus' : '';
                        ?>
                        <li class="gnb_1dli <?php echo $add_class; ?> gnblist<?php echo $i; ?> d-none d-lg-block" style="z-index:<?php echo $gnb_zindex--; ?>">
                            <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb_1da"><?php echo $row['me_name'] ?></a>
                            <?php
                            $k = 0;
                            foreach( (array) $row['sub'] as $row2 ){

                                if( empty($row2) ) continue; 

                                if($k == 0)
                                    echo '<span class="bg">하위분류</span><div class="gnb_2dul"><ul class="gnb_2dul_box">'.PHP_EOL;
                            ?>
                                <li class="gnb_2dli"><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>" class="gnb_2da"><?php echo $row2['me_name'] ?></a></li>
                            <?php
                            $k++;
                            }   //end foreach $row2

                            if($k > 0)
                                echo '</ul></div>'.PHP_EOL;
                            ?>
                        </li>
                        <?php
                        $i++;
                        }   //end foreach $row

                        if ($i == 0) {  ?>
                            <li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
                        <?php } ?>
                        <li class="gnb_1dli gnb_mnal "><button type="button" class="gnb_menu_btn" title="전체메뉴"><img src="<?php echo G5_IMG_URL ?>/allmenu-icon.png" alt="<?php echo $config['cf_title']; ?>"><span class="sound_only">전체메뉴열기</span></button></li>
                    </ul>
                    <div id="gnb_all" class="justify-content-center flex-row">
                        <h2>전체메뉴</h2>
                        <div class="menu_lefts">
                            <span class="logos">
                                <img src="<?php echo G5_THEME_IMG_URL ?>/logowt.png" alt="지란지교데이터">
                            </span>
                            <p class="texts">
                                데이터 보호 전문기업, 지란지교데이터
                                <br>
                                1만 여 개 고객사, 200만 유저의 선택
                            </p>
                            <div>
                                <a href="">개인정보처리방침</a>
                                <i class="bi bi-dot"></i>
                                <a href="">관리자</a>
                            </div>
                            <div>
                                <i class="bi bi-instagram"></i>
                                <i class="bi bi-facebook"></i>
                                <img src="<?php echo G5_THEME_IMG_URL ?>/naverblogs.png">
                                <i class="bi bi-youtube"></i>
                            </div>
                        </div>
                        <div class="justify-content-center col-6">
                            <ul class="gnb_al_ul">
                                <?php
                                
                                $i = 0;
                                foreach( $menu_datas as $row ){
                                ?>
                                <li class="gnb_al_li">
                                    <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb_al_a"><?php echo $row['me_name'] ?></a>
                                    <?php
                                    $k = 0;
                                    foreach( (array) $row['sub'] as $row2 ){
                                        if($k == 0)
                                            echo '<ul>'.PHP_EOL;
                                    ?>
                                        <li><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>"><?php echo $row2['me_name'] ?></a></li>
                                    <?php
                                    $k++;
                                    }   //end foreach $row2

                                    if($k > 0)
                                        echo '</ul>'.PHP_EOL;
                                    ?>
                                </li>
                                <?php
                                $i++;
                                }   //end foreach $row

                                if ($i == 0) {  ?>
                                    <li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <br><a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
                                <?php } ?>
                            </ul>
                        </div>
                        <button type="button" class="gnb_close_btn"><i class="bi bi-x-lg" aria-hidden="true"></i></button>
                    </div>
                    <div id="gnb_all_bg"></div>
                </div>
            </nav>

        </div>

       
       
    </div>
    
    
    <script>
    
    $(function(){
        $(".gnb_menu_btn").click(function(){
            $("#gnb_all, #gnb_all_bg").show();
            $('html, body').addClass('allmenushow')
        });
        $(".gnb_close_btn, #gnb_all_bg").click(function(){
            $("#gnb_all, #gnb_all_bg").hide();
            $('html, body').removeClass('allmenushow')
        });
    });

    </script>
</div>
<!-- } 상단 끝 -->


<hr>

<!-- 콘텐츠 시작 { -->
<div id="wrapper">
    <div id="container_wr">
   
   
        <?php if (!defined("_INDEX_")) { ?>
            <div id="container" class="container">
        <h2 id="container_title"><span title="<?php echo get_text($g5['title']); ?>"><?php echo get_head_title($g5['title']); ?></span></h2><?php }
<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>
<?php if (!defined("_INDEX_")) { ?>
    </div>
    <?php  } ?>
   
</div>

</div>
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
<div id="ft">
    <div class="ftly">
        <div class="ftop">
            <div class="container d-flex justify-content-between">
            <div class="ft1 pl-0">
                <li><a href="">회사소개</a></li><i class="bi bi-dot"></i>
                <li><a href="">개인정보처리방침</a></li><i class="bi bi-dot"></i>
                <li><a href="">윤리경영<i class="bi bi-box-arrow-up-right"></i></a></li>
            </div>
            <div class="ft2">
                <ul class="sns">
                    <li><a href="https://www.instagram.com/jirandata/" target="_blank" rel="noopener noreferrer" title="새 창으로 열림"><i class="ri-instagram-fill"></i></a></li>
                    <li><a href="https://www.facebook.com/jirandata" target="_blank" rel="noopener noreferrer" title="새 창으로 열림"><i class="ri-facebook-fill"></i></a></li>
                    <li><a href="https://blog.naver.com/jirandata" class="blog" target="_blank" rel="noopener noreferrer" title="새 창으로 열림"><img src="<?php echo G5_THEME_IMG_URL ?>/blog.svg"></a></li>
                    <li><a href="https://www.youtube.com/channel/UCdlL4Yo7ZzzF-kKfOhz1XWQ/featured" target="_blank" rel="noopener noreferrer" title="새 창으로 열림"><i class="ri-youtube-fill"></i></a></li>
                </ul>
                <div class="fam"><button class="fambtn" type="button">Family Site <i class="ri-add-fill"></i></button>
                    <ul style="display: none;">
                        <li><a href="https://www.jiran.com/" target="_blank" rel="noopener noreferrer" title="새 창으로 열림">지란지교</a></li>
                        <li><a href="https://www.jiransoft.co.kr/" target="_blank" rel="noopener noreferrer" title="새 창으로 열림">지란지교소프트</a></li>
                        <li><a href="http://www.jiransecurity.com/" target="_blank" rel="noopener noreferrer" title="새 창으로 열림">지란지교시큐리티</a></li>
                        <li><a href="https://jiransnc.com/" target="_blank" rel="noopener noreferrer" title="새 창으로 열림">지란지교에스앤씨</a></li>
                        <li><a href="https://www.jirancomms.com/" target="_blank" rel="noopener noreferrer" title="새 창으로 열림">지란지교컴즈</a></li>
                        <li><a href="https://global.jiran.com/jp" target="_blank" rel="noopener noreferrer" title="새 창으로 열림">JIRANSOFT JAPAN</a></li>
                    </ul>
                </div>
            </div>
            </div>
        
        </div>
        <div class="fbt">
            <div class="fb1 d-flex justify-content-between text-left align-items-center container py-5 px-0">
                <div class="logos">
                    <img src="<?php echo G5_IMG_URL ?>/logo.svg" alt="<?php echo $config['cf_title']; ?>" class="mb-4">
                    <ul>
                            <li><span>대표자 : </span>조원희</li>
                            <li><span>사업자등록증 : </span>760-81-01944</li>
                            <li><span>통신판매 사업자번호 : </span>제2020-서울강남-03494</li>
                    </ul>
                    <address>
                        <span class="orange">34016</span> 대전광역시 유성구 테크로3로 65 (관평동) 한신S메카 603호<br> 
                        <span class="orange">13453</span> 경기도 성남시 수정구 금토로 80번길 37 (금토동) 인피니티타워 W동 10층 
                    </address>
                    <p class="copy">ⓒ 2023 JIRANDATA. All rights reserved.</p>
                </div>
                <div class="">
                    <div class="call"><span>C/S Center</span><a href="tel:1600-9185">1600-9185</a></div>
                    <ul>
                        <li><i class="ri-time-line"></i><b>평일</b> 09:00 ~ 18:00 <span class="grey">(<b>점심</b> 12:00 ~ 13:00)</span></li>
                        <li><i class="ri-mail-line"></i><a href="mailto:privacy@jiran.com" class="oranges">privacy@jiran.com</a></li>
                    </ul>
                    <ul class="foot-bottom-right-logo d-flex mt-4">
                        <li><img src="https://www.jirandata.co.kr/html/images/layout/footer-logo1.png" class="img-fluid" alt=""></li>
                        <li><img src="https://www.jirandata.co.kr/html/images/layout/footer-logo2.png" class="img-fluid"  alt=""></li>
                        <li><img src="https://www.jirandata.co.kr/html/images/layout/footer-logo3.png" class="img-fluid"  alt=""></li>
                        <li><img src="https://www.jirandata.co.kr/html/images/layout/footer-logo4.png" class="img-fluid" alt=""></li>
                        <li><img src="https://www.jirandata.co.kr/html/images/layout/footer-logo5.png" class="img-fluid" alt=""></li>
                    </ul>
                </div>
            </div>
            <div class="fb2">

            </div>
        </div>
    </div>


    
    
    <script>
    $(function() {
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });
    });
    </script>
</div>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
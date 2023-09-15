<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<h2 class="sound_only">최신글</h2>
<div class="hd-banner">
    <div class="hd-banner-layout">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="hd-banner-item swiper-slide">
                    <span>[중소기업 필독!] 정부지원 사업으로 솔루션 도입비용 <b>최대 4천만원 </b> 지원받으세요</span>
                    <a href="http://ncrportfolio.dothome.co.kr/bbs/content.php?co_id=docs" target="_blank" rel="noreferrer noopener"><span class="txt">더 알아보기<i class="bi bi-chevron-right"></i></span></a>
                </div>
                <div class="swiper-pagination"></div>
                <button class="hd-banner-arrow prev" type="button"><i class="bi bi-arrow-left"></i></button>
                <button class="hd-banner-arrow next" type="button"><i class="bi bi-arrow-right"></i></button>
            </div>
        </div>
    </div>
</div>
<section class="section" id="section1">
  <div class="layout">
        <div class="vis">
          <div class="visleft">
            <div class="vistxt">
              <p>데이터 보호 전문기업, <span class="orange">지란지교데이터</span></p>
              <h2 class="tytxt1">안전하게 활용하고</h2><br>
              <h2 class="tytxt2">편리하게 보호하고</h2>
            </div>
            <ul class="visleftbanner">
              <li>
                <a href="http://ncrportfolio.dothome.co.kr/bbs/board.php?bo_table=jdintro">
                  <p>
                    지란지교데이터가 <br>
                    더-욱 자세히 알고 싶다면?
                  </p>
                  <span><span>회사소개 바로가기</span> <i class="ri-arrow-right-s-line"></i></span>
                </a>
              </li>
              <li>
                <a href="http://ncrportfolio.dothome.co.kr/bbs/board.php?bo_table=qa">
                  <p>
                    지란지교데이터에 대해 <br>
                    무엇이든 물어보세요!
                  </p>
                  <span><span>1:1 문의 바로가기</span> <i class="ri-arrow-right-s-line"></i></span>
                </a>
              </li>
            </ul>
          </div>
          <div class="videos">
              <video autoplay="" loop="" muted="" playsinline="">
                <source src="https://www.jirandata.co.kr/html/video/jiran_main_video2.mp4" type="video/mp4">
              </video>
          </div>
        </div>
  </div>
</section>
<section class="section1 bg-light py-5" id="solution">
  <div class="container pb-3">
    <h3><span class="orange">솔루션.</span>실질적인 엔드포인트 데이터 보호 체계를 구축해요</h3>
  </div>
  <div class="rollingDiv mt-4">
       <?php echo latest('pic_block','solution', 8, 100); ?>
  </div>
</section>
<section class="section2"></section>
<section class="section3  py-5">
  <div class="container pb-5">
      <h3><span class="orange">사업영역.</span>데이터 보호를 넘어 안전한 활용으로 확대하고 있어요</h3>
  </div>
  <div class="container">
    <?php echo latest('theme/two_banner','business', 2, 100); ?>
  </div>
</section>
<section class="section4 bg-light py-5">
  <div class="container pb-5">
    <h3><span class="orange">레퍼런스.</span>JD의 고객사를 만나보세요</h3>
  </div>
  <div class="container">
    <?php echo latest("theme/ref",'ref', 20, 100); ?>
  </div>
</section>
<section class="section5 pt-5">
  <div class="container pb-5"></div>
  <div class="container">
    <?php echo latest("theme/notice",'notice', 5, 100); ?>
  </div>
</section>
<section class="section6"></section>
<section class="section7"></section>


<script>
const swiperSolution = new Swiper('.rollingDiv .swiper', {

  // loop: true,
  slidesPerView: 5,
  spaceBetween: 30,  

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  
});

</script>

<?php
include_once(G5_THEME_PATH.'/tail.php');
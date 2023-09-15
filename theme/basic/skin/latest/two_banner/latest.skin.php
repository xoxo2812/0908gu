<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');


$thumb_width = 210;
$thumb_height = 150;
?>

<div class="twoBannerwrap">
  
    <ul class="d-flex w-100">
    <?php
    for ($i=0; $i<count($list); $i++) {
    $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

    if($thumb['src']) {
        $img = $thumb['ori'];
    } else {
        $img = G5_IMG_URL.'/no_img.png';
        $thumb['alt'] = '이미지가 없습니다.';
    }
    $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" >';
    ?>
        <li class="col-6 two_banner<?php echo $i; ?>" 
       >
            <a href="<?php echo $list[$i]['href'] ?>" class="d-block banimg"  style="background :url(<?php echo $img; ?>) no-repeat; background-size:cover; "> 
              <strong class="d-block pb-3"><?php  echo $list[$i]['subject']; ?></strong>   
              <span class="d-block pb-3 bantxt">
                 <?php  echo $list[$i]['wr_content']; ?>
              </span>
              <span class="view">자세히 보기<i class="bi bi-arrow-right"></i></span>

            </a>       
        </li>
    <?php }  ?>
    <?php if (count($list) == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>
    </ul>
    

</div>

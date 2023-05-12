<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>

	    </div>
		<!-- } container 끝 -->
	
		<div id="ft">
		    <div id="ft_copy">
		        <div id="ft_company">
		            <a href="<?php echo get_pretty_url('content', 'location'); ?>">찾아오시는 길</a>
		            <a href="<?php echo get_pretty_url('content', 'privacy'); ?>">개인정보처리방침</a>
		            <a href="<?php echo get_pretty_url('content', 'provision'); ?>">서비스이용약관</a>
		        </div>
		        Copyright &copy; <b>호남대학교 대학원 컴퓨터공학과 (8720 Lab)</b> All rights reserved.<br>
				<a href="https://www.honam.ac.kr" target="_blank"><img src="<?php echo G5_IMG_URL; ?>/logo_school.png" alt="<?php echo G5_VERSION ?>"></a><br>
            <a href="https://graduate.honam.ac.kr" target="_blank"><img src="<?php echo G5_IMG_URL; ?>/logo_grad_school.png" alt="<?php echo G5_VERSION ?>"></a><br>
            <a href="https://library.honam.ac.kr" target="_blank"><img src="<?php echo G5_IMG_URL; ?>/logo_library.png" alt="<?php echo G5_VERSION ?>"></a><br>
            <a href="https://ctl.honam.ac.kr" target="_blank"><img src="<?php echo G5_IMG_URL; ?>/logo_ctl.png" alt="<?php echo G5_VERSION ?>"></a><br>
		    </div>
		    <button type="button" id="top_btn"><i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span></button>
			
			<script>
            $(function() {
                // 폰트 리사이즈 쿠키있으면 실행
                font_resize("html_wrap", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));

                // '상단으로' 버튼
                $("#top_btn").on("click", function() {
                    $("html, body").animate({scrollTop:0}, '500');
                    return false;
                });
            });
            </script>
            	
			<?php	
		    if ($config['cf_analytics']) {
		        echo $config['cf_analytics'];
		    }
		    ?>
		</div>
	</div>
	<!-- } con_right 끝 -->
</div>
<!-- } wrapper 끝 -->
<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>
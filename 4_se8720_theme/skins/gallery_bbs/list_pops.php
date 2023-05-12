<?php
include_once('./_common.php');
$list_sql = " select * from ".$g5['write_prefix'].$_GET[popbo_table]." where wr_id =".$_GET[popid];

$list_nw=sql_fetch($list_sql);

	$whtl_array = explode(",", $list_nw['wr_1']);
?>
    <div  style="top:<?php echo $whtl_array[2]?>px;left:<?php echo $whtl_array[3]?>px">
        <div  style="width:<?php echo $whtl_array[0] ?>px;height:<?php echo $whtl_array[1] ?>px">
			<?php echo get_view_thumbnail($list_nw['wr_content']); ?>
        </div>
    
    </div>




<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC (contact@vinades.vn)
 * @Copyright (C) 2014 VINADES.,JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Tue, 12 Aug 2014 17:02:16 GMT
 */

if ( ! defined( 'NV_MAINFILE' ) ) die( 'Stop!!!' );

function nv4_block_ctcat3( $block_config )
{
	
	$xtpl = new XTemplate( 'global.ctcat3.tpl', NV_ROOTDIR . '/themes/ct/blocks/' );
	
	$xtpl->assign('CAPTIONCT','Tính giai thừa');


	for ($i=0; $i < 10 ; $i++) {
		
		//Tính toán biến
		$arr = array();
		$arr['key']= $i;
		$arr['value']= $i * $i;
		
		//truyền kq từ php sang template
		$xtpl->assign('KQ',$arr);
		$xtpl->parse('main.lap');
		
	}
	

	$xtpl->parse( 'main' );
	return $xtpl->text( 'main' );
}

if( defined( 'NV_SYSTEM' ) )
{
	$content = nv4_block_ctcat3( $block_config );
}

?>
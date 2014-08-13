<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC (contact@vinades.vn)
 * @Copyright (C) 2014 VINADES.,JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Tue, 12 Aug 2014 17:02:16 GMT
 */

if ( ! defined( 'NV_MAINFILE' ) ) die( 'Stop!!!' );

function nv4_block_cthead( $block_config )
{
	global $global_config, $db, $site_mods, $module_name;

	$mod_name = 'news'; // or $module_name;
	$list = array();
	if( isset( $site_mods[$mod_name] ) )
	{
		$mod_file = $site_mods[$mod_name]['module_file'];
		$mod_data = $site_mods[$mod_name]['module_data'];
	}
	$xtpl = new XTemplate( 'global.cthead.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/blocks' );
	$xtpl->assign( 'NV_BASE_SITEURL', NV_BASE_SITEURL );
	$xtpl->assign( 'TEMPLATE', $global_config['module_theme'] );
	$xtpl->assign( 'WELCOMECT', 'Xin chào đến với website của chúng tôi' );
	$xtpl->assign( 'SUBWELCOME', 'Để thường xuyên cập nhật tin tức qua email, bạn có thể đăng ký tại đây' );
	
	
/*
	foreach( $list as $row )
	{
		$xtpl->assign( 'ROW', $row );
		$xtpl->parse( 'main.loop' );
	}
*/
	$xtpl->parse( 'main' );
	return $xtpl->text( 'main' );
}

if( defined( 'NV_SYSTEM' ) )
{
	$content = nv4_block_cthead( $block_config );
}

?>
<?php
/* Template Name: news/single - пост/новость */
the_post();
$Azbn->post['id'] = get_the_ID();
$Azbn->post['meta'] = $Azbn->getMeta($Azbn->post['id']);
//
/*$cats = wp_get_post_categories($Azbn->post['id']);
$cats_arr = array();
foreach($cats as $cat){
	 $cats_arr[] = $cat;
}
if(in_array(144, $cats_arr)){
	$b_tpl = 'blog';
}elseif(in_array(134, $cats_arr)){
	$b_tpl = 'portfolio';
}*/
switch(get_field('post_add_type', $Azbn->post['id'])){
	case 'portfolio':
		$b_tpl = 'portfolio';
		break;
	case 'landing':
		$b_tpl = 'landing';
		break;
	case 'landing-star':
		$b_tpl = 'landing-star';
		break;
	case 'landing-yarus':
		$b_tpl = 'landing-yarus';
		break;
	case 'landing-roza':
		$b_tpl = 'landing-roza';
		break;
	case 'landing-rk-highlight':
		$b_tpl = 'landing-rk-highlight';
		break;
	case 'landing-amd':
		$b_tpl = 'landing-amd';
		break;
	case 'landing-msk76':
		$b_tpl = 'landing-msk76';
		break;
	case 'landing-zenit':
		$b_tpl = 'landing-zenit';
		break;
	case 'landing-enerfit':
		$b_tpl = 'landing-enerfit';
		break;
	case 'landing-inleco':
		$b_tpl = 'landing-inleco';
		break;
	case 'landing-manikur':
		$b_tpl = 'landing-manikur';
		break;
	case 'landing-orelstroy':
		$b_tpl = 'landing-orelstroy';
		break;
	case 'landing-dixion':
		$b_tpl = 'landing-dixion';
		break;
	case 'landing-polki':
		$b_tpl = 'landing-polki';
		break;
	case 'landing-albina-bilbord':
		$b_tpl = 'landing-albina-bilbord';
		break;
	case 'landing-albina':
		$b_tpl = 'landing-albina';
		break;
	case 'landing-aegospotami-fs':
		$b_tpl = 'landing-aegospotami-fs';
		break;
	case 'landing-artstyle':
		$b_tpl = 'landing-artstyle';
		break;
	case 'landing-orionprint':
		$b_tpl = 'landing-orionprint';
		break;
		//
	case 'landing-baltkeramastone':
		$b_tpl = 'landing-baltkeramastone';
		break;
	case 'landing-zerno':
		$b_tpl = 'landing-zerno';
		break;
	case 'landing-crema':
		$b_tpl = 'landing-crema';
		break;
	case 'landing-pizza':
		$b_tpl = 'landing-pizza';
		break;
	case 'landing-tort':
		$b_tpl = 'landing-tort';
		break;
	case 'landing-bars':
		$b_tpl = 'landing-bars';
		break;
	case 'landing-orion-reklama':
		$b_tpl = 'landing-orion-reklama';
		break;
	case 'landing-igeba':
		$b_tpl = 'landing-igeba';
		break;
	case 'landing-interrao':
		$b_tpl = 'landing-interrao';
		break;
	case 'landing-aego':
		$b_tpl = 'landing-aego';
		break;
	//
	case 'case-photo-jk':
		$b_tpl = 'case-photo-jk';
		break;
	case 'case-orionprint':
		$b_tpl = 'case-orionprint';
		break;
	case 'case-modern':
		$b_tpl = 'case-modern';
		break;
	case 'case-yarus':
		$b_tpl = 'case-yarus';
		break;
	case 'case-manikur':
		$b_tpl = 'case-manikur';
		break;
	case 'case-dixion':
		$b_tpl = 'case-dixion';
		break;
	case 'blog':
		$b_tpl = 'blog';
		//$GLOBALS['header_class'] = 'navbar-index';
		break;

	default:
		$b_tpl = 'blog';
		break;
}
//
$Azbn->tpl('_/header', array());
if(isset($Azbn->post['meta']['azbn_page_tpl']) && $Azbn->post['meta']['azbn_page_tpl'] != '') {
	$Azbn->tpl($Azbn->post['meta']['azbn_page_tpl'], array());
} else {
	$Azbn->tpl($b_tpl.'/item', array());
}
$Azbn->tpl('_/footer', array());

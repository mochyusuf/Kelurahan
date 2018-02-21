<?php
/*************************************************************************
php easy :: pagination scripts set - Version One
==========================================================================
Author:      php easy code, www.phpeasycode.com
Web Site:    http://www.phpeasycode.com
Contact:     webmaster@phpeasycode.com
*************************************************************************/
	function paginate_one($reload, $page, $tpages) {
	
	$firstlabel = "&laquo;&nbsp;";
	$prevlabel  = "&lsaquo;&nbsp;";
	$nextlabel  = "&nbsp;&rsaquo;";
	$lastlabel  = "&nbsp;&raquo;";
	
	$out = "<div>";
	
	// first
	if($page>1) {
		$out.= "<a href=\"" . $reload . "\">" . $firstlabel . "</a>";
	}
	else {
		$out.= "<span>" . $firstlabel . "</span>";
	}
	
	// previous
	if($page==1) {
		$out.= "<span>" . $prevlabel . "</span>";
	}
	elseif($page==2) {
		$out.= "<a href=\"" . $reload . "\">" . $prevlabel . "</a>";
	}
	else {
		$out.= "<a href=\"" . $reload . "&amp;page=" . ($page-1) . "\">" . $prevlabel . "</a>";
	}
	
	// current
	$out.= "<span class=\"current\">Halaman " . $page . " Dari " . $tpages ."</span>";
	
	// next
	if($page<$tpages) {
		$out.= "<a href=\"" . $reload . "&amp;page=" .($page+1) . "\">" . $nextlabel . "</a>";
	}
	else {
		$out.= "<span>" . $nextlabel . "</span>";
	}
	
	// last
	if($page<$tpages) {
		$out.= "<a href=\"" . $reload . "&amp;page=" . $tpages . "\">" . $lastlabel . "</a>";
	}
	else {
		$out.= "<span>" . $lastlabel . "</span>";
	}
	
	$out.= "</div>";
	
	return $out;
}
?>
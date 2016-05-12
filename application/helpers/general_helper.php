<?php 

if(! function_exists('encode')) {
	
	function encode($str = '') {
		$str = base64_encode($str);
		$result = base64_encode($str);
		
		return $result;
	}
	
}

if(! function_exists('decode')) {
	
	function decode($str = '') {
		$str = base64_decode($str);
		$result = base64_decode($str);
		
		return $result;
	}
	
}

if( !function_exists('gen_paging')) {
	function gen_paging($page_data = array()) {
		$page_result = '<div class="row">';
		
		$func_name = 'readPage';
		
		//jumlah halaman
		$count = 1;
		
		if(isset($page_data['load_func_name'])) {
			if($page_data['load_func_name'])
				$func_name = $page_data['load_func_name'];
		}
		
		if($page_data['count_row'] > 1)
			$count = ceil($page_data['count_row']/$page_data['limit']);
		
		$page_result .= '<div class="col-md-11">
							<nav>
								<ul class="pagination pagination-sm">
									<li ' . ( $page_data['current'] == 1 ? 'class="active"' : '' ) . '><a href="javascript:void(0)" ' . ($page_data['current'] == 1 ? '' : 'onclick = "'.$func_name.'(1)"') .' >&laquo; First</a></li>';
		
		$paging_show 	= 3;
		$page_start		= $page_data['current'] - $paging_show;
		$page_start		= $page_start < 1 ? 1 : $page_start;
		
		$page_end		= $page_data['current'] + $paging_show;
		$page_end		= $count > $page_end ? $page_end : $count;
		$page_end		= $count > 1 ? $page_end : 1;
		
		if($page_start > 1)
			$page_result .= '<li class="active"><a href="javascript:void(0)">...</a></li>';
		
		for($i=$page_start ; $i<=$page_end; $i++) {
			$page_result .= '<li '.($page_data['current'] == $i ? 'class="active"' : '').'><a href="javascript:void(0)" '.($page_data['current'] == $i ? "" : 'onclick="'.$func_name.'('.$i.')"').'>'.$i.'</a></li>';
			
		}
		
		if($count > $page_end)
			$page_result .= '<li class="active"><a href="javascript:void(0)">...</a></li>';
		
		$page_result .= '<li ' . ( $page_data['current'] == $page_end ? 'class="active"' : '' ) . '><a href="javascript:void(0)" onclick = "'.$func_name.'('.$count.')">Last &raquo;</a></li>';
		$page_result .= '</nav></div></div>';
		
		return $page_result;
	}
}

if( !function_exists('gen_paging_andi')) {
	function gen_paging_andi($page_data = array()) {
		$page_result = '';
		
		$func_name = 'pageLoad';
		
		//jumlah halaman
		$count = 1;
		
		
		$x = '';
		if($page_data['kat']!='')
		{
			$x = $page_data['kat'];
		}else{
			$x = 0;
		}
		
		if(isset($page_data['load_func_name'])) {
			if($page_data['load_func_name'])
				$func_name = $page_data['load_func_name'];
		}
		
		if($page_data['count_row'] > 1)
			$count = ceil($page_data['count_row']/$page_data['limit']);
		
		$page_result .= '<div class="col-md-4 pull-center"></div><div class="col-md-4 pull-center">
							<nav style="text-align:center">
								<ul class="pagination">
									<li ' . ( $page_data['current'] == 1 ? 'class="active"' : '' ) . '><a href="javascript:void(0)" ' . ($page_data['current'] == 1 ? '' : 'onclick = "'.$func_name.'(1,'.$x.')"') .' >&lt; First</a></li>';
		
		$paging_show 	= 3;
		$page_start		= $page_data['current'] - $paging_show;
		$page_start		= $page_start < 1 ? 1 : $page_start;
		
		$page_end		= $page_data['current'] + $paging_show;
		$page_end		= $count > $page_end ? $page_end : $count;
		$page_end		= $count > 1 ? $page_end : 1;
		
		
		
		
		if($page_start > 1)
			$page_result .= '<li class="active"><a href="javascript:void(0)">...</a></li>';
		
		for($i=$page_start ; $i<=$page_end; $i++) {
			$page_result .= '<li '.($page_data['current'] == $i ? 'class="active"' : '').'><a href="javascript:void(0)" '.($page_data['current'] == $i ? "" : 'onclick="'.$func_name.'('.$i.','.$x.')"').'>'.$i.'</a></li>';
			
		}
		
		if($count > $page_end)
			$page_result .= '<li class="active"><a href="javascript:void(0)">...</a></li>';
		
		$page_result .= '<li ' . ( $page_data['current'] == $page_end ? 'class="active"' : '' ) . '><a href="javascript:void(0)" onclick = "'.$func_name.'('.$count.','.$x.')">Last &gt;</a></li>';
		$page_result .= '</nav></div></div>';
		$page_result .= '<div class="col-md-4 pull-center"></div>';
		return $page_result;
	}
}

if( !function_exists('page_front')) {
	function page_front($page_data = array()) {
		$page_result = '';
		
		$func_name = 'readPage';
		
		//jumlah halaman
		$count = 1;
		
		if(isset($page_data['load_func_name'])) {
			if($page_data['load_func_name'])
				$func_name = $page_data['load_func_name'];
		}
		
		if($page_data['count_row'] > 1)
			$count = ceil($page_data['count_row']/$page_data['limit']);
		
		$page_result .= '<div class="pagination">
							<ul>
								<li ' . ( $page_data['current'] == 1 ? 'class="active"' : '' ) . '><a href="javascript:void(0)" ' . ($page_data['current'] == 1 ? '' : 'onclick = "'.$func_name.'(1)"') .' >&laquo; First</a></li>';
		
		$paging_show 	= 3;
		$page_start		= $page_data['current'] - $paging_show;
		$page_start		= $page_start < 1 ? 1 : $page_start;
		
		$page_end		= $page_data['current'] + $paging_show;
		$page_end		= $count > $page_end ? $page_end : $count;
		$page_end		= $count > 1 ? $page_end : 1;
		
		if($page_start > 1)
			$page_result .= '<li class="active"><a href="javascript:void(0)">...</a></li>';
		
		for($i=$page_start ; $i<=$page_end; $i++) {
			$page_result .= '<li '.($page_data['current'] == $i ? 'class="active"' : '').'><a href="javascript:void(0)" '.($page_data['current'] == $i ? "" : 'onclick="'.$func_name.'('.$i.')"').'>'.$i.'</a></li>';
			
		}
		
		if($count > $page_end)
			$page_result .= '<li class="active"><a href="javascript:void(0)">...</a></li>';
		
		$page_result .= '<li ' . ( $page_data['current'] == $page_end ? 'class="active"' : '' ) . '><a href="javascript:void(0)" onclick = "'.$func_name.'('.$count.')">Last &raquo;</a></li>';
		$page_result .= '</ul></div>';
		
		return $page_result;
	}
}

if(! function_exists('kode_brg')) {
	
	function kode_brg($kode = '') {
		
		$kd 		= explode('-',$kode);
		$kd_split	= $kd[0];
		$kd_split2	= (int) $kd[1];
		$cont 		= $kd_split2 + 1;
		
		if($kd_split2 <10 ) $hasil = $kd_split."-00".$cont;
		else if($kd_split2 <100 ) $hasil = $kd_split."-0".$cont;
		else if($kd_split2 <1000 ) $hasil = $kd_split."-".$cont;
		
		return $hasil;
	}
}

if(! function_exists('kode_pmb')) {
	
	function kode_pmb($kode = '') {
		
		if($kode){
			$kd 		= explode('-',$kode);
			$kd_split	= $kd[0];
			$kd_split2	= (int) $kd[1];
			$cont 		= $kd_split2 + 1;
			
			if($kd_split2 <10 ) $hasil = $kd_split."-00".$cont;
			else if($kd_split2 <100 ) $hasil = $kd_split."-0".$cont;
			else if($kd_split2 <1000 ) $hasil = $kd_split."-".$cont;
		}else{
			$hasil = 'PMB-001';
		}
		
		return $hasil;
	}
}
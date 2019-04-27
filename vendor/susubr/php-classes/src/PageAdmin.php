<?php 

namespace Hcode;

use Rain\Tpl;

class PageAdmin extends Page {
	public function __construct($optsss = array(), $tpl_diretorio = "/views/admin/")
	{
		parent::__construct($optsss, $tpl_diretorio);
	}
}

?>
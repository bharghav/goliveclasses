<?php

class bannersClass
{ 

	function getbannersData($id)
	{	
		global $callConfig;
		$query=$callConfig->selectQuery(TPREFIX.TBL_BANNERS,'*','id='.$id,'','','');
		return $callConfig->getRow($query);
	}

 	
}

?>
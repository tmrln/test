<?php
	// For help on using hooks, please refer to http://bigprof.com/appgini/help/working-with-generated-web-database-application/hooks

	function FORECASTVALUES_init(&$options, $memberInfo, &$args){

		return TRUE;
	}

	function FORECASTVALUES_header($contentType, $memberInfo, &$args){
		$header='';

		switch($contentType){
			case 'tableview':
				$header='';
				break;

			case 'detailview':
				$header='';
				break;

			case 'tableview+detailview':
				$header='';
				break;

			case 'print-tableview':
				$header='';
				break;

			case 'print-detailview':
				$header='';
				break;

			case 'filters':
				$header='';
				break;
		}

		return $header;
	}

	function FORECASTVALUES_footer($contentType, $memberInfo, &$args){
		$footer='';

		switch($contentType){
			case 'tableview':
				$footer='';
				break;

			case 'detailview':
				$footer='';
				break;

			case 'tableview+detailview':
				$footer='';
				break;

			case 'print-tableview':
				$footer='';
				break;

			case 'print-detailview':
				$footer='';
				break;

			case 'filters':
				$footer='';
				break;
		}

		return $footer;
	}

	function FORECASTVALUES_before_insert(&$data, $memberInfo, &$args){

		return TRUE;
	}

	function FORECASTVALUES_after_insert($data, $memberInfo, &$args){

		return TRUE;
	}

	function FORECASTVALUES_before_update(&$data, $memberInfo, &$args){

		return TRUE;
	}

	function FORECASTVALUES_after_update($data, $memberInfo, &$args){

		return TRUE;
	}

	function FORECASTVALUES_before_delete($selectedID, &$skipChecks, $memberInfo, &$args){

		return TRUE;
	}

	function FORECASTVALUES_after_delete($selectedID, $memberInfo, &$args){

	}

	function FORECASTVALUES_dv($selectedID, $memberInfo, &$html, &$args){

	}

	function FORECASTVALUES_csv($query, $memberInfo, &$args){

		return $query;
	}
	function FORECASTVALUES_batch_actions(&$args){

		return array();
	}

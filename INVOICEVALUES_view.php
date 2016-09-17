<?php
// This script and data application were generated by AppGini 5.51
// Download AppGini for free from http://bigprof.com/appgini/download/

	$currDir=dirname(__FILE__);
	include("$currDir/defaultLang.php");
	include("$currDir/language.php");
	include("$currDir/lib.php");
	@include("$currDir/hooks/INVOICEVALUES.php");
	include("$currDir/INVOICEVALUES_dml.php");

	// mm: can the current member access this page?
	$perm=getTablePermissions('INVOICEVALUES');
	if(!$perm[0]){
		echo error_message($Translation['tableAccessDenied'], false);
		echo '<script>setTimeout("window.location=\'index.php?signOut=1\'", 2000);</script>';
		exit;
	}

	$x = new DataList;
	$x->TableName = "INVOICEVALUES";

	// Fields that can be displayed in the table view
	$x->QueryFieldsTV=array(   
		"`INVOICEVALUES`.`CLTNAM`" => "CLTNAM",
		"`INVOICEVALUES`.`INV_GPRKEY`" => "INV_GPRKEY",
		"`INVOICEVALUES`.`INV_GPRNAM`" => "INV_GPRNAM",
		"`INVOICEVALUES`.`INV_ARTKEY`" => "INV_ARTKEY",
		"`INVOICEVALUES`.`INV_ARTNAM`" => "INV_ARTNAM",
		"`INVOICEVALUES`.`INVMEN`" => "INVMEN",
		"`INVOICEVALUES`.`INVMON_F`" => "INVMON_F",
		"`INVOICEVALUES`.`INVJAH_F`" => "INVJAH_F"
	);
	// mapping incoming sort by requests to actual query fields
	$x->SortFields = array(   
		1 => 1,
		2 => 2,
		3 => 3,
		4 => 4,
		5 => 5,
		6 => 6,
		7 => 7,
		8 => 8
	);

	// Fields that can be displayed in the csv file
	$x->QueryFieldsCSV=array(   
		"`INVOICEVALUES`.`CLTNAM`" => "CLTNAM",
		"`INVOICEVALUES`.`INV_GPRKEY`" => "INV_GPRKEY",
		"`INVOICEVALUES`.`INV_GPRNAM`" => "INV_GPRNAM",
		"`INVOICEVALUES`.`INV_ARTKEY`" => "INV_ARTKEY",
		"`INVOICEVALUES`.`INV_ARTNAM`" => "INV_ARTNAM",
		"`INVOICEVALUES`.`INVMEN`" => "INVMEN",
		"`INVOICEVALUES`.`INVMON_F`" => "INVMON_F",
		"`INVOICEVALUES`.`INVJAH_F`" => "INVJAH_F"
	);
	// Fields that can be filtered
	$x->QueryFieldsFilters=array(   
		"`INVOICEVALUES`.`CLTNAM`" => "CLTNAM",
		"`INVOICEVALUES`.`INV_GPRKEY`" => "INV GPRKEY",
		"`INVOICEVALUES`.`INV_GPRNAM`" => "INV GPRNAM",
		"`INVOICEVALUES`.`INV_ARTKEY`" => "INV ARTKEY",
		"`INVOICEVALUES`.`INV_ARTNAM`" => "INV ARTNAM",
		"`INVOICEVALUES`.`INVMEN`" => "INVMEN",
		"`INVOICEVALUES`.`INVMON_F`" => "INVMON F",
		"`INVOICEVALUES`.`INVJAH_F`" => "INVJAH F"
	);

	// Fields that can be quick searched
	$x->QueryFieldsQS=array(   
		"`INVOICEVALUES`.`CLTNAM`" => "CLTNAM",
		"`INVOICEVALUES`.`INV_GPRKEY`" => "INV_GPRKEY",
		"`INVOICEVALUES`.`INV_GPRNAM`" => "INV_GPRNAM",
		"`INVOICEVALUES`.`INV_ARTKEY`" => "INV_ARTKEY",
		"`INVOICEVALUES`.`INV_ARTNAM`" => "INV_ARTNAM",
		"`INVOICEVALUES`.`INVMEN`" => "INVMEN",
		"`INVOICEVALUES`.`INVMON_F`" => "INVMON_F",
		"`INVOICEVALUES`.`INVJAH_F`" => "INVJAH_F"
	);

	// Lookup fields that can be used as filterers
	$x->filterers = array();

	$x->QueryFrom="`INVOICEVALUES` ";
	$x->QueryWhere='';
	$x->QueryOrder='';

	$x->AllowSelection = 1;
	$x->HideTableView = ($perm[2]==0 ? 1 : 0);
	$x->AllowDelete = $perm[4];
	$x->AllowMassDelete = false;
	$x->AllowInsert = $perm[1];
	$x->AllowUpdate = $perm[3];
	$x->SeparateDV = 1;
	$x->AllowDeleteOfParents = 0;
	$x->AllowFilters = 1;
	$x->AllowSavingFilters = 0;
	$x->AllowSorting = 1;
	$x->AllowNavigation = 1;
	$x->AllowPrinting = 1;
	$x->AllowCSV = 1;
	$x->RecordsPerPage = 10;
	$x->QuickSearch = 1;
	$x->QuickSearchText = $Translation["quick search"];
	$x->ScriptFileName = "INVOICEVALUES_view.php";
	$x->RedirectAfterInsert = "INVOICEVALUES_view.php?SelectedID=#ID#";
	$x->TableTitle = "INVOICEVALUES";
	$x->TableIcon = "table.gif";
	$x->PrimaryKey = "`INVOICEVALUES`.`INV_GPRKEY`";

	$x->ColWidth   = array(  150, 150, 150, 150, 150, 150, 150, 150);
	$x->ColCaption = array("CLTNAM", "INV GPRKEY", "INV GPRNAM", "INV ARTKEY", "INV ARTNAM", "INVMEN", "INVMON F", "INVJAH F");
	$x->ColFieldName = array('CLTNAM', 'INV_GPRKEY', 'INV_GPRNAM', 'INV_ARTKEY', 'INV_ARTNAM', 'INVMEN', 'INVMON_F', 'INVJAH_F');
	$x->ColNumber  = array(1, 2, 3, 4, 5, 6, 7, 8);

	$x->Template = 'templates/INVOICEVALUES_templateTV.html';
	$x->SelectedTemplate = 'templates/INVOICEVALUES_templateTVS.html';
	$x->ShowTableHeader = 1;
	$x->ShowRecordSlots = 0;
	$x->HighlightColor = '#FFF0C2';

	// mm: build the query based on current member's permissions
	$DisplayRecords = $_REQUEST['DisplayRecords'];
	if(!in_array($DisplayRecords, array('user', 'group'))){ $DisplayRecords = 'all'; }
	if($perm[2]==1 || ($perm[2]>1 && $DisplayRecords=='user' && !$_REQUEST['NoFilter_x'])){ // view owner only
		$x->QueryFrom.=', membership_userrecords';
		$x->QueryWhere="where `INVOICEVALUES`.`INV_GPRKEY`=membership_userrecords.pkValue and membership_userrecords.tableName='INVOICEVALUES' and lcase(membership_userrecords.memberID)='".getLoggedMemberID()."'";
	}elseif($perm[2]==2 || ($perm[2]>2 && $DisplayRecords=='group' && !$_REQUEST['NoFilter_x'])){ // view group only
		$x->QueryFrom.=', membership_userrecords';
		$x->QueryWhere="where `INVOICEVALUES`.`INV_GPRKEY`=membership_userrecords.pkValue and membership_userrecords.tableName='INVOICEVALUES' and membership_userrecords.groupID='".getLoggedGroupID()."'";
	}elseif($perm[2]==3){ // view all
		// no further action
	}elseif($perm[2]==0){ // view none
		$x->QueryFields = array("Not enough permissions" => "NEP");
		$x->QueryFrom = '`INVOICEVALUES`';
		$x->QueryWhere = '';
		$x->DefaultSortField = '';
	}
	// hook: INVOICEVALUES_init
	$render=TRUE;
	if(function_exists('INVOICEVALUES_init')){
		$args=array();
		$render=INVOICEVALUES_init($x, getMemberInfo(), $args);
	}

	if($render) $x->Render();

	// hook: INVOICEVALUES_header
	$headerCode='';
	if(function_exists('INVOICEVALUES_header')){
		$args=array();
		$headerCode=INVOICEVALUES_header($x->ContentType, getMemberInfo(), $args);
	}  
	if(!$headerCode){
		include_once("$currDir/header.php"); 
	}else{
		ob_start(); include_once("$currDir/header.php"); $dHeader=ob_get_contents(); ob_end_clean();
		echo str_replace('<%%HEADER%%>', $dHeader, $headerCode);
	}

	echo $x->HTML;
	// hook: INVOICEVALUES_footer
	$footerCode='';
	if(function_exists('INVOICEVALUES_footer')){
		$args=array();
		$footerCode=INVOICEVALUES_footer($x->ContentType, getMemberInfo(), $args);
	}  
	if(!$footerCode){
		include_once("$currDir/footer.php"); 
	}else{
		ob_start(); include_once("$currDir/footer.php"); $dFooter=ob_get_contents(); ob_end_clean();
		echo str_replace('<%%FOOTER%%>', $dFooter, $footerCode);
	}
?>
<?php
	// check this file's MD5 to make sure it wasn't called before
	$prevMD5=@implode('', @file(dirname(__FILE__).'/setup.md5'));
	$thisMD5=md5(@implode('', @file("./updateDB.php")));
	if($thisMD5==$prevMD5){
		$setupAlreadyRun=true;
	}else{
		// set up tables
		if(!isset($silent)){
			$silent=true;
		}

		// set up tables
		setupTable('COMPANIES', "create table if not exists `COMPANIES` (   `CLTNAM` VARCHAR(40) , `GPRKEY` VARCHAR(40) not null , primary key (`GPRKEY`), `GPRNAM` VARCHAR(40) , `GPRSAM` VARCHAR(40) , `GPRSTT` VARCHAR(40) , `KSTNRA` VARCHAR(40) , `KSTNAM` VARCHAR(40) ) CHARSET utf8", $silent, array( "ALTER TABLE COMPANIES ADD `field1` VARCHAR(40)","ALTER TABLE COMPANIES ADD `field2` VARCHAR(40)","ALTER TABLE `COMPANIES` CHANGE `field1` `CLTNAM` VARCHAR(40) ","ALTER TABLE COMPANIES ADD `field3` VARCHAR(40)","ALTER TABLE `COMPANIES` CHANGE `field2` `GPRKEY` VARCHAR(40) ","ALTER TABLE `COMPANIES` CHANGE `field3` `GPRNAM` VARCHAR(40) ","ALTER TABLE COMPANIES ADD `field4` VARCHAR(40)","ALTER TABLE `COMPANIES` CHANGE `field4` `GPRSTT` VARCHAR(40) ","ALTER TABLE COMPANIES ADD `field5` VARCHAR(40)","ALTER TABLE `COMPANIES` CHANGE `field5` `PATNAM` VARCHAR(40) ","ALTER TABLE COMPANIES ADD `field6` VARCHAR(40)","ALTER TABLE `COMPANIES` CHANGE `field6` `PATLIEF` VARCHAR(40) ","ALTER TABLE COMPANIES ADD `field7` VARCHAR(40)","ALTER TABLE `COMPANIES` CHANGE `field7` `PATKUND` VARCHAR(40) ","ALTER TABLE COMPANIES ADD `field8` VARCHAR(40)","ALTER TABLE `COMPANIES` CHANGE `field8` `KSTNRA` VARCHAR(40) ","ALTER TABLE `COMPANIES` DROP `PATNAM`","ALTER TABLE `COMPANIES` DROP `PATLIEF`","ALTER TABLE `COMPANIES` DROP `PATKUND`","ALTER TABLE COMPANIES ADD `field6` VARCHAR(40)","ALTER TABLE `COMPANIES` CHANGE `field6` `KSTNAM` VARCHAR(40) ","ALTER TABLE COMPANIES ADD `field7` VARCHAR(40)","ALTER TABLE `COMPANIES` CHANGE `field7` `GPRSAM` VARCHAR(40) ","ALTER TABLE `COMPANIES` CHANGE `GPRKEY` `GPRKEY` VARCHAR(40) not null ","ALTER TABLE `COMPANIES` CHANGE `CLTNAM` `CLTNAM` VARCHAR(40) not null ","ALTER TABLE `COMPANIES` ADD INDEX (`CLTNAM`)","ALTER TABLE `COMPANIES` DROP PRIMARY KEY","ALTER TABLE `COMPANIES` ADD PRIMARY KEY (`GPRKEY`)"));
		setupTable('ARTICLES', "create table if not exists `ARTICLES` (   `ARTKEY` VARCHAR(40) not null , primary key (`ARTKEY`), `ARTNAM` VARCHAR(40) , `ATYNAM` VARCHAR(40) , `AGRNAM` VARCHAR(40) ) CHARSET utf8", $silent, array( "ALTER TABLE ARTICLES ADD `field1` VARCHAR(40)","ALTER TABLE `ARTICLES` CHANGE `field1` `ARTKEY` VARCHAR(40) ","ALTER TABLE ARTICLES ADD `field2` VARCHAR(40)","ALTER TABLE ARTICLES ADD `field3` VARCHAR(40)","ALTER TABLE `ARTICLES` CHANGE `field2` `ARTNAM` VARCHAR(40) ","ALTER TABLE ARTICLES ADD `field4` VARCHAR(40)","ALTER TABLE `ARTICLES` CHANGE `field3` `ATYNAM` VARCHAR(40) ","ALTER TABLE `ARTICLES` CHANGE `field4` `AGRNAM` VARCHAR(40) ","ALTER TABLE `ARTICLES` CHANGE `ARTKEY` `ARTKEY` VARCHAR(40) not null ","ALTER TABLE `ARTICLES` ADD PRIMARY KEY (`ARTKEY`)"));
		setupTable('INVOICEVALUES', "create table if not exists `INVOICEVALUES` (   `CLTNAM` VARCHAR(40) , `INV_GPRKEY` VARCHAR(40) not null , primary key (`INV_GPRKEY`), `INV_GPRNAM` VARCHAR(40) , `INV_ARTKEY` VARCHAR(40) , `INV_ARTNAM` VARCHAR(40) , `INVMEN` VARCHAR(40) , `INVMON_F` VARCHAR(40) , `INVJAH_F` VARCHAR(40) ) CHARSET utf8", $silent, array( "ALTER TABLE INVOICEVALUES ADD `field1` VARCHAR(40)","ALTER TABLE `INVOICEVALUES` CHANGE `field1` `CLTNAM` VARCHAR(40) ","ALTER TABLE INVOICEVALUES ADD `field2` VARCHAR(40)","ALTER TABLE `INVOICEVALUES` CHANGE `field2` `INV_ARTKEY` VARCHAR(40) ","ALTER TABLE INVOICEVALUES ADD `field3` VARCHAR(40)","ALTER TABLE `INVOICEVALUES` CHANGE `field3` `INV_GPRKEY` VARCHAR(40) ","ALTER TABLE INVOICEVALUES ADD `field4` VARCHAR(40)","ALTER TABLE `INVOICEVALUES` CHANGE `field4` `INV_ARTNAM` VARCHAR(40) ","ALTER TABLE INVOICEVALUES ADD `field5` VARCHAR(40)","ALTER TABLE `INVOICEVALUES` CHANGE `field5` `INV_GPRNAM` VARCHAR(40) ","ALTER TABLE INVOICEVALUES ADD `field6` VARCHAR(40)","ALTER TABLE `INVOICEVALUES` CHANGE `field6` `INVMEN` VARCHAR(40) ","ALTER TABLE INVOICEVALUES ADD `field7` VARCHAR(40)","ALTER TABLE `INVOICEVALUES` CHANGE `field7` `INVMON_F` VARCHAR(40) ","ALTER TABLE INVOICEVALUES ADD `field8` VARCHAR(40)","ALTER TABLE `INVOICEVALUES` CHANGE `field8` `INVJAH_F` VARCHAR(40) ","ALTER TABLE `INVOICEVALUES` CHANGE `INV_GPRKEY` `INV_GPRKEY` VARCHAR(40) not null ","ALTER TABLE `INVOICEVALUES` CHANGE `INV_ARTKEY` `INV_ARTKEY` VARCHAR(40) not null ","ALTER TABLE `INVOICEVALUES` ADD INDEX (`INV_ARTKEY`)","ALTER TABLE `INVOICEVALUES` DROP PRIMARY KEY","ALTER TABLE `INVOICEVALUES` ADD PRIMARY KEY (`INV_GPRKEY`)"));
		setupTable('FORECASTVALUES', "create table if not exists `FORECASTVALUES` (   `CLTNAM` VARCHAR(40) , `FOR_ARTKEY` VARCHAR(40) , `FOR_GPRKEY` VARCHAR(40) not null , primary key (`FOR_GPRKEY`), `FOR_ADRKEY` VARCHAR(40) , `FORMEN` VARCHAR(40) , `FORMON_F` VARCHAR(40) , `FORJAH_F` VARCHAR(40) , `KSTNRA` VARCHAR(40) ) CHARSET utf8", $silent, array( "ALTER TABLE FORECASTVALUES ADD `field1` VARCHAR(40)","ALTER TABLE `FORECASTVALUES` DROP `field1`","ALTER TABLE FORECASTVALUES ADD `field1` VARCHAR(40)","ALTER TABLE `FORECASTVALUES` CHANGE `field1` `CLTNAM` VARCHAR(40) ","ALTER TABLE FORECASTVALUES ADD `field2` VARCHAR(40)","ALTER TABLE `FORECASTVALUES` CHANGE `field2` `FOR_ARTKEY` VARCHAR(40) ","ALTER TABLE FORECASTVALUES ADD `field3` VARCHAR(40)","ALTER TABLE `FORECASTVALUES` CHANGE `field3` `FOR_GPRKEY` VARCHAR(40) ","ALTER TABLE FORECASTVALUES ADD `field4` VARCHAR(40)","ALTER TABLE `FORECASTVALUES` CHANGE `field4` `FOR_ADRKEY` VARCHAR(40) ","ALTER TABLE FORECASTVALUES ADD `field5` VARCHAR(40)","ALTER TABLE `FORECASTVALUES` CHANGE `field5` `FORMEN` VARCHAR(40) ","ALTER TABLE FORECASTVALUES ADD `field6` VARCHAR(40)","ALTER TABLE `FORECASTVALUES` CHANGE `field6` `FORMON_F` VARCHAR(40) ","ALTER TABLE FORECASTVALUES ADD `field7` VARCHAR(40)","ALTER TABLE `FORECASTVALUES` CHANGE `field7` `FORJAH_F` VARCHAR(40) ","ALTER TABLE FORECASTVALUES ADD `field8` VARCHAR(40)","ALTER TABLE `FORECASTVALUES` CHANGE `field8` `KSTNRA` VARCHAR(40) ","ALTER TABLE `FORECASTVALUES` CHANGE `FOR_ARTKEY` `FOR_ARTKEY` VARCHAR(40) not null ","ALTER TABLE `FORECASTVALUES` CHANGE `FOR_GPRKEY` `FOR_GPRKEY` VARCHAR(40) not null ","ALTER TABLE `FORECASTVALUES` CHANGE `FOR_ADRKEY` `FOR_ADRKEY` VARCHAR(40) not null ","ALTER TABLE `FORECASTVALUES` ADD INDEX (`FOR_ADRKEY`)","ALTER TABLE `FORECASTVALUES` DROP PRIMARY KEY","ALTER TABLE `FORECASTVALUES` ADD INDEX (`FOR_GPRKEY`)","ALTER TABLE `FORECASTVALUES` DROP PRIMARY KEY","ALTER TABLE `FORECASTVALUES` ADD INDEX (`FOR_ARTKEY`)","ALTER TABLE `FORECASTVALUES` DROP PRIMARY KEY","ALTER TABLE `FORECASTVALUES` CHANGE `FOR_GPRKEY` `FOR_GPRKEY` VARCHAR(40) not null ","ALTER TABLE `FORECASTVALUES` ADD PRIMARY KEY (`FOR_GPRKEY`)"));


		// save MD5
		if($fp=@fopen(dirname(__FILE__).'/setup.md5', 'w')){
			fwrite($fp, $thisMD5);
			fclose($fp);
		}
	}


	function setupIndexes($tableName, $arrFields){
		if(!is_array($arrFields)){
			return false;
		}

		foreach($arrFields as $fieldName){
			if(!$res=@db_query("SHOW COLUMNS FROM `$tableName` like '$fieldName'")){
				continue;
			}
			if(!$row=@db_fetch_assoc($res)){
				continue;
			}
			if($row['Key']==''){
				@db_query("ALTER TABLE `$tableName` ADD INDEX `$fieldName` (`$fieldName`)");
			}
		}
	}


	function setupTable($tableName, $createSQL='', $silent=true, $arrAlter=''){
		global $Translation;
		ob_start();

		echo '<div style="padding: 5px; border-bottom:solid 1px silver; font-family: verdana, arial; font-size: 10px;">';

		// is there a table rename query?
		if(is_array($arrAlter)){
			$matches=array();
			if(preg_match("/ALTER TABLE `(.*)` RENAME `$tableName`/", $arrAlter[0], $matches)){
				$oldTableName=$matches[1];
			}
		}

		if($res=@db_query("select count(1) from `$tableName`")){ // table already exists
			if($row = @db_fetch_array($res)){
				echo str_replace("<TableName>", $tableName, str_replace("<NumRecords>", $row[0],$Translation["table exists"]));
				if(is_array($arrAlter)){
					echo '<br>';
					foreach($arrAlter as $alter){
						if($alter!=''){
							echo "$alter ... ";
							if(!@db_query($alter)){
								echo '<span class="label label-danger">' . $Translation['failed'] . '</span>';
								echo '<div class="text-danger">' . $Translation['mysql said'] . ' ' . db_error(db_link()) . '</div>';
							}else{
								echo '<span class="label label-success">' . $Translation['ok'] . '</span>';
							}
						}
					}
				}else{
					echo $Translation["table uptodate"];
				}
			}else{
				echo str_replace("<TableName>", $tableName, $Translation["couldnt count"]);
			}
		}else{ // given tableName doesn't exist

			if($oldTableName!=''){ // if we have a table rename query
				if($ro=@db_query("select count(1) from `$oldTableName`")){ // if old table exists, rename it.
					$renameQuery=array_shift($arrAlter); // get and remove rename query

					echo "$renameQuery ... ";
					if(!@db_query($renameQuery)){
						echo '<span class="label label-danger">' . $Translation['failed'] . '</span>';
						echo '<div class="text-danger">' . $Translation['mysql said'] . ' ' . db_error(db_link()) . '</div>';
					}else{
						echo '<span class="label label-success">' . $Translation['ok'] . '</span>';
					}

					if(is_array($arrAlter)) setupTable($tableName, $createSQL, false, $arrAlter); // execute Alter queries on renamed table ...
				}else{ // if old tableName doesn't exist (nor the new one since we're here), then just create the table.
					setupTable($tableName, $createSQL, false); // no Alter queries passed ...
				}
			}else{ // tableName doesn't exist and no rename, so just create the table
				echo str_replace("<TableName>", $tableName, $Translation["creating table"]);
				if(!@db_query($createSQL)){
					echo '<span class="label label-danger">' . $Translation['failed'] . '</span>';
					echo '<div class="text-danger">' . $Translation['mysql said'] . db_error(db_link()) . '</div>';
				}else{
					echo '<span class="label label-success">' . $Translation['ok'] . '</span>';
				}
			}
		}

		echo "</div>";

		$out=ob_get_contents();
		ob_end_clean();
		if(!$silent){
			echo $out;
		}
	}
?>
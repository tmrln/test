<?php
	$currDir = dirname(__FILE__);
	require("{$currDir}/incCommon.php");
	include("{$currDir}/incHeader.php");
?>

<?php
	if(!sqlValue("select count(1) from membership_groups where allowSignup=1")){
		$noSignup=TRUE;
		?>
		<div class="alert alert-info">
			<i><?php echo $Translation["attention"]; ?></i>
			<br><?php echo $Translation["visitor sign up"]; ?>
			</div>
		<?php
	}
?>

<?php
	// get the count of records having no owners in each table
	$arrTables=getTableList();

	foreach($arrTables as $tn=>$tc){
		$countOwned=sqlValue("select count(1) from membership_userrecords where tableName='$tn' and not isnull(groupID)");
		$countAll=sqlValue("select count(1) from `$tn`");

		if($countAll>$countOwned){
			?>
			<div class="alert alert-info">
				<?php echo $Translation["table data without owner"]; ?>
				</div>
			<?php
			break;
		}
	}
?>

<div class="page-header"><h1><?php echo $Translation["membership management homepage"]; ?></h1></div>

<?php if(!$adminConfig['hide_twitter_feed']){ ?>
	<div class="row" id="outer-row"><div class="col-md-8">
<?php } ?>

<div class="row" id="inner-row">

<!-- ################# Maintenance mode ###################### -->
<?php
	if(maintenance_mode()){
		$off_classes = 'btn-default locked_inactive';
		$on_classes = 'btn-danger unlocked_active';
	}else{
		$off_classes = 'btn-success locked_active';
		$on_classes = 'btn-default unlocked_inactive';
	}
?>
<div class="col-md-12 text-right vspacer-lg">
	<label><?php echo $Translation['maintenance mode']; ?></label>
	<div class="btn-group" id="toggle_maintenance_mode">
		<button type="button" class="btn <?php echo $off_classes; ?>"><?php echo $Translation['OFF']; ?></button>
		<button type="button" class="btn <?php echo $on_classes; ?>"><?php echo $Translation['ON']; ?></button>
	</div>
</div>
<script>
	$j('#toggle_maintenance_mode button').click(function(){
		if($j(this).hasClass('locked_active') || $j(this).hasClass('unlocked_inactive')){
			if(confirm('<?php echo html_attr($Translation['enable maintenance mode?']); ?>')){
				$j.ajax({
					url: 'ajax-maintenance-mode.php?status=on', 
					complete: function(){
						location.reload();
					}
				});
			}
		}else{
			if(confirm('<?php echo html_attr($Translation['disable maintenance mode?']); ?>')){
				$j.ajax({
					url: 'ajax-maintenance-mode.php?status=off', 
					complete: function(){
						location.reload();
					}
				});
			}
		}
	});
</script>

<!-- ################# Newest Updates ######################## -->
<div class="col-md-6">
<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title"><?php echo $Translation["newest updates"]; ?> <a class="btn btn-default btn-sm" href="pageViewRecords.php?sort=dateUpdated&sortDir=desc"><i class="glyphicon glyphicon-chevron-right"></i></a></h3>
	</div>
	<div class="panel-body">
	<table class="table table-striped">
	<?php
		$res=sql("select tableName, pkValue, dateUpdated, recID from membership_userrecords order by dateUpdated desc limit 5", $eo);
		while($row=db_fetch_row($res)){
			?>
			<tr>
				<td class="tdCaptionCell"><?php echo @date($adminConfig['PHPDateTimeFormat'], $row[2]); ?></td>
				<td class="tdCell" align="left"><a href="pageEditOwnership.php?recID=<?php echo $row[3]; ?>"><img src="images/data_icon.gif" border="0" alt="<?php echo $Translation["view record details"]; ?>" title="<?php echo $Translation["view record details"]; ?>"></a> <?php echo substr(getCSVData($row[0], $row[1]), 0, 15); ?> ...</td>
				</tr>
			<?php
		}
	?>
	</table>
	</div>
</div>
</div>
<!-- ####################################################### -->


<!-- ################# Newest Entries ######################## -->
<div class="col-md-6">
<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title"><?php echo $Translation["newest entries"]; ?> <a class="btn btn-default btn-sm" href="pageViewRecords.php?sort=dateAdded&sortDir=desc"><i class="glyphicon glyphicon-chevron-right"></i></a></h3>
	</div>
	<div class="panel-body">
	<table class="table table-striped">
	<?php
		$res=sql("select tableName, pkValue, dateAdded, recID from membership_userrecords order by dateAdded desc limit 5", $eo);
		while($row=db_fetch_row($res)){
			?>
			<tr>
				<td class="tdCaptionCell"><?php echo @date($adminConfig['PHPDateTimeFormat'], $row[2]); ?></td>
				<td class="tdCell" align="left"><a href="pageEditOwnership.php?recID=<?php echo $row[3]; ?>"><img src="images/data_icon.gif" border="0" alt="<?php echo $Translation["view record details"]; ?>" title="<?php echo $Translation["view record details"]; ?>"></a> <?php echo substr(getCSVData($row[0], $row[1]), 0, 15); ?> ...</td>
				</tr>
			<?php
		}
	?>
	</table>
	</div>
</div>
</div>
<!-- ####################################################### -->


<!-- ################# Top Members ######################## -->
<div class="col-md-6">
<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title"><?php echo $Translation["top members"]; ?></h3>
	</div>
	<div class="panel-body">
	<table class="table table-striped">
	<?php
		$res=sql("select lcase(memberID), count(1) from membership_userrecords group by memberID order by 2 desc limit 5", $eo);
		while($row=db_fetch_row($res)){
			?>
			<tr>
				<td class="tdCaptionCell" align="left"><a href="pageEditMember.php?memberID=<?php echo urlencode($row[0]); ?>"><img src="images/edit_icon.gif" border="0" alt="<?php echo $Translation["edit member details"]; ?>" title="<?php echo $Translation["edit member details"]; ?>"></a> <?php echo $row[0]; ?></td>
				<td class="tdCell"><a href="pageViewRecords.php?memberID=<?php echo urlencode($row[0]); ?>"><img src="images/data_icon.gif" border="0" alt="<?php echo $Translation["view member records"]; ?>" title="<?php echo $Translation["view member records"]; ?>"></a> <?php echo $row[1]; ?> <?php echo $Translation["records"]; ?></td>
				</tr>
			<?php
		}
	?>
	</table>
	</div>
</div>
</div>
<!-- ####################################################### -->


<!-- ################# Members Stats ######################## -->
<div class="col-md-6">
<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title"><?php echo $Translation["members stats"]; ?></h3>
	</div>
	<div class="panel-body">
	<table class="table table-striped">
		<tr>
			<td class="tdCaptionCell"><?php echo $Translation["total groups"]; ?></td>
			<td class="tdCell"><a href="pageViewGroups.php"><img src="images/view_icon.gif" border="0" alt="<?php echo $Translation['view groups']; ?>" title="<?php echo $Translation['view groups']; ?>"></a> <?php echo sqlValue("select count(1) from membership_groups"); ?></td>
			</tr>
		<tr>
			<td class="tdCaptionCell"><?php echo $Translation["active members"]; ?></td>
			<td class="tdCell"><a href="pageViewMembers.php?status=2"><img src="images/view_icon.gif" border="0" alt="<?php echo $Translation["view active members"]; ?>" title="<?php echo $Translation["view active members"]; ?>"></a> <?php echo sqlValue("select count(1) from membership_users where isApproved=1 and isBanned=0"); ?></td>
			</tr>
		<tr>
			<?php
				$awaiting = intval(sqlValue("select count(1) from membership_users where isApproved=0"));
			?>
			<td class="tdCaptionCell" <?php echo ($awaiting ? "style=\"color: red;\"" : ""); ?>><?php echo $Translation["members awaiting approval"]; ?></td>
			<td class="tdCell"><a href="pageViewMembers.php?status=1"><img src="images/view_icon.gif" border="0" alt="<?php echo $Translation["view members awaiting approval"]; ?>" title="<?php echo $Translation["view members awaiting approval"]; ?>"></a> <?php echo $awaiting; ?></td>
			</tr>
		<tr>
			<td class="tdCaptionCell"><?php echo $Translation["banned members"]; ?></td>
			<td class="tdCell"><a href="pageViewMembers.php?status=3"><img src="images/view_icon.gif" border="0" alt="<?php echo $Translation["view banned members"]; ?>" title="<?php echo $Translation["view banned members"]; ?>"></a> <?php echo sqlValue("select count(1) from membership_users where isApproved=1 and isBanned=1"); ?></td>
			</tr>
		<tr>
			<td class="tdCaptionCell"><?php echo $Translation["total members"]; ?></td>
			<td class="tdCell"><a href="pageViewMembers.php"><img src="images/view_icon.gif" border="0" alt="<?php echo $Translation["view all members"]; ?>" title="<?php echo $Translation["view all members"]; ?>"></a> <?php echo sqlValue("select count(1) from membership_users"); ?></td>
			</tr>
		</table>
	</div>
</div>
</div>
<!-- ####################################################### -->

</div> <!-- /div.row#inner-row -->

<?php if(!$adminConfig['hide_twitter_feed']){ ?>
		</div> <!-- /div.col-md-8 -->

		<div class="col-md-4" id="twitter-feed">
			<h3>
				<?php echo $Translation["BigProf tweets"]; ?>
				<span class="pull-right">
					<a class="twitter-follow-button" href="https://twitter.com/bigprof" data-show-count="false" data-lang="en"><?php echo $Translation["follow BigProf"]; ?></a>
					<script type="text/javascript">
						window.twttr = (function (d, s, id) {
							var t, js, fjs = d.getElementsByTagName(s)[0];
							if (d.getElementById(id)) return;
							js = d.createElement(s); js.id = id;
							js.src= "https://platform.twitter.com/widgets.js";
							fjs.parentNode.insertBefore(js, fjs);
							return window.twttr || (t = { _e: [], ready: function (f) { t._e.push(f) } });
						}(document, "script", "twitter-wjs"));
					</script>
				</span>
			</h3><hr>
			<div class="text-center">
				<a class="twitter-timeline" height="400" href="https://twitter.com/bigprof" data-widget-id="552758720300843008" data-chrome="nofooter noheader"><?php echo $Translation["loading bigprof feed"]; ?></a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</div>
			<div class="text-right hidden" id="remove-feed-link"><a href="pageSettings.php#hide_twitter_feed"><i class="glyphicon glyphicon-remove"></i> <?php echo $Translation["remove feed"]; ?></a></div>
			<script>
				$j(function(){
					show_remove_feed_link = function(){
						if(!$j('.twitter-timeline-rendered').length){
							setTimeout(function(){ show_remove_feed_link(); }, 1000);
						}else{
							$j('#remove-feed-link').removeClass('hidden');
						}
					};
					show_remove_feed_link();
				});
			</script>
		</div>
	</div> <!-- /div.row#outer-row -->
<?php } ?>


<?php
	include("{$currDir}/incFooter.php");
?>

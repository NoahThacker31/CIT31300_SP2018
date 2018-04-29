<?php include('views/elements/header.php'); ?>

<div class="container">
	<img width="75%" class=" no-repeat right top" src="views/img/Weather.png" />
	<div style= "float:  right; padding-left: 5%;">
		<?php if(!$result) {?>
			<h2>Local Weather</h2>
			<form method="post" action="<?php echo BASE_URL?>weather/getresults">
				<label for "zip">Please Enter Your Zip Code:</label>
				<input type="text" name="zip" id="zip" required="zip" />
				<br/>
				<button type="submit" class="btn">Check Weather</button>
			</form>
		<?php } else { ?>
			<div class="container">
				<div class="page-header">
					<h1>Weather for <?php echo $data->request->type;?></h1>
				</div>
				<h4>Today's High: <?php echo $weather->weather->maxtempF;?></h4>
				<h4>Today's Low: <?php echo $weather->weather->mintempF;?></h4>
			</div>
		<?php } ?>
	</div>
</div>
<div class="container">
	<div class="page-header">
		<h1>Latest News from <?php echo $rss_title; ?></h1>
	</div>
	<?php foreach ($rss_feed as $article) { ?>
		<div class="page-header">
			<div style= "width: 70%;">
				<h4>
					<a href="<?php echo $article->guid; ?>"><?php echo $article->title?></a>
					<?php echo ' ('.date('F j, Y, g:i a',strtotime($article->pubDate)).')'; ?>
				</h4>
				<p><?php echo $article->description; ?></p>
			</div>
		</div>
	<?php } ?>
</div>

<?php include('views/elements/footer.php'); ?>
`<?php
	$query = "SELECT * FROM testimonials";
	$query_result = mysql_query($query);
	$results = array();
	while ($results[] = mysql_fetch_array($query_result));

	// remove empty elements
	$results = array_filter($results);
?>
<div class="wrapper">
	<div class="container">
		<h1 class="big-title">Testimonials</h1>
		
			
		<div class="row">
	
			<div class="col-8">
	
			<?php if (!empty($results)): ?>
					<!-- The Loop -->
					<?php foreach ($results as $result): ?>
						<div class="testimonial-container">

							<h2 class="medium-title"><?php echo $result["title"]; ?></h2>
						
							<small class="small-body-text"><?php echo $result["name"]; ?></small>

							<p class="body-text"><?php echo $result["content"]; ?></p>

						</div>
					<?php endforeach; ?>
				<?php else: ?>
					<h3>There are no testimonials right now.</h3>
					<?php endif; ?>

			</div>
			<div class="col-4">
	
				<h2 class="medium-title">Sidebar</h2>
				<a href="index.php?root=submittestimonials">Create a testimonial</a>
			</div>	
		</div>

	</div>
	
</div>
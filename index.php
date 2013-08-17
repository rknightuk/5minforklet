<?php 
	$title = "5 Minute Fork Bookmarklet";
	$slug = "5minforklet";
	$reponame = "5minforklet";
	include('../inc/header.php');
?>

	<h1>5minforklet Installation</h1>

	<p>5minforklet is a bookmarklet for Remy Sharp's <a href="http://5minfork.com">5 Minute Fork</a> service. To install the bookmarklet, simply drag it into your bookmark bar.</p>

	<p class="bookmarklet"><a href="javascript:(function()%7Bif(document.URL.indexOf(%22https://github.com%22)%3E%3D0)%7Bwindow.location.href%3Dwindow.location.href.replace(%22https://github.com%22,%22http://5minfork.com%22)%3B%7Delse%7Balert(%22Not%20a%20valid%20GitHub%20repo%22)%3B%7D%7D)()%3B">5minforklet</a></p>
		
<?php include('../inc/footer.php'); ?>
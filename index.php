<title>gardna.net</title>

<style>
html,
body {
	text-align: center;
	margin-top: 50px;
}

.s {
	color: black;
	text-decoration: none;
}
</style>

<h1>gardna.net</h1>

<?php
	$now = new DateTime('now', new DateTimeZone('America/Los_Angeles'));
	$now->setTimestamp(time());

	echo '<p>It is ';
	echo $now->format('h:i:s A');
	echo '</p>';
?>

<p><a href="https://blogliam.com">blogliam.com</a></p>
<p>
	<a href="https://github.com/wg4568">github</a>
	<a href="https://www.linkedin.com/in/william-d-gardner/">linkedin</a>
</p>
<p><a href="stuff.html">stuff i've made</a></p>
<p><a href="/f/">files</a></p>

<br/><br/>

<p>mc.gardn<a class="s" href="henry.html">a</a>.net</p>
<p>will<a class="s" href="munching.html">i</a>am@gardna.net</p>
<p>Leap#0765</p>

<style type="text/css">

  * {
    margin: 0;
    padding: 0;
    border: 0;
  }

  h1,
  h2,
  h3 {
    font-family: 'Tinos', serif;
    text-transform: uppercase;
    color: #434031;
  }

  p {
    font-family: 'Open Sans', sans-serif;
  }

	.container {
    margin: 0 auto;
    max-width: 800px;
  }

  /*Header Styling*****************/

  header {
    background: #434031;
    position: fixed;
    left: 0;
    right: 0;
    padding: 10px 0;
    text-align: center;
  }

  header nav ul li {
    display: inline;
  }

  header nav a {
    color: white;
    text-decoration: none;
    font-family: 'Open Sans', sans-serif;
    font-weight: 1000;
    font-size: 20px;
    margin: 0 20px;
  }

  footer {
    background: #434031;
    color: white;
    text-align: center;
    padding: 10px 0px;
  }

</style>

<header>
  <nav>
    <ul>
      <li><a href="#home">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#characters">Characters</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </nav>
</header>

<div class="container">
	<h1>Missing fields</h1>
	<p>Sorry, you have not completed all of the required fields.</p>
	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

	<ul>
	<?php
		for($i=0; $i<count($this->missing_required_fields); $i++){
			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
		}
	?>
	</ul>

	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</div>

<footer>
	<p>Created by: Veronica Simons</p>
</footer>

<!DOCTYPE html>
<html lan="en"  dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">    
    <nav class="nav_wrapper">
            <ul>
                <li ><a href="index.php">Home</a></li>
                <li ><a href="index.php">Recipes</a></li>
                <li class="is--active"><a href="contact.php">contact us</a></li>
                <li><a href="about.php">About Us</a></li>
			    <li><a href="videos.php">Video</a></li>               
            </ul>
        </nav>
    <meta name="viewport" content="width=device=width, initial-scale=1">
</head>
<body>
    <div class="contact-section">
    <h1>Contact Us</h1>
<div class="border"></div>
<form class="contact-form" action="contact.php" method="POST">
    <input type="text" name="Emri" class="contact-form-text" placeholder="Emri">
    <input type="text" name="Mbiemri" class="contact-form-text" placeholder="Mbiemri">
    <input type="text" name="Email" class="contact-form-text" placeholder="Email">
    <input type="text" name="Telefoni" class="contact-form-text" placeholder="Telefoni">
    <textarea name="Mesazhi" class="contact-form-text" placeholder="Mesazhi Juaj"></textarea>
    <button type="submit" name="submit" class="contact-form-btn">Submit</button>
</form>
    </div>
    <footer>
			<div class="container">
				<div class="row">
					<div class="column">Copyright©2020. All Rights Reserved </div>
					<div class="column pull-right">
						<nav class="nav_wrapper">					
				</nav>
</body>
</html>

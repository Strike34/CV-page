
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Portfolio</title>
<link rel="stylesheet" href="resetport.css">
<link rel="stylesheet" href="stylezaebal.css">
<script src="script.js"></script>
</head>
<body>
<header>
<nav>
    <h1 class="title"><span>My</span>Portfolio</h1>
    <ul>
        <li><a href="miniproject.html">About</a></li>
		<li><a href="exp.html">Skills</a></li>
		<li><a href="exp.html">Experience</a></li>
		<li><a href="portfolio.html">Portfolio</a></li>
		<li><a href="contact.html">Contact</a></li>
        <li><a href="blog.html">Login</a></li>
        <li><a href="post.php">Post</a></li>
    </ul>
    <?php
    session_start();
    if(!isset($_SESSION['username'])){
    header('Location: blog.html');
    session_abort();
}
    
?>
</nav>
</header>
<form id="form" method="POST" action="addpost.php" name="blogform" onsubmit="return validateForm();">
    <fieldset>
        <div class="form-control">
        <p><input class="inputs" id="title" type="text" name = "title" placeholder="Title" style="height: 2rem; width:24rem;"></p>
        </div>
        <div class="form-control">
        <textarea class="inputs" id="textspace" name="textspace" placeholder="Enter text" style="height: 20rem; width: 24rem;"></textarea>
        </div>
        
        <button id="clear" onclick =' return clear_inputs()'>Clear</button>
        <input  type="submit" id="submit" name="Submit" value="Submit">
        <a class="logout" href="logout.php">Logout</a>
    </fieldset>

    
    
</form>
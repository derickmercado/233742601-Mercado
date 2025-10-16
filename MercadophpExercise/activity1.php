<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Activity 1: Introduce Yourself</title>
<link rel="stylesheet" href="styles.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


</head>
<body>
<div class="background-animation"></div>
<div class="container">
<header class="activity-header">
<h1><i class="fas fa-user"></i> Introduce Yourself</h1>
<p class="subtitle">A simple personal introduction using PHP variables.</p>
</header>
<div class="activity-content">

<form action="" method="GET">
Name: <input type="text" name="name"><br>
Age: <input type="text" name="age"><br>
Favorite Color: <input type="text" name="fav_color"><br>
<input type="submit">
</form>

<div class="output-card">
<h3><i class="fas fa-quote-left"></i> Personal Introduction</h3>
<div class="output-item">
<strong>Message:</strong>
<span class="output-value">
<?php
// Check if all inputs are set before printing
if (isset($_GET["name"]) && isset($_GET["age"]) && isset($_GET["fav_color"])) {
// Sanitize output to avoid XSS attacks
$name = htmlspecialchars($_GET["name"]);
$age = htmlspecialchars($_GET["age"]);
$fav_color = htmlspecialchars($_GET["fav_color"]);
echo "Hi, I’m $name, I am $age years old, and my favorite color is $fav_color.";
} else {
echo "Please fill out the form above and submit.";
}
?>
</span>
</div>
</div>

</div>
</div>

</div>

<a href="index.php" class="back-btn"><i class="fas fa-arrow-left"></i> Go Back to Activity List</a>

<script>
document.addEventListener('DOMContentLoaded', function() {
const content = document.querySelector('.activity-content');
if (content) {
content.style.opacity = '0';
content.style.transform = 'translateY(20px)';
setTimeout(() => {
content.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
content.style.opacity = '1';
content.style.transform = 'translateY(0)';
}, 200);
}
});
document.querySelector('.back-btn').addEventListener('click', function(e) {
e.preventDefault();
this.style.transform = 'translateX(-50%) scale(0.95)';
setTimeout(() => {
window.location.href = this.href;
}, 150);
});
</script>
</body>
</html>
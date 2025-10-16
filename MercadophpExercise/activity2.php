<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Activity 2: Simple Math Task</title>
<link rel="stylesheet" href="styles.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
<div class="background-animation"></div>
<div class="container">
<header class="activity-header">
<h1><i class="fas fa-calculator"></i> Simple Math Task</h1>
<p class="subtitle">Basic arithmetic operations with PHP.</p>
</header>

<div class="activity-content">
<form action="" method="GET">
Num1: <input type="int" name="num1"><br>
Num2: <input type="number" name="num2"><br>
<input type="submit">
</form>

<div class="output-card">
<h3><i class="fas fa-quote-left"></i> Personal Introduction</h3>
<div class="output-item">
<strong>Message:</strong>
<span class="output-value">
<?php


// Check if all inputs are set before printing
if (isset($_GET["num1"]) && isset($_GET["num2"])) {
// Sanitize output to avoid XSS attacks
$num1 = htmlspecialchars($_GET["num1"]);
$num2 = htmlspecialchars($_GET["num2"]);
$result = $num1 + $num2;
echo "First number is $num1 <br> Second number is $num2<br>Equals to $result";
} else {
echo "Please fill out the form above and submit.";
}
?>
</span>
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
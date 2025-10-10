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
            <?php
            $a = 15;
            $b = 5;
            $sum = $a + $b;
            $diff = $a - $b;
            $prod = $a * $b;
            $quot = $a / $b;
            ?>
            <div class="output-card">
                <h3><i class="fas fa-plus-minus"></i> Calculations</h3>
                <div class="output-item">
                    <strong>Values:</strong>
                    <span class="output-value">val1: <?php echo $a; ?>, val2: <?php echo $b; ?></span>
                </div>
                <div class="output-item">
                    <strong>Sum:</strong>
                    <span class="output-value"><?php echo $sum; ?></span>
                </div>
                <div class="output-item">
                    <strong>Difference:</strong>
                    <span class="output-value"><?php echo $diff; ?></span>
                </div>
                <div class="output-item">
                    <strong>Product:</strong>
                    <span class="output-value"><?php echo $prod; ?></span>
                </div>
                <div class="output-item">
                    <strong>Quotient:</strong>
                    <span class="output-value"><?php echo $quot; ?></span>
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

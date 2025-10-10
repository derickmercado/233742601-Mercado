<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 5: Swapping Variables</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="background-animation"></div>
    <div class="container">
        <header class="activity-header">
            <h1><i class="fas fa-exchange-alt"></i> Swapping Variables</h1>
            <p class="subtitle">Demonstrating variable exchange using a temporary variable in PHP.</p>
        </header>
        
        <div class="activity-content">
            <?php
            $x = 10;
            $y = 20;
            $beforeX = $x;
            $beforeY = $y;
            $temp = $x;
            $x = $y;
            $y = $temp;
            ?>
            <div class="output-card">
                <h3><i class="fas fa-sync-alt"></i> Swap Results</h3>
                <div class="output-item">
                    <strong>Before Swapping:</strong>
                    <span class="output-value">x = <?php echo $beforeX; ?>, y = <?php echo $beforeY; ?></span>
                </div>
                <div class="output-item">
                    <strong>After Swapping:</strong>
                    <span class="output-value">x = <?php echo $x; ?>, y = <?php echo $y; ?></span>
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 11: Currency Converter</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="background-animation"></div>
    <div class="container">
        <header class="activity-header">
            <h1><i class="fas fa-exchange-alt"></i> Currency Converter</h1>
            <p class="subtitle">Converting a base amount to multiple currencies using PHP rates.</p>
        </header>
        
        <div class="activity-content">
            <?php
            $amount = 100;
            $usd_rate = 1.1;
            $eur_rate = 0.9;
            $jpy_rate = 130;
            $usd = $amount * $usd_rate;
            $eur = $amount * $eur_rate;
            $jpy = $amount * $jpy_rate;
            ?>
            <div class="output-card">
                <h3><i class="fas fa-globe"></i> Conversion Results</h3>
                <div class="output-item">
                    <strong>Base Amount:</strong>
                    <span class="output-value">$<?php echo number_format($amount); ?></span>
                </div>
                <div class="output-item">
                    <strong>To USD:</strong>
                    <span class="output-value">$<?php echo number_format($usd, 2); ?></span>
                </div>
                <div class="output-item">
                    <strong>To EUR:</strong>
                    <span class="output-value">€<?php echo number_format($eur, 2); ?></span>
                </div>
                <div class="output-item">
                    <strong>To JPY:</strong>
                    <span class="output-value">¥<?php echo number_format($jpy, 0); ?></span>
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

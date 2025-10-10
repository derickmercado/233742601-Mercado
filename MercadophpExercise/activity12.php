<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 12: Travel Cost Estimator</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="background-animation"></div>
    <div class="container">
        <header class="activity-header">
            <h1><i class="fas fa-car"></i> Travel Cost Estimator</h1>
            <p class="subtitle">Estimating fuel costs for a trip using PHP calculations.</p>
        </header>
        
        <div class="activity-content">
            <?php
            $distance = 150;
            $fuel_consumption = 12;
            $fuel_price = 1.2;
            $fuel_needed = $distance / $fuel_consumption;
            $travel_cost = $fuel_needed * $fuel_price;
            ?>
            <div class="output-card">
                <h3><i class="fas fa-gas-pump"></i> Trip Estimation</h3>
                <div class="output-item">
                    <strong>Distance:</strong>
                    <span class="output-value"><?php echo $distance; ?> km</span>
                </div>
                <div class="output-item">
                    <strong>Fuel Consumption:</strong>
                    <span class="output-value"><?php echo $fuel_consumption; ?> km/l</span>
                </div>
                <div class="output-item">
                    <strong>Fuel Price:</strong>
                    <span class="output-value">$<?php echo $fuel_price; ?> per liter</span>
                </div>
                <div class="output-item">
                    <strong>Fuel Needed:</strong>
                    <span class="output-value"><?php echo round($fuel_needed, 2); ?> liters</span>
                </div>
                <div class="output-item">
                    <strong>Estimated Cost:</strong>
                    <span class="output-value">$<?php echo number_format($travel_cost, 2); ?></span>
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

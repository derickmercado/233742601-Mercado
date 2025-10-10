<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 6: Salary Calculator</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="background-animation"></div>
    <div class="container">
        <header class="activity-header">
            <h1><i class="fas fa-dollar-sign"></i> Salary Calculator</h1>
            <p class="subtitle">Computing net salary with allowances and deductions in PHP.</p>
        </header>
        
        <div class="activity-content">
            <?php
            // Salary Calculator Task
            $basic_salary = 30000;
            $allowance = 5000;
            $deduction = 3000;
            $net_salary = $basic_salary + $allowance - $deduction;
            ?>
            <div class="output-card">
                <h3><i class="fas fa-calculator"></i> Salary Breakdown</h3>
                <div class="output-item">
                    <strong>Basic Salary:</strong>
                    <span class="output-value">₱<?php echo number_format($basic_salary); ?></span>
                </div>
                <div class="output-item">
                    <strong>Allowance:</strong>
                    <span class="output-value">₱<?php echo number_format($allowance); ?></span>
                </div>
                <div class="output-item">
                    <strong>Deduction:</strong>
                    <span class="output-value">₱<?php echo number_format($deduction); ?></span>
                </div>
                <div class="output-item">
                    <strong>Net Salary:</strong>
                    <span class="output-value">₱<?php echo number_format($net_salary); ?></span>
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

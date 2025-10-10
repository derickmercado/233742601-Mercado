<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 10: Simple Grading System</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="background-animation"></div>
    <div class="container">
        <header class="activity-header">
            <h1><i class="fas fa-clipboard-check"></i> Simple Grading System</h1>
            <p class="subtitle">Averaging scores and determining pass/fail in PHP.</p>
        </header>
        
        <div class="activity-content">
            <?php
            // Simple Grading System
            $math = 85;
            $english = 90;
            $science = 80;
            $average = ($math + $english + $science) / 3;
            if ($average >= 75) {
                $grade = 'Passed';
            } else {
                $grade = 'Failed';
            }
            ?>
            <div class="output-card">
                <h3><i class="fas fa-graduation-cap"></i> Student Grades</h3>
                <div class="output-item">
                    <strong>Math:</strong>
                    <span class="output-value"><?php echo $math; ?>%</span>
                </div>
                <div class="output-item">
                    <strong>English:</strong>
                    <span class="output-value"><?php echo $english; ?>%</span>
                </div>
                <div class="output-item">
                    <strong>Science:</strong>
                    <span class="output-value"><?php echo $science; ?>%</span>
                </div>
                <div class="output-item">
                    <strong>Average:</strong>
                    <span class="output-value"><?php echo round($average, 2); ?>%</span>
                </div>
                <div class="output-item">
                    <strong>Final Grade:</strong>
                    <span class="output-value"><?php echo $grade; ?></span>
                </div>
            </div>
        </div>
    </div>
    
    <a href="index.php" class="back-btn"><i class="fas fa-arrow-left"></i> Go Back to Activity List</a>

    <script>
    </script>
</body>
</html>

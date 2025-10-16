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
            <form action="" method="GET">
                <label>Value of x:</label>
                <input type="number" name="x" step="any" value="<?php echo isset($_GET['x']) ? htmlspecialchars($_GET['x']) : ''; ?>"><br><br>
                <label>Value of y:</label>
                <input type="number" name="y" step="any" value="<?php echo isset($_GET['y']) ? htmlspecialchars($_GET['y']) : ''; ?>"><br><br>
                <input type="submit" value="Swap">
            </form>

            <?php
            // Initialize
            $beforeX = $beforeY = $x = $y = null;
            $swapped = false;

            if (isset($_GET['x']) && isset($_GET['y']) && $_GET['x'] !== '' && $_GET['y'] !== '') {
                $x = floatval($_GET['x']);
                $y = floatval($_GET['y']);
                $beforeX = $x;
                $beforeY = $y;

                // Swap using temp variable
                $temp = $x;
                $x = $y;
                $y = $temp;
                $swapped = true;
            } else {
                echo "<p>Please enter values for both x and y, then click Swap.</p>";
            }
            ?>

            <?php if ($swapped): ?>
            <div class="output-card">
                <h3><i class="fas fa-sync-alt"></i> Swap Results</h3>
                <div class="output-item">
                    <strong>Before Swapping:</strong>
                    <span class="output-value">x = <?php echo htmlspecialchars($beforeX); ?>, y = <?php echo htmlspecialchars($beforeY); ?></span>
                </div>
                <div class="output-item">
                    <strong>After Swapping:</strong>
                    <span class="output-value">x = <?php echo htmlspecialchars($x); ?>, y = <?php echo htmlspecialchars($y); ?></span>
                </div>
            </div>
            <?php endif; ?>
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

            const backBtn = document.querySelector('.back-btn');
            if (backBtn) {
                backBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    this.style.transform = 'translateX(-50%) scale(0.95)';
                    setTimeout(() => {
                        window.location.href = this.href;
                    }, 150);
                });
            }
        });
    </script>
</body>
</html>

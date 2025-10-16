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
            <p class="subtitle">Convert Philippine Pesos (₱) into USD, EUR, and JPY using PHP rates.</p>
        </header>

        <div class="activity-content">
            <form action="" method="GET">
                <label for="amount">Enter Amount in ₱ (PHP):</label><br>
                <input 
                    type="number" 
                    id="amount" 
                    name="amount" 
                    step="0.01" 
                    placeholder="Enter peso amount"
                    value="<?php echo isset($_GET['amount']) ? htmlspecialchars($_GET['amount']) : ''; ?>">
                <br><br>
                <input type="submit" value="Convert">
            </form>

            <?php
            // Example fixed exchange rates (as of approximate reference)
            $usd_rate = 0.0175;   // 1 PHP ≈ 0.0175 USD
            $eur_rate = 0.0160;   // 1 PHP ≈ 0.0160 EUR
            $jpy_rate = 2.60;     // 1 PHP ≈ 2.60 JPY

            $amount = $usd = $eur = $jpy = null;

            if (isset($_GET['amount']) && $_GET['amount'] !== '') {
                $amount = floatval($_GET['amount']);

                if ($amount < 0) {
                    echo "<p style='color:red;'>Amount cannot be negative.</p>";
                } else {
                    $usd = $amount * $usd_rate;
                    $eur = $amount * $eur_rate;
                    $jpy = $amount * $jpy_rate;
                }
            } else {
                echo "<p>Please enter an amount in pesos and click Convert.</p>";
            }
            ?>

            <div class="output-card">
                <h3><i class="fas fa-globe"></i> Conversion Results</h3>
                <div class="output-item">
                    <strong>Base Amount (PHP):</strong>
                    <span class="output-value">
                        <?php echo $amount !== null ? '₱' . number_format($amount, 2) : '—'; ?>
                    </span>
                </div>
                <div class="output-item">
                    <strong>Equivalent in USD:</strong>
                    <span class="output-value">
                        <?php echo $usd !== null ? '$' . number_format($usd, 2) : '—'; ?>
                    </span>
                </div>
                <div class="output-item">
                    <strong>Equivalent in EUR:</strong>
                    <span class="output-value">
                        <?php echo $eur !== null ? '€' . number_format($eur, 2) : '—'; ?>
                    </span>
                </div>
                <div class="output-item">
                    <strong>Equivalent in JPY:</strong>
                    <span class="output-value">
                        <?php echo $jpy !== null ? '¥' . number_format($jpy, 0) : '—'; ?>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <a href="index.php" class="back-btn"><i class="fas fa-arrow-left"></i> Go Back to Activity List</a>

    <script>
        // Entrance animation & back button behavior
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
                    setTimeout(() => window.location.href = this.href, 150);
                });
            }
        });
    </script>
</body>
</html>

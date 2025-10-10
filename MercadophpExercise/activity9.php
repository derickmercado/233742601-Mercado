<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 9: Bank Account Simulation</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="background-animation"></div>
    <div class="container">
        <header class="activity-header">
            <h1><i class="fas fa-university"></i> Bank Account Simulation</h1>
            <p class="subtitle">Simulating deposits and withdrawals on a bank balance.</p>
        </header>
        
        <div class="activity-content">
            <?php
            // Bank Account Simulation
            $balance = 5000;
            $deposit = 3000;
            $withdraw = 3000;
            $balanceAfterDeposit = $balance + $deposit;
            $balanceAfterWithdraw = $balance - $withdraw; // Note: Uses original balance as per original code
            ?>
            <div class="output-card">
                <h3><i class="fas fa-piggy-bank"></i> Account Transactions</h3>
                <div class="output-item">
                    <strong>Initial Balance:</strong>
                    <span class="output-value">$<?php echo number_format($balance); ?></span>
                </div>
                <div class="output-item">
                    <strong>Deposit Amount:</strong>
                    <span class="output-value">$<?php echo number_format($deposit); ?></span>
                </div>
                <div class="output-item">
                    <strong>Withdraw Amount:</strong>
                    <span class="output-value">$<?php echo number_format($withdraw); ?></span>
                </div>
                <div class="output-item">
                    <strong>After Deposit:</strong>
                    <span class="output-value">$<?php echo number_format($balanceAfterDeposit); ?></span>
                </div>
                <div class="output-item">
                    <strong>After Withdraw:</strong>
                    <span class="output-value">$<?php echo number_format($balanceAfterWithdraw); ?></span>
                </div>
            </div>
        </div>
    </div>
    
    <a href="index.php" class="back-btn"><i class="fas fa-arrow-left"></i> Go Back to Activity List</a>

    <script>
    </script>
</body>
</html>

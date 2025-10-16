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
            // Initialize variables
            $balance = isset($_GET['balance']) && $_GET['balance'] !== '' ? floatval($_GET['balance']) : null;
            $deposit = isset($_GET['deposit']) && $_GET['deposit'] !== '' ? floatval($_GET['deposit']) : null;
            $withdraw = isset($_GET['withdraw']) && $_GET['withdraw'] !== '' ? floatval($_GET['withdraw']) : null;

            $errors = [];
            $computed = false;
            $balanceAfterDeposit = $balanceAfterWithdraw = null;

            if (isset($_GET['balance']) || isset($_GET['deposit']) || isset($_GET['withdraw'])) {
                // Check if all fields are filled
                if ($balance === null || $deposit === null || $withdraw === null) {
                    $errors[] = "Please fill in all fields before submitting.";
                } else {
                    // Validate negative inputs
                    if ($balance < 0) $errors[] = "Starting balance cannot be negative.";
                    if ($deposit < 0) $errors[] = "Deposit cannot be negative.";
                    if ($withdraw < 0) $errors[] = "Withdrawal cannot be negative.";

                    // If no errors, compute
                    if (!$errors) {
                        $balanceAfterDeposit = $balance + $deposit;

                        if ($withdraw > $balanceAfterDeposit) {
                            $errors[] = "Insufficient funds. You tried to withdraw $" . number_format($withdraw, 2) .
                                        " but only $" . number_format($balanceAfterDeposit, 2) . " is available after deposit.";
                        } else {
                            $balanceAfterWithdraw = $balanceAfterDeposit - $withdraw;
                            $computed = true;
                        }
                    }
                }
            } else {
                echo "<p>Please enter your starting balance, deposit, and withdrawal, then click Simulate.</p>";
            }
            ?>

            <form action="" method="GET" class="account-form">
                <label>
                    Starting Balance:
                    <input type="number" name="balance" step="0.01"
                           value="<?php echo $balance !== null ? htmlspecialchars($balance) : ''; ?>">
                </label><br><br>

                <label>
                    Deposit:
                    <input type="number" name="deposit" step="0.01"
                           value="<?php echo $deposit !== null ? htmlspecialchars($deposit) : ''; ?>">
                </label><br><br>

                <label>
                    Withdraw:
                    <input type="number" name="withdraw" step="0.01"
                           value="<?php echo $withdraw !== null ? htmlspecialchars($withdraw) : ''; ?>">
                </label><br><br>

                <input type="submit" value="Simulate">
            </form>

            <?php if ($errors): ?>
                <div class="output-card" style="border-left:4px solid #e74c3c; padding-left:12px;">
                    <h3><i class="fas fa-exclamation-triangle"></i> Issues</h3>
                    <ul>
                        <?php foreach ($errors as $e): ?>
                            <li><?php echo htmlspecialchars($e); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <div class="output-card">
                <h3><i class="fas fa-piggy-bank"></i> Account Transactions</h3>
                <div class="output-item">
                    <strong>Initial Balance:</strong>
                    <span class="output-value">
                        <?php echo $balance !== null ? '$' . number_format($balance, 2) : '—'; ?>
                    </span>
                </div>
                <div class="output-item">
                    <strong>Deposit Amount:</strong>
                    <span class="output-value">
                        <?php echo $deposit !== null ? '$' . number_format($deposit, 2) : '—'; ?>
                    </span>
                </div>
                <div class="output-item">
                    <strong>Withdraw Amount:</strong>
                    <span class="output-value">
                        <?php echo $withdraw !== null ? '$' . number_format($withdraw, 2) : '—'; ?>
                    </span>
                </div>
                <div class="output-item">
                    <strong>After Deposit:</strong>
                    <span class="output-value">
                        <?php echo $balanceAfterDeposit !== null ? '$' . number_format($balanceAfterDeposit, 2) : '—'; ?>
                    </span>
                </div>
                <div class="output-item">
                    <strong>After Withdraw:</strong>
                    <span class="output-value">
                        <?php echo $balanceAfterWithdraw !== null ? '$' . number_format($balanceAfterWithdraw, 2) : '—'; ?>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <a href="index.php" class="back-btn"><i class="fas fa-arrow-left"></i> Go Back to Activity List</a>

    <script></script>
</body>
</html>

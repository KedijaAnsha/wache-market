<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My&dash;Profile Wache Market</title>
    <link rel="stylesheet" href="../assets/css/profile.css" />
    <link rel="stylesheet" href="../assets/css/nav.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <header class="logged-in">
        <nav class="navbar">
            <div class="nav-left">
                <a href="#" class="logo">
                    <i class="fas fa-shopping-bag"></i>
                    Wache-Market
                </a>
            </div>

            <div class="nav-center">
                <ul class="nav-links">
                    <li><a href="home.html"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="profile.html" class="active"><i class="fas fa-user"></i> Profile</a></li>
                    <li><a href="cart.html"><i class="fas fa-shopping-cart"></i> Cart</a></li>
                    <li><a href="orders.html"><i class="fas fa-clipboard-list"></i> Orders</a></li>
                </ul>
            </div>

            <div class="nav-right">
                <a href="logout.html" class="btn btn-logout">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </div>

            <button class="mobile-menu-btn">
                <i class="fas fa-bars"></i>
            </button>
        </nav>
    </header>
    <div class="container">
        <div class="profile-section">
            <div class="profile-card">
                <img src="../assets/images/person-img/henock.jpg" alt="Profile Picture" class="avatar" />
                <h2>Jane Doe</h2>
                <p>Email: jane@wache.com</p>
                <p><strong>Current Mode:</strong> <span id="user-mode-display">Buyer</span></p>
                <p>Address: Hossana, ET</p>
                <div class="wallet">
                    <h3>Wallet Balance</h3>
                    <div class="wallet-amount">
                        <span id="wallet-amount">$1250</span>
                        <button class="eye-toggle" onclick="toggleWalletVisibility()">👁️</button>
                    </div>

                    <button onclick="openPopup('deposit')">Deposit</button>
                    <button onclick="openPopup('withdraw')">Withdraw</button>
                </div>
                <div class="user-mode">
                    <label>User Mode:</label>
                    <div class="radio-group">
                        <label>
                            <input type="radio" name="userMode" value="buyer" checked onchange="switchMode(this.value)">
                            Buyer
                        </label>
                        <label>
                            <input type="radio" name="userMode" value="seller" onchange="switchMode(this.value)"> Seller
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="transaction-section">
            <h2>Recent Transactions</h2>
            <div class="transactions">
                <div class="transaction positive">
                    <p><strong>+ $200</strong> - Purchase - Telebirr</p>
                    <p class="date">Apr 10, 2025</p>
                </div>
                <div class="transaction negative">
                    <p><strong>- $150</strong> - Withdrawal - CBE</p>
                    <p class="date">Apr 09, 2025</p>
                </div>
                <div class="transaction positive">
                    <p><strong>+ $300</strong> - Sale - M-Pesa</p>
                    <p class="date">Apr 08, 2025</p>
                </div>
                <div class="transaction negative">
                    <p><strong>- $50</strong> - Purchase - Amole</p>
                    <p class="date">Apr 07, 2025</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Popup Modal -->
    <!-- Withdraw/Deposit Popup -->
    <div class="popup" id="popup">
        <div class="popup-content">
            <h3 id="popup-title">Action</h3>
            <form id="transaction-form">
                <label for="method">Select Method:</label>
                <select id="method" required>
                    <option value="">-- Choose Method --</option>
                    <option value="cbe">CBE</option>
                    <option value="amole">Amole</option>
                    <option value="telebirr">Telebirr</option>
                    <option value="mpesa">M-Pesa</option>
                </select>

                <label for="amount">Enter Amount:</label>
                <input type="number" id="amount" min="1" required placeholder="Amount" />

                <button type="submit" class="popup-submit">Confirm</button>
                <button type="button" class="popup-close" onclick="closePopup()">Cancel</button>
            </form>
        </div>
    </div>
    <script src="../assets/js/profile.js"></script>
</body>

</html>
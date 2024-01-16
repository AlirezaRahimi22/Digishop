<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digi Shop</title>
	<style>
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f5f5f5;
    }

    header {
        background-color: #333;
        color: white;
        text-align: center;
        padding: 1em 0;
    }

    nav ul {
        list-style: none;
        padding: 0;
    }

    nav ul li {
        display: inline;
        margin-right: 20px;
    }

    nav a {
        text-decoration: none;
        color: white;
        font-weight: bold;
    }

    main {
        max-width: 800px;
        margin: 20px auto;
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    form {
        display: flex;
        flex-direction: column;
        max-width: 300px;
        margin: 0 auto;
    }

    label {
        margin-bottom: 5px;
    }

    input {
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    button {
        background-color: #333;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button:hover {
        background-color: #555;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    table, th, td {
        border: 1px solid #ddd;
    }

    th, td {
        padding: 10px;
        text-align: left;
    }

    footer {
        background-color: #333;
        color: white;
        text-align: center;
        padding: 10px 0;
        position: fixed;
        bottom: 0;
        width: 100%;
    }
</style>

	
	
	
	
</head>
<body>

    <header>
        <h1>Digi Shop</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                
        </nav>
    </header>

    <main>
        <?php
        // اگر فرم ارسال شده باشد
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // چک کنید که نام کاربری و رمز عبور صحیح باشند (اینجا یک مثال ساده)
            $username = "test"; // نام کاربری مورد نظر
            $password = "1234"; // رمز عبور مورد نظر

            if ($_POST["username"] == $username && $_POST["password"] == $password) {
                // اگر نام کاربری و رمز عبور صحیح بودند، کل موجودی گوشی‌ها را نمایش دهید
                echo "<table border='1'>
                        <tr>
                            <th>Brand</th>
                            <th>Model</th>
                            <th>Stock</th>
                        </tr>
                        <tr>
                            <td>iPhone</td>
                            <td>12 Pro</td>
                            <td>50</td>
                        </tr>
                        <tr>
                            <td>Samsung</td>
                            <td>Galaxy S21</td>
                            <td>30</td>
                        </tr>
                        <!-- ادامه جدول به تعداد موجودی گوشی‌ها -->
                    </table>";
            } else {
                // اگر نام کاربری یا رمز عبور اشتباه بود، پیام خطا نمایش داده شود
                echo "<p style='color: red;'>Invalid username or password</p>";
            }
        }
        ?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>
    </main>

    <footer>
        <p>Teacher: Fereydoon Rezaei</p>
        <p>Ali Reza Rahimi</p>
    </footer>

</body>
</html>

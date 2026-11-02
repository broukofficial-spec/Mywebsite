<!DOCTYPE html>
<html>
<head>
    <title>Arvella Hotel</title>

    <style>
        body {
            margin: 0;
            font-family: Arial;
            background: #fff5e9;
            text-align: center;
        }

        header {
            background: #542b1c;
            color: white;
            padding: 20px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 10px;
            font-weight: bold;
        }

        section {
            padding: 35px 15px;
        }

        .hero {
            background: #e8b78c;
            padding: 70px 15px;
        }

        h2 {
            color: #8b4513;
        }

        .food {
            display: inline-block;
            background: white;
            padding: 20px;
            margin: 10px;
            width: 180px;
            border-radius: 10px;
        }

        button {
            background: #c45b2b;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input, select, textarea {
            display: block;
            width: 80%;
            max-width: 350px;
            padding: 12px;
            margin: 12px auto;
        }

        footer {
            background: #542b1c;
            color: white;
            padding: 15px;
        }
    </style>
</head>

<body>

<header>
    <h1>🍽️ Arvella Hotel</h1>

    <nav>
        <a href="#home">Home</a>
        <a href="#menu">Menu</a>
        <a href="#order">Order</a>
        <a href="#about">About</a>
        <a href="#contact">Contact</a>
    </nav>
</header>

<section class="hero" id="home">
    <h2>Welcome to Arvella Hotel</h2>
    <p>Delicious Food • Fresh Ingredients • Great Taste</p>
    <a href="#menu">
        <button>View Menu</button>
    </a>
</section>

<section id="menu">
    <h2>Our Food Menu</h2>

    <div class="food">
        <h3>🍗 Chicken Biriyani</h3>
        <p>Price: ₹160</p>
    </div>

    <div class="food">
        <h3>🥚 Egg Biriyani</h3>
        <p>Price: ₹120</p>
    </div>

    <div class="food">
        <h3>🍚 Veg Meals</h3>
        <p>Price: ₹100</p>
    </div>

    <div class="food">
        <h3>🍲 Chicken Soup</h3>
        <p>Price: ₹70</p>
    </div>

    <div class="food">
        <h3>🍗 Chicken 65</h3>
        <p>Price: ₹140</p>
    </div>
</section>

<section id="order">
    <h2>Place Your Order</h2>

    <form onsubmit="placeOrder(event)">

        <input type="text" id="name"
        placeholder="Enter Your Name" required>

        <input type="tel" id="phone"
        placeholder="Mobile Number"
        pattern="[0-9]{10}" required>

        <select id="food" required>
            <option value="">Select Food</option>
            <option>Chicken Biriyani</option>
            <option>Egg Biriyani</option>
            <option>Veg Meals</option>
            <option>Chicken Soup</option>
            <option>Chicken 65</option>
        </select>

        <input type="number" id="quantity"
        placeholder="Quantity" min="1" required>

        <textarea id="address"
        placeholder="Enter Address" required></textarea>

        <button type="submit">Place Order</button>

    </form>
</section>

<section id="about">
    <h2>About Our Hotel</h2>

    <p>
        Arvella Hotel provides delicious and
        freshly prepared food with fresh ingredients.
        Our aim is customer satisfaction.
    </p>

    <h3>Our Speciality</h3>
    <p>Fresh Food • Best Quality • Good Service</p>
</section>

<section id="contact">
    <h2>Contact Us</h2>

    <p>Hotel: Arvella Hotel</p>
    <p>Phone: 9876543210</p>
    <p>Email: arvellahotel@gmail.com</p>
    <p>Address: Tamil Nadu, India</p>
</section>

<footer>
    <p>© 2026 Arvella Hotel. All Rights Reserved.</p>
</footer>

<script>
    function placeOrder(event) {
        event.preventDefault();

        let name = document.getElementById("name").value;
        let food = document.getElementById("food").value;

        alert("Thank You " + name +
        "! Your " + food + " Order Placed Successfully!");

        event.target.reset();
    }
</script>

</body>
</html>

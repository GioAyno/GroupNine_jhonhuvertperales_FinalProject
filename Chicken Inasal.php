<?php
session_start(); 

$hostname = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "dbinasal"; 

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chicken Inasal</title>
  <link rel="stylesheet" href="Menu Page.css">
</head>
<body>
<style>
        /* Modal Styles */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1000; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgba(0, 0, 0, 0.4); /* Black background with opacity */
        }

        .modal-content {
            background-color: white;
            margin: 15% auto; /* 15% from top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 90%; /* Could be more or less, depending on screen size */
            max-width: 400px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .modal-content h2 {
            margin-bottom: 20px;
        }

        .modal-content button {
            width: 100%;
            margin: 10px 0;
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .modal-content button.delivery {
            background-color: #28a745;
            color: white;
        }

        .modal-content button.pickup {
            background-color: #6c757d;
            color: white;
        }

        .modal-content button.confirm {
            background-color: #007bff;
            color: white;
        }

        .modal-content .close {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 20px;
            cursor: pointer;
            background: none;
            border: none;
        }
    </style>
<?php
include 'header.php';
?>
    <div class="main-content">
        <img class="smallhome" src="Images/home logo.png" /><h2>/Choose you Meal!</h2>
        <h6>Menu/ Chicken Inasal</h6>
        <div class="menu-items">
          <a href="Group Meals.php"><div class="menu-item active">Group Meals</div></a>
          <a href="Chicken Inasal.php"><div class="menu-item">Chicken Inasal</div></a>
          <a href="Halo-Halo.php"><div class="menu-item">Halo-Halo</div></a>
          <a href="Palabok.php"><div class="menu-item">Palabok</div></a>
          <a href="Grilled Pork.php"><div class="menu-item">Grilled Pork</div></a>
          <a href="Sisig.php"><div class="menu-item">Sisig</div></a>
          <a href="Togue.php"><div class="menu-item">Lumpiang Togue</div></a>
          <a href="Rice Meals.php"><div class="menu-item">Rice Meals</div></a>
        </div>
      </div>
      <div class="menu-container">
        <div class="menu-item">
          <img src="Images/-Solo-Fiesta-Paa-BBQ..jpg" alt="Solo-Fiesta-Paa-BBQ">
          <p>Chicken Inasal & 1 pc Pork BBQ Solo Fiesta</p>
          <?php if ($isLoggedIn): ?>
            <form action="order.php" method="POST">
                <input type="hidden" name="item" value="Chicken Inasal & 1 pc pork BBQ Solo Fiesta">
                <input type="hidden" name="quantity" value="1">
                <input type="hidden" name="price" value="120">
                <button type="submit">Order Now</button>
            </form>
        <?php else: ?>
          <a href="javascript:void(0);" class="split" onclick="toggleForm('loginForm')"> <button>Order Now</button></a>
            </a>
        <?php endif; ?>
        </div>
      
        <div class="menu-item">
          <img src="Images/-Solo-Fiesta-Paa.jpg" alt="Solo-Fiesta-Paa">
          <p>Chicken Inasal Solo Fiesta</p>
          <?php if ($isLoggedIn): ?>
            <form action="order.php" method="POST">
                <input type="hidden" name="item" value="Chicken Inasal Solo Fiesta">
                <input type="hidden" name="quantity" value="1">
                <input type="hidden" name="price" value="210">
                <button type="submit">Order Now</button>
            </form>
        <?php else: ?>
          <a href="javascript:void(0);" class="split" onclick="toggleForm('loginForm')"> <button>Order Now</button></a>
            </a>
        <?php endif; ?>
        </div>

        <div class="menu-item">
          <img src="Images/Paa-large2.jpg" alt="Paa Large - PM1">
          <p>Paa Large - PM1</p>
          <?php if ($isLoggedIn): ?>
            <form action="order.php" method="POST">
                <input type="hidden" name="item" value="Paa Large - PM1rz">
                <input type="hidden" name="quantity" value="1">
                <input type="hidden" name="price" value="180">
                <button type="submit">Order Now</button>
            </form>
        <?php else: ?>
          <a href="javascript:void(0);" class="split" onclick="toggleForm('loginForm')"> <button>Order Now</button></a>
            </a>
        <?php endif; ?>
        </div>
      
        <div class="menu-item">
          <img src="Images/TSM-pecho-22.jpg" alt="Pecho Large - PM2">
          <p>Pecho Large - PM2</p>
          <?php if ($isLoggedIn): ?>
            <form action="order.php" method="POST">
                <input type="hidden" name="item" value="Pecho Large - PM2zz">
                <input type="hidden" name="quantity" value="1">
                <button type="submit">Order Now</button>
            </form>
        <?php else: ?>
          <a href="javascript:void(0);" class="split" onclick="toggleForm('loginForm')"> <button>Order Now</button></a>
            </a>
        <?php endif; ?>
        </div>

        <div class="menu-item">
            <img src="Images/TSM-PAA-22.jpg" alt="Todo Solb Paa Large">
            <p>Todo Solb Paa Large</p>
            <?php if ($isLoggedIn): ?>
            <form action="order.php" method="POST">
                <input type="hidden" name="item" value="Todo Solb Paa Large">
                <input type="hidden" name="quantity" value="1">
                <button type="submit">Order Now</button>
            </form>
        <?php else: ?>
          <a href="javascript:void(0);" class="split" onclick="toggleForm('loginForm')"> <button>Order Now</button></a>
            </a>
        <?php endif; ?>
          </div>
        
          <div class="menu-item">
            <img src="Images/TSM-pecho-22.jpg" alt="Todo Solb Pecho Large">
            <p>Todo Solb Pecho Large</p>
            <?php if ($isLoggedIn): ?>
            <form action="order.php" method="POST">
                <input type="hidden" name="item" value="Todo Solb Pecho Large">
                <input type="hidden" name="quantity" value="1">
                <button type="submit">Order Now</button>
            </form>
        <?php else: ?>
          <a href="javascript:void(0);" class="split" onclick="toggleForm('loginForm')"> <button>Order Now</button></a>
            </a>
        <?php endif; ?>
          </div>
  
          <div class="menu-item">
            <img src="Images/chicken-insal-regular-33.jpg" alt="Chicken Inasal Regular">
            <p>Chicken Inasal Regular</p>
            <?php if ($isLoggedIn): ?>
            <form action="order.php" method="POST">
                <input type="hidden" name="item" value="Chicken Inasal Regular">
                <input type="hidden" name="quantity" value="1">
                <button type="submit">Order Now</button>
            </form>
        <?php else: ?>
          <a href="javascript:void(0);" class="split" onclick="toggleForm('loginForm')"> <button>Order Now</button></a>
            </a>
        <?php endif; ?>
          </div>
        
          <div class="menu-item">
            <img src="Images/Fiesta-meal2.jpg" alt="Fiesta Meal">
            <p>Fiesta Meal</p>
            <?php if ($isLoggedIn): ?>
            <form action="order.php" method="POST">
                <input type="hidden" name="item" value="Fiesta Meal">
                <input type="hidden" name="quantity" value="1">
                <button type="submit">Order Now</button>
            </form>
        <?php else: ?>
          <a href="javascript:void(0);" class="split" onclick="toggleForm('loginForm')"> <button>Order Now</button></a>
            </a>
        <?php endif; ?>
          </div>

          <div class="menu-item">
            <img src="Images/Paa-Large-Family-Size-12.jpg" alt="Paa Large Family Size">
            <p>Paa Large Family Size</p>
            <?php if ($isLoggedIn): ?>
            <form action="order.php" method="POST">
                <input type="hidden" name="item" value="Paa Large Family Size">
                <input type="hidden" name="quantity" value="1">
                <button type="submit">Order Now</button>
            </form>
        <?php else: ?>
          <a href="javascript:void(0);" class="split" onclick="toggleForm('loginForm')"> <button>Order Now</button></a>
            </a>
        <?php endif; ?>
          </div>
        
          <div class="menu-item">
            <img src="Images/Chicken-Inasal-Regular-Family-Size2.jpg" alt="Chicken Inasal Regular Family Size">
            <p>Chicken Inasal Regular Family Size</p>
            <?php if ($isLoggedIn): ?>
            <form action="order.php" method="POST">
                <input type="hidden" name="item" value="Chicken Inasal Regular Family Size">
                <input type="hidden" name="quantity" value="1">
                <button type="submit">Order Now</button>
            </form>
        <?php else: ?>
          <a href="javascript:void(0);" class="split" onclick="toggleForm('loginForm')"> <button>Order Now</button></a>
            </a>
        <?php endif; ?>
          </div>
  
          <div class="menu-item">
            <img src="Images/Paa-Large-Family-Size-2.jpg" alt="Pecho Large Family Size">
            <p>Pecho Large Family Size</p>
            <?php if ($isLoggedIn): ?>
            <form action="order.php" method="POST">
                <input type="hidden" name="item" value="Pecho Large Family Size">
                <input type="hidden" name="quantity" value="1">
                <button type="submit">Order Now</button>
            </form>
        <?php else: ?>
          <a href="javascript:void(0);" class="split" onclick="toggleForm('loginForm')"> <button>Order Now</button></a>
            </a>
        <?php endif; ?>
          </div>
      </div>
    
      <div class="container">
        <div class="card">
          <img src="Images/oven.jpg" alt="Reheating Procedure" />
          <p>Reheating Procedure</p>
          <button><a href="Reheat.php">Find Out More</a></button>
        </div>
      
        <div class="card">
          <img src="Images/veggies.jpg" alt="Allergen Declaration" />
          <p>Allergen Declaration</p>
          
          <button><a href="Table.php">Find Out More</a></button>
        </div>
      </div>
      
      <div id="orderModal" class="modal">
    <div class="modal-content">
        <h2>Delivery or Pick-up?</h2>
        <div class="option-buttons">
            <button class="delivery" onclick="selectOption('Delivery')">Delivery</button>
            <button class="pickup" onclick="selectOption('Pick-up')">Pick-up</button>
        </div>
        <div class="delivery-time">
            <h4>Delivery Time:</h4>
            <label>
                <input type="radio" name="delivery-time" value="Now" checked> Now
            </label>
            <label>
                <input type="radio" name="delivery-time" value="Schedule for later"> Schedule for later
            </label>
        </div>
        <button class="confirm" onclick="confirmOrder()">Confirm</button>
    </div>
</div>

<script>
   // Open modal function
   function openModal() {
        document.getElementById("orderModal").style.display = "block";
    }

    // Close modal function
    function closeModal() {
        document.getElementById("orderModal").style.display = "none";
    }

    // Handle option selection
    function selectOption(option) {
        console.log(option + " selected");
        // Add logic to handle Delivery or Pick-up
    }

    // Confirm order function
    function confirmOrder() {
        // Add logic to submit the order
        alert("Order confirmed!");
        closeModal();
    }

    // Close modal when clicking outside of the modal content
    window.onclick = function(event) {
        const modal = document.getElementById("orderModal");
        if (event.target === modal) {
            modal.style.display = "none";
        }
    }
</script>

<?php
include 'footer.php';
?>

</body>
</html>

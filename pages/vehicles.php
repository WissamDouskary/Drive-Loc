<?php
session_start();

if($_SESSION['role_id'] == 2){

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drive & Loc - Our Vehicles</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        :root {
            --primary: #FFD700;
            --secondary: #FFFFFF;
        }
        .bg-primary { background-color: var(--primary); }
        .btn-primary { 
            background-color: var(--primary);
            transition: all 0.3s ease;
        }
        .btn-primary:hover { transform: translateY(-2px); }
        .card-animation { transition: transform 0.3s ease; }
        .card-animation:hover { transform: translateY(-5px); }
    </style>
</head>
<body class="bg-gray-50">
    <nav class="bg-primary shadow-lg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center space-x-4">
                    <a href="../index.php" class="text-2xl font-bold w-8 mr-24"><img src="../imgs/360_F_323469705_belmsoxt9kj49rxSmOBXpO0gHtfVJvjl-removebg-preview.png" alt="LOGO"></a>
                </div>
                <div class="hidden w-full md:block md:w-auto">
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium rounded-lg md:flex-row md:space-x-8 md:mt-0">
                    <li>
                        <a href="../index.php" class="block py-2 pl-3 pr-4 text-white hover:text-black-200 md:p-0">Home</a>
                    </li>
                    <li>
                        <a href="../pages/vehicles.php" class="block py-2 pl-3 pr-4 text-black-200 border-b-2 border-black-200 md:p-0">Cars</a>
                    </li>
                </ul>
                </div>
                <?php if(isset($_SESSION['user_id'])){ ?>
                    <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
      <button type="button" class="flex text-sm rounded-full md:me-0" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
        <span class="sr-only">Open user menu</span>
        <img width="40px" src="../imgs/profilephoto.png" alt="user photo">
      </button>
      <!-- Dropdown menu -->
      <div class="z-50 hidden absolute top-10 right-40 z-50 my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
        <div class="px-4 py-3">
          <span class="block text-sm text-gray-900 dark:text-white"><?php echo $_SESSION['nom'] . " " . $_SESSION['prenom'] ?></span>
          <span class="block text-sm  text-gray-500 truncate dark:text-gray-400"><?php echo $_SESSION['email'] ?></span>
        </div>
          <li>
            <a href="../classes/user.php?signout" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white ">Sign out</a>
          </li>
        </ul>
      </div>
      <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
  </div>
                <?php }else{ ?>
                <div class="flex items-center space-x-6">
                    <a href="../autentification/login.php">Login</a>
                    <a href="../autentification/signup.php" class="bg-white px-6 py-2 rounded-lg hover:bg-gray-100">Register</a>
                </div>
                <?php } ?>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold">Available Vehicles</h1>
            <div class="flex gap-4">
                <select class="border rounded-lg p-2">
                    <option>All Categories</option>
                    <option>City Cars</option>
                    <option>SUVs</option>
                    <option>Luxury</option>
                </select>
                <select class="border rounded-lg p-2">
                    <option>Price: Low to High</option>
                    <option>Price: High to Low</option>
                    <option>Newest First</option>
                </select>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Vehicle Card 1 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden card-animation">
                <img src="../imgs/pexels-mikebirdy-17539752.jpg" alt="Toyota Corolla" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <h3 class="font-bold text-xl">Toyota Corolla</h3>
                            <p class="text-gray-600">Compact Sedan</p>
                        </div>
                        <span class="bg-primary px-3 py-1 rounded-full text-sm">$45/day</span>
                    </div>
                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <div class="text-sm">
                            <p>✓ 5 Seats</p>
                            <p>✓ Automatic</p>
                        </div>
                        <div class="text-sm">
                            <p>✓ AC</p>
                            <p>✓ Bluetooth</p>
                        </div>
                    </div>
                    <a href="../pages/reservation_page.php"><button class="btn-primary w-full py-2 rounded-lg">Reserve Now</button></a>
                </div>
            </div>

            <!-- More vehicle cards... -->
        </div>

        <!-- Pagination -->
        <div class="flex justify-center space-x-2 mt-8">
            <button class="px-4 py-2 rounded-lg border hover:bg-gray-100">Previous</button>
            <button class="px-4 py-2 rounded-lg border bg-primary">1</button>
            <button class="px-4 py-2 rounded-lg border hover:bg-gray-100">2</button>
            <button class="px-4 py-2 rounded-lg border hover:bg-gray-100">3</button>
            <button class="px-4 py-2 rounded-lg border hover:bg-gray-100">Next</button>
        </div>
    </main>

    <footer class="bg-gray-800 text-white py-8 mt-12">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p>&copy; 2024 Drive & Loc. All rights reserved.</p>
        </div>
    </footer>
    <script src="../scripts/script.js"></script>
</body>
</html>
<?php 
}else{
    header('location: ../autentification/signup.php');
    exit();
}
?>
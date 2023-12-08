<aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
    <div class="p-6">
        <a href="/" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
    </div>
    <nav class="text-white text-base font-semibold pt-3">
        <a href="/" class="flex items-center <?= $_SERVER['REQUEST_URI'] == '/' ? 'active-nav-link' : '' ?> 
            text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-tachometer-alt mr-3"></i>
            Dashboard
        </a>
        <!-- <a href="blank.php" class="flex items-center active-nav-link text-white py-4 pl-6 nav-item">
            <i class="fas fa-sticky-note mr-3"></i>
            Blank Page
        </a>
        <a href="tables.php" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-table mr-3"></i>
            Tables
        </a>
        <a href="forms.php" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-align-left mr-3"></i>
            Forms
        </a> -->
        <a href="/ingredients/create"
            class="flex items-center <?= $_SERVER['REQUEST_URI'] == '/ingredients/create' ? 'active-nav-link' : '' ?>  text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-align-left mr-3"></i>
            Ingredient
        </a>
        <a href="/dishes"
            class="flex items-center <?= $_SERVER['REQUEST_URI'] == '/dishes' ? 'active-nav-link' : '' ?>  text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-tablet-alt mr-3"></i>
            Dishes
        </a>


        <!-- <a href="calendar.php" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-calendar mr-3"></i>
            Calendar
        </a> -->
    </nav>
</aside>
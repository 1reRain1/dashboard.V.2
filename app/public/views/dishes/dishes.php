<?php require '/app/public/views/partials/head.php' ?>
<?php require "/app/public/views/partials/aside.php" ?>


<div class="relative w-full flex flex-col h-screen overflow-y-hidden">

        <?php require '/app/public/views/partials/desktopheader.php' ?>
        <?php require '/app/public/views/partials/dropdown-nav.php' ?>

        <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">

                <main class="w-full flex-grow p-6 ">
                        <div>
                                <h1 class="text-3xl text-black pb-6 ">Tabbed Content</h1>
                                <div class="w-full lg:w-1/3 mt-6 pl-0 lg:pl-2">
                                        <div class="leading-loose">
                                                <form class="p-8 bg-white rounded shadow-xl" method="post">

                                                        <div>
                                                                <p class="text-lg text-gray-800 font-medium pb-4">Dish
                                                                        information</p>
                                                                <p class="text-lg text-gray-800 font-medium pb-1 pt-6">
                                                                        New Dish
                                                                </p>
                                                                <div class=" mt-2 pr-1">
                                                                        <label class="hidden block text-sm text-gray-600"
                                                                                for="DishName">
                                                                        </label>
                                                                        <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded"
                                                                                id="DishName" name="dishname"
                                                                                type="text" placeholder="Dish Name"
                                                                                aria-label="Dish Name"
                                                                                value="<?= $_POST["dishname"] ?? '' ?>" />
                                                                </div>
                                                        </div>
                                                        <?php if (isset($errors['body'])): ?>
                                                                <p class="text-red-500 text-xs mt-2">
                                                                        <?= $errors['body'] ?>
                                                                </p>
                                                        <?php endif; ?>
                                                        <button class="px-4 py-1 mt-8 text-white font-light tracking-wider bg-blue-800 rounded"
                                                                type="submit">Submit New dish</button>
                                                </form>
                                        </div>
                                </div>


                                <?php foreach ($dishes as $dish): ?>
                                        <div class="w-1/2 mt-6 rounded shadow-xl  ">
                                                <div class="bg-white p-6">
                                                        <div id="" class="">
                                                                <p class="text-xl pb-3 flex items-center mb-3">
                                                                        <i class="fas fa-list mr-3"></i>

                                                                        <?php echo $dish['name'] ?>
                                                                </p>
                                                                <table class="min-w-full bg-white ">
                                                                        <thead class="bg-gray-800 text-white">
                                                                                <tr>
                                                                                        <th
                                                                                                class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">
                                                                                                Ingrediens</th>
                                                                                        <th
                                                                                                class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">
                                                                                                Price</th>
                                                                                        <th
                                                                                                class="text-left py-3 px-4 uppercase font-semibold text-sm">
                                                                                                Amount</th>
                                                                                        <th
                                                                                                class="text-left py-3 px-4 uppercase font-semibold text-sm">
                                                                                                Total
                                                                                        </th>
                                                                                </tr>
                                                                        </thead>
                                                                        <tbody class="text-gray-700">
                                                                                <tr>
                                                                                        <td class="w-1/3 text-left py-3 px-4">
                                                                                                Lian</td>
                                                                                        <td class="w-1/3 text-left py-3 px-4">
                                                                                                Smith</td>
                                                                                        <td class="text-left py-3 px-4">
                                                                                                777775552
                                                                                        </td>
                                                                                        <td class="text-left py-3 px-4">
                                                                                                jonsmith@mail.com
                                                                                        </td>
                                                                                </tr>
                                                                        </tbody>
                                                                </table>
                                                        </div>
                                                </div>
                                        </div>
                                <?php endforeach; ?>
                </main>
        </div>

</div>

<?php require "/app/public/views/partials/footer.php"; ?>
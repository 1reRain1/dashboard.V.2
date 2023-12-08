<?php require '/app/public/views/partials/head.php' ?>
<?php require "/app/public/views/partials/aside.php" ?>
<?php require "/app/public/db.con.php"; ?>

<div class="relative w-full flex flex-col h-screen overflow-y-hidden">

    <?php require '/app/public/views/partials/desktopheader.php' ?>
    <?php require '/app/public/views/partials/dropdown-nav.php' ?>

    <div class="w-full h-screen overflow-x-hidden border-t flex flex-col ">
        <main class="w-full flex-grow p-6">
            <div class="flex flex-wrap">
                <div class="w-full lg:w-1/2 mt-6 pl-0 lg:pl-2">
                    <p class="text-xl pb-6 flex items-center">
                        <i class="fas fa-list mr-3"></i> New Ingredient
                    </p>
                    <div class="leading-loose">
                        <form class="p-10 bg-white rounded shadow-xl" method="post">
                            <p class="text-lg text-gray-800 font-medium pb-4">Ingredient information</p>
                            <div>
                                <p class="text-lg text-gray-800 font-medium pb-1 pt-6">ingredients (DA) </p>
                                <div class="inline-block mt-2 w-1/2 pr-1">
                                    <label class="hidden block text-sm text-gray-600" for="ingredientName">Name</label>
                                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded"
                                        id="ingredientName" name="ingredientName" type="text" required
                                        placeholder="Name" aria-label="Name">
                                </div>
                                <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                                    <label class="hidden block text-sm text-gray-600"
                                        for="ingredientPrice">Price</label>
                                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded"
                                        id="ingredientPrice" name="ingredientprice" type="int" required
                                        placeholder="Price (DA)" aria-label="Price">
                                </div>
                            </div>
                            <div class="flex items-center justify-center">
                                <button class="px-4 py-1 mt-8 text-white font-light tracking-wider bg-blue-800 rounded"
                                    type="submit">Submit New Ingredient</button>
                            </div>
                        </form>
                    </div>
                    <div class="w-full mt-12">
                        <p class="text-xl pb-3 flex items-center">
                            <i class="fas fa-list mr-3"></i> All ingredients
                        </p>
                        <div class="bg-white overflow-auto">
                            <table class="min-w-full bg-white">
                                <thead class="bg-gray-800 text-white">
                                    <tr>
                                        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Name</th>

                                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Price</th>
                                    </tr>
                                </thead>

                                <tbody class="text-gray-700">
                                    <?php foreach ($ingredients as $ingredient): ?>
                                        <tr>
                                            <td class="w-1/3 text-left py-3 px-4">
                                                <?= $ingredient["name"] ?>
                                            </td>
                                            <td class="w-1/3 text-left py-3 px-4">
                                                <?= $ingredient["price"] ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </main>
</div>

</div>

<?php require "/app/public/views/partials/footer.php";
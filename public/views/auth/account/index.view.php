<?php

require('public/views/partials/head.php');

require('public/views/partials/nav.php');

?>

<div class='flex flex-col h-screen bg-white'>

    <!-- table -->


    <div  class="bg-gray-800 w-full text-white text-center text-xl p-4 mt-4">
        <h2 class="font-medium">Moje oferty</h2>
    </div>
    
    <div class="overflow-x-auto shadow-md ">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nazwa
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Zdjecie
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Kategoria
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Ocena
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Cena
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Apple MacBook Pro 17"
                    </th>
                    <td class="px-6 py-4">
                        Zdjęcie
                    </td>
                    <td class="px-6 py-4">
                        Laptopy
                    </td>
                    <td class="px-6 py-4">
                        3.33
                    </td>
                    <td class="px-6 py-4">
                        399.99 zł
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>



            </tbody>
        </table>
    </div>


    <!-- end table -->
</div>

<?php

require('public/views/partials/footer.php');

?>

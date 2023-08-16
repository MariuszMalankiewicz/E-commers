<!-- products wrapper -->

<div class='flex flex-wrap justify-center items-center'>

<?php

foreach ($products as $key => $product) 
{

echo
"
    <div class='p-2'>

        <div class='w-40 h-72 flex flex-col justify-center items-center bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700'>

            <div class='px-5 pb-5 flex flex-col'>

                <h5 class='py-2 text-xs font-semibold tracking-tight text-gray-900 dark:text-white'>". ucfirst($product['name']) ."</h5>
                <span class='py-2 text-xs font-bold text-gray-900 dark:text-white'>". $product['price'] ." zł</span>
                <a href='#' class='py-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs px-1.25 py-1.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800'>Dodaj do koszyka</a>

            </div>

        </div>

    </div>
"; 
        
}   
?>



</div>
<!-- products wrapper -->

<div class='flex flex-wrap justify-center items-center'>

<?php

foreach ($products as $key => $product) 
{

echo
"
    <div class='p-2'>
        <div class='w-40 h-72 flex flex-col justify-center items-center bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700'>
            <a href='#'>
                <img class='w-36 h-20 my-1.5 border border-transparent rounded-lg' src='data:image/jpeg;base64, ".base64_encode( $product['img'] ) ."' />
            </a>
            <div class='px-5 pb-5'>
                <a href='#'>
                    <h5 class='text-xs font-semibold tracking-tight text-gray-900 dark:text-white'>". ucfirst($product['name']) ."</h5>
                </a>
                <div class='flex items-center justify-between'>
                    <span class='text-xs font-bold text-gray-900 dark:text-white'>". $product['price'] ." zł</span>
                    <a href='#' class='text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs px-1.25 py-1.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800'>Dodaj do koszyka</a>
                </div>
            </div>
        </div>
    </div>
"; 
        
}   
?>



</div>
<?php

require base_path('views/partials/head.php');

require base_path('views/partials/nav.php');

require base_path('views/partials/header.php');
?>

<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
    <form method="POST" action="/products" enctype="multipart/form-data">

        <div class="w-full h-full flex flex-col sm:flex-row">

            <div class="w-full flex justify-center items-center mb-4 sm:w-1/3">
                <img class="w-24 h-24" src="/imgs/example_img.png" alt="image description">
                
            </div>

            <div class="w-full flex flex-col justify-center items-center sm:w-2/3">

                <div class="w-full md:w-3/4 px-3">
                <label 
                    class="block text-center uppercase tracking-wide text-grey-darker text-xs font-bold mb-2 sm:text-left" 
                    for="productName">
                    Nazwa
                </label>
                <input 
                    class="w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" 
                    id="productName" 
                    type="text"
                    name="name"
                    placeholder="Nazwa produktu"
                    minlength="3"
                    maxlength="50"
                    value='<?= isset($_POST['name']) ? $_POST['name'] : '' ?>'
                    >
                </div>

                <?= isset($errors['nameLength']) ? '<p class="text-red-500 text-sm font-bold mb-3">'.$errors['nameLength'].'</p>' : ''; ?>

                <div class="w-full md:w-3/4 px-3">
                <label 
                    class="block text-center uppercase tracking-wide text-grey-darker text-xs font-bold mb-2 sm:text-left" 
                    for="categoryProduct">
                    Kategoria
                </label>
                <select 
                    class="w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" 
                    id="categoryProduct"
                    name="category"
                    >
                    <option value="Telefony">Telefony</option>
                    <option value="Zegarki">Zegarki</option>
                </select>
                </div>

                <div class="w-full md:w-3/4 px-3">
                <label 
                    class="block uppercase text-center tracking-wide text-grey-darker text-xs font-bold mb-2 sm:text-left" 
                    for="priceProduct">
                    Cena
                </label>
                <input 
                    class="w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" 
                    id="priceProduct"
                    name="price"
                    type="number"
                    min="0.01"
                    max="10000.00" 
                    step="0.01"
                    placeholder="Cena produktu"
                    value='<?= isset($_POST['price']) ? $_POST['price'] : '' ?>'
                    >
                    
                </div>

                <?= isset($errors['priceLength']) ? '<p class="text-red-500 text-sm font-bold mb-3">'.$errors['priceLength'].'</p>' : ''; ?>

                <div class="mt-2 w-full text-center sm:text-left md:w-3/4 px-3">
                    <button 
                        class="bg-blue-700 hover:bg-blue-600 text-white font-bold py-2 px-10 sm:px-20 rounded focus:outline-none focus:shadow-outline" 
                        type="submit" 
                        name="add">
                        Dodaj
                    </button>
                    <a class="pl-4" href="/products">Powrót</a>
                </div>

            </div>

        </div>

    </form>
</div>

<?php

require base_path('views/partials/footer.php');

?>

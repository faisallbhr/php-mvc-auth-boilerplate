<?php
$title = 'Products';
ob_start();
?>

<section class="bg-white rounded p-4 shadow-lg">
    <h2 class="font-bold text-xl mb-4">Products List</h2>
    <div class="max-w-full overflow-x-auto">
        <button id="openProductModal"
            class="bg-cyan-500 hover:bg-cyan-600 text-white font-semibold py-2 px-4 rounded mb-4">
            Add New Product
        </button>
        <table class="w-full table-auto">
            <thead>
                <tr class="bg-gray-300">
                    <th class="py-4 px-4 font-medium w-[20px]">No</th>
                    <th class="py-4 px-4 font-medium">Thumbnail</th>
                    <th class="py-4 px-4 font-medium">Name</th>
                    <th class="py-4 px-4 font-medium">Price</th>
                    <th class="py-4 px-4 font-medium">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products['data'] as $product): ?>
                    <tr>
                        <td class="border-b border-[#eee] py-5 px-4"><?= $product->id ?></td>
                        <td class="border-b border-[#eee] py-5 px-4 w-40">
                            <img src="<?= $product->thumbnail ?>" alt="" class="w-20 h-20 object-cover mx-auto">
                        </td>
                        <td class="border-b border-[#eee] py-5 px-4 text-center"><?= $product->name ?></td>
                        <td class="border-b border-[#eee] py-5 px-4 text-center">$<?= $product->price ?></td>
                        <td class="border-b border-[#eee] py-5 px-4">
                            <form action="/products/<?= $product->id ?>" method="post"
                                class="flex items-center space-x-3.5 justify-center">
                                <a href="/products/<?= $product->id ?>" class="hover:text-blue-500">
                                    <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.99981 14.8219C3.43106 14.8219 0.674805 9.50624 0.562305 9.28124C0.47793 9.11249 0.47793 8.88749 0.562305 8.71874C0.674805 8.49374 3.43106 3.20624 8.99981 3.20624C14.5686 3.20624 17.3248 8.49374 17.4373 8.71874C17.5217 8.88749 17.5217 9.11249 17.4373 9.28124C17.3248 9.50624 14.5686 14.8219 8.99981 14.8219ZM1.85605 8.99999C2.4748 10.0406 4.89356 13.5562 8.99981 13.5562C13.1061 13.5562 15.5248 10.0406 16.1436 8.99999C15.5248 7.95936 13.1061 4.44374 8.99981 4.44374C4.89356 4.44374 2.4748 7.95936 1.85605 8.99999Z"
                                            fill="" />
                                        <path
                                            d="M9 11.3906C7.67812 11.3906 6.60938 10.3219 6.60938 9C6.60938 7.67813 7.67812 6.60938 9 6.60938C10.3219 6.60938 11.3906 7.67813 11.3906 9C11.3906 10.3219 10.3219 11.3906 9 11.3906ZM9 7.875C8.38125 7.875 7.875 8.38125 7.875 9C7.875 9.61875 8.38125 10.125 9 10.125C9.61875 10.125 10.125 9.61875 10.125 9C10.125 8.38125 9.61875 7.875 9 7.875Z"
                                            fill="" />
                                    </svg>
                                </a>
                                <input type="text" name="_method" value="DELETE" hidden>
                                <button class="hover:text-red-500"
                                    onclick="return confirm('Are you sure want to delete <?= $product->name ?>?')">
                                    <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.7535 2.47502H11.5879V1.9969C11.5879 1.15315 10.9129 0.478149 10.0691 0.478149H7.90352C7.05977 0.478149 6.38477 1.15315 6.38477 1.9969V2.47502H4.21914C3.40352 2.47502 2.72852 3.15002 2.72852 3.96565V4.8094C2.72852 5.42815 3.09414 5.9344 3.62852 6.1594L4.07852 15.4688C4.13477 16.6219 5.09102 17.5219 6.24414 17.5219H11.7004C12.8535 17.5219 13.8098 16.6219 13.866 15.4688L14.3441 6.13127C14.8785 5.90627 15.2441 5.3719 15.2441 4.78127V3.93752C15.2441 3.15002 14.5691 2.47502 13.7535 2.47502ZM7.67852 1.9969C7.67852 1.85627 7.79102 1.74377 7.93164 1.74377H10.0973C10.2379 1.74377 10.3504 1.85627 10.3504 1.9969V2.47502H7.70664V1.9969H7.67852ZM4.02227 3.96565C4.02227 3.85315 4.10664 3.74065 4.24727 3.74065H13.7535C13.866 3.74065 13.9785 3.82502 13.9785 3.96565V4.8094C13.9785 4.9219 13.8941 5.0344 13.7535 5.0344H4.24727C4.13477 5.0344 4.02227 4.95002 4.02227 4.8094V3.96565ZM11.7285 16.2563H6.27227C5.79414 16.2563 5.40039 15.8906 5.37227 15.3844L4.95039 6.2719H13.0785L12.6566 15.3844C12.6004 15.8625 12.2066 16.2563 11.7285 16.2563Z"
                                            fill="" />
                                        <path
                                            d="M9.00039 9.11255C8.66289 9.11255 8.35352 9.3938 8.35352 9.75942V13.3313C8.35352 13.6688 8.63477 13.9782 9.00039 13.9782C9.33789 13.9782 9.64727 13.6969 9.64727 13.3313V9.75942C9.64727 9.3938 9.33789 9.11255 9.00039 9.11255Z"
                                            fill="" />
                                        <path
                                            d="M11.2502 9.67504C10.8846 9.64692 10.6033 9.90004 10.5752 10.2657L10.4064 12.7407C10.3783 13.0782 10.6314 13.3875 10.9971 13.4157C11.0252 13.4157 11.0252 13.4157 11.0533 13.4157C11.3908 13.4157 11.6721 13.1625 11.6721 12.825L11.8408 10.35C11.8408 9.98442 11.5877 9.70317 11.2502 9.67504Z"
                                            fill="" />
                                        <path
                                            d="M6.72245 9.67504C6.38495 9.70317 6.1037 10.0125 6.13182 10.35L6.3287 12.825C6.35683 13.1625 6.63808 13.4157 6.94745 13.4157C6.97558 13.4157 6.97558 13.4157 7.0037 13.4157C7.3412 13.3875 7.62245 13.0782 7.59433 12.7407L7.39745 10.2657C7.39745 9.90004 7.08808 9.64692 6.72245 9.67504Z"
                                            fill="" />
                                    </svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        <?= $pagination ?>
    </div>
</section>

<div id="productModal" class="fixed z-[9999] inset-0 hidden bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full">
    <div class="relative top-1/4 -translate-y-1/4 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
        <h3 class="text-xl font-bold text-gray-900 mb-4 text-center">ADD NEW PRODUCT</h3>
        <form action="/products" method="post" enctype="multipart/form-data">
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" id="name" name="name" class="mt-1 p-2 border w-full rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="thumbnail" class="block text-sm font-medium text-gray-700">Thumbnail</label>
                <input type="file" name="thumbnail" id="thumbnail"
                    class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-black"
                    required>
            </div>
            <div class="mb-4">
                <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                <input type="text" id="price" name="price" class="mt-1 p-2 border w-full rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea id="description" name="description" rows="4"
                    class="mt-1 p-2 border w-full rounded-md"></textarea>
            </div>
            <div class="flex justify-end">
                <button type="button" id="closeProductModal"
                    class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mr-2">
                    Cancel
                </button>
                <button type="submit" class="bg-cyan-500 hover:bg-cyan-600 text-white font-bold py-2 px-4 rounded">
                    Add
                </button>
            </div>
        </form>
    </div>
</div>

<?php
ob_start();
?>
<script>
    $(document).ready(function () {
        $('#openProductModal').click(function () {
            $('#productModal').removeClass('hidden');
        });

        $('#closeProductModal').click(function () {
            $('#productModal').addClass('hidden');
        });

        $(window).click(function (event) {
            if (event.target.id == 'productModal') {
                $('#productModal').addClass('hidden');
            }
        });
    })
</script>
<?php
$scripts = ob_get_clean();
?>

<?php
$content = ob_get_clean();
include __DIR__ . '/../../layouts/authenticated.php';
?>
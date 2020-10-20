<div class="w-9/12 my-20 ">
  <div class="w-full mx-auto">
    <div class="w-full flex flex-wrap justify-center">
      <?php foreach ($pizzas as $pizza) : ?>
        <div class="bg-gray-200 py-6 px-6 rounded-md text-center mx-3 my-3 w-4/12">
          <h1 class="font-sans text-xl font-semibold tracking-tight text-center text-gray-800 py-5">
            <?php echo htmlspecialchars($pizza['title']) ?>
          </h1>
          <div class="w-full flex">
            <?php foreach (explode(',', $pizza['ingredients']) as $ing) : ?>
              <div class="w-4/12 inline-flex items-center justify-center bg-gray-100 rounded-lg mx-1">
                <h1 class="font-sans text-xl font-normal tracking-tight">
                  <?php echo htmlspecialchars($ing) ?>
                </h1>
              </div>
            <?php endforeach ?>
          </div>
          <div class=" text-right border-gray-400 mt-4 border-t-2 ">
            <a href="details.php?id=<?php echo $pizza['id']; ?>">
              <button class="mt-4 p-2 antialiased"> View More </button>
            </a>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</div>
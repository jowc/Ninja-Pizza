<div class="w-full my-20">
  <div class="max-w-5xl w-full mx-auto">
    <div class="w-full flex">
      <?php foreach ($pizzas as $pizza) : ?>
        <div class="w-4/12 bg-gray-200 py-6 px-6 rounded text-center mx-3">
          <h1 class="font-mono text-xl font-semibold tracking-tight text-center text-gray-800 py-5">
            <?php echo htmlspecialchars($pizza['title']) ?>
            Ninja Pizza
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
            <button href="#" class="mt-4 p-2 antialiased"> View More </button>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</div>
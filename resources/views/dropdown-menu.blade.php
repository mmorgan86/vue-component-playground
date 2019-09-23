<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Dropdown Menu</title>
  <meta name="description" content="">
  <meta name="author" content="">

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

</head>
<body>

    <div id="app" class="flex flex-col items-center p-8">

        <h3 class="text-2xl font-bold mb-8">Dropdown Menu</h3>

        <div>
            <div class="bg-gray-400 w-64 h-64 flex items-center justify-center">
                <dropdown classes="uppercase">
                    <template v-slot:trigger>
                        <button>...</button>
                    </template>

                    <li><a href="#" class="pl-2 leading-loose pr-8 text-xs block hover:bg-blue-500">Edit</a></li>
                    <li><a href="#" class="pl-2 leading-loose pr-8 text-xs block hover:bg-blue-500">Delete</a></li>
                    <li><a href="#" class="pl-2 leading-loose pr-8 text-xs block hover:bg-blue-500">Report</a></li>
                </dropdown>
            </div>
        </div>

        <hr>

        <dropdown classes="w-full">
            <template v-slot:trigger>
                <button>Click Me For More Options</button>
            </template>

            <li><a href="#" class="pl-2 leading-loose pr-8 text-xs block hover:bg-blue-500">Edit</a></li>
            <li><a href="#" class="pl-2 leading-loose pr-8 text-xs block hover:bg-blue-500">Delete</a></li>
            <li><a href="#" class="pl-2 leading-loose pr-8 text-xs block hover:bg-blue-500">Report</a></li>
        </dropdown>
    </div>


    <script src="js/app.js"></script>
</body>
</html>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Conditional Visibility</title>
  <meta name="description" content="">
  <meta name="author" content="">

     <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">


</head>
<body>
    <div id="app" class="relative flex flex-col items-center p-8">
        <div class="flex menu">
            <div class="list-item">Home</div>
            <div class="list-item">About</div>
            <div class="list-item">Contact</div>

        </div>
        <visible when-hidden=".menu">
            <div class="row w-100">
                <div class="fixed flex">
                    <div class="list-item">Home</div>
                    <div class="list-item">About</div>
                    <div class="list-item">Contact</div>
                </div>
            </div>
        </visible>
        <h1 class="text-2xl font-bold mb-8">Conditional Visibility</h1>

        <div class="container w-3/4 bg-gray-200 p-4" style="height: 1000px">
            <a id="new-post-link" href="#" class="text-blue-500">New Post</a>

            <visible when-hidden="#new-post-link">
                <button class="bg-blue-500 hover:bg-blue-600 rounded-full w-24 h-24 text-white text-4xl fixed z-10
                right-0 bottom-0
                mr-4 mb-4">+</button>
            </visible>
        </div>

    </div>

    <script src="/js/app.js"></script>
</body>
</html>

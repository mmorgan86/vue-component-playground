<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Smooth Scrolling</title>
  <meta name="description" content="">
  <meta name="author" content="">

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div id="app" class="p-8">
        <h1 class="text-2xl font-bold">Smooth Scroll</h1>

            <scroll-link href="#categories" class="text-blue-500">Go To Testimonials</scroll-link>
{{--        <a href="#categories" class="text-blue-500" @click.prevent="scrollTo('#categories')">Testimonials</a>--}}

        <div style="height: 1000px"></div>

        <div id="categories">
            <h2 class="font-bold mb-6">Testimonials</h2>

            <div class="flex">
                <div class="w-1/3 h-48 bg-gray-200 p-4">
                    <scroll-link href="#app" class="text-blue-500">Back To Top</scroll-link>
{{--                    <a href="#app" class="text-blue-500" @click.prevent="scrollTo('#app')">Back To Top</a>--}}
                </div>
                <div class="w-1/3 h-48 bg-gray-200 p-4">Item</div>
                <div class="w-1/3 h-48 bg-gray-200 p-4">Item</div>
            </div>
        </div>

    </div>


    <script src="js/app.js"></script>
</body>
</html>

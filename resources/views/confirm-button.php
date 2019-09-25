<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Confirm Dialogs</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div id="app" class="text-center">
    <h1 class="text-2xl font-bold mb-8">Confirm Dialogs</h1>

    <div class="mb-6">
        <form method="POST">
            <confirm-button
                message="Are you sure you want to cancel your account?"
                class="bg-blue-500 hover:bg-blue-600 py-2 px-4 text-white rounded-lg"
            >
                Option 1
            </confirm-button>
        </form>
    </div>

    <div class="mb-6">
        <form method="POST">
            <confirm-button
                message="Are you sure you want to cancel your account?"
                cancel-button="Go Back"
                confirm-button="Go On"
                class="bg-blue-500 hover:bg-blue-600 py-2 px-4 text-white rounded-lg"
            >
                Option 2
            </confirm-button>
        </form>
    </div>

    <confirm-dialog></confirm-dialog>
</div>


<script src="/js/app.js"></script>
</body>
</html>

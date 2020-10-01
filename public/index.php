<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>AJAX</title>
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" />
        <script src="src/jquery/jquery-3.5.1.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="" id="">
            <form class="text-center" method="post" id="">
                <div class="m-4">
                    <label for="username">Username: </label>
                    <input class="username shadow appearance-none border rounded w-1/2 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="username" id="username" />
                </div>
                <div class="m-4">
                    <label for="lastname">Lastname: </label>
                    <input class="lastname shadow appearance-none border rounded w-1/2 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="lastname" id="lastname" /> 
                </div>
                <div class="m-4">
                    <input class="submit cursor-pointer bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button" name="submit" value="submit" id="submit" />
                </div>
                <script src="src/js/ajax.js"></script>
            </form>
            <div id="response"></div>
        </div>
    </body>
</html>
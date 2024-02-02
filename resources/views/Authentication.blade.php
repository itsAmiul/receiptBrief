<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Tailwind Css -->
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Authentication</title>
</head>
<body>

<section class="w-[80vw] min-h-[100vh] mx-auto flex items-center justify-around" >

    <!-- Login -->
    <div class="w-[30%] min-h-[20vh] bg-gray-100 py-8 px-4 rounded border-[1px] border-gray-500">
        <form action="/login" method="POST" class="flex flex-col gap-y-4">
            @csrf
            <h1 class="text-lg font-[700]">Login To Your Account :</h1>
            <input type="text" name="email" placeholder="Email Address" class="px-4 py-2 rounded border-[1px] border-gray-600 outline-none"/>
            <input type="password" name="password" placeholder="Password" class="px-4 py-2 rounded border-[1px] border-gray-600 outline-none"/>

            <button type="submit" class="bg-gray-600 text-white rounded py-2 font-[600] border-[1px] border-gray-600 hover:bg-gray-600/80 ">Login</button>
        </form>
    </div>

    <!-- Register -->
    <div class="w-[30%] min-h-[40vh] bg-gray-100 py-8 px-4 rounded border-[1px] border-gray-500">
        <form action="/register" method="POST" class="flex flex-col h-[30vh] gap-y-4 justify-center">
            @csrf
            <h1 class="text-lg font-[700]">Create A New Account :</h1>
            <input type="text" name="name" placeholder="Full Name" class="px-4 py-2 rounded border-[1px] border-gray-600 outline-none"/>
            <input type="text" name="email" placeholder="Email Address" class="px-4 py-2 rounded border-[1px] border-gray-600 outline-none"/>
            <input type="password" name="password" placeholder="Password" class="px-4 py-2 rounded border-[1px] border-gray-600 outline-none"/>

            <button type="submit" class="bg-gray-600 text-white rounded py-2 font-[600] border-[1px] border-gray-600 hover:bg-gray-600/80 ">Register</button>
        </form>
    </div>
</section>


</body>
</html>

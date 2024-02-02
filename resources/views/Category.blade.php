<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Tailwind Css -->
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Categories</title>
</head>
<body>

<section class="w-[80vw] min-h-[100vh] mx-auto"  >
    <h1 class="text-xl font-[700] mt-[50px] mb-4" > Add a Category </h1>

    <form action="/addCategory" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Receipt Name" class="px-4 py-2 rounded border-[1px] border-gray-600 outline-none" />
        <input type="text" name="description" placeholder="Receipt Description" class="px-4 py-2 rounded border-[1px] border-gray-600 outline-none" />

        <button type="submit" class="bg-gray-600 text-white rounded py-2 font-[600] border-[1px] border-gray-600 hover:bg-gray-600/80 px-8 ">Add Categories</button>
    </form>


    <div class="w-full h-auto mt-16" >
        <h1 class="text-xl font-[800]" >Category List</h1>
        <div class="flex flex-wrap mt-4 gap-x-8 gap-y-2" >
            @foreach($ctg as $category)
                <div class="bg-gray-300 border-[2px] border-gray-600 rounded py-4 px-[20px] w-[30%]" >
                    <h1>{{$category['title']}}</h1>
                    <p>{{$category['description']}}</p>
                    <p class="mt-2"><span class="font-[700]" >Created :</span> {{$category['created_at']}}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

</body>
</html>

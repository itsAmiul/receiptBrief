<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Tailwind Css -->
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Edit Receipt</title>
</head>
<body>

<section>

    <h1>Edit Receipt</h1>

    <form action="/editReceipt/{{$rtp->id}}" method="POST" >
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{$rtp->title}}" class="px-4 py-2 rounded border-[1px] border-gray-600 outline-none" />
        <input type="text" name="description" value="{{$rtp->description}}" class="px-4 py-2 rounded border-[1px] border-gray-600 outline-none" />
        <input type="text" name="Ingredients" value="{{$rtp->Ingredients}}" class="px-4 py-2 rounded border-[1px] border-gray-600 outline-none" />

        <button type="submit" class="bg-gray-600 text-white rounded py-2 font-[600] border-[1px] border-gray-600 hover:bg-gray-600/80 px-8 ">Add Receipt</button>
    </form>
</section>
</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Tailwind Css -->
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Search</title>
</head>
<body>


    <div>
        <form action="/SearchReceipt" method="POST">
            @csrf
            <input type="search" name="search" placeholder="Search Receipts" class="px-4 py-2 rounded border-[1px] border-gray-600 outline-none">
            <button type="submit" class="bg-gray-600 text-white rounded py-2 font-[600] border-[1px] border-gray-600 hover:bg-gray-600/80 px-8 " >Search A Receipt</button>
        </form>

        <div class="flex flex-wrap mt-4 mb-16 gap-x-8 gap-y-2" >

                @if(\PHPUnit\Framework\isEmpty($rtp))
                    @foreach($rtp as $receipt)
                        <div class="bg-gray-300 border-[2px] border-gray-600 rounded py-4 px-[20px] w-[30%]" >

                            <img src="uploads/{{$receipt['picture']}}" alt="Picture" class="rounded mb-[10px]" />
                            <h1><a href="/receiptDETAILS?id={{$receipt['id']}}" >{{$receipt['title']}}</a></h1>
                            <p>{{$receipt['description']}}</p>
                            <p>{{$receipt['Ingredients']}}</p>
                            <p class="mt-2"><span class="font-[700]" >Created :</span> {{$receipt['created_at']}}</p>

                            <div class="BTN mt-4 flex gap-x-4 items-center">
                                <a href="/editReceipt/{{$receipt['id']}}" class="bg-blue-700 text-white py-2 px-4 rounded" >Edit</a>
                                <form action="/deleteReceipt/{{$receipt['id']}}" method="POST" >
                                    @csrf
                                    @method('DELETE')
                                    <button class="bg-red-700 text-white py-2 px-4 rounded" type="submit" >Delete</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h1>No Found</h1>
                @endif
        </div>
    </div>


</body>
</html>

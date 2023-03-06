@if(count($errors) > 0)
    <div>
        @foreach($errors->all() as $error)
            <div>{{$error}}</div>
        @endforeach
    </div>
@endif

<form action="{{route('country.update', $item['id'])}}" method="post">
    {{csrf_field()}}
    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
    <input type="text" name="name" id="name" required
           value="{{$item['name']}}"
           class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight">

    <label for="name" id="iso" class="block text-gray-700 text-sm font-bold mb-2">ISO</label>
    <input type="text" name="iso" id="iso" required maxlength="2"
           value="{{$item['iso']}}"
           class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight">

    <button type="submit" class="bg-gray-800 mt-3 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Save
    </button>
</form>

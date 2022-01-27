@extends('posts.layout')
 
@section('content')

<!-- Start FORM -->
<div class="h-screen bg-blue-500 flex justify-center items-center">
  <div class="bg-white flex flex-col py-5 px-8 rounded-lg shadow-lg">

    <h2 class="text-center text-blue-400 font-bold text-2xl uppercase mb-10">LARAVEL 8 CRUD
      <a class="h-6 px-5 m-2 text-blue-100 transition-colors duration-150 bg-blue-400 rounded-lg focus:shadow-outline hover:bg-blue-400" href="{{ route('posts.create') }}">Create New Post</a>                    
    </h2>

    <!--Toast-->
    @if ($message = Session::get('success'))
        <div class="alert-toast fixed bottom-0 right-0 m-8 w-5/6 md:w-full max-w-sm">
        <input type="checkbox" class="hidden" id="footertoast">
        <label class="flex items-start justify-between w-full px-4 py-1 text-sm text-white bg-blue-400 rounded" for="footertoast">
            {{ $message }}
        </label>
        </div>
      @endif
    <!--END Toast-->

    <div class="container flex justify-center mx-auto">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="border-b border-gray-200 shadow">
                    <table>
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-2 text-xs text-gray-500">No</th>
                                <th class="px-6 py-2 text-xs text-gray-500">Name</th>
                                <th class="px-6 py-2 text-xs text-gray-500">Details</th>
                                <th class="px-6 py-2 text-xs text-gray-500">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach ($data as $key => $value)
                            <tr class="whitespace-nowrap">
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">
                                    {{ ++$i }}
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">
                                    {{ $value->title }}
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">
                                    {{ \Str::limit($value->description, 100) }}
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                        <form action="{{ route('posts.destroy',$value->id) }}" method="POST">   
                                            <a class="px-4 py-1 text-sm outline md:outline-2 rounded" href="{{ route('posts.show',$value->id) }}">Show</a>    
                                            <a class="px-4 py-1 text-sm outline md:outline-2 rounded" href="{{ route('posts.edit',$value->id) }}">Edit</a>   
                                                @csrf
                                                @method('DELETE')      
                                            <button type="submit" class="px-4 py-1 text-sm outline md:outline-2 rounded">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                            
                        </tbody>
                    </table>
                    
                    {!! $data->links() !!}    

                </div>
            </div>
        </div>
    </div>
    
  </div>
</div>
<!-- END FORM -->  

@endsection
@extends('posts.layout')
  
@section('content')

<!-- Start FORM -->
<div class="h-screen bg-blue-500 flex justify-center items-center">
  <div class="bg-white flex flex-col py-5 px-8 rounded-lg shadow-lg">

    <h2 class="text-center text-blue-400 font-bold text-2xl uppercase mb-10">Show Product
      <a class="h-6 px-5 m-2 text-blue-100 transition-colors duration-150 bg-blue-400 rounded-lg focus:shadow-outline hover:bg-blue-400" href="{{ route('posts.index') }}">Back</a>                    
    </h2>

    <div class="container flex justify-center mx-auto">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="border-b border-gray-200 shadow">
                    <table>
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-2 text-xs text-gray-500">Title</th>
                                <th class="px-6 py-2 text-xs text-gray-500">Description</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            <tr class="whitespace-nowrap">
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">
                                    {{ $post->title }}
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">
                                    {{ $post->description }}
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
  </div>
</div>
<!-- END FORM -->  

@endsection
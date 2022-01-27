@extends('posts.layout')
  
@section('content')

<!-- Start FORM -->
<div class="h-screen bg-blue-500 flex justify-center items-center">
  <div class="bg-white flex flex-col py-5 px-8 rounded-lg shadow-lg">

    <h2 class="text-center text-blue-400 font-bold text-2xl uppercase mb-10">Add New Product
      <a class="h-10 px-5 m-2 text-blue-100 transition-colors duration-150 bg-blue-400 rounded-lg focus:shadow-outline hover:bg-blue-400" href="{{ route('posts.index') }}">Back</a>
    </h2>

    <!--Toast-->
    @if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert-toast fixed bottom-0 right-0 m-8 w-5/6 md:w-full max-w-sm">
        <input type="checkbox" class="hidden" id="footertoast">
        <label class="flex items-start justify-between w-full px-4 py-1 text-sm text-white bg-blue-400 rounded" for="footertoast">
        {{ $error }}
        </label>
        </div>
    @endforeach
    @endif
    <!--END Toast-->

    <div class="container flex justify-center mx-auto">
        <div class="flex flex-col">
            <div class="w-full">
                    <form action="{{ route('posts.store') }}" method="POST">
                            @csrf   
                            <div class="px-6 py-4 text-gray-900">
                                <input type="text" name="title" class="form-control" placeholder="Enter Title">
                            </div>
                            <div class="px-6 py-4 text-gray-900">
                                <textarea class="form-control" style="height:50px" name="description" placeholder="Enter Description"></textarea>
                            </div>
                            <div class="px-6 py-4 text-gray-900">
                                <button type="submit" class="px-4 py-1 outline md:outline-2 rounded">Submit</button>
                            </div>
                    </form>
            </div>
        </div>
    </div>
    
  </div>
</div>
<!-- END FORM -->  
   
@endsection
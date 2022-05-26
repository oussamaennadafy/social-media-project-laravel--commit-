@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
     <div class="w-8/12 bg-white p-6 rounded-lg">
       {{$users}}
       <form action="" method="POST" class=" bg-white flex flex-col gap-2 p-6 rounded-lg">
        @csrf
       <input placeholder="name" value="{{ $users->name }}" class="bg-gray-200 border border-gray-300 rounded px-4 py-2" type="text" name="name" id="name">
       <input placeholder="email" value="{{ $users->email }}" class="bg-gray-200 border border-gray-300 rounded px-4 py-2" type="email" name="email" id="email">
       <input placeholder="username" value="{{ $users->username }}" class="bg-gray-200 border border-gray-300 rounded px-4 py-2" type="text" name="username" id="username">
       <input placeholder="New password"  class="bg-gray-200 border border-gray-300 rounded px-4 py-2" type="password" name="password" id="password">
       <input class="bg-blue-600 cursor-pointer w-1/4 mx-auto text-white mt-2 border border-gray-300 rounded px-4 py-2" value='edit my profile' type="submit" name="submit-profile">
       <button class="bg-gray-600 border w-1/4 mx-auto mt-2 border-gray-300 rounded text-white px-4 py-2">Back to Home</button>
      </form>
     </div>
    </div>
@endsection
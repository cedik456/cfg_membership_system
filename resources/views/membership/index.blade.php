<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Membership') }}
        </h2>
    </x-slot>

    <div class="py-12">
    <x-success-status class="mb-4" :status="session('message')" />

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
         <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">

        <div class="flex justify-between align-middle">
          <h1>Majo</h1>
          <a href="http://127.0.0.1:8000/add-membership">Create</a>
        </div>

         <table class="table table-bordered">
          
          <thead>
            <tr>
              <td>Id</td>
              <td>Name</td>
              <td>Address</td>
              <td>Age</td>
              <td>Gender</td>
              <td>Contact Info</td>
              <td>Promotion</td>
              <td>Edit</td>
              <td>Delete</td>
            </tr>
          </thead>
          <tbody>
            @forelse ($memberships as $membership)
            <tr>
              <td> {{ $membership->id }}</td>
              <td> {{ $membership->name }}</td>
              <td> {{ $membership->address }}</td>
              <td> {{ $membership->age }}</td>
              <td> {{ $membership->gender }}</td>
              <td> {{ $membership->contactInfo }}</td>
              <td> {{ $membership->duration }}</td>

              <td>
                <a href="{{ url('/edit-membership/'.$membership->id) }}" class="btn btn-primary">Edit</a>
              </td>

              <td>  
             <form action="{{ url('delete-membership/'.$membership->id) }}" method="POST">
              @csrf
              @method('DELETE') 
              <button class="btn btn-danger">Delete</button>
             </form>
            </td>
            </tr>

            @empty

            <tr>
              <td colspan="8 ">No Record Found</td>
            </tr>
            @endforelse
          </tbody>
         </table>

         </div>
       </div>
    </div>

</x-app-layout>
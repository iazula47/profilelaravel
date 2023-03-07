@include('partials.header')
<x-nav/>

<div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
    @if(Session::has('success'))
      <div class="alert alert-success" role="alert">
    {{session::get('success')}}
      </div>
    @endif
    <table class="table table-info table-striped">
      <thead class="bg-gray-50">
        <tr>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">ID</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Last Name</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">First Name</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Email</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Address</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900"></th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-100 border-t border-gray-100">
      @foreach ($customers as $customer)
      <tr class="hover:bg-gray-50">
      <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
            
            <div class="text-sm">

              <div class="font-medium text-gray-700">{{$customer->id}}</div>
              </div>
          </th>
          <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
            
            <div class="text-sm">

              <div class="font-medium text-gray-700">{{$customer->lastName}}</div>
              </div>
          </th>
  
          <td class="px-6 py-4">
          <div class="text-sm">
              <div class="font-medium text-gray-700">{{$customer->firstName}}</div>
              </div>
          </td>
  
          <td class="px-6 py-4">
          <div class="text-sm">
              <div class="font-medium text-gray-700">{{$customer->email}}</div>
              </div>
          </td>
  
          <td class="px-6 py-4">
          <div class="text-sm">
              <div class="font-medium text-gray-700">{{$customer->address}}</div>
              </div>
          </td>
  
  
          <td class="px-6 py-4">
            <div class="flex justify-end gap-10">

              <a x-data="{ tooltip: 'Delete' }" href="delete/{{$customer->id}}">
              <button type="button" class="btn btn-danger">Delete</button>
              </a>

              <a x-data="{ tooltip: 'Edite' }" href="/">
              <button type="button" class="btn btn-success">Edit</button>
              </a>

            </div>
          </td>
          @endforeach
  </tr>
      </tbody>
     
     </table>


  </div>


  @include('partials.footer')
@extends('layouts.app')


@section('content')

   <table id="users_list_table" class="table w-100 table-striped table-bordered">
      <thead>
         <tr>
            <th scope="col">Osoba</th>
            <th scope="col">Email</th>
            <th scope="col">Data założenia</th>
         </tr>
      </thead>
      <tbody>
      @foreach($users as $user)
         <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at }}</td>
         </tr>
      @endforeach
      </tbody>
   </table>

   {{ $users->links() }}

@endsection  
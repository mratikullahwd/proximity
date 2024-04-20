<x-web-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    
    <div class="container">
        @if (session('status'))
        <div class="alert alert-{{ session('status') }}">{{ session('message') }}</div>
        @else

        @endif
        <div class="card m-4">
            <div class="card-header">
                <h4>
                    Applications
                </h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead class="table-dark">
                            <tr class="text-center">
                                <th>#</th>
                                <th>Name</th>
                                <th>Discord</th>
                                <th>Apply for</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $sl = 1;
                            @endphp
                            @foreach ($applications as $application)
                                <tr class="text-center">
                                    <td>{{ $sl++ }}</td>
                                    <td>{{ $application->name }}</td>
                                    <td>{{ $application->discord_tag }}</td>
                                    <td>{{ $application->applying_for }}</td>
                                    <td>
                                        @if ($application->status == 'inactive')
                                            <a href="{{ route('approve', $application->id) }}" class="btn btn-success">Approve</a>
                                        @else
                                            <a href="{{ route('inactive', $application->id) }}" class="btn btn-danger">Make Pending</a>
                                        @endif
                                        <a href="{{ route('view', $application->id) }}" class="btn btn-warning">View</a>
                                        <a href="{{ route('delete', $application->id) }}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</x-web-layout>

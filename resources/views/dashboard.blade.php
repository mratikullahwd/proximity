<x-web-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container">
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
                                        <a href="" class="btn btn-success">Approve</a>
                                        <a href="" class="btn btn-warning">View</a>
                                        <a href="" class="btn btn-danger">Delete</a>
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

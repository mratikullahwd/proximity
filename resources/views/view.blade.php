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
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Name</b><br>
                            {{ $applications->name }}
                        </li>
                        <li class="list-group-item"><b>Phone</b><br>
                            {{ $applications->phone }}
                        </li>
                        <li class="list-group-item"><b>Email</b><br>
                            {{ $applications->email }}
                        </li>
                        <li class="list-group-item"><b>Minecraft Username</b><br>
                            {{ $applications->minecraft_username }}
                        </li>
                        <li class="list-group-item"><b>Discord Tag</b><br>
                            {{ $applications->discord_tag }}
                        </li>
                        <li class="list-group-item"><b>Age</b><br>
                            {{ $applications->age }}
                        </li>
                        <li class="list-group-item"><b>Applying for</b><br>
                            {{ $applications->applying_for }}
                        </li>
                        <li class="list-group-item"><b>Experience</b><br>
                            {{ $applications->experience }}
                        </li>
                        <li class="list-group-item"><b>Skills</b><br>
                            {{ $applications->skills }}
                        </li>
                        <li class="list-group-item"><b>Working Hour</b><br>
                            {{ $applications->working_hour }}
                        </li>
                        <li class="list-group-item"><b>Why Join us?</b><br>
                            {{ $applications->why_join_us }}
                        </li>
                        <li class="list-group-item"><b>Suggestions For Us</b><br>
                            {{ $applications->suggestions_for_us }}
                        </li>
                        <li class="list-group-item"><b>How to Handle Challenging Situation</b><br>
                            {{ $applications->handling_challenging_situation }}
                        </li>
                        <li class="list-group-item"><b>Known Programming</b><br>
                            {{ $applications->known_programming }}
                        </li>
                        <li class="list-group-item"><b>Strategies Of Updates And Trends</b><br>
                            {{ $applications->strategies_of_updates_and_trends }}
                        </li>
                        <li class="list-group-item"><b>Application Date</b><br>
                            {{ $applications->created_at }}
                        </li>
                    </ul>
                    <div class="card-footer">
                        @if ($applications->status == 'inactive')
                            <a href="{{ route('approve', $applications->id) }}" class="btn btn-success">Approve</a>
                        @else
                            <a href="{{ route('inactive', $applications->id) }}" class="btn btn-danger">Make Pending</a>
                        @endif
                    </div>
                  </div>
            </div>
        </div>
    </div>


</x-web-layout>

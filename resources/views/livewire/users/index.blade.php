<div>
    {{-- In work, do what you enjoy. --}}
    <div class="row justify-content-center" style="min-height: 100vh">

        <div class="col-md-8 my-auto">
            <div class="card">
                <div class="card-header">
                    <strong>All Users</strong>
                </div>
                <div class="card-body">
                    <table class="table table-sm table-borderless">
                        <thead>
                        <tr>
                            <td>Name</td>
                            <td>Email</td>
                        </tr>
                        </thead>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

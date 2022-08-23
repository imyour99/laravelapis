
<div class="col-lg-12 col-md-12">
    @if (session('success'))
        <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="rounded-corner bg-white px-2">
        <div class="table-responsive">
            <table class="table table-striped w-100 administrators-table" id="clientDataTable" style="width:100%">
                <thead>
                    <tr>
                        <th class="wd-15p">ID Utilisateur</th>
                        <th class="wd-15p">Nom</th>
                        <th class="wd-20p">Emaile</th>
                        <th class="wd-25p">Role</th>
                        <th class="wd-15p">Dernière Connexion</th>
                        <th class="wd-15p">N° Telephone</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($users as $user)
                        <tr>
                            <td >{{ $user->id }}</td>
                            <td >{{ $user->name }}</td>
                            <td >{{ $user->email }}</td>
                            <td >
                                @if ($user->role_id == '1')
                                    {{ 'Super Admin' }}
                                @elseif ($user->role_id == '2')
                                    {{ 'Controller' }}
                                @elseif ($user->role_id == '3')
                                    {{ 'Planner' }}
                                @elseif ($user->role_id == '4')
                                    {{ 'Collaborateurs' }}
                                @else
                                    {{ '' }}
                                @endif
                            </td>
                            <td></td>
                            <td>{{ $user->telephone }}</td>

                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="table-danger">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Role</th>
            <th>Agence_id</th>
        </tr>
    </thead>

    <tbody>
        @forelse ($users as $user)
        <tr>
            <td># $user->id</td>
            <td>$user->name</td>
            <td>$user->prenmo</td>
            <td>$user->email</td>
            <td>$user->role</td>
            <td>$user->Agence_id</td>

            @empty
            Aucun utilisateurs present pour l'instant
        </tr>
        

        @endforelse
        
    </tbody>
</div>
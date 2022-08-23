<div class="rounded-corner bg-white px-2">
    <div class="table-responsive">
        <table class="table table-striped w-100" id="clientDataTable" style="width:100%">
            <thead>
                <tr>
                    <th class="wd-15p">Nom</th>
                    <th class="wd-15p">Prenom</th>
                    <th class="wd-20p">Type</th>
                    <th class="wd-25p">Poste</th>
                    <th class="wd-15p">Planificateur</th>
                    <th class="wd-15p">Agence</th>
                    <th class="wd-15p">Statut</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($collabotations as $collaboration)
                    <tr>
                        <td>{{ $collaboration->nom }}</td>
                        <td>{{ $collaboration->prenom }}</td>
                        <td>{{ $collaboration->email }}</td>
                        <td>TECHNICIEN</td>
                        <td>JOHNY DOE</td>
                        @php
                            $contacts = App\Models\CollaborationContact::where('collaboration_id', $collaboration->id)->first();

                            if(!empty($contacts->agence))
                            {
                                $agency = DB::table('llx_agency')->where('id',$contacts->agence)->first();
                                $agencenom = $agency->agencenom;
                            }
                            else {
                               $agencenom ='';
                            }
                        @endphp
                        <td>{{ $agencenom}}</td>
                        <td>
                            @if ($collaboration->status == 'active')
                                <a href="javascript:void(0)" data-toggle="modal"
                                    data-target="#technicien-modal_{{ $collaboration->id }}"
                                    id="activeBtn_{{ $collaboration->id }}">
                                    <span class="active-green font-weight-bold">
                                        <i class="fa fa-circle"></i>
                                    </span>
                                </a>
                            @else
                                <a href="javascript:void(0)" data-toggle="modal"
                                    data-target="#technicien-modal_{{ $collaboration->id }}"
                                    id="inactiveBtn_{{ $collaboration->id }}">
                                    <span class="inactive-gray font-weight-bold">
                                        <i class="fa fa-circle"></i>
                                    </span>
                                </a>
                            @endif

                        </td>
                    </tr>
                    @include(
                        'collaboration.rightside_popup.collaboration_rightside_popup'
                    )
                    {{-- @include('collaboration.collaboration_edit') --}}
                @endforeach
            </tbody>
        </table>
    </div>
</div>

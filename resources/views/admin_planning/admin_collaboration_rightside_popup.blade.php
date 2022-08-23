
<div class="modal fullmodal fade" id="technicien-modal_{{$collaboration->id}}" tabindex="-1" role="dialog" aria-labelledby="technicien-modal
     " aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12">
                        &nbsp;
                    </div>
        	<div class="col-lg-4 col-md-4 col-sm-6 bg-lightgray py-2 px-2 tour-employee-modal-right">
        		<div class="tour-employee-modal-arrow">
        			<a href="javascript:void(0)"><img src="{{ asset('public/assets/img/icons/gray-left-arrow.png')}}" class="tour-employee-left-arrow" data-dismiss="modal"></a>
        		</div>
        		<div class="tour-employee-modal-right-inner row">
        			<div class="col-lg-6 col-md-6 col-sm-6" style="margin-left:-23px">
        				<span class="tour-name-title">{{$collaboration->nom}} {{$collaboration->prenom}}</span>
        				<span class="tour-name-email text-blue">{{$collaboration->email}}</span>
        			</div>
        			<div class="col-lg-6 col-md-6 col-sm-6">

                            <span class="tour-switch-modal" style="float: left;">
                                <form method="post" id="insert_data_{{$collaboration->id}}">
                                    @csrf
                                    <label class="switch">
                                        @if ($collaboration->status == 'active'  )
                                            <input type="checkbox" name="notify_status" id="notify_status_{{$collaboration->id}}"  checked>
                                            <span class="cslider round"></span>

                                        @else
                                            <input type="checkbox" name="notify_status" id="notify_status_{{$collaboration->id}}" >
                                            <span class="cslider round"></span>

                                        @endif
                                    </label>
                                    <input type="hidden" name="collaboration_id" value="{{$collaboration->id}}">
                                </form>
                            </span>
        				<span class="tour-modal-button">
        					{{-- <a href="javascript:void(0)" class="btn-editer" data-toggle="modal" data-target="#edit-technician-modal_{{$collaboration->id}}">Editer la fiche</a> --}}
                            <a href="{{ url("collaboration/".$collaboration->id."/general") }}" class="btn-editer" >Editer la fiche</a>
        				</span>
        			</div>
        		</div>

                        <div class=" row">
                            <div class="col-lg-11 col-md-11 col-sm-12 tour-modal-details-row">
                                <span class="tour-modal-label">Addresse</span>
                                <span class="tour-modal-normal-text">{{$collaboration->adresse}},{{$collaboration->code_postal}}</span>
                            </div>
                        </div>
                        @php
                            $contacts_right = App\Models\CollaborationContact::where('collaboration_id',$collaboration->id)->first();


                        @endphp


                        <div class=" row mt-2">
                            <div class="col-lg-4 col-md-4 col-sm-6 tour-modal-fields-row-div">
                                <div class="bg-white rounded-corner tour-modal-fields-row">
                                    <span class="tour-modal-label">Agence</span>
                                    <span class="tour-modal-normal-text">
                                        @php
                                        if(isset($contacts_right->agence) != '')
                                        {
                                            $agence = DB::table('llx_agency')->where('id',$contacts_right->agence)->first();
                                            $agence_name = $agence->agencenom;
                                        }
                                        else {
                                            $agence_name = '';
                                        }


                                    @endphp
                                    {{$agence_name}}
                                    </span>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-6  tour-modal-fields-row-div">
                                <div class="bg-white rounded-corner tour-modal-fields-row">
                                    <span class="tour-modal-label">NNI</span>
                                    <span class="tour-modal-normal-text text-blue">
                                        {{$contacts_right ? $contacts_right->nni : ''}}
                                    </span>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6  tour-modal-fields-row-div " style="margin-right:0 !important">
                                <div class="bg-white rounded-corner tour-modal-fields-row">
                                    <span class="tour-modal-label">Planificateur</span>
                                    <span class="tour-modal-normal-text">Arnaud Durand</span>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="tour-modal-tabs">
                                <nav>
                                    <div class="nav nav-tabs tour-navs" id="nav-tour-modal-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="nav-perimetre-tab" data-toggle="tab" href="#nav-perimetre" role="tab" aria-controls="nav-tour" aria-selected="true">
                                            <span class="tab-label">Pèrimètre de travail</span>
                                        </a>
                                        <a class="nav-item nav-link" id="nav-absences-tab" data-toggle="tab" href="#nav-absences" role="tab" aria-controls="nav-absences" aria-selected="true">
                                            <span class="tab-label">Liste des absences</span>
                                        </a>

                                        <a class="nav-item nav-link" id="nav-notifications-tab" data-toggle="tab" href="#nav-notifications" role="tab" aria-controls="nav-notifications" aria-selected="true">
                                            <span class="tab-label">Notifications</span>
                                        </a>
                                    </div>
                                </nav>
                                <div class="tab-content tour-right-content bg-white" id="nav-tabContent">

                                    <div class="tab-pane fade show active" id="nav-perimetre" role="tabpanel" aria-labelledby="nav-perimetre-tab">
                                        @include('collaboration.rightside_popup.perimetre');

                                    </div>

                                    <div class="tab-pane fade" id="nav-absences" role="tabpanel" aria-labelledby="nav-absences-tab">
                                        {{-- absences start --}}
                                        <div class="text-tour-absences-div slimscroll-tour-modal">
                                            <div class="row">

                                                <div class="col-lg-11 col-md-11 col-sm-11 mt-2">

                                                    <div class="row ">

                                                        @php
                                                            $id = $collaboration->id;

                                                            $collaboration_absences = DB::table('collaboration_absences')->where('collaboration_id',$id)->get();

                                                        @endphp


                                                        @foreach ($collaboration_absences as $absences)
                                                            <div class="col-lg-12 tour-absences-row pt-2">
                                                                <div class="row">
                                                                    <div class="col-lg-5 col-md-5 col-sm-5">
                                                                        <strong>{{$absences->motif}}</strong>
                                                                    </div>

                                                                    @php
                                                                    $debut_date_old = $absences->debut_date;
                                                                    $debut_date = Carbon\Carbon::parse($debut_date_old)->format('d F Y');

                                                                    $fin_date_old = $absences->fin_date;
                                                                    $fin_date = Carbon\Carbon::parse($fin_date_old)->format('d F Y');
                                                                    @endphp

                                                                    <div class="col-lg-7 col-md-7 col-sm-7">
                                                                        <strong class="text-orange tour-absences-date">{{$debut_date}} - {{$fin_date}}</strong>
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2 mb-2">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                                        <p>{{$absences->description}}
                                                                    </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach



                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        {{-- absences end --}}
                                    </div>

                                    <div class="tab-pane fade" id="nav-notifications" role="tabpanel" aria-labelledby="nav-notifications-tab">
                                        @include('collaboration.rightside_popup.notifications');
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
        </div>
    </div>
</div>





<script>
    $('#notify_status_{{$collaboration->id}}').on('change', function(event){
        event.preventDefault();

        var form_data = $('#insert_data_{{$collaboration->id}}').serialize();


        $.ajax({
            url:'{{ route("collaboration.notify_status") }}',
            method:"POST",
            data:form_data,
            success:function(data){
            if(data == 'done')
            {
                location.reload();
                $('#notify_status').bootstrapToggle('on');
            }
            }
        });

    });
</script>

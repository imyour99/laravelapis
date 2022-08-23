
@foreach ($ecarts as $ecart)
    <a href="javascript:void(0);" data-toggle="modal"
        data-target="#edit-ecart-modal_{{ $ecart->id }}_{{ $collaboration_id }}">
        <div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input">
            <div class="row">
                <div class="col-lg-5 col-sm-5">
                    <p class="mb-1"><strong>{{ $ecart->motif }}</strong></p>
                </div>
                <div class="col-lg-7 col-sm-7 text-right">
                    @php
                        $debut_date_old_e = $ecart->debut_date;
                        $debut_date_e = Carbon\Carbon::parse($debut_date_old_e)->format('d F Y');

                        $fin_date_old_e = $ecart->fin_date;
                        $fin_date_e = Carbon\Carbon::parse($fin_date_old_e)->format('d F Y');
                    @endphp
                    <p class="mb-1 view-color"><strong>{{ $debut_date_e }} <i class="fa fa-eye mr-1"></i></strong></p>
                </div>
            </div>
            <p class="mb-0"><strong>Objet:</strong> {{ $ecart->description }}</p>
        </div>
    </a>

    @include('collaboration.absences_ecarts_popup.edit_ecart')
@endforeach

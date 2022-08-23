@foreach ($absences as $abs)
    <a href="javascript:void(0);" data-toggle="modal"
        data-target="#edit-absence-modal_{{ $abs->id }}_{{ $collaboration_id }}">
        <div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input">
            <div class="row">
                <div class="col-lg-5 col-sm-5">
                    <p class="mb-1"><strong>{{ $abs->motif }}</strong>
                    </p>
                </div>
                <div class="col-lg-7 col-sm-7 text-right">
                    @php
                        $debut_date_old = $abs->debut_date;
                        $debut_date = Carbon\Carbon::parse($debut_date_old)->format('d F Y');

                        $fin_date_old = $abs->fin_date;
                        $fin_date = Carbon\Carbon::parse($fin_date_old)->format('d F Y');
                    @endphp


                    <p class="mb-1 view-color"><strong>{{ $debut_date }} - {{ $fin_date }} <i
                                class="fa fa-eye mr-1"></i></strong></p>
                </div>
            </div>
            <p class="mb-0">{{ $abs->description }}</p>
        </div>
    </a>
    @include('collaboration.absences_ecarts_popup.edit_absences')
@endforeach

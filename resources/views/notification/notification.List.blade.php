@extends('common-layout/master')
@section('data-content')

<div class="row row-sm mt-4">
    <div class="col-lg-3 col-sm-2">
        <strong class="tx-16 black-text font-weight-bold user-fullname">RECHERCHE PAR NOTIFICATIONS</strong>
    </div>
    <div class="col-lg-6 col-sm-3 mb-2" style="margin-top:-8px">
        <a href="ExportNotifctn" class="btn-white-blue float-right px-4">
            Exporter
        </a>
    </div>	
</div>

<div class="row mt-2">
    <div class="col-lg-9">        
        <div class="table-responsive">
            <div class="rounded-corner bg-white px-2">
                <table class="table table-striped w-100" >
                    <thead>
                        <tr>
                            <th class="">Nature</th>
                            <th class="">Date de création</th>
                            <th class="">Date échéance</th>
                            <th class="">Technicien</th>
                            <th class="">PDL</th>
                            <th class="">Criticité</th>
                            <th class="">Etat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $client)
                        <tr id="notificationDataTable">
                            <td>{{ $client->nature }}</td>
                            <td>{{ $client->created_at }}</td>
                            <td>{{ $client->updated_at }}</td>
                            <td>JOHN DOE</td>
                            <td>{{ $client->pdl }}</td>
                            <td>Criticité</td>
                            <td>{{ $client->status }}</td>
                            <td>
                                <a data-toggle="modal" data-target="#notification-modal_{{$client->id}}">
                                    <span class="active-green font-weight-bold">
                                        <i class="fa fa-circle"></i>
                                    </span>
                                </a>
                            </td>
                        </tr> 
                        @include('notification.notification_popup')
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    @include('notification.notification_filter')
</div>
<a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>


@endsection



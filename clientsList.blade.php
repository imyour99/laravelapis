@extends('common-layout/master')
@section('data-content')
    <div class="row row-sm mt-4">
        <div class="col-lg-2 col-sm-2">
            <strong class="tx-16 black-text font-weight-bold user-fullname">RECHERCHE PAR CLIENTS</strong>
        </div>

        <div class="col-lg-4 col-sm-4">
            <strong class="text-blue tx-11">{{ count($data) }} clients trouvès</strong>
        </div>

        <div class="col-lg-3 col-sm-3 mb-2" style="margin-top:-8px">
            <div class="row mr-1">
                <div class="col-lg-3">
                    <div class="circle-icon ">
                        <a href="/ClientsMap">
                            <img src="assets/img/icons/blue-map-white.png" />
                        </a>
                    </div>
                </div>
                <div class="col-lg-4" style="margin-top:-3px">
                    <a class="btn-blue-white float-right px-4" href="javascript:void(0)" data-toggle="modal"
                        data-target="#ImportClientData">
                        Importer
                    </a>

                </div>
                <div class="col-lg-5" style="margin-top:-3px">
                    <a href="/ClientExport" class="btn-white-blue float-right px-4">
                        Exporter
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-lg-9">
            <div class="table-responsive">
                <div class="rounded-corner bg-white px-2">
                    <table class="table table-striped w-100" id="clientDataTable">
                        <thead>
                            <tr>
                                <th class="wd-15p">Nom</th>
                                <th class="wd-15p">PDL</th>
                                <th class="wd-20p">telephone</th>
                                <th class="wd-25p">Adresse</th>
                                <th class="wd-15p">Ville</th>
                                <th class="wd-15p">Code</th>
                                <th class="wd-15p">Statut</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $client)
                                <tr>
                                    <td>{{ $client->nom }}</td>
                                    <td>{{ $client->pdl }}</td>
                                    <td>{{ $client->telephone }}</td>
                                    <td>{{ $client->adress }}</td>
                                    <td>{{ $client->villa }}</td>
                                    <td>{{ $client->code }}</td>
                                    <td class="active-green font-weight-bold"><i class="fa fa-circle mr-2"></i>A planifier
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        <div class="col-lg-3" style="margin-top:-60px">
            <div class="col-white12-col">
                <div class="search-group">
                    <input class="search-input mr-2" type="text" placeholder="Recherche de filtres…." />
                    <button class="button button-brand-primary button-search"><i class="fas fa-redo"></i></button>
                </div>
                <div class="card custom-card overflow-hidden search-filter-options">

                    <div class="card-body px-0 py-5">
                        <!-- accordion -->
                        <div aria-multiselectable="true" class="accordion" id="accordion" role="tablist">
                            <div class="card">
                                <div class="card-header" id="headingOneHIW" role="tab">
                                    <a aria-controls="collapseOneHIW" aria-expanded="true" data-toggle="collapse"
                                        href="#collapseOneHIW">Filtre</a>
                                </div>
                                <div aria-labelledby="headingOneHIW" class="collapse show" data-parent="#accordion"
                                    id="collapseOneHIW" role="tabpanel">
                                    <div class="card-body">
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwoHIW" role="tab">
                                    <a aria-controls="collapseTwoHIW" aria-expanded="false" class="collapsed"
                                        data-toggle="collapse" href="#collapseTwoHIW">Filter</a>
                                </div>
                                <div aria-labelledby="headingTwoHIW" class="collapse" data-parent="#accordion"
                                    id="collapseTwoHIW" role="tabpanel">
                                    <div class="card-body">
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThreeHIW" role="tab">
                                    <a aria-controls="collapseThreeHIW" aria-expanded="false" class="collapsed"
                                        data-toggle="collapse" href="#collapseThreeHIW">Filter</a>
                                </div>
                                <div aria-labelledby="headingThreeHIW" class="collapse" data-parent="#accordion"
                                    id="collapseThreeHIW" role="tabpanel">
                                    <div class="card-body">
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                    </div>
                                </div><!-- collapse -->
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingfourHIW" role="tab">
                                    <a aria-controls="collapsefourHIW" aria-expanded="false" class="collapsed"
                                        data-toggle="collapse" href="#collapsefourHIW">Filter</a>
                                </div>
                                <div aria-labelledby="headingfourHIW" class="collapse" data-parent="#accordion"
                                    id="collapsefourHIW" role="tabpanel">
                                    <div class="card-body">
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                    </div>
                                </div><!-- collapse -->
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingTwoHIW" role="tab">
                                    <a aria-controls="collapseTwoHIW" aria-expanded="false" class="collapsed"
                                        data-toggle="collapse" href="#collapseTwoHIW">Filter</a>
                                </div>
                                <div aria-labelledby="headingTwoHIW" class="collapse" data-parent="#accordion"
                                    id="collapseTwoHIW" role="tabpanel">
                                    <div class="card-body">
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThreeHIW" role="tab">
                                    <a aria-controls="collapseThreeHIW" aria-expanded="false" class="collapsed"
                                        data-toggle="collapse" href="#collapseThreeHIW">Filter</a>
                                </div>
                                <div aria-labelledby="headingThreeHIW" class="collapse" data-parent="#accordion"
                                    id="collapseThreeHIW" role="tabpanel">
                                    <div class="card-body">
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                    </div>
                                </div><!-- collapse -->
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingfourHIW" role="tab">
                                    <a aria-controls="collapsefourHIW" aria-expanded="false" class="collapsed"
                                        data-toggle="collapse" href="#collapsefourHIW">Filter</a>
                                </div>
                                <div aria-labelledby="headingfourHIW" class="collapse" data-parent="#accordion"
                                    id="collapsefourHIW" role="tabpanel">
                                    <div class="card-body">
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                    </div>
                                </div><!-- collapse -->
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwoHIW" role="tab">
                                    <a aria-controls="collapseTwoHIW" aria-expanded="false" class="collapsed"
                                        data-toggle="collapse" href="#collapseTwoHIW">Filter</a>
                                </div>
                                <div aria-labelledby="headingTwoHIW" class="collapse" data-parent="#accordion"
                                    id="collapseTwoHIW" role="tabpanel">
                                    <div class="card-body">
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThreeHIW" role="tab">
                                    <a aria-controls="collapseThreeHIW" aria-expanded="false" class="collapsed"
                                        data-toggle="collapse" href="#collapseThreeHIW">Filter</a>
                                </div>
                                <div aria-labelledby="headingThreeHIW" class="collapse" data-parent="#accordion"
                                    id="collapseThreeHIW" role="tabpanel">
                                    <div class="card-body">
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                    </div>
                                </div><!-- collapse -->
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingfourHIW" role="tab">
                                    <a aria-controls="collapsefourHIW" aria-expanded="false" class="collapsed"
                                        data-toggle="collapse" href="#collapsefourHIW">Filter</a>
                                </div>
                                <div aria-labelledby="headingfourHIW" class="collapse" data-parent="#accordion"
                                    id="collapsefourHIW" role="tabpanel">
                                    <div class="card-body">
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                    </div>
                                </div><!-- collapse -->
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading6" role="tab">
                                    <a aria-controls="collapse6" aria-expanded="false" class="collapsed"
                                        data-toggle="collapse" href="#collapse6">Filter</a>
                                </div>
                                <div aria-labelledby="heading6" class="collapse" data-parent="#accordion"
                                    id="collapse6" role="tabpanel">
                                    <div class="card-body">
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                    </div>
                                </div><!-- collapse -->
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading7" role="tab">
                                    <a aria-controls="collapse7" aria-expanded="false" class="collapsed"
                                        data-toggle="collapse" href="#collapse7">Filter</a>
                                </div>
                                <div aria-labelledby="heading7" class="collapse" data-parent="#accordion"
                                    id="collapse7" role="tabpanel">
                                    <div class="card-body">
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                    </div>
                                </div><!-- collapse -->
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading8" role="tab">
                                    <a aria-controls="collapse8" aria-expanded="false" class="collapsed"
                                        data-toggle="collapse" href="#collapse8">Filter</a>
                                </div>
                                <div aria-labelledby="heading8" class="collapse" data-parent="#accordion"
                                    id="collapse8" role="tabpanel">
                                    <div class="card-body">
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                    </div>
                                </div><!-- collapse -->
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading9" role="tab">
                                    <a aria-controls="collapse9" aria-expanded="false" class="collapsed"
                                        data-toggle="collapse" href="#collapse9">Filter</a>
                                </div>
                                <div aria-labelledby="heading9" class="collapse" data-parent="#accordion"
                                    id="collapse6" role="tabpanel">
                                    <div class="card-body">
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                    </div>
                                </div><!-- collapse -->
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading10" role="tab">
                                    <a aria-controls="collapse10" aria-expanded="false" class="collapsed"
                                        data-toggle="collapse" href="#collapse10">Filter</a>
                                </div>
                                <div aria-labelledby="heading10" class="collapse" data-parent="#accordion"
                                    id="collapse7" role="tabpanel">
                                    <div class="card-body">
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                    </div>
                                </div><!-- collapse -->
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading11" role="tab">
                                    <a aria-controls="collapse11" aria-expanded="false" class="collapsed"
                                        data-toggle="collapse" href="#collapse11">Filter</a>
                                </div>
                                <div aria-labelledby="heading11" class="collapse" data-parent="#accordion"
                                    id="collapse8" role="tabpanel">
                                    <div class="card-body">
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                    </div>
                                </div><!-- collapse -->
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading9" role="tab">
                                    <a aria-controls="collapse9" aria-expanded="false" class="collapsed"
                                        data-toggle="collapse" href="#collapse9">Filter</a>
                                </div>
                                <div aria-labelledby="heading9" class="collapse" data-parent="#accordion"
                                    id="collapse6" role="tabpanel">
                                    <div class="card-body">
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                    </div>
                                </div><!-- collapse -->
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading10" role="tab">
                                    <a aria-controls="collapse10" aria-expanded="false" class="collapsed"
                                        data-toggle="collapse" href="#collapse10">Filter</a>
                                </div>
                                <div aria-labelledby="heading10" class="collapse" data-parent="#accordion"
                                    id="collapse7" role="tabpanel">
                                    <div class="card-body">
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                    </div>
                                </div><!-- collapse -->
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading11" role="tab">
                                    <a aria-controls="collapse11" aria-expanded="false" class="collapsed"
                                        data-toggle="collapse" href="#collapse11">Filter</a>
                                </div>
                                <div aria-labelledby="heading11" class="collapse" data-parent="#accordion"
                                    id="collapse8" role="tabpanel">
                                    <div class="card-body">
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                    </div>
                                </div><!-- collapse -->
                            </div>

                            <div class="card">
                                <div class="card-header" id="heading11" role="tab">
                                    <a aria-controls="collapse11" aria-expanded="false" class="collapsed"
                                        data-toggle="collapse" href="#collapse11">Filter</a>
                                </div>
                                <div aria-labelledby="heading11" class="collapse" data-parent="#accordion"
                                    id="collapse8" role="tabpanel">
                                    <div class="card-body">
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                    </div>
                                </div><!-- collapse -->
                            </div>
                        </div>
                        <!-- accordion -->
                    </div>
                </div>
            </div>

        </div>
    </div>



    <div class="modal fade" id="ImportClientData" tabindex="-1" role="dialog" aria-labelledby="technicien-modal"
        aria-hidden="true">
        <div class="modal-dialog" role="document" style="min-width: 90%;">
            <div class="modal-content">

                <div class="modal-body">
                    <h1>Veuillez choisir le fichier pour l'importation</h1>
                    <div class="row">
                        <button type="button" class="close-modal" rel="notifications-modal"><span
                                aria-hidden="true">&times;</span></button>
                        <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                            <div class="col-lg-12">
                                @csrf
                                <input type="file" name="file" class="form-control">
                            </div>
                            <br />
                            <div class="col-lg-12">
                                <button class="btn btn-success">Importer</button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

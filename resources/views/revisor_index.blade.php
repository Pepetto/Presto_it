<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Annuncio # {{$announcement->id}}
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <h3>Utente</h3>
                            </div>
                            <div class="col-md-10">
                                # {{$announcement->user->id}},
                                {{$announcement->user->name}},
                                {{$announcement->user->email}},
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2"><h3>Titolo</h3></div>
                            <div class="col-md-10">{{$announcement->title}}</div>
                        </div>

                        <div class="row">
                            <div class="col-md-2"><h3>Descrizione</h3></div>
                            <div class="col-md-10">{{$announcement->description}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-2"><h3>Immagini</h3></div>
                            <div class="col-md-10"></div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <img src="https://via.placeholder.com/300x150.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        ... ... ...
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <img src="https://via.placeholder.com/300x150.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        ... ... ...
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{route("revisor_reject", $announcement->id)}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Reject</button>
                </form>
            </div>
            <div class="col-md-6 text-right">
                <form action="{{route("revisor_accept", $announcement->id)}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-success">Accept</button>
                </form>
            </div>
        </div>

    </div>

</x-layout>
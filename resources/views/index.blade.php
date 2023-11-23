

  <!doctype html>
<html lang="en">
  <head>

    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" >
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  </head>
  <body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h1>Personeller</h1></div>
                    <div class="card-body">

                        <table class="table table-dark table-striped">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Personelin Adı Soyadı</th>
                                <th scope="col">Email Adresi</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($personel as $personels)                                    
                               
                              <tr>
                                <th scope="row">{{$personels->id}}</th>
                                <td>{{$personels->name}}</td>
                                <td>{{$personels->email}}</td>
                                <td><a href="{{route('personel.edit', $personels->id)}}" class="btn btn-info" >Düzenle</a></td>
                                <td><a href="{{route('personel.delete', $personels->id)}}" class="btn btn-danger" >Sil</a></td>

                              </tr>
                              
                              @endforeach
                            </tbody>
                          </table>
                          <a class="btn btn-primary mt-3" href="{{route('personel.create')}}">Yeni Personel Ekle</a>

                    </div>
                </div>
            </div>
    
        </div>
    </div>
    <script src="{{asset('css/bootstrap.js')}}"></script>
    <script src="{{asset('css/bootstrap.min.js')}}"></script>
  </body>
</html>

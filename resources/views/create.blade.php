

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
                    <div class="card-header"><h1>Personel Ekle</h1></div>
                    <div class="card-body">


                        <form action="{{ route('personel.store') }}" method="POST">
                          @csrf
                          <div class="form-group">

                            <label for="">Personel Adı Soyadı:</label>
                            <input type="text" name="name" class="form-control" placeholder="Personel adını ve soyadını giriniz.">
                          </div>
                          <div class="form-group">

                            <label for="" class="mt-3">Email Adresi:</label>
                            <input type="text" name="email" class="form-control " placeholder="Email adresini giriniz.">
                          </div>
                          <button type="submit" class="btn btn-success mt-3">Ekle</button>
                          <a class="btn btn-primary mt-3" href="{{route('personel.index')}}">Geri Dön</a>

                        </form>

                    </div>
                </div>
            </div>
    
        </div>
    </div>
    <script src="{{asset('css/bootstrap.js')}}"></script>
    <script src="{{asset('css/bootstrap.min.js')}}"></script>
  </body>
</html>

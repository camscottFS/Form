<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>{{ config('app.name', 'Laravel') }}</title>

      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

      <!-- Styles -->
      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  </head>
  <body>
    <div class="container mt-4">
      <div class="row">
        <div class="col-8 offset-2">
          <form method="POST" action="/f" enctype="multipart/form-data">
            @csrf
            <div class="card p-3">
              <div class="card-body">
                <h5 class="card-title text-center">A Form</h5>
                <div class="form-group">
                  <label for="name" class="col-form-label text-md-right">{{ __('Name') }}</label>
                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                    @error('name')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="birthdate" class="col-form-label text-md-right">{{ __('Birthdate') }}</label>
                  <input id="birthdate" type="date" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" value="{{ old('birthdate') }}" autocomplete="birthdate" autofocus>
                    @error('birthdate')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="rate" class="col-form-label text-md-right">{{ __('Hourly Rate') }}</label>
                  <input id="rate" type="text" class="form-control @error('rate') is-invalid @enderror" name="rate" value="{{ old('rate') }}" autocomplete="rate" autofocus>
                    @error('rate')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="availability" class="col-form-label text-md-right">{{ __('Availability') }}</label>
                  <input id="availability" type="text" class="form-control @error('availability') is-invalid @enderror" name="availability" value="{{ old('availability') }}" autocomplete="availability" autofocus>
                    @error('availability')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="phone" class="col-form-label text-md-right">{{ __('Phone Number') }}</label>
                  <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" autocomplete="phone" autofocus>
                    @error('phone')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="email" class="col-form-label text-md-right">{{ __('E-mail Address') }}</label>
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
                    @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  </body>
</html>

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
                @if (session('success'))
                  <div class="alert alert-success" role="alert">Message successfully sent!</div>
                @endif
                <h3 class="card-title text-center">A Form</h5>
                <div class="form-group">
                  <label for="name" class="col-form-label text-md-right">{{ __('Name') }}</label>
                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus placeholder="Enter your full name...">
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
                  <input id="rate" type="text" class="form-control @error('rate') is-invalid @enderror" name="rate" value="{{ old('rate') }}" autocomplete="rate" autofocus placeholder="Enter your desired hourly rate...">
                    @error('rate')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Availability</h5>
                    <div class="form-group">
                      <label for="sundaystart">Sunday Start</label>
                      <select class="form-control" id="sundaystart" name="sundaystart" value="sundaystart">
                        <option>Any</option>
                        <option>None</option>
                        <option>12:00 (Midnight)</option>
                        <option>1:00 AM</option>
                        <option>2:00 AM</option>
                        <option>3:00 AM</option>
                        <option>4:00 AM</option>
                        <option>5:00 AM</option>
                        <option>6:00 AM</option>
                        <option>7:00 AM</option>
                        <option>8:00 AM</option>
                        <option>9:00 AM</option>
                        <option>10:00 AM</option>
                        <option>11:00 AM</option>
                        <option>12:00 PM</option>
                        <option>1:00 PM</option>
                      </select>
                      @error('sundaystart')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="sundayEnd">Sunday End</label>
                      <select class="form-control" id="sundayend" name="sundayend" value="sundayend">
                        <option>Any</option>
                        <option>None</option>
                        <option>12:00 (Midnight)</option>
                        <option>1:00 AM</option>
                        <option>2:00 AM</option>
                        <option>3:00 AM</option>
                        <option>4:00 AM</option>
                        <option>5:00 AM</option>
                        <option>6:00 AM</option>
                        <option>7:00 AM</option>
                        <option>8:00 AM</option>
                        <option>9:00 AM</option>
                        <option>10:00 AM</option>
                        <option>11:00 AM</option>
                        <option>12:00 PM</option>
                        <option>1:00 PM</option>
                        <option>2:00 PM</option>
                        <option>3:00 PM</option>
                        <option>4:00 PM</option>
                        <option>5:00 PM</option>
                        <option>6:00 PM</option>
                        <option>7:00 PM</option>
                        <option>8:00 PM</option>
                        <option>9:00 PM</option>
                        <option>10:00 PM</option>
                        <option>11:00 PM</option>
                      </select>
                      @error('sundayend')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="mondayStart">Monday Start</label>
                      <select class="form-control" id="mondaystart" name="mondaystart" value="mondaystart">
                        <option>Any</option>
                        <option>None</option>
                        <option>12:00 (Midnight)</option>
                        <option>1:00 AM</option>
                        <option>2:00 AM</option>
                        <option>3:00 AM</option>
                        <option>4:00 AM</option>
                        <option>5:00 AM</option>
                        <option>6:00 AM</option>
                        <option>7:00 AM</option>
                        <option>8:00 AM</option>
                        <option>9:00 AM</option>
                        <option>10:00 AM</option>
                        <option>11:00 AM</option>
                        <option>12:00 PM</option>
                        <option>1:00 PM</option>
                      </select>
                      @error('mondaystart')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="mondayEnd">Monday End</label>
                      <select class="form-control" id="mondayend" name="mondayend" value="mondayend">
                        <option>Any</option>
                        <option>None</option>
                        <option>12:00 (Midnight)</option>
                        <option>1:00 AM</option>
                        <option>2:00 AM</option>
                        <option>3:00 AM</option>
                        <option>4:00 AM</option>
                        <option>5:00 AM</option>
                        <option>6:00 AM</option>
                        <option>7:00 AM</option>
                        <option>8:00 AM</option>
                        <option>9:00 AM</option>
                        <option>10:00 AM</option>
                        <option>11:00 AM</option>
                        <option>12:00 PM</option>
                        <option>1:00 PM</option>
                        <option>2:00 PM</option>
                        <option>3:00 PM</option>
                        <option>4:00 PM</option>
                        <option>5:00 PM</option>
                        <option>6:00 PM</option>
                        <option>7:00 PM</option>
                        <option>8:00 PM</option>
                        <option>9:00 PM</option>
                        <option>10:00 PM</option>
                        <option>11:00 PM</option>
                      </select>
                      @error('mondayend')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="tuesdayStart">Tuesday Start</label>
                      <select class="form-control" id="tuesdaystart" name="tuesdaystart" value="tuesdaystart">
                        <option>Any</option>
                        <option>None</option>
                        <option>12:00 (Midnight)</option>
                        <option>1:00 AM</option>
                        <option>2:00 AM</option>
                        <option>3:00 AM</option>
                        <option>4:00 AM</option>
                        <option>5:00 AM</option>
                        <option>6:00 AM</option>
                        <option>7:00 AM</option>
                        <option>8:00 AM</option>
                        <option>9:00 AM</option>
                        <option>10:00 AM</option>
                        <option>11:00 AM</option>
                        <option>12:00 PM</option>
                        <option>1:00 PM</option>
                      </select>
                      @error('tuesdaystart')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="tuesdayEnd">Tuesday End</label>
                      <select class="form-control" id="tuesdayend" name="tuesdayend" value="tuesdayend">
                        <option>Any</option>
                        <option>None</option>
                        <option>12:00 (Midnight)</option>
                        <option>1:00 AM</option>
                        <option>2:00 AM</option>
                        <option>3:00 AM</option>
                        <option>4:00 AM</option>
                        <option>5:00 AM</option>
                        <option>6:00 AM</option>
                        <option>7:00 AM</option>
                        <option>8:00 AM</option>
                        <option>9:00 AM</option>
                        <option>10:00 AM</option>
                        <option>11:00 AM</option>
                        <option>12:00 PM</option>
                        <option>1:00 PM</option>
                        <option>2:00 PM</option>
                        <option>3:00 PM</option>
                        <option>4:00 PM</option>
                        <option>5:00 PM</option>
                        <option>6:00 PM</option>
                        <option>7:00 PM</option>
                        <option>8:00 PM</option>
                        <option>9:00 PM</option>
                        <option>10:00 PM</option>
                        <option>11:00 PM</option>
                      </select>
                      @error('tuesdayend')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="wednesdayStart">Wednesday Start</label>
                      <select class="form-control" id="wednesdaystart" name="wednesdaystart" value="wednesdaystart">
                        <option>Any</option>
                        <option>None</option>
                        <option>12:00 (Midnight)</option>
                        <option>1:00 AM</option>
                        <option>2:00 AM</option>
                        <option>3:00 AM</option>
                        <option>4:00 AM</option>
                        <option>5:00 AM</option>
                        <option>6:00 AM</option>
                        <option>7:00 AM</option>
                        <option>8:00 AM</option>
                        <option>9:00 AM</option>
                        <option>10:00 AM</option>
                        <option>11:00 AM</option>
                        <option>12:00 PM</option>
                        <option>1:00 PM</option>
                      </select>
                      @error('wednesdaystart')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="wednesdayEnd">Wednesday End</label>
                      <select class="form-control" id="wednesdayend" name="wednesdayend" value="wednesdayend">
                        <option>Any</option>
                        <option>None</option>
                        <option>12:00 (Midnight)</option>
                        <option>1:00 AM</option>
                        <option>2:00 AM</option>
                        <option>3:00 AM</option>
                        <option>4:00 AM</option>
                        <option>5:00 AM</option>
                        <option>6:00 AM</option>
                        <option>7:00 AM</option>
                        <option>8:00 AM</option>
                        <option>9:00 AM</option>
                        <option>10:00 AM</option>
                        <option>11:00 AM</option>
                        <option>12:00 PM</option>
                        <option>1:00 PM</option>
                        <option>2:00 PM</option>
                        <option>3:00 PM</option>
                        <option>4:00 PM</option>
                        <option>5:00 PM</option>
                        <option>6:00 PM</option>
                        <option>7:00 PM</option>
                        <option>8:00 PM</option>
                        <option>9:00 PM</option>
                        <option>10:00 PM</option>
                        <option>11:00 PM</option>
                      </select>
                      @error('wednesdayend')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="thursdayStart">Thursday Start</label>
                      <select class="form-control" id="thursdaystart" name="thursdaystart" value="thursdaystart">
                        <option>Any</option>
                        <option>None</option>
                        <option>12:00 (Midnight)</option>
                        <option>1:00 AM</option>
                        <option>2:00 AM</option>
                        <option>3:00 AM</option>
                        <option>4:00 AM</option>
                        <option>5:00 AM</option>
                        <option>6:00 AM</option>
                        <option>7:00 AM</option>
                        <option>8:00 AM</option>
                        <option>9:00 AM</option>
                        <option>10:00 AM</option>
                        <option>11:00 AM</option>
                        <option>12:00 PM</option>
                        <option>1:00 PM</option>
                      </select>
                      @error('thursdaystart')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="thursdayEnd">Thursday End</label>
                      <select class="form-control" id="thursdayend" name="thursdayend" value="thursdayend">
                        <option>Any</option>
                        <option>None</option>
                        <option>12:00 (Midnight)</option>
                        <option>1:00 AM</option>
                        <option>2:00 AM</option>
                        <option>3:00 AM</option>
                        <option>4:00 AM</option>
                        <option>5:00 AM</option>
                        <option>6:00 AM</option>
                        <option>7:00 AM</option>
                        <option>8:00 AM</option>
                        <option>9:00 AM</option>
                        <option>10:00 AM</option>
                        <option>11:00 AM</option>
                        <option>12:00 PM</option>
                        <option>1:00 PM</option>
                        <option>2:00 PM</option>
                        <option>3:00 PM</option>
                        <option>4:00 PM</option>
                        <option>5:00 PM</option>
                        <option>6:00 PM</option>
                        <option>7:00 PM</option>
                        <option>8:00 PM</option>
                        <option>9:00 PM</option>
                        <option>10:00 PM</option>
                        <option>11:00 PM</option>
                      </select>
                      @error('thursdayend')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="fridayStart">Friday Start</label>
                      <select class="form-control" id="fridaystart" name="fridaystart" value="fridaystart">
                        <option>Any</option>
                        <option>None</option>
                        <option>12:00 (Midnight)</option>
                        <option>1:00 AM</option>
                        <option>2:00 AM</option>
                        <option>3:00 AM</option>
                        <option>4:00 AM</option>
                        <option>5:00 AM</option>
                        <option>6:00 AM</option>
                        <option>7:00 AM</option>
                        <option>8:00 AM</option>
                        <option>9:00 AM</option>
                        <option>10:00 AM</option>
                        <option>11:00 AM</option>
                        <option>12:00 PM</option>
                        <option>1:00 PM</option>
                      </select>
                      @error('fridaystart')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="fridayEnd">Friday End</label>
                      <select class="form-control" id="fridayend" name="fridayend" value="fridayend">
                        <option>Any</option>
                        <option>None</option>
                        <option>12:00 (Midnight)</option>
                        <option>1:00 AM</option>
                        <option>2:00 AM</option>
                        <option>3:00 AM</option>
                        <option>4:00 AM</option>
                        <option>5:00 AM</option>
                        <option>6:00 AM</option>
                        <option>7:00 AM</option>
                        <option>8:00 AM</option>
                        <option>9:00 AM</option>
                        <option>10:00 AM</option>
                        <option>11:00 AM</option>
                        <option>12:00 PM</option>
                        <option>1:00 PM</option>
                        <option>2:00 PM</option>
                        <option>3:00 PM</option>
                        <option>4:00 PM</option>
                        <option>5:00 PM</option>
                        <option>6:00 PM</option>
                        <option>7:00 PM</option>
                        <option>8:00 PM</option>
                        <option>9:00 PM</option>
                        <option>10:00 PM</option>
                        <option>11:00 PM</option>
                      </select>
                      @error('fridayend')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="saturdayStart">Saturday Start</label>
                      <select class="form-control" id="saturdaystart" name="saturdaystart" value="saturdaystart">
                        <option>Any</option>
                        <option>None</option>
                        <option>12:00 (Midnight)</option>
                        <option>1:00 AM</option>
                        <option>2:00 AM</option>
                        <option>3:00 AM</option>
                        <option>4:00 AM</option>
                        <option>5:00 AM</option>
                        <option>6:00 AM</option>
                        <option>7:00 AM</option>
                        <option>8:00 AM</option>
                        <option>9:00 AM</option>
                        <option>10:00 AM</option>
                        <option>11:00 AM</option>
                        <option>12:00 PM</option>
                        <option>1:00 PM</option>
                      </select>
                      @error('saturdaystart')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="saturdayend">Saturday End</label>
                      <select class="form-control" id="saturdayend" name="saturdayend" value="saturdayend">
                        <option>Any</option>
                        <option>None</option>
                        <option>12:00 (Midnight)</option>
                        <option>1:00 AM</option>
                        <option>2:00 AM</option>
                        <option>3:00 AM</option>
                        <option>4:00 AM</option>
                        <option>5:00 AM</option>
                        <option>6:00 AM</option>
                        <option>7:00 AM</option>
                        <option>8:00 AM</option>
                        <option>9:00 AM</option>
                        <option>10:00 AM</option>
                        <option>11:00 AM</option>
                        <option>12:00 PM</option>
                        <option>1:00 PM</option>
                        <option>2:00 PM</option>
                        <option>3:00 PM</option>
                        <option>4:00 PM</option>
                        <option>5:00 PM</option>
                        <option>6:00 PM</option>
                        <option>7:00 PM</option>
                        <option>8:00 PM</option>
                        <option>9:00 PM</option>
                        <option>10:00 PM</option>
                        <option>11:00 PM</option>
                      </select>
                      @error('saturdayend')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="phone" class="col-form-label text-md-right">{{ __('Phone Number') }}</label>
                  <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" autocomplete="phone" autofocus placeholder="123-456-7890">
                    @error('phone')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="email" class="col-form-label text-md-right">{{ __('E-mail Address') }}</label>
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus placeholder="Enter your e-mail...">
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

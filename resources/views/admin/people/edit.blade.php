@extends('layouts.admin')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h3 class="card-subtitle mb-2 text-muted">{{$card}}</h3>
            <hr />
            @include('partials.flash-messages')
            <form method="POST" action="{{ route('update-people') }}">
                @csrf
    
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" value="{{ $people->name }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Surname') }}</label>

                    <div class="col-md-6">
                        <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror"
                            name="surname" value="{{ $people->surname }}" required autocomplete="surname" autofocus>

                        @error('surname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="id_number" class="col-md-4 col-form-label text-md-right">{{ __('ID Number') }}</label>

                    <div class="col-md-6">
                        <input id="id_number" type="text" class="form-control @error('id_number') is-invalid @enderror"
                            name="id_number" value="{{ $people->id_number }}" required autocomplete="id_number" autofocus>

                        @error('id_number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="mobile_number" class="col-md-4 col-form-label text-md-right">{{ __('Mobile Number') }}</label>

                    <div class="col-md-6">
                        <input id="mobile_number" type="text" class="form-control @error('mobile_number') is-invalid @enderror"
                            name="mobile_number" value="{{ $people->mobile_number }}" required autocomplete="mobile_number" autofocus>

                        @error('mobile_number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ $people->email }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="date_of_birth" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>

                    <div class="col-md-6">
                        <input id="date_of_birth" type="text" class="form-control @error('date_of_birth') is-invalid @enderror"
                            name="date_of_birth" value="{{ $people->date_of_birth }}" required autocomplete="date_of_birth" autofocus>

                        @error('date_of_birth')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Language') }}</label>

                    <div class="col-md-6">
                        <select id="language" class="form-control @error('language') is-invalid @enderror" name="language"
                          required>
                            <option value="">SELECT LANGUAGE</option>
                            @foreach($languages as $lang)
                            <option <?php echo $lang == $people->language ? 'selected':''; ?> value="{{$lang}}">{{$lang}}</option>
                            @endforeach
                        </select>

                        @error('role')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Interests') }}</label>

                    <div class="col-md-6">
                        <select style="height: 200px;" multiple id="interests[]" class="form-control @error('interests') is-invalid @enderror" name="interests[]"
                            required>
                            @foreach($interests as $interest)
                            <option <?php echo in_array($interest, explode('|',$people->interests)) ? 'selected':''; ?> value="{{$interest}}">{{$interest}}</option>
                            @endforeach
                        </select>
                        @error('status')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <input type="hidden" name="id" value="{{ $people->id}}">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Submit') }}
                        </button>
                    </div>
                </div>
            </form>

        </div>
        <div class="card-footer d-flex align-items-center justify-content-between">
            <a class="small" href="#"></a>
            <div class="small float-right"><i class="fas fa-user"></i></div>
        </div>
    </div>
</div>
@endsection
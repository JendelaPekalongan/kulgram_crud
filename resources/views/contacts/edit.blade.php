@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Form Edit Data Kontak') }}</div>

                <div class="card-body">
						{!! Form::model($contact, ['method' => 'PUT', 'route' => ['contacts.update', $contact->id]] ) !!}
                        @csrf

                        <div class="form-group row">
                            <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>
                            <div class="col-md-6">
								{!! Form::text('nama', null, ['class' => 'form-control']) !!}

                                @if ($errors->has('nama'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>

                            <div class="col-md-6">
								{!! Form::text('alamat', null, ['class' => 'form-control']) !!}

                                @if ($errors->has('alamat'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hobi" class="col-md-4 col-form-label text-md-right">{{ __('Hobi') }}</label>

                            <div class="col-md-6">
								{!! Form::text('hobi', null, ['class' => 'form-control']) !!}

                                @if ($errors->has('hobi'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('hobi') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="no_hp" class="col-md-4 col-form-label text-md-right">{{ __('Ho HP') }}</label>

                            <div class="col-md-6">
								{!! Form::text('no_hp', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
					{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


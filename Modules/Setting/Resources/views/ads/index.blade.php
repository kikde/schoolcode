@extends('layouts.app')

@section('content')
<div class="content-wrapper">
  <div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
      <div class="row breadcrumbs-top">
        <div class="col-12">
          <h2 class="content-header-title float-left mb-0">Homepage Ads</h2>
          <div class="breadcrumb-wrapper">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
              <li class="breadcrumb-item active">Ads</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>

  @if(!empty($needsMigration))
    <div class="alert alert-danger">
      Ads table not found. Please run migrations: <code>php artisan migrate</code>
    </div>
  @endif

  @if(session('message'))
    <div class="alert alert-success">{{ session('message') }}</div>
  @endif

  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header"><h4 class="card-title">Section: style-7 (large banner)</h4></div>
        <div class="card-body">
          <form method="post" action="{{ route('ads.update','home_style7') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label>Title</label>
              <input type="text" name="title" class="form-control" value="{{ old('title',$style7->title ?? '') }}" {{ !empty($needsMigration) ? 'disabled' : '' }}>
            </div>
            <div class="form-group">
              <label>Subtitle</label>
              <input type="text" name="subtitle" class="form-control" value="{{ old('subtitle',$style7->subtitle ?? '') }}" {{ !empty($needsMigration) ? 'disabled' : '' }}>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>Button Text</label>
                <input type="text" name="button_text" class="form-control" value="{{ old('button_text',$style7->button_text ?? '') }}" {{ !empty($needsMigration) ? 'disabled' : '' }}>
              </div>
              <div class="form-group col-md-6">
                <label>Button URL</label>
                <input type="text" name="button_url" class="form-control" value="{{ old('button_url',$style7->button_url ?? '') }}" {{ !empty($needsMigration) ? 'disabled' : '' }}>
              </div>
            </div>
            <div class="form-group">
              <label>Image</label>
              <input type="file" name="image" class="form-control" {{ !empty($needsMigration) ? 'disabled' : '' }}>
              @if(($style7->image_path ?? null))
                <small class="text-muted d-block mt-1">Current: <a href="/{{ $style7->image_path }}" target="_blank">{{ $style7->image_path }}</a></small>
              @endif
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="en7" name="enabled" {{ !empty($style7) && ($style7->enabled ?? false) ? 'checked' : '' }} {{ !empty($needsMigration) ? 'disabled' : '' }}>
              <label class="form-check-label" for="en7">Enabled</label>
            </div>
            <button class="btn btn-primary" {{ !empty($needsMigration) ? 'disabled' : '' }}>Save</button>
          </form>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card">
        <div class="card-header"><h4 class="card-title">Section: style-8 (compact card)</h4></div>
        <div class="card-body">
          <form method="post" action="{{ route('ads.update','home_style8') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label>Title</label>
              <input type="text" name="title" class="form-control" value="{{ old('title',$style8->title ?? '') }}" {{ !empty($needsMigration) ? 'disabled' : '' }}>
            </div>
            <div class="form-group">
              <label>Subtitle</label>
              <input type="text" name="subtitle" class="form-control" value="{{ old('subtitle',$style8->subtitle ?? '') }}" {{ !empty($needsMigration) ? 'disabled' : '' }}>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>Button Text</label>
                <input type="text" name="button_text" class="form-control" value="{{ old('button_text',$style8->button_text ?? '') }}" {{ !empty($needsMigration) ? 'disabled' : '' }}>
              </div>
              <div class="form-group col-md-6">
                <label>Button URL</label>
                <input type="text" name="button_url" class="form-control" value="{{ old('button_url',$style8->button_url ?? '') }}" {{ !empty($needsMigration) ? 'disabled' : '' }}>
              </div>
            </div>
            <div class="form-group">
              <label>Image</label>
              <input type="file" name="image" class="form-control" {{ !empty($needsMigration) ? 'disabled' : '' }}>
              @if(($style8->image_path ?? null))
                <small class="text-muted d-block mt-1">Current: <a href="/{{ $style8->image_path }}" target="_blank">{{ $style8->image_path }}</a></small>
              @endif
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="en8" name="enabled" {{ !empty($style8) && ($style8->enabled ?? false) ? 'checked' : '' }} {{ !empty($needsMigration) ? 'disabled' : '' }}>
              <label class="form-check-label" for="en8">Enabled</label>
            </div>
            <button class="btn btn-primary" {{ !empty($needsMigration) ? 'disabled' : '' }}>Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

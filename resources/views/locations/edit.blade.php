@extends('common.master')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-12"> {{-- These divs are needed for proper layout --}}
                    <form method="POST" action="/locations/{{ $location->id }}">
                        @csrf
                        @method('PUT')
                        <div class="card"> {{-- The form is placed inside a Bulma Card component --}}
                            <header class="card-header">
                                <p class="card-header-title"> {{-- The Card header content --}}
                                    Edit Location
                                </p>
                            </header>

                            <div class="card-content">
                                <div class="content">

                                    {{-- Here are all the form fields --}}

                                    <div class="field">
                                        <label class="label">Name</label>
                                        <div class="control">
                                            <textarea name="name"
                                                      class="textarea @error('name') is-danger @enderror"
                                                      type="text" placeholder="Name...">
                                                {{old('name', $location->name)}}
                                            </textarea>
                                        </div>
                                        @error('name')
                                        <p class="help is-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div--}}


                                    <div class="field">
                                        <label class="label">Longitude</label>
                                        <div class="control">
                                            <textarea name="longitude"
                                                      class="textarea @error('longitude') is-danger @enderror"
                                                      type="text" placeholder="Longitude...">
                                                {{old('longitude', $location->longitude)}}
                                            </textarea>
                                        </div>
                                        @error('longitude')
                                        <p class="help is-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="field">
                                    <label class="label">Latitude</label>
                                    <div class="control">
                                            <textarea name="latitude" class="textarea @error('latitude')
                                            is-danger @enderror" rows="15"
                                                      placeholder="Latitude">
                                                {{old('latitude', $location->latitude)}}
                                            </textarea>
                                    </div>
                                    @error('latitude')
                                    <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>



                                <div class="field is-grouped">
                                    {{-- Here are the form buttons: save, reset and cancel --}}
                                    <div class="control">
                                        <button type="submit" class="button is-primary">Save</button>
                                    </div>
                                    <div class="control">
                                        <button type="reset" href class="button is-warning">Reset</button>
                                    </div>
                                    <div class="control">
                                        <a type="button" href="/locations" class="button is-light">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection



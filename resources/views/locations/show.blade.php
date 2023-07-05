@extends('common.master')

@section('content')
    <section class="hero  is-small  is-bold is-primary">
        <div class="hero-body">
            <div class="container">
                <p class="title is-2">Locations</p>
                <p class="subtitle is-3">All the birds Located :D</p>

            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-12">
                    <div class="content">

                        <div class="has-text-right">
                            <a href="/locations/create" class="button is-primary">Add a new Location...</a>
                        </div>

                        <table class="table is-fullwidth">
                            <thead>
                            <tr>
                                <th style="width: 5%">ID</th>
                                <th style="width: 15%">Name</th>
                                <th style="width: 20%">Latitude</th>
                                <th style="width: 20%">Longitude</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        {{ $location->id }}
                                    </td>
                                    <td>
                                        {{ $location->name }}
                                    </td>
                                    <td>
                                    {{ $location->latitude }}
                                    <td>
                                        {{ $location->longitude }}
                                    </td>
                                </tr>
                                <button>
                                    <a href="{{route('locations.edit', $location->id)}}"> EDIT
                                    </a>
                                </button>
                                <form method="POST" action="/locations/{{$location->id}}" >
                                    @csrf
                                    @method('DELETE')
                                    <button> DELETE </button>
                                </form>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

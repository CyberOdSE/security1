@extends('common.master')

@section('content')
    <section class="hero  is-small  is-bold is-primary">
        <div class="hero-body">
            <div class="container">
                <p class="title is-2">Observations</p>
                <p class="subtitle is-3">All the birds spotted</p>

            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-12">
                    <div class="content">

                        <div class="has-text-right">
                            <a href="/observations/create" class="button is-primary">Add a new observation...</a>
                        </div>

                        <table class="table is-fullwidth">
                            <thead>
                            <tr>
                                <th style="width: 5%">TEST</th>
                                <th style="width: 5%">Name and location</th>
                                <th style="width: 15%">Observed at</th>
                                <th style="width: 20%">Species</th>
                                <th style="width: 20%">Location</th>
                                <th style="width: 20%">User</th>
                                <th style="width: 20%">Gear</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($observations as $observation)
                                <tr>
                                    <td>{{ $observation->id }}</td>
                                    <td>
                                        <a href="#">
                                            {{ $observation->observed_at }}
                                        </a>
                                    </td>
                                    <td>
                                        {{ $observation->name }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

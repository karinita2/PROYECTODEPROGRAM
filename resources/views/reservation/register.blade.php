@extends('layouts.head')
@section('middle-content')
    <div class="card">
        <div class="card-content">
            <span class="card-title">Input fields</span><br>
            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <input placeholder="Placeholder" id="first_name" type="text" class="validate valid">
                            <label for="first_name" class="active">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="last_name" type="text" class="validate valid">
                            <label for="last_name" class="active">Last Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input disabled="" value="I am not editable" id="disabled" type="text" class="validate">
                            <label for="disabled" class="active">Disabled</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" class="validate">
                            <label for="password">Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
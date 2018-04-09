@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">

                    {{-- ACTUAL CONTACT FORM STARTS HERE --}}
                    <form class="form-horizontal" action="{{ route('contactform.create') }}" method="post">
                        @csrf
                        <fieldset>
                        <legend class="text-center">Contact us</legend>
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Name input-->
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="name">Name</label>
                          <div class="col-md-9">
                            <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
                          </div>
                        </div>

                        <!-- Email input-->
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="email">Your E-mail</label>
                          <div class="col-md-9">
                            <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
                          </div>
                        </div>

                        <!-- Message body -->
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="message">Your message</label>
                          <div class="col-md-9">
                            <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
                          </div>
                        </div>

                        <!-- Form actions -->
                        <div class="form-group">
                          <div class="col-md-12 text-right">
                            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                          </div>
                        </div>
                        </fieldset>
                    </form>
                    {{-- ACTUAL CONTACT FORM ENDS HERE --}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection


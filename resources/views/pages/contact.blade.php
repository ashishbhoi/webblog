@extends('layouts.app')

@section('content')
    <div class="jumbotron-mod">
        <h1 class="display-4 text-center"><b>Contact Form</b></h1>
        <form action="{{route('contact.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First name" aria-describedby="first_name" required>
                    </div>
                    <div class="col">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last name" aria-describedby="last_name" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="sex">Sex</label>
                        <select id="sex" name="sex" class="custom-select" required>
                            <option></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="message">Message</label>
                        <textarea type="text" class="form-control" rows="6" id="message" name="message" placeholder="Please type your message ...." required></textarea>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection

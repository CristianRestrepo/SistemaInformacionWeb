@extends('templates.templateDashboard')

@section('content')
        <!-- Title -->
<h1>Blog Post Title</h1>

<!-- Author -->
<p class="lead">
    by <a href="#">Start Bootstrap</a>
</p>

<hr>

<!-- Date/Time -->
<p><span class="glyphicon glyphicon-time"></span> Posted on August 24, 2013 at 9:00 PM</p>

<hr>

<!-- Preview Image -->
<img class="img-responsive" src="http://placehold.it/900x300" alt="">

<hr>

<!-- Post Content -->
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.</p>

<hr>

<!-- Blog Comments -->

<!-- Comments Form -->
<div class="well">
    <h4>Leave a Comment:</h4>
    <form role="form">
        <div class="form-group">
            <textarea class="form-control" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<hr>

@endsection
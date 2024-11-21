@extends('layout')

@section('main')

    <!-- main -->
    <main class="container">
      <section class="single-blog-post">
        <h1>About Me</h1>
        <div class="single-blog-post-ContentImage" data-aos="fade-left">
          <img src="{{asset('images/photography.jpg')}}" alt="" />
        </div>

        <div>
          <p class="about-text">
            "Abhivyakti is a creative platform that empowers individuals to express their thoughts, ideas, and stories.
             It provides a space where words come to life, offering writers a chance to share their voices with the world
              and engage in meaningful dialogue through the power of expression."
          </p>
        </div>
      </section>
    </main>
@endsection

@extends("layouts.home_layout")
@section("content")
        <main class="flex-shrink-0">
            <!-- Projects Section-->
            <section class="py-5">
                <div class="container px-5 mb-5">
                    <div class="text-center mb-5">
                        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-11 col-xl-9 col-xxl-8">
                            @foreach($project as $pro)
                                <!-- Project Card -->
                                <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                    <div class="card-body p-0">
                                        <div class="d-flex align-items-center">
                                            <div class="p-5">
                                                <h2 class="fw-bolder">{{ $pro->title }}</h2>
                                                <p>{{ $pro->descriptions }}</p>
                                                <p>{{ $pro->keywords }}</p>
                                                <a class="text-gradient" href="{{$pro->url}}"><i class="bi bi-github"></i></a>
                                                <!-- You can add more project details here -->
                                            </div>
                                            <img class="img-fluid" src="{{ $pro->image }}" alt="{{ $pro->title }}" />
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Call to action section-->
            <section class="py-5 bg-gradient-primary-to-secondary text-white">
                <div class="container px-5 my-5">
                    <div class="text-center">
                        <h2 class="display-4 fw-bolder mb-4">Let's build something together</h2>
                        <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="contact.html">Contact me</a>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer-->
        <footer class="bg-white py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0">Copyright &copy; Your Website 2023</div></div>
                    <div class="col-auto">
                        <a class="small" href="#!">Privacy</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="#!">Terms</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="#!">Contact</a>
                    </div>
                </div>
            </div>
      @endsection

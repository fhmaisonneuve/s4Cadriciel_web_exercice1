@extends('master')
@section('title', 'Me Contacter')
@section('content')
    <!-- Page content CONTACT-->
    <section class="py-5">
        <div class="container px-5">
            <!-- Contact form-->
            <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                <div class="text-center mb-5">
                    <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i
                            class="bi bi-envelope"></i></div>
                    <h1 class="fw-bolder">@yield('title')</h1>
                    <p class="lead fw-normal text-muted mb-0">Au plaisir de discuter avec vous!</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        @if (isset($data))
                            <div class="text-center mb-3 ">
                                <div class="fw-bolder">Merci {{ $data->name }}, votre formulaire a été envoyé avec succès!
                                </div>
                                <div class="text-muted">
                                    <span class="fw-bold">Nom :</span> {{ $data->name }}<br>
                                    <span class="fw-bold">courriel :</span> {{ $data->email }}<br>
                                    <span class="fw-bold">Téléphone :</span> {{ $data->phone }}<br>
                                    <span class="fw-bold">Message :</span> {{ $data->message }}<br>
                                </div>
                            </div>
                        @else
                            <form id="contactForm" method="post">
                                @csrf

                                <!-- Name input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="name" type="text"
                                        placeholder="Enter your name..." required />
                                    <label for="name">Nom complet</label>

                                </div>
                                <!-- Email address input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="email" type="email" placeholder="name@example.com"
                                        required />
                                    <label for="email">Courriel</label>

                                </div>
                                <!-- Phone number input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="phone" type="tel" placeholder="(123) 456-7890" required />
                                    <label for="phone">Téléphone</label>

                                </div>
                                <!-- Message input-->
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" name="message" type="text" placeholder="Enter your message here..."
                                        style="height: 10rem" required></textarea>
                                    <label for="message">Message</label>

                                </div>

                                <!-- Submit Button-->
                                <div class="d-grid"><button class="btn btn-primary btn-lg " id="submitButton" type="submit">Soumettre</button></div>
                            </form>

                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    </main>

@endsection

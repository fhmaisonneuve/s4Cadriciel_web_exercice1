@extends('master')
@section('title', 'Mes projets')
@section('content')

    <!-- Projects Section-->
    <section class="py-5">
                <div class="container px-5 mb-5">
                    <div class="text-center mb-5">
                        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projets</span></h1>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-11 col-xl-9 col-xxl-8">
                            <!-- Project Card 1-->
                            <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="p-5">
                                            <h2 class="fw-bolder">Stampee</h2>
                                            <p>Plateforme d'enchère de timbre.  Single PageApplication PHP+js sans utiliser de framework spécifique pour faciliter le travail.</p>
                                            <a href="https://e2296133.webdev.cmaisonneuve.qc.ca/stampee/">Appercu</a>

                                        </div>
                                        <img class="img-fluid" src="assets/projets/projet1.png" alt="..." /> 
                                    </div>
                                </div>
                            </div>
                            <!-- Project Card 2-->

                            <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="p-5">
                                        <h2 class="fw-bolder">Cadriciel - Exercice 1</h2>
                                        <p>Exercice laravel en utilisant laravel/boostrap pour faire une spa avec un formulaire.</p>
                                            <a href="https://e2296133.webdev.cmaisonneuve.qc.ca/exercice1a/">Appercu</a>

                                        </div>
                                        <img class="img-fluid" src="assets/projets/projet2.png" alt="..." /> 
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- Call to action section-->
            <section class="py-5 bg-gradient-primary-to-secondary text-white">
                <div class="container px-5 my-5">
                    <div class="text-center">
                        <h2 class="display-4 fw-bolder mb-4">Au plaisir de travailler avec vous</h2>
                        <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="contact">Me contacter</a>
                    </div>
                </div>
            </section>
        </main>

@endsection

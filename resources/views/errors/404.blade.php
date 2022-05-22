@extends('layouts.main')

@section('content')

    <main>
        <div class="container">
            <div class="row">
                <div class="col-lg-11 mx-auto">
                    <section class="edica-404">
                        <h1 class="page-title" data-aos="fade-up">404</h1>
                        <h5 class="edica-404-subtitle" data-aos="fade-up" data-aos-delay="100">Сторінку не знайдено!</h5>
                        <p class="edics-404-text" data-aos="fade-up" data-aos-delay="200">Йой! Сторінка йяку ви шукаєте не знайдена. Можливо вона була переміщна або видалена.</p>
                        <a href="{{ route('main.index') }}" class="edica-404-link btn btn-warning" data-aos="fade-up" data-aos-delay="300">Повернутися на головну</a>
                    </section>
                </div>
            </div>
        </div>
    </main>

@endsection

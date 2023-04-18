@extends('layout.master-layout')
@section('title', 'temancemas.id | Home')
@section('home', 'active')

@section('konten')
{{-- Bagian Utama --}}
<section id="home">
    <div class="container col-xxl-8 px-4 py-5 mt-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="/assets/nobg.png" class="d-block mx-lg-auto img-fluid me-0" alt="Bootstrap Themes" width="700"
                    height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-3 fw-bold lh-4 mb-3" style="color:#3c3665">temancemas.id</h1>
                <div class="bd-example">
                    <blockquote class="blockquote">
                        <p><mark>
                                “Nothing diminishes anxiety faster than action.” </mark>
                        </p>
                        <footer class="blockquote-footer">
                            Walter Anderson
                            <cite title="Source Title">(1903-1965)</cite>
                        </footer>
                    </blockquote>
                </div>
                <p class="lead c11">By managing your anxiety, you can start living life to the fullest again.</p>
                <h6 class="c5">Understand yourself and heal!</h6><br><br>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4"
                        onclick="location.href = 'questioner-page';">Anxienty Test</button>
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4"
                        onclick="location.href = 'trackinghabits_b';">Tracking Habits</button>
                </div>
            </div>
        </div>
    </div><br><br>
</section>
{{-- Bagian Utama End --}}

<main class="container">
    {{-- Artikel Singkat --}}
    <div class="p-4 p-md-5 mb-4 rounded" style="background-color: #f0f2fa">
        <div class="col-md-12 px-0">
            <h1 class="display-1 c1">Apa itu <i>Anxienty </i>?</h1>
            <article class="blog-post c2">
                <p class="blog-post-meta">Maret 18, 2023</p>
                <p><i>Anxienty</i> atau kecemasan merupakan perasaan subjektif yang dialami oleh individu</p>
                <hr>
                <p>Kecemasan adalah suatu perasaan yang dialami oleh banyak orang. Kecemasan dapat diartikan sebagai
                    perasaan khawatir,
                    takut, dan cemas yang timbul karena adanya perasaan tidak aman terhadap sesuatu yang akan terjadi
                    atau yang sedang terjadi.
                    Kecemasan dapat disebabkan oleh berbagai faktor, seperti masalah keuangan, hubungan antar pribadi,
                    pekerjaan, atau kesehatan.</p>

                <h2 class="c4">Bagaimana jika tidak diatasi dengan baik?</h2><br>

                <p>Kecemasan yang tidak diatasi dengan baik, dapat berdampak negatif pada
                    kesehatan mental hingga fisik seseorang. Dampak tersebut akan membatasi
                    kehidupan personal dan sosial mereka, maka dibutuhkan deteksi gejala kecemasan
                    agar keadaan tersebut dapat diatasi sedini mungkin.</p>

                <h3 class="c4">Gejala Kecemasan</h3>
                <p>Beberapa contoh gejala kecemasan yang umum terjadi adalah:</p>
                <ul>
                    <li>Kehawatiran yang berlebihan atau khawatir berlebihan terhadap sesuatu yang mungkin tidak
                        terjadi.</li>
                    <li>Kesulitan tidur atau tidur yang tidak nyenyak.</li>
                    <li>Kesulitan berkonsentrasi.</li>
                    <li>Kepala pusing atau detak jantung yang cepat.</li>
                    <li>Keringat dingin atau gemetar.</li>
                    <li>Perasaan gelisah atau tidak tenang.</li>
                    <li>Mual atau sakit perut.</li>
                </ul>

                <h3 class="c4">Mengatasi Kecemasan</h3>
                <p>Ada beberapa cara yang dapat membantu mengatasi kecemasan, seperti:</p>
                <ul>
                    <li>Meditasi atau relaksasi: Meditasi atau teknik relaksasi seperti pernapasan dalam dan dalam-dalam
                        dapat membantu mengurangi kecemasan dan membantu menenangkan pikiran.</li>
                    <li>Olahraga: Berolahraga secara teratur dapat membantu mengurangi kecemasan dan meningkatkan
                        kesehatan fisik dan mental.</li>
                    <li>Terapi: Terapi dapat membantu seseorang mengatasi masalah kecemasan dengan mempelajari
                        teknik-teknik yang efektif untuk mengelola kecemasan dan mengubah cara berpikir mereka tentang
                        situasi yang menimbulkan kecemasan.</li>
                    <li>Menghindari pemicu kecemasan: Seseorang dapat menghindari situasi atau orang-orang yang
                        menimbulkan kecemasan.</li>
                    <li>Membuat jadwal: Membuat jadwal harian yang teratur dapat membantu mengurangi kecemasan dengan
                        memberikan struktur dan rutinitas yang jelas.</li>
                </ul>

            </article>
        </div>
    </div>
    </div>
    {{-- Artikel End --}}

    {{-- Berita --}}
    <div class="row mb-3">
        <div class="col-md-4">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <div class="col-auto d-none d-lg-block">
                        <img src="/assets/mh.jpg" alt="Thumbnail" class="bd-placeholder-img" width="305" height="205">
                    </div>
                    <strong class="d-inline-block mb-2 text-success">Article</strong>
                    <h3 class="mb-0">Kesehatan Mental</h3>
                    <p class="mb-auto">Pentingnya Kesadaran tentang Kesehatan Mental bagi Karakter Generasi Muda.</p>
                    <a href="https://kumparan.com/siti-fitriani-rejeki/pentingnya-kesadaran-tentang-kesehatan-mental-bagi-karakter-generasi-muda-1vxxwbCCV1L/2/gallery/1"
                        onclick="window.open(this.href,'_blank');return false;" class="stretched-link">Continue
                        reading</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <div class="col-auto d-none d-lg-block">
                        <img src="/assets/an.jpg" alt="Thumbnail" class="bd-placeholder-img" width="305" height="205">
                    </div>
                    <strong class="d-inline-block mb-2 text-success">Article</strong>
                    <h3 class="mb-0">Kecemasan</h3>
                    <p class="mb-auto">Apa itu kecemasan? Siapa yang berpotensi mengalami kecemasan dan bagaimana
                        gejalanya?</p>
                    <a href="https://www.unicef.org/indonesia/id/kesehatan-mental/artikel/kecemasan"
                        onclick="window.open(this.href,'_blank');return false;" class="stretched-link">Continue
                        reading</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <div class="col-auto d-none d-lg-block">
                        <img src="/assets/uk.jpg" alt="Thumbnail" class="bd-placeholder-img" width="305" height="205">
                    </div>
                    <strong class="d-inline-block mb-2 text-success">Article</strong>
                    <h3 class="mb-0">Bangun Kebiasaan</h3>
                    <p class="mb-auto">Berapa Lama Waktu untuk Membentuk dan Mengubah Kebiasaan Buruk?</p>
                    <a href="https://www.suara.com/lifestyle/2021/01/18/105951/berapa-lama-waktu-untuk-membentuk-dan-mengubah-kebiasaan-buruk"
                        onclick="window.open(this.href,'_blank');return false;" class="stretched-link">Continue
                        reading</a>
                </div>
            </div>
        </div>
    </div>
    {{-- Berita End --}}
</main>

{{-- About Us --}}
{{-- merubah agar ketika user menekan navbar us, maka akan active --}}

<section id="about" class="@section('us','active') @section('home','')  ">
    <div class="text-secondary px-4 py-5 text-center" style="background-color: #3c3665">
        <div class="py-5">
            <h1 class="logo"><img src="/assets/logofix.png" alt=""></h1><br>
            <h1 class="display-6 fw-bold c7"> temancemas.id</h1>
            <div class="col-lg-6 mx-auto">
                <p class="fs-5 mb-4 c3"><i>temancemas.id</i> adalah web kesehatan mental yang dilengkapi dengan tes
                    kecemasan(<i>Anxienty test</i>) dan pelacak kebiasaan(<i>Tracking Habits</i>). Fitur-fitur tersebut
                    membantu user mengidentifikasi kecemasan sejak dini dan mengelola kebiasaan user menuju
                    kebiasaan positif. <i>temancemas.id</i> juga menawarkan saran berdasarakan tingkat kecemasan yang
                    didapatkan.</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <button type="button" class="btn btn-outline-light btn-lg px-4"
                        onclick="location.href = 'register';">Join Us!</button>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- About Us End --}}
@endsection

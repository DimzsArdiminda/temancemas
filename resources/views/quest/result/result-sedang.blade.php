@extends('layout.master-layout')

@section('title', 'temancemas.id | Result')

        <div class="container col-xxl-8 px-4 py-5 mt-3">
          <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
              <img src="/assets/img1.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
              <h1 class="display-3 fw-bold lh-4 mb-3" style="color:#3c3665">Hasil: "Sedang"</h1>
              <div class="bd-example">
                <blockquote class="blockquote">
                    <p><mark>
                      “Kecemasan sedang dapat sangat mengganggu kehidupan sehari-harimu.” </mark>
                    </p>
                </blockquote>
            </div>
              <p class="lead c11">Jangan takut untuk mencari bantuan profesional seperti terapis atau psikiater.
                Mereka dapat membantumu menemukan strategi dan solusi untuk mengatasi kecemasan yang kamu rasakan.
                Selain itu, cobalah untuk menjaga pola tidur dan olahraga yang sehat, karena kurang tidur dan kurang
                olahraga dapat memperburuk kecemasanmu.</p>
              <h6 class="c5">Jangan lupa untuk menjaga hubungan sosialmu dengan bertemu
                dan berbicara dengan teman dan keluargamu!</h6><br><br>
              <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <button type="button" class="btn btn-outline-secondary btn-lg px-4"
                onclick="location.href = 'questioner-page';">Reattempt</button>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4"
                onclick="location.href = 'trackinghabits_b';">Tracking Habits</button>
              </div>
            </div>
          </div>
        </div>


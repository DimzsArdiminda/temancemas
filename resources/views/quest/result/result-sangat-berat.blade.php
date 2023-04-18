@extends('layout.master-layout')

@section('title', 'temancemas.id | Result')

        <div class="container col-xxl-8 px-4 py-5 mt-3">
          <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
              <img src="/assets/img1.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
              <h1 class="display-3 fw-bold lh-4 mb-3" style="color:#3c3665">Hasil: "Sangat Berat"</h1>
              <div class="bd-example">
                <blockquote class="blockquote">
                    <p><mark>
                      “Kecemasan sangat berat dapat sangat mempengaruhi kualitas hidupmu.” </mark>
                    </p>
                </blockquote>
            </div>
              <p class="lead c11">Jika kamu merasa kecemasanmu sangat berat dan mengganggu kehidupan sehari-harimu,
                sangat penting untuk segera mencari bantuan dari profesional kesehatan mental yang terlatih.
                Mereka dapat membantumu menemukan pengobatan yang tepat dan strategi untuk mengatasi kecemasanmu.
                Jangan ragu untuk mencari dukungan dari keluarga dan teman-temanmu, karena dukungan sosial dapat
                membantumu merasa lebih tenang dan terbantu.</p>
              <h6 class="c5">Pastikan kamu menjaga kesehatan fisikmu dengan olahraga dan diet yang sehat,
                dan mencoba untuk menemukan cara untuk mengurangi stres dan tekanan dalam hidupmu!</h6><br><br>
              <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <button type="button" class="btn btn-outline-secondary btn-lg px-4"
                onclick="location.href = 'questioner-page';">Reattempt</button>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4"
                onclick="location.href = '#';">Professionals</button>
              </div>
            </div>
          </div>
        </div>

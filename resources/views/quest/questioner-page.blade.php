@extends('layout.master-layout')
<link rel="stylesheet" href="quest.css">

@section('title', 'temancemas.id | Anxienty Test')
<style>
  .bordered{
    border : solid 1px
  }
  .mr{
    padding-left: 10px
  }
</style>

<div style="background-color: #f0f2fa">
  <div class="container mt-5 pt-5 mb-5 pb-5" style="background-color: #f0f2fa">

    <h1 class="display-1 c1 text-center fw-bold">Anxienty Test</h1><hr>

    <h3 class="c4">PERHATIKAN</h3>
    <ul>
      <li>Berisi 14 pertanyaan menggunakan skala 0 sampai 3 untuk menghitung skor akhir.</li>
      <li>Skor Anda bersifat rahasia.</li>
      <li>Ahli kesehatan mental hanya dapat melihat informasimu jika kamu membagikannya.</li>
    </ul>
    <p>Jawablah pertanyaan di bawah sesuai dengan kondisi Anda dengan ketentuan sebagai berikut :</p>

      <table>
        <tr>
          <td class="ps-3"><input  type="radio" id="nilai0" name="nilai" value="0"></td>
          <td>:</td>
          <td> Tidak ada atau Anda tidak pernah mengalami kondisi tersebut.</td>
        </tr>
        <tr>
          <td class="ps-3"><input class="mr" type="radio" id="nilai1" name="nilai" value="1"></td>
          <td>:</td>
          <td> Kadang-kadang/ sesaai dengan yang Anda alami sampai tingkat tertentu.</td>
        </tr>
        <tr>
          <td class="ps-3"><input class="mr" type="radio" id="nilai2" name="nilai" value="2"></td>
          <td>:</td>
          <td> Sering terjadi.</td>
        </tr>
        <tr>
          <td class="ps-3"><input class="mr" type="radio" id="nilai3" name="nilai" value="3"></td>
          <td class="ps-1">:</td>
          <td> Hampir setiap saat/ Sangat sesaui dengan kondisi Anda/ Sangat sering terjadi.</td>
        </tr>
      </table>


    <button type="button" class="btn btn-outline-dark btn-lg px-4 mt-3" onclick="location.href = '#quest';"\>Lanjutkan ></button>
    <hr>


    <section id="quest">
      <form>
        <div class="text-center" style="padding-top:90px">
          <form class="mt-5 pt-5 text-center">
            <label>Mulut terasa kering?</label><br><br>
            <input type="radio" id="nilai0" name="nilai" value="0">
            <label for="nilai0">  </label>
            <input type="radio" id="nilai1" name="nilai" value="1">
            <label for="nilai1">  </label>
            <input type="radio" id="nilai2" name="nilai" value="2">
            <label for="nilai2">  </label>
            <input type="radio" id="nilai3" name="nilai" value="3">
            <label for="nilai3">  </label>
          </form>

          <form class="mt-5">
            <label>Merasakan gangguan dalam bernapas(napas cepat, sulit bernapas)?</label><br><br>
            <input type="radio" id="nilai0" name="nilai" value="0">
            <label for="nilai0">  </label>
            <input type="radio" id="nilai1" name="nilai" value="1">
            <label for="nilai1">  </label>
            <input type="radio" id="nilai2" name="nilai" value="2">
            <label for="nilai2">  </label>
            <input type="radio" id="nilai3" name="nilai" value="3">
            <label for="nilai3">  </label>
          </form>

          <form class="mt-5">
            <label>Kelemahan pada anggota tubuh?</label><br><br>
            <input type="radio" id="nilai0" name="nilai" value="0">
            <label for="nilai0">  </label>
            <input type="radio" id="nilai1" name="nilai" value="1">
            <label for="nilai1">  </label>
            <input type="radio" id="nilai2" name="nilai" value="2">
            <label for="nilai2">  </label>
            <input type="radio" id="nilai3" name="nilai" value="3">
            <label for="nilai3">  </label>
          </form>

          <form class="mt-5">
            <label>Cemas yang berlebihan dalam suatu situasi namun bisa lega jika hal/ situasi itu berakhir?</label><br><br>
            <input type="radio" id="nilai0" name="nilai" value="0">
            <label for="nilai0">  </label>
            <input type="radio" id="nilai1" name="nilai" value="1">
            <label for="nilai1">  </label>
            <input type="radio" id="nilai2" name="nilai" value="2">
            <label for="nilai2">  </label>
            <input type="radio" id="nilai3" name="nilai" value="3">
            <label for="nilai3">  </label>
          </form>

          <form class="mt-5">
            <label>Kelelahan?</label><br><br>
            <input type="radio" id="nilai0" name="nilai" value="0">
            <label for="nilai0">  </label>
            <input type="radio" id="nilai1" name="nilai" value="1">
            <label for="nilai1">  </label>
            <input type="radio" id="nilai2" name="nilai" value="2">
            <label for="nilai2">  </label>
            <input type="radio" id="nilai3" name="nilai" value="3">
            <label for="nilai3">  </label>
          </form>

          <form class="mt-5">
            <label>Berkeringat (misal: tangan berkeringat) tanpa stimulais oleh cuaca maupun latihan fisik?</label><br><br>
            <input type="radio" id="nilai0" name="nilai" value="0">
            <label for="nilai0"> </label>
            <input type="radio" id="nilai1" name="nilai" value="1">
            <label for="nilai1">  </label>
            <input type="radio" id="nilai2" name="nilai" value="2">
            <label for="nilai2">  </label>
            <input type="radio" id="nilai3" name="nilai" value="3">
            <label for="nilai3">  </label>
          </form>

          <form class="mt-5">
            <label>Ketakutan tanpa alasan yang jelas?</label><br><br>
            <input type="radio" id="nilai0" name="nilai" value="0">
            <label for="nilai0">  </label>
            <input type="radio" id="nilai1" name="nilai" value="1">
            <label for="nilai1">  </label>
            <input type="radio" id="nilai2" name="nilai" value="2">
            <label for="nilai2">  </label>
            <input type="radio" id="nilai3" name="nilai" value="3">
            <label for="nilai3">  </label>
          </form>

          <form class="mt-5">
            <label>Kesulitan dalam menelan?</label><br><br>
            <input type="radio" id="nilai0" name="nilai" value="0">
            <label for="nilai0">  </label>
            <input type="radio" id="nilai1" name="nilai" value="1">
            <label for="nilai1">  </label>
            <input type="radio" id="nilai2" name="nilai" value="2">
            <label for="nilai2">  </label>
            <input type="radio" id="nilai3" name="nilai" value="3">
            <label for="nilai3">  </label>
          </form>

          <form class="mt-5">
            <label>Perubahan kegitan jantugn dan denyut nadi tanpa stimulasi oleh latihan fisik?</label><br><br>
            <input type="radio" id="nilai0" name="nilai" value="0">
            <label for="nilai0">  </label>
            <input type="radio" id="nilai1" name="nilai" value="1">
            <label for="nilai1">  </label>
            <input type="radio" id="nilai2" name="nilai" value="2">
            <label for="nilai2">  </label>
            <input type="radio" id="nilai3" name="nilai" value="3">
            <label for="nilai3">  </label>
          </form>

          <form class="mt-5">
            <label>Mudah panik?</label><br><br>
            <input type="radio" id="nilai0" name="nilai" value="0">
            <label for="nilai0">  </label>
            <input type="radio" id="nilai1" name="nilai" value="1">
            <label for="nilai1">  </label>
            <input type="radio" id="nilai2" name="nilai" value="2">
            <label for="nilai2">  </label>
            <input type="radio" id="nilai3" name="nilai" value="3">
            <label for="nilai3">  </label>
          </form>

          <form class="mt-5">
            <label>Takut diri terhambat oleh tugas-tugas yang tidak bisa dilakukan?</label><br><br>
            <input type="radio" id="nilai0" name="nilai" value="0">
            <label for="nilai0">  </label>
            <input type="radio" id="nilai1" name="nilai" value="1">
            <label for="nilai1">  </label>
            <input type="radio" id="nilai2" name="nilai" value="2">
            <label for="nilai2">  </label>
            <input type="radio" id="nilai3" name="nilai" value="3">
            <label for="nilai3">  </label>
          </form>

          <form class="mt-5">
            <label>Ketakutan?</label><br><br>
            <input type="radio" id="nilai0" name="nilai" value="0">
            <label for="nilai0">  </label>
            <input type="radio" id="nilai1" name="nilai" value="1">
            <label for="nilai1">  </label>
            <input type="radio" id="nilai2" name="nilai" value="2">
            <label for="nilai2">  </label>
            <input type="radio" id="nilai3" name="nilai" value="3">
            <label for="nilai3">  </label>
          </form>

          <form class="mt-5">
            <label>Khawatir dengan situasi saat diri Anda mungkin menjadi panik dan mempermalukan diri sendiri?</label><br><br>
            <input type="radio" id="nilai0" name="nilai" value="0">
            <label for="nilai0">  </label>
            <input type="radio" id="nilai1" name="nilai" value="1">
            <label for="nilai1">  </label>
            <input type="radio" id="nilai2" name="nilai" value="2">
            <label for="nilai2">  </label>
            <input type="radio" id="nilai3" name="nilai" value="3">
            <label for="nilai3">  </label>
          </form>

          <form class="mt-5">
            <label>Gemetar?</label><br><br>
            <input type="radio" id="nilai0" name="nilai" value="0">
            <label for="nilai0">  </label>
            <input type="radio" id="nilai1" name="nilai" value="1">
            <label for="nilai1">  </label>
            <input type="radio" id="nilai2" name="nilai" value="2">
            <label for="nilai2">  </label>
            <input type="radio" id="nilai3" name="nilai" value="3">
            <label for="nilai3">  </label>
          </form>

            <br><br><button type="button" class="btn btn-lg btn-outline-dark px-4"
            onclick="location.href = 'result-berat';">Submit</button>
      </form>
    </section>

    </div>
  </div>
</div>

<img src="/assets/banner.png" class="d-block mx-lg-auto img-fluid">

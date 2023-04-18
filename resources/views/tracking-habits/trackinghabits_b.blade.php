@extends('layout.master-layout')
@section('title', 'Tracking Habits')
@section('Judul', 'Tracking Habits')

@section('konten')

<style>
.bordered {
  border: 1px solid #000;
  padding: 10px;
  margin: 10px;
}
</style>
<div class="container justify-content-center" style="padding-top: 15vh">
    <div class="row pb-2">
{{--judul  --}}
        <div class="col-6">
            <h1 class="display-3 fw-bold lh-4 mb-3" style="color:#3c3665">Tracking Habits</h1>
        </div>
{{-- end of judul  --}}
{{-- cek list --}}
        <div class="col-1 pt-2 ps-5 justify-content-end">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="tracking_habits">
                <label class="form-check-label" for="tracking_habits">
            </div>
        </div>
{{-- cek list --}}
            <div class="col-5">
                <input class="form-control" type="text" placeholder="Masukan Tracking habits" aria-label="default input example">
        </div>
    </div>

    <div class="row pb-2">
        <div class="col-1 offset-6 pt-2 ps-5 justify-content-end">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="tracking_habits">
                <label class="form-check-label" for="tracking_habits">
            </div>
        </div>
            <div class="col-5">
                <input class="form-control" type="text" placeholder="Masukan Tracking habits" aria-label="default input example">
        </div>
    </div>
    <div class="row pb-2">
        <div class="col-1 offset-6 pt-2 ps-5 justify-content-end">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="tracking_habits">
                <label class="form-check-label" for="tracking_habits">
            </div>
        </div>
            <div class="col-5">
                <input class="form-control" type="text" placeholder="Masukan Tracking habits" aria-label="default input example">
        </div>
    </div>
    <div class="row pb-2">
        <div class="col-1 offset-6 pt-2 ps-5 justify-content-end">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="tracking_habits">
                <label class="form-check-label" for="tracking_habits">
            </div>
        </div>
            <div class="col-5">
                <input class="form-control" type="text" placeholder="Masukan Tracking habits" aria-label="default input example">
        </div>
    </div>
    <div class="row pb-2">
        <div class="col-1 offset-6 pt-2 ps-5 justify-content-end">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="tracking_habits">
                <label class="form-check-label" for="tracking_habits">
            </div>
        </div>
            <div class="col-5">
                <input class="form-control" type="text" placeholder="Masukan Tracking habits" aria-label="default input example">
        </div>
    </div>
    <div class="row pb-2">
        <div class="col-1 offset-6 pt-2 ps-5 justify-content-end">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="tracking_habits">
                <label class="form-check-label" for="tracking_habits">
            </div>
        </div>
            <div class="col-5">
                <input class="form-control" type="text" placeholder="Masukan Tracking habits" aria-label="default input example">
        </div>
    </div>
    <div class="row pb-2">
        <div class="col-1 offset-6 pt-2 ps-5 justify-content-end">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="tracking_habits">
                <label class="form-check-label" for="tracking_habits">
            </div>
        </div>
            <div class="col-5">
                <input class="form-control" type="text" placeholder="Masukan Tracking habits" aria-label="default input example">
        </div>
    </div>

</div>
<div class="container-xxl" style="min-height: 30vh">
    <h1 style="border-bottom: 2px solid rgba(12, 7, 7, 0.366);"></h1>

</div>
<div class="container">
    <ul class="list-group">
        <li class="list-group-item">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="tracking_habits">
            <label class="form-check-label" for="tracking_habits">
            </div>
            <input class="form-control" type="text" placeholder="Masukan Tracking habits" aria-label="default input example">
        </li>
        <li class="list-group-item">A second item</li>
        <li class="list-group-item">A third item</li>
        <li class="list-group-item">A fourth item</li>
        <li class="list-group-item">And a fifth one</li>
      </ul>
</div>
@endsection

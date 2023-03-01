@extends('welcome')

@section('content')

<div class="container">

    <form method="POST" action="{{ route('siswa.bayar.spp',['id'=>$siswa->nisn]) }}">
        @csrf

        <div class="mb-3">
            <select name="tahun_bayar" id="" class="form-select">
            <option value="">Pilih Tahun</option>
            @foreach($spp as $item)
            <option value="{{$item->tahun}}">{{$item->tahun}}</option>

            @endforeach

        </select>
    </div>
    <div class="mb-3">
        <div class="form-check">
            <input class="form-check-input" name="bulan_dibayar[]" type="checkbox" value="Januari" id="fcustomCheck1" >
            <label class="custom-control-label" for="customCheck1">Januari</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" name="bulan_dibayar[]" type="checkbox" value="Februari" id="fcustomCheck1" >
            <label class="custom-control-label" for="customCheck1">Februari</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" name="bulan_dibayar[]" type="checkbox" value="Maret" id="fcustomCheck1" >
            <label class="custom-control-label" for="customCheck1">Maret</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" name="bulan_dibayar[]" type="checkbox" value="April" id="fcustomCheck1" >
            <label class="custom-control-label" for="customCheck1">April</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" name="bulan_dibayar[]" type="checkbox" value="Mei" id="fcustomCheck1" >
            <label class="custom-control-label" for="customCheck1">Mei</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" name="bulan_dibayar[]" type="checkbox" value="Juni" id="fcustomCheck1" >
            <label class="custom-control-label" for="customCheck1">Juni</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" name="bulan_dibayar[]" type="checkbox" value="Juli" id="fcustomCheck1" >
            <label class="custom-control-label" for="customCheck1">Juli</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" name="bulan_dibayar[]" type="checkbox" value="Agustus" id="fcustomCheck1" >
            <label class="custom-control-label" for="customCheck1">Agustus</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" name="bulan_dibayar[]" type="checkbox" value="September" id="fcustomCheck1" >
            <label class="custom-control-label" for="customCheck1">September</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" name="bulan_dibayar[]" type="checkbox" value="Oktober" id="fcustomCheck1" >
            <label class="custom-control-label" for="customCheck1">Oktober</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" name="bulan_dibayar[]" type="checkbox" value="November" id="fcustomCheck1" >
            <label class="custom-control-label" for="customCheck1">November</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" name="bulan_dibayar[]" type="checkbox" value="Desember" id="fcustomCheck1" >
            <label class="custom-control-label" for="customCheck1">Desember</label>
          </div>

</div>
<button class="btn btn-success" type="submit
">Submit</button>
    </form>
    

<div>

@endsection

@extends('logbook::layout.master')

@section('content')

<div class="col-xl-12 order-xl-1">
  <div class="card bg-secondary shadow">
    <div class="card-header bg-white border-0">
      <div class="row align-items-center">
        <div class="col-8">
          <h2 class="mb-4">Mengisi List Aktivitas</h2>
        </div>
      </div>
    </div>
    <div class="edit1 ml-5 mr-5">
      <form action="/store-logbook" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group ">
          <label for="sprintSelect">
            <h3>Pilih Judul Sprint : </h3>
          </label>
          <select class="form-control" id="sprintSelect" name="sprint_id">
            @foreach($logsprint as $l)
            <option value="{{ $l->id }}">{{ $l->nama_sprint }}</option>
            @endforeach
          </select>
          <br><br>
          <h3>Pilih Kendala Sprint : </h3>
          {{-- TODO --}}
          <div id="task">

          </div>
        </div>
        <br><br>
        <div>
          <h3>Keterangan Kendala Sprint : </h3>
          <textarea class="form-control" id="exampleFormControlTextarea1" name="kendala" rows="3"
            placeholder="Isi Kendala.."></textarea>
        </div>
        <br><br>
        <div class="form-group">
          <h3> Sisipkan File : </h3> <br>
          <input type="file" name="file">
        </div>
        <div class="edit3 mb-5">
          <button class="btn btn-facebook" type="submit">Kirim</button> </div>
      </form>
    </div>
  </div>
</div>
@endsection
@section('js')
<script>
  $(document).ready(function () {
    // first load
    $("#task").empty()
    let sprint_id = $("#sprintSelect").val()
    getTaks(sprint_id)

    // change event
    $("#sprintSelect").change(function () {
      let sprint_id = $(this).val()
      getTaks(sprint_id)
    });

    function getTaks(sprint_id) {
      $.ajax({
          url: '/get-task/' + sprint_id,
          dataType: 'json'
        })
        .done(function (response) {
          $("#task").empty()
          for (const data of response) {
            $("#task").append('<div class="custom-control custom-checkbox mb-3">' +
              '<input class="custom-control-input" name="task[][task_id]" id="checkTask' + data.id +
              '" value="' + data.id + '" type="checkbox">' +
              '<label class="custom-control-label" for="checkTask' + data.id + '">' + data.nama_task +
              '</label>' +
              '</div>')
          }
        })
        .fail(function () {
          console.log("error");
        })
        .always(function () {
          console.log("complete");
        });
    }
  });
</script>
@endsection
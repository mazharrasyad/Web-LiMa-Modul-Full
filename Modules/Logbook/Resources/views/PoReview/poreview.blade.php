@extends('logbook::layout.master')

@section('content')
<div class="col-xl-12 order-xl-1">
	<div class="modal fade" id="modalValid">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Project Owner</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						<span class="sr-only">Close</span>
					</button>
				</div>
				<form method="post" action="{{url('po-review')}}">
					<div class="modal-body">
						<div class="form-group row">
							<label for="" class="">Rekomendasi</label>
							<textarea class="form-control" name="rekomendasi" placeholder="Masukan Rekomendasi"></textarea>
						</div>
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" id="validInput" name="validasi">
						<input type="hidden" id="log_project_idInput" name="log_project_id">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Save changes</button>
					</div>
				</form>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<div class="card bg-secondary shadow">
		<div class="card-header bg-white border-0">
			<div class="row align-items-center">
				<div class="table-responsive">
    				<div>
					    <table class="table align-items-center">
					        <thead class="thead-light">
					            <tr>
					                <th scope="col">
					                    Judul Sprint
					                </th>
					                <th scope="col">
					                    Task Terselesaikan
					                </th>
					                <th scope="col">
					                    Hasil
					                </th>
					                <th scope="col">Kendala</th>
					                <th scope="col">
					                    Status
					                </th>
					            </tr>
					        </thead>
					        <tbody class="list">
					            @foreach($logpro as $lo)
					            <tr>
					            	<td>{{ $lo->sprint->nama_sprint }}</td>
					            	<td>
					            		<ul>
						            		@foreach($lo->task as $ta)
						            		<li>{{ $ta->nama_task }}</li>
						            		@endforeach
					            		</ul>
					            	</td>
					            	<td> <a href="{{Storage::url($lo->hasil_log)}}" download>Unduh</a> </td>
					            	<td> {{ $lo->kendala }} </td>
					            	<td>
					            		<button class="btn btn-success btn-sm btn-validasi" data-valid="1" data-projectid="{{$lo->id}}">Oke</button>
					            		<button class="btn btn-danger btn-sm btn-validasi" data-valid="0" data-projectid="{{$lo->id}}">Tidak</button>
					            	</td>
					            </tr>
					            @endforeach
					        </tbody>
					    </table>
					</div>
				</div>
			</div>
		</div>
	</div>	
</div>

@endsection
@section('js')
<script>
	$(document).ready(function() {
		$(".btn-validasi").click(function(event) {
			$("#modalValid").modal('show')
			$("#validInput").val($(this).data('valid'))
			$("#log_project_idInput").val($(this).data('projectid'))
		});
	});
</script>
@stop
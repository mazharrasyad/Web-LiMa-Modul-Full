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
							<textarea class="form-control" name="rekomendasi" placeholder="Masukan Rekomendasi"></textarea>
							<label for="" class="">Rekomendasi</label>
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
						<div class="edit2 ml-3 mr-3">
					    <table class="table align-items-center">
					        <thead class="thead-light">
					            <tr>
					                <th scope="col"> Judul Sprint</th>
					                <th scope="col">Task Terselesaikan </th>
					                <th scope="col">Validasi</th>
					                <th scope="col"> Rekomendasi</th>
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
							            	<td>
							            		@foreach($lo->po_review as $rev)
							            			
													@if($rev->validasi == 0)
														<a href="#" class="btn btn-danger btn-sm" role="button" aria-disabled="true">Tidak</a>
													@elseif ($rev->validasi == 1)
														<a href="#" class="btn btn-success btn-sm" role="button" aria-disabled="false">Oke</a>
													@endif
							            		@endforeach
							            	</td>
							            	<td>
							            		@foreach($lo->po_review as $rev)
							            			{{$rev->rekomendasi}}
							            		@endforeach
							            	</td>
					            	@endforeach
								</tbody>
					    </table>
						</div>
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
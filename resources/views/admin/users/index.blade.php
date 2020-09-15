@extends('admin.users.dashboard')

@section('content')

<div class="row py-lg-2">
    <div class="col-md-6">
        <h2>Lista de Usuários</h2>
    </div>
    <div class="col-md-6">
        <a href="/users/create" class="btn btn-primary btn-lg float-md-right" role="button" aria-pressed="true">Criar Novo Usuário</a>
    </div>
</div>


<!-- tabelas -->
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        </div>
    <div class="card-body">
        <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Perfil</th>
                <th>Permissões</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Perfil</th>
                <th>Permissões</th>
                <th>Ação</th>
            </tr>
            </tfoot>
            <tbody>
                @foreach ($users as $user)

                    <td>{{$user['id']}}</td>
                    <td>{{$user['name']}}</td>
                    <td>{{$user['email']}}</td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td>
                        <a href="/users/{{ $user ?? '' }}"><img src="https://img.icons8.com/ultraviolet/20/000000/visible.png"/></a>
                            <a href="/users/{{ $user ?? '' }}/edit"><img src="https://img.icons8.com/color/20/000000/edit-file.png"/></i></a>
                            <a href="#" data-toggle="modal" data-target="#deleteModal" data-roleid="{{ $role ?? '' }}"><img src="https://img.icons8.com/ultraviolet/20/000000/delete.png"/></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
        <!-- delete Modal-->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Are you shure you want to delete this?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                </div>
                <div class="modal-body">Select "delete" If you realy want to delete this user.</div>
                <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <form method="POST" action="">
                    @method('DELETE')
                    @csrf
                    {{-- <input type="hidden" id="user_id" name="user_id" value=""> --}}
                    <a class="btn btn-primary" onclick="$(this).closest('form').submit();">Delete</a>
                </form>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>

{{-- @section('js_user_page')

<script src="/vendor/chart.js/Chart.min.js"></script>
<script src="/js/admin/demo/chart-area-demo.js"></script>

    <script>
        $('#deleteModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var user_id = button.data('userid')

            var modal = $(this)
            // modal.find('.modal-footer #user_id').val(user_id)
            modal.find('form').attr('action','/users/' + user_id);
        })
    </script>

@endsection --}}

@endsection

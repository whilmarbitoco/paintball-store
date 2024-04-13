@extends('layouts.admin')

@section('content')
<div class="container mt-3">

    <table class="table table-striped table-bordered">
        <thead class="table-primary">
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < 10; $i++) <tr>
                <th scope="row"> {{ $i }}</th>
                <td>Mark</td>
                <td>Otto</td>
                <td style="width: 20%">
                    <div class="btn-group">
                        <form class="mx-1" style="display: inline-block;">
                            <button type="submit" class="btn btn-success">
                                <i class="bi bi-pen m-1"></i>Edit
                            </button>
                        </form>
                        <form class="mx-1" style="display: inline-block;">
                            <button type="submit" class="btn btn-danger">
                                <i class="bi bi-trash m-1"></i>Delete
                            </button>
                        </form>
                    </div>
                </td>
                </tr>
                @endfor
        </tbody>
    </table>
</div>
@endsection
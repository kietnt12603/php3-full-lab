<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/b
ootstrap.min.css">
<div class="text-center mt-2">
    <a href="{{ url('/dssv') }}"class="btn btn-success">Danh Sách Sinh Viên</a>
</div>
<div class="mt-3">
    <h1 class="text-center">Danh Sách Học Sinh</h1>
    <div class="col-6 m-auto mt-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Họ Tên</th>
                    <th scope="col">Tuổi</th>
                    <th scope="col">Ngày Sinh</th>
                    <th scope="col"><a href="{{ url('/hs') }}" class="btn btn-info">Thêm Học Sinh</a></th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i=1;
                @endphp
                @foreach ($data as $hs)
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$hs->hoten}}</td>
                        <td>{{$hs->tuoi}}</td>
                        <td>{{$hs->ngaysinh}}</td>
                        <td>
                            <a href="{{ route('hs_edit', ['id'=>$hs->id]) }}" class="btn btn-primary">Sửa</a>
                            <a href="{{ route('hs_delete', ['id'=>$hs->id]) }}" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

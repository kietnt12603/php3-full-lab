<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/b
ootstrap.min.css">
<div class="text-center mt-2">
    <a href="{{ url('/') }}"class="btn btn-success">Danh Sách Học Sinh</a>
</div>
<div class="mt-3">
    <h1 class="text-center">Danh Sách Sinh Viên</h1>
    <div class="col-6 m-auto mt-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Mã Sinh Viên</th>
                    <th scope="col">Họ Tên</th>
                    <th scope="col">Tuổi</th>
                    <th scope="col">Ngày Sinh</th>
                    <th scope="col">CMND</th>
                    <th scope="col">Email</th>
                    <th scope="col"><a href="{{ url('/sv') }}" class="btn btn-info">Thêm Sinh Viên</a></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $sv)
                    <tr>
                        <th scope="row">{{$sv->masv}}</th>
                        <td>{{$sv->hoten}}</td>
                        <td>{{$sv->tuoi}}</td>
                        <td>{{$sv->ngaysinh}}</td>
                        <td>{{$sv->cmnd}}</td>
                        <td>{{$sv->email}}</td>
                        <td>
                            <a href="{{ route('sv_edit', ['masv'=>$sv->masv]) }}" class="btn btn-primary">Sửa</a>
                            <a href="{{ route('sv_delete', ['masv'=>$sv->masv]) }}" class="btn btn-danger">Xóa</a>
                            {{-- <a href="{{ route('hs_edit', ['id'=>$hs->id]) }}" class="btn btn-primary">Sửa</a>
                            <a href="{{ route('hs_delete', ['id'=>$hs->id]) }}" class="btn btn-danger">Xóa</a> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/b
ootstrap.min.css">
<div class="col-6 m-auto mt-3">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('hs_edit', ['id'=>$data->id]) }}" method="post" class="p-3 border border-primary">
        <h3 class="h4 bg-info p-2 mx-n3 mt-n3 text-white">NHẬP THÔNG TIN HỌC SINH</h3>
        <div class="form-group row">
            <label class="col-3">Họ tên học sinh</label>
            <div class="col-9">
                <input value="{{ $data->hoten }}" type="text" class="form-control" name="hoten">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-3">Tuổi</label>
            <div class="col-9">
                <input value="{{ $data->tuoi }}" type="text" class="form-control" name="tuoi">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-3">Ngày sinh</label>
            <div class="col-9">
                <input value="{{ $data->ngaysinh }}" type="date" class="formcontrol" name="ngaysinh">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary w-25">Sửa Thông Tin</button>
                <a href="{{ url('/') }}" class="btn btn-warning">Quay Lại</a>
            </div>
        </div>
        @csrf
    </form>
</div>

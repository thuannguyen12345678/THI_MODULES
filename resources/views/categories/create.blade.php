@extends('admin.layouts.index')

@section('title', 'Thêm mới công viêc')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h2>Thêm sách</h2>
        </div>

        <div class="col-md-12">
            <form method="post" action="{{ route('categories.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Tên sách</label>
                    <input type="text" class="form-control" name="TENSACH" >
                    @error('TENSACH')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>

                <div class="form-group">
                    <label>ISBN</label>
                    <input type="text" class="form-control" rows="3" name="ISBN" >
                    @error('ISBN')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group">
                    <label>Tác giả</label>
                    <select name="TACGIA" >
                        <option value="truyện cười">Chơn</option>
                        <option value="Luy">Luy</option>
                        <option value="Thuần">Thuần</option>
                        <option value="Dương">Dương</option>
                        <option value="Vinh">Vinh</option>
                    </select>
                    @error('TACGIA')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group">
                    <label>Thể loại</label>
                    <select name="THELOAI" >
                        <option value="Chơn">truyện cười</option>
                        <option value="Luy">truyện ngôn tình</option>
                        <option value="Thuần">truyện kinh dị</option>
                    </select>
                    @error('THELOAI')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group">
                    <label>Số trang</label>
                    <input type="text" class="form-control" rows="3" name="SOTRANG" >
                    @error('SOTRANG')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group">
                    <label>Năm xuất bản</label>
                    <input type="date" class="form-control" rows="3" name="NAMXUATBAN" >
                    @error('NAMXUATBAN')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>

                {{-- <div class="form-group">
                    <label for="exampleFormControlFile1">Ảnh</label>
                    <input type="file" name="image" class="form-control-file" required>
                </div> --}}

                {{-- <div class="form-group">
                    <label for="exampleFormControlFile1">Ngày hết hạn</label>
                    <input type="date" name="due_date" class="form-control" required>
                </div> --}}
                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
    </div>
@endsection
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Them moi sinh vien</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        input{
            border-radius: 0 !important;
        }
    </style>
</head>
<body>
    <section class="container">
        <form action="{{route('hqmSinhVien.hqmCreateSubmit')}}" method="post">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h1>Them moi sinh vien</h1>
                </div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="hqmMaSV" class="col-sm-2 col-form-label">Ma sinh vien</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="hqmMaSV" name="hqmMaSV">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="hqmHoSV" class="col-sm-2 col-form-label">Ho sinh vien</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="hqmHoSV" name="hqmHoSV">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="hqmTenSV" class="col-sm-2 col-form-label">Ten sinh vien</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="hqmTenSV" name="hqmTenSV">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="hqmPhai" class="col-sm-2 col-form-label">Gioi tinh</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="hqmPhai" name="hqmPhai">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="hqmNgaySinh" class="col-sm-2 col-form-label">Ngay sinh</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="hqmNgaySinh" name="hqmNgaySinh">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="hqmNoiSinh" class="col-sm-2 col-form-label">Noi sinh</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="hqmNoiSinh" name="hqmNoiSinh">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="hqmMaKH" class="col-sm-2 col-form-label">Khoa</label>
                        <div class="col-sm-10">
                            <select name="hqmMaKH" id="hqmMaKH">
                                <option value="">--Chon khoa--</option>
                                <option value="AV">Anh Van</option>
                                <option value="TH">Tin hoc</option>
                                <option value="TR">Triet hoc</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary">Them moi</button>
                    <a href="/hqm-sinhviens" class="btn btn-secondary">Quay lai</a>
                </div>
            </div>
        </form>
    </section>
</body>
</html>

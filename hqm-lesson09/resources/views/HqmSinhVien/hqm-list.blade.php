<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sach sinh vien</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <Section class="container">

        <div class="card">
            <div class="card-header">
                <h1>Danh sach sinh vien</h1>
            </div>
            <div class="card-body">
                <table class="table-table bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Ma Sinh vien</th>
                            <th>Ho Sinh vien</th>
                            <th>Ten Sinh vien</th>
                            <th>Gioi tinh</th>
                            <th>Ngay sinh</th>
                            <th>Noi sinh</th>
                            <th>Ma khoa</th>
                            <th>Hoc bong</th>
                            <th>Chuc nang</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                           $stt=0; 
                        @endphp
                        @foreach ($hqmSinhVien as $item)
                            @php
                                $stt++;    
                            @endphp
                            <tr>
                                <td class="text-centre">{{$stt}}</td>
                                <td>{{$item->hqmMaSV}}</td>
                                <td>{{$item->hqmHoSV}}</td>
                                <td>{{$item->hqmTenSV}}</td>
                                <td>{{$item->hqmPhai}}</td>
                                <td>{{$item->hqmNgaySinh}}</td>
                                <td>{{$item->hqmNoiSinh}}</td>
                                <td>{{$item->hqmMaKH}}</td>
                                <td class="text-right">{{$item->hqmHocBong}}</td>
                                <td class="text-centre">
                                    view / edit / delete
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <h3>Tong so sinh vien: {{$hqmSinhVien->count()}}</h3>
                <a href="/hqm-sinhviens/create" class="btn btn-primary">Them moi</a>
            </div>
        </div>
    </Section>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>DUC TIN GROUP</title>
</head>
<body>
    <h1 class="text-xl font-bold">Thông tin ứng tuyển vị trí {{$data->position}}</h1>

    <div class="flex w-full p-4 rounded flex-col gap-3 items-center justify-center mt-4">
        <div><span class="font-bold">Họ và tên:
             {{$data->full_name}}
            </span></div>
        <div><span class="font-bold">Email:</span> 
            {{$data->email}}
        </div>
        <div><span class="font-bold">Số điện thoại:</span> 
            {{$data->phone}}
        </div>
    </div>

    <p class="font-bold">No-reply</p>
</body>
</html>
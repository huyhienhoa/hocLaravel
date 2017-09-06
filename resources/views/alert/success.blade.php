@if((Session::has('success')))
    <div >
        <strong>Thong bao :</strong>{{Session::get('success')}}
    </div>
@endif